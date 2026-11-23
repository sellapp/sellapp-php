# walletLedger

[All resources](../methods.md)

## list

List store wallet transactions

[API reference](https://sell.app/docs/api/wallet/list-store-wallet-transactions) · Effect: **read**

```php
public function list(
        \SellApp\Resource\WalletPeriod $period = \SellApp\Resource\WalletPeriod::Mtd,
        ?\SellApp\Resource\WalletType $type = null,
        ?int $customerId = null,
        ?string $email = null,
        ?int $limit = null,
        ?int $page = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\PaginatedResponse
```

| Argument | Native type | Required |
| --- | --- | --- |
| period | `\SellApp\Resource\WalletPeriod` | No |
| type | `?\SellApp\Resource\WalletType` | No |
| customerId | `?int` | No |
| email | `?string` | No |
| limit | `?int` | No |
| page | `?int` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\PaginatedResponse`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->walletLedger()->list();
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

Documented HTTP responses: 200, 400, 401, 403, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

