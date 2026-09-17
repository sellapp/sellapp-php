# wallet

[All resources](../methods.md)

## list

List customer wallets

[API reference](https://sell.app/docs/api/wallet/list-customer-wallets) · Effect: **read**

```php
public function list(
        ?int $limit = null,
        ?int $page = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\PaginatedResponse
```

| Argument | Native type | Required |
| --- | --- | --- |
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

$result = $client->wallet()->list();
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

## get

Retrieve a customer wallet

[API reference](https://sell.app/docs/api/wallet/retrieve-customer-wallet) · Effect: **read**

```php
public function get(
        int $customer,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkGetCustomerWalletResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| customer | `int` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkGetCustomerWalletResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->wallet()->get(customer: 1);
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

## adjust

Adjust a customer wallet

[API reference](https://sell.app/docs/api/wallet/adjust-customer-wallet) · Effect: **consequential**

```php
public function adjust(
        int $customer,
        int $amountCents,
        string $idempotencyKey,
        string $note,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkAdjustCustomerWalletResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| customer | `int` | Yes |
| amountCents | `int` | Yes |
| idempotencyKey | `string` | Yes |
| note | `string` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkAdjustCustomerWalletResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->wallet()->adjust(
    customer: 1,
    amountCents: 2500,
    idempotencyKey: 'wallet-adjustment-01992a65',
    note: 'Launch-day account credit',
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

Documented HTTP responses: 200, 201, 400, 401, 403, 404, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## updateStatus

Update a customer wallet status

[API reference](https://sell.app/docs/api/wallet/update-wallet-status) · Effect: **consequential**

```php
public function updateStatus(
        int $customer,
        \SellApp\Resource\SdkUpdateCustomerWalletStatusRequestApplicationJsonStatus $status,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkUpdateCustomerWalletStatusResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| customer | `int` | Yes |
| status | `\SellApp\Resource\SdkUpdateCustomerWalletStatusRequestApplicationJsonStatus` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkUpdateCustomerWalletStatusResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->wallet()->updateStatus(
    customer: 1,
    status: 'frozen',
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

