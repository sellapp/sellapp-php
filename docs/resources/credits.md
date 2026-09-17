# credits

[All resources](../methods.md)

## record

Record a credit transaction

[API reference](https://sell.app/docs/api/credits/record-a-credit-transaction) · Effect: **consequential**

```php
public function record(
        int $customerId,
        int $productId,
        \SellApp\Resource\SdkRecordCreditTransactionRequestApplicationJsonKind $kind,
        int $amountUnits,
        string $idempotencyKey,
        ?string $reason = null,
        ?string $sourceType = null,
        ?string $sourceId = null,
        ?\SellApp\Resource\RecordCreditTransactionRequestApplicationJsonPropertyMetadata $metadata = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkRecordCreditTransactionResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| customerId | `int` | Yes |
| productId | `int` | Yes |
| kind | `\SellApp\Resource\SdkRecordCreditTransactionRequestApplicationJsonKind` | Yes |
| amountUnits | `int` | Yes |
| idempotencyKey | `string` | Yes |
| reason | `?string` | No |
| sourceType | `?string` | No |
| sourceId | `?string` | No |
| metadata | `?\SellApp\Resource\RecordCreditTransactionRequestApplicationJsonPropertyMetadata` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkRecordCreditTransactionResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->credits()->record(
    customerId: 125,
    productId: 120,
    kind: 'grant',
    amountUnits: 1000,
    idempotencyKey: 'credits-grant-01992a65',
    reason: 'Launch cohort allocation',
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

Documented HTTP responses: 200, 201, 400, 401, 403, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

