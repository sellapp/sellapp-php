<?php
declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Promise\FulfilledPromise;
use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\RequestInterface;
use SellApp\Client;
use SellApp\RequestOptions;
use SellApp\Resource\CatalogVisibility;
use SellApp\Resource\PaymentMethod;
use SellApp\Resource\CreateProductVariantRequestApplicationJsonPropertyDeliverable as Deliverable;
use SellApp\Resource\CreateProductVariantRequestApplicationJsonPropertyPricing as Pricing;
use SellApp\Resource\CreateOrderRequestApplicationJsonPropertyProductVariants as ProductVariants;

final class ConnectedWorkflowTest extends TestCase
{
    public function testConnectedCatalogUploadCheckoutAndCredentialIsolation(): void
    {
        $fixture = json_decode(file_get_contents(__DIR__ . '/connected-workflow.json'), true, 512, JSON_THROW_ON_ERROR);
        $fixture['product']['data'] = array_replace($fixture['product']['data'], ['id' => 120, 'title' => 'Design kit', 'variants' => []]);
        $fixture['variant']['data'] = array_replace($fixture['variant']['data'], ['id' => 4321, 'product_id' => 120]);
        $fixture['order']['data']['id'] = 9001;
        $fixture['upload']['data'] = array_replace($fixture['upload']['data'], ['id' => 55, 'product_id' => 120, 'variant_id' => 4321]);
        $calls = [];
        $handler = HandlerStack::create(function (RequestInterface $request, array $options) use (&$fixture, &$calls): FulfilledPromise {
            $path = $request->getUri()->getPath();
            $method = $request->getMethod();
            $calls[] = $method . ' ' . $path;
            $status = 200;
            $response = [];
            if ($path === '/oauth/token') {
                $this->assertFalse($request->hasHeader('Authorization'));
                $this->assertFalse($request->hasHeader('X-STORE'));
                $response = ['token_type' => 'Bearer', 'expires_in' => 3600, 'access_token' => 'workflow-access', 'refresh_token' => 'workflow-refresh'];
            } else {
                $this->assertSame('Bearer workflow-key', $request->getHeaderLine('Authorization'));
                $this->assertSame('launch-lab', $request->getHeaderLine('X-STORE'));
                $raw = (string) $request->getBody();
                $body = json_decode($raw, true);
                switch ($method . ' ' . $path) {
                    case 'GET /api/v2/products':
                        parse_str($request->getUri()->getQuery(), $query);
                        $page = (int) ($query['page'] ?? 1);
                        $response = ['data' => $page === 2 ? [] : [$fixture['product']['data']], 'meta' => ['current_page' => $page, 'last_page' => 3], 'links' => ['next' => $page < 3 ? '?page=' . ($page + 1) : null]];
                        break;
                    case 'POST /api/v2/products':
                        $this->assertArrayNotHasKey('section', $body);
                        $status = 201; $response = $fixture['product']; break;
                    case 'GET /api/v2/products/120':
                        $response = $fixture['product']; break;
                    case 'PATCH /api/v2/products/120':
                        $this->assertArrayHasKey('section', $body);
                        $this->assertNull($body['section']);
                        $fixture['product']['data']['title'] = $body['title'];
                        $response = $fixture['product']; break;
                    case 'POST /api/v2/products/120/variants':
                        $this->assertSame(1999, $body['pricing']['price']['price']);
                        $status = 201; $response = $fixture['variant']; break;
                    case 'POST /api/v2/products/120/variants/4321/deliverable/files':
                        $this->assertStringContainsString('multipart/form-data', $request->getHeaderLine('Content-Type'));
                        $this->assertStringContainsString('design-file-bytes', $raw);
                        $status = 201; $response = $fixture['upload']; break;
                    case 'POST /api/v2/orders':
                        $this->assertSame('maya@example.com', $body['customer_email']);
                        $this->assertSame(['4321' => ['quantity' => 1]], $body['product_variants']);
                        $status = 201; $response = $fixture['order']; break;
                    case 'POST /api/v2/orders/9001/checkout':
                        $status = 201; $response = $fixture['order'];
                        $response['data']['payment']['checkout_url'] = 'https://checkout.example.test/session-9001';
                        $response['message'] = 'Checkout created successfully.'; break;
                    case 'GET /api/v2/products/999':
                        $status = 422; $response = ['type' => 'validation_error', 'code' => 'validation_failed', 'message' => 'Choose an existing product', 'param' => 'product', 'request_id' => 'req-workflow']; break;
                    default: $this->fail('Unexpected connected request: ' . $method . ' ' . $path);
                }
            }
            return new FulfilledPromise(new Response($status, ['Content-Type' => 'application/json', 'X-Request-ID' => 'req-workflow'], json_encode($response, JSON_THROW_ON_ERROR)));
        });
        $client = new Client(apiKey: 'workflow-key', store: 'launch-lab', baseUrl: 'http://127.0.0.1:54321/api', maxRetries: 0, handler: $handler);
        $this->assertSame('Design kit', $client->products()->list(limit: 1)->data[0]->title);
        $created = $client->products()->create(title: 'Design kit', description: 'Templates for your next project.', visibility: CatalogVisibility::Hidden);
        $retrieved = $client->products()->get(product: $created->data->id);
        $updated = $client->products()->update(product: $retrieved->data->id, title: 'Design kit revised', options: new RequestOptions(extraBody: ['section' => null]));
        $this->assertSame('Design kit revised', $updated->data->title);
        $variant = $client->productVariants()->create(product: $created->data->id, title: 'Design kit', description: 'Templates for your next project.', deliverable: Deliverable::fromArray(['types' => ['MANUAL'], 'data' => []]), pricing: Pricing::fromArray(['humble' => false, 'price' => ['price' => 1999, 'currency' => 'USD']]), paymentMethods: ['STRIPE']);
        $upload = $client->variantDeliverableFiles()->upload(product: (string) $created->data->id, variant: $variant->data->id, file: 'design-file-bytes');
        $this->assertSame($created->data->id, $upload->data->productId);
        $order = $client->orders()->create(customerEmail: 'maya@example.com', paymentMethod: PaymentMethod::Stripe, productVariants: ProductVariants::fromArray([(string) $variant->data->id => ['quantity' => 1]]));
        $checkout = $client->orders()->createCheckout(order: $order->data->id);
        $this->assertSame($order->data->id, $checkout->data->id);
        $this->assertSame('https://checkout.example.test/session-9001', $checkout->data->payment->checkoutUrl);
        $this->assertSame('Checkout created successfully.', $checkout->message);
        $pages = []; for ($number = 1; $number <= 3; $number++) $pages[] = count($client->products()->list(page: $number, limit: 1)->data);
        $this->assertSame([1, 0, 1], $pages);
        try { $client->products()->get(product: 999); $this->fail('Expected validation failure'); }
        catch (\SellApp\Exception\APIException $error) { $this->assertSame([422, 'validation_failed', 'product', 'req-workflow'], [$error->status, $error->apiCode, $error->param, $error->requestId]); }
        $token = $client->oauth()->exchangeOAuthToken(body: ['grant_type' => 'refresh_token', 'refresh_token' => 'workflow-refresh']);
        $this->assertSame('workflow-access', $token->accessToken);
        $this->assertCount(13, $calls);
    }
}
