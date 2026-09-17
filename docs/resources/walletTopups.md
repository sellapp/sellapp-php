# walletTopups

[All resources](../methods.md)

## create

Create a wallet top-up payment link

[API reference](https://sell.app/docs/api/wallet/create-wallet-top-up) · Effect: **consequential**

```php
public function create(
        int $customer,
        int $amountCents,
        \SellApp\Resource\PaymentMethod $paymentMethod,
        ?string $customPaymentMethodId = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkCreateWalletTopUpResponseValue201ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| customer | `int` | Yes |
| amountCents | `int` | Yes |
| paymentMethod | `\SellApp\Resource\PaymentMethod` | Yes |
| customPaymentMethodId | `?string` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkCreateWalletTopUpResponseValue201ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->walletTopups()->create(
    customer: 42,
    amountCents: 2500,
    paymentMethod: 'STRIPE',
    options: new \SellApp\RequestOptions(idempotencyKey: "example-mutation-001"),
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

Documented HTTP responses: 201, 400, 401, 403, 404, 409, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

