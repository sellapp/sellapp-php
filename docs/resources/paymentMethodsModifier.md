# paymentMethodsModifier

[All resources](../methods.md)

## get

Retrieve a payment method modifier

[API reference](https://sell.app/docs/api/payment-methods/payment-method-modifier) · Effect: **read**

```php
public function get(
        string $paymentMethod,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkGetPaymentMethodModifierResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| paymentMethod | `string` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkGetPaymentMethodModifierResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->paymentMethodsModifier()->get(paymentMethod: 'STRIPE');
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

## replace

Update a payment method modifier

[API reference](https://sell.app/docs/api/payment-methods/payment-method-modifier) · Effect: **consequential**

```php
public function replace(
        string $paymentMethod,
        \SellApp\Resource\SdkReplacePaymentMethodModifierRequestApplicationJsonKind $kind,
        ?string $percentage,
        ?string $fixedAmount,
        ?\SellApp\Resource\Condition $condition = null,
        float|string|null $threshold = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkReplacePaymentMethodModifierResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| paymentMethod | `string` | Yes |
| kind | `\SellApp\Resource\SdkReplacePaymentMethodModifierRequestApplicationJsonKind` | Yes |
| percentage | `?string` | Yes |
| fixedAmount | `?string` | Yes |
| condition | `?\SellApp\Resource\Condition` | No |
| threshold | `float\|string\|null` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkReplacePaymentMethodModifierResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->paymentMethodsModifier()->replace(
    paymentMethod: 'STRIPE',
    kind: 'fee',
    percentage: '3.00',
    fixedAmount: '0.30',
    condition: 'below',
    threshold: '20.00',
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

