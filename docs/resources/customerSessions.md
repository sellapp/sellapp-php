# customerSessions

[All resources](../methods.md)

## createCustomerSession

Create a customer session

[API reference](https://sell.app/docs/api/customer-sessions) · Effect: **consequential**

```php
public function createCustomerSession(
        \SellApp\Resource\CreateCustomerSessionRequestApplicationJsonOneOfValue1|\SellApp\Resource\CreateCustomerSessionRequestApplicationJsonOneOfValue2|array $body,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkCreateCustomerSessionResponseValue201ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| body | `\SellApp\Resource\CreateCustomerSessionRequestApplicationJsonOneOfValue1\|\SellApp\Resource\CreateCustomerSessionRequestApplicationJsonOneOfValue2\|array` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkCreateCustomerSessionResponseValue201ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->customerSessions()->createCustomerSession(body: ['external_customer_id' => 'crm_maya_314']);
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

Documented HTTP responses: 201, 400, 401, 403, 404, 409, 410, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## revokeCustomerSession

Revoke a customer session

[API reference](https://sell.app/docs/api/customer-sessions) · Effect: **consequential**

```php
public function revokeCustomerSession(
        string $session,
        ?\SellApp\RequestOptions $options = null,
    ): void
```

| Argument | Native type | Required |
| --- | --- | --- |
| session | `string` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `void`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->customerSessions()->revokeCustomerSession(session: 'session_01K4CUSTOMER');
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

