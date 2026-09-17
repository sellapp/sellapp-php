# exports

[All resources](../methods.md)

## listExports

List exports

[API reference](https://sell.app/docs/api/exports) · Effect: **read**

```php
public function listExports(
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\PaginatedResponse
```

| Argument | Native type | Required |
| --- | --- | --- |
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

$result = $client->exports()->listExports();
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

## createExport

Create an export

[API reference](https://sell.app/docs/api/exports) · Effect: **consequential**

```php
public function createExport(
        \SellApp\Resource\SdkCreateExportRequestApplicationJsonType $type,
        \SellApp\Resource\SdkCreateExportRequestApplicationJsonFormat $format,
        ?\SellApp\Resource\CreateExportRequestApplicationJsonPropertyParameters $parameters = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkCreateExportResponseValue201ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| type | `\SellApp\Resource\SdkCreateExportRequestApplicationJsonType` | Yes |
| format | `\SellApp\Resource\SdkCreateExportRequestApplicationJsonFormat` | Yes |
| parameters | `?\SellApp\Resource\CreateExportRequestApplicationJsonPropertyParameters` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkCreateExportResponseValue201ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->exports()->createExport(
    type: 'sales',
    format: 'csv',
    parameters: ['from' => '2026-08-01', 'to' => '2026-08-31'],
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

Documented HTTP responses: 201, 400, 401, 403, 404, 409, 410, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## getExport

Retrieve an export

[API reference](https://sell.app/docs/api/exports) · Effect: **read**

```php
public function getExport(
        string $export,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkGetExportResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| export | `string` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkGetExportResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->exports()->getExport(export: '01992a65-e064-71ba-b38f-902b7966a6be');
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

## downloadExport

Download an export

[API reference](https://sell.app/docs/api/exports) · Effect: **read**

```php
public function downloadExport(
        string $export,
        int $expires,
        string $signature,
        ?\SellApp\RequestOptions $options = null,
    ): mixed
```

| Argument | Native type | Required |
| --- | --- | --- |
| export | `string` | Yes |
| expires | `int` | Yes |
| signature | `string` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `mixed`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->exports()->downloadExport(
    export: '01992a65-e064-71ba-b38f-902b7966a6be',
    expires: 1788513423,
    signature: '2c91df645a086ec399153a932b741f809d2b85c69740eaf3612384ebfb913a65',
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

Documented HTTP responses: 302, 400, 401, 403, 404, 409, 410, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

