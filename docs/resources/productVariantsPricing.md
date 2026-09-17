# productVariantsPricing

[All resources](../methods.md)

## replace

Replace product variant pricing

[API reference](https://sell.app/docs/api/product-variants) · Effect: **write**

```php
public function replace(
        int $product,
        int $variant,
        \SellApp\Resource\ReplaceProductVariantPricingRequestApplicationJsonPropertyPricing $pricing,
        array $paymentMethods,
        ?array $customPaymentMethodIds = null,
        ?array $bulkDiscount = null,
        ?\DateTimeImmutable $expectedUpdatedAt = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkReplaceProductVariantPricingResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| product | `int` | Yes |
| variant | `int` | Yes |
| pricing | `\SellApp\Resource\ReplaceProductVariantPricingRequestApplicationJsonPropertyPricing` | Yes |
| paymentMethods | `array` | Yes |
| customPaymentMethodIds | `?array` | No |
| bulkDiscount | `?array` | No |
| expectedUpdatedAt | `?\DateTimeImmutable` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkReplaceProductVariantPricingResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->productVariantsPricing()->replace(
    product: 120,
    variant: 4321,
    pricing: [
        'type' => 'SUBSCRIPTION',
        'humble' => false,
        'price' => ['price' => 1999, 'currency' => 'USD'],
        'frequency' => ['value' => 1, 'interval' => 'MONTH'],
    ],
    paymentMethods: ['STRIPE'],
);
echo json_encode($result, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR), PHP_EOL;
```

### Authentication and errors

Supported credential alternatives (each object is one alternative):

```json
[
  {
    "bearerAuth": []
  },
  {
    "oauthAccessToken": [
      "admin"
    ],
    "storeAuth": []
  }
]
```

Documented HTTP responses: 200, 400, 401, 403, 404, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## update

Partially update product variant pricing

[API reference](https://sell.app/docs/api/product-variants/update-product-variant-pricing) · Effect: **write**

```php
public function update(
        int $product,
        int $variant,
        ?\SellApp\Resource\UpdateProductVariantPricingRequestApplicationJsonPropertyPricing $pricing = null,
        ?array $paymentMethods = null,
        ?array $customPaymentMethodIds = null,
        ?array $bulkDiscount = null,
        ?\DateTimeImmutable $expectedUpdatedAt = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkUpdateProductVariantPricingResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| product | `int` | Yes |
| variant | `int` | Yes |
| pricing | `?\SellApp\Resource\UpdateProductVariantPricingRequestApplicationJsonPropertyPricing` | No |
| paymentMethods | `?array` | No |
| customPaymentMethodIds | `?array` | No |
| bulkDiscount | `?array` | No |
| expectedUpdatedAt | `?\DateTimeImmutable` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkUpdateProductVariantPricingResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->productVariantsPricing()->update(
    product: 120,
    variant: 4321,
    pricing: ['price' => ['price' => 2499, 'currency' => 'USD']],
);
echo json_encode($result, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR), PHP_EOL;
```

### Authentication and errors

Supported credential alternatives (each object is one alternative):

```json
[
  {
    "bearerAuth": []
  },
  {
    "oauthAccessToken": [
      "admin"
    ],
    "storeAuth": []
  }
]
```

Documented HTTP responses: 200, 400, 401, 403, 404, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

