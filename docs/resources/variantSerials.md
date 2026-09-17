# variantSerials

[All resources](../methods.md)

## list

List variant serial inventory

[API reference](https://sell.app/docs/api/product-variants) · Effect: **read**

```php
public function list(
        int $product,
        int $variant,
        ?string $search = null,
        ?int $limit = null,
        ?int $page = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\PaginatedResponse
```

| Argument | Native type | Required |
| --- | --- | --- |
| product | `int` | Yes |
| variant | `int` | Yes |
| search | `?string` | No |
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

$result = $client->variantSerials()->list(
    product: 1,
    variant: 1,
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

## append

Append variant serial inventory

[API reference](https://sell.app/docs/api/product-variants) · Effect: **consequential**

```php
public function append(
        int $product,
        int $variant,
        array $serials,
        ?bool $removeDuplicates = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkAppendVariantSerialInventoryResponseValue201ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| product | `int` | Yes |
| variant | `int` | Yes |
| serials | `array` | Yes |
| removeDuplicates | `?bool` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkAppendVariantSerialInventoryResponseValue201ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->variantSerials()->append(
    product: 1,
    variant: 1,
    serials: ['LICENSE-KEY-001', 'LICENSE-KEY-002'],
    removeDuplicates: true,
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

Documented HTTP responses: 201, 400, 401, 403, 404, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## replace

Replace variant serial inventory

[API reference](https://sell.app/docs/api/product-variants) · Effect: **consequential**

```php
public function replace(
        int $product,
        int $variant,
        array $serials,
        ?bool $removeDuplicates = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkReplaceVariantSerialInventoryResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| product | `int` | Yes |
| variant | `int` | Yes |
| serials | `array` | Yes |
| removeDuplicates | `?bool` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkReplaceVariantSerialInventoryResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->variantSerials()->replace(
    product: 1,
    variant: 1,
    serials: ['LICENSE-KEY-001', 'LICENSE-KEY-002'],
    removeDuplicates: true,
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

## queue

Queue a variant serial import

[API reference](https://sell.app/docs/api/product-variants) · Effect: **consequential**

```php
public function queue(
        int $product,
        int $variant,
        string $file,
        \SellApp\Resource\SdkQueueVariantSerialImportRequestMultipartFormDataParsingMode $parsingMode,
        ?string $customDelimiter = null,
        ?bool $removeDuplicates = null,
        ?\SellApp\Resource\SdkQueueVariantSerialImportRequestMultipartFormDataMode $mode = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkQueueVariantSerialImportResponseValue202ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| product | `int` | Yes |
| variant | `int` | Yes |
| file | `string` | Yes |
| parsingMode | `\SellApp\Resource\SdkQueueVariantSerialImportRequestMultipartFormDataParsingMode` | Yes |
| customDelimiter | `?string` | No |
| removeDuplicates | `?bool` | No |
| mode | `?\SellApp\Resource\SdkQueueVariantSerialImportRequestMultipartFormDataMode` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkQueueVariantSerialImportResponseValue202ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->variantSerials()->queue(
    product: 1,
    variant: 1,
    file: 'serials.txt',
    parsingMode: 'NEW_LINE',
    removeDuplicates: true,
    mode: 'append',
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

Documented HTTP responses: 202, 400, 401, 403, 404, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## delete

Delete a variant serial

[API reference](https://sell.app/docs/api/product-variants) · Effect: **consequential**

```php
public function delete(
        int $product,
        int $variant,
        string $serial,
        ?\SellApp\RequestOptions $options = null,
    ): void
```

| Argument | Native type | Required |
| --- | --- | --- |
| product | `int` | Yes |
| variant | `int` | Yes |
| serial | `string` | Yes |
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

$result = $client->variantSerials()->delete(
    product: 1,
    variant: 1,
    serial: 'string_example',
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

