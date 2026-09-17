# licensesInstances

[All resources](../methods.md)

## list

List license instances

[API reference](https://sell.app/docs/api/license-instances/list-license-instances) · Effect: **read**

```php
public function list(
        int $licenseKey,
        ?int $limit = null,
        ?int $page = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\PaginatedResponse
```

| Argument | Native type | Required |
| --- | --- | --- |
| licenseKey | `int` | Yes |
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

$result = $client->licensesInstances()->list(licenseKey: 1);
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

## get

Retrieve a license instance

[API reference](https://sell.app/docs/api/license-instances/retrieve-a-license-instance) · Effect: **read**

```php
public function get(
        int $licenseKey,
        string $instance,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkGetLicenseInstanceResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| licenseKey | `int` | Yes |
| instance | `string` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkGetLicenseInstanceResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->licensesInstances()->get(
    licenseKey: 1,
    instance: '9ebd37af-2077-42f9-9f88-d96cfc6ef1a8',
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

