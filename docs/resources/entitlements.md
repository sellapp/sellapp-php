# entitlements

[All resources](../methods.md)

## listCustomerEntitlements

List customer entitlements

[API reference](https://sell.app/docs/api/customers/identity-and-entitlements) · Effect: **read**

```php
public function listCustomerEntitlements(
        int $customer,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkListCustomerEntitlementsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| customer | `int` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkListCustomerEntitlementsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->entitlements()->listCustomerEntitlements(customer: 42);
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

Documented HTTP responses: 200, 400, 401, 403, 404, 409, 410, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## listCustomerEntitlementsByExternalId

List customer entitlements

[API reference](https://sell.app/docs/api/customers/identity-and-entitlements) · Effect: **read**

```php
public function listCustomerEntitlementsByExternalId(
        string $externalId,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkListCustomerEntitlementsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| externalId | `string` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkListCustomerEntitlementsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->entitlements()->listCustomerEntitlementsByExternalId(externalId: 'externalId_01K4CUSTOMER');
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

Documented HTTP responses: 200, 400, 401, 403, 404, 409, 410, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

