# variantDeliverableFiles

[All resources](../methods.md)

## list

List variant deliverable files

[API reference](https://sell.app/docs/api/product-variants) · Effect: **read**

```php
public function list(
        string $product,
        int $variant,
        ?int $limit = null,
        ?int $page = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\PaginatedResponse
```

| Argument | Native type | Required |
| --- | --- | --- |
| product | `string` | Yes |
| variant | `int` | Yes |
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

$result = $client->variantDeliverableFiles()->list(
    product: 'string_example',
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

## upload

Upload a variant deliverable file

[API reference](https://sell.app/docs/api/product-variants) · Effect: **write**

```php
public function upload(
        string $product,
        int $variant,
        string $file,
        ?int $folderId = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkUploadVariantDeliverableFileResponseValue201ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| product | `string` | Yes |
| variant | `int` | Yes |
| file | `string` | Yes |
| folderId | `?int` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkUploadVariantDeliverableFileResponseValue201ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->variantDeliverableFiles()->upload(
    product: 'string_example',
    variant: 1,
    file: 'design-kit.zip',
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

## get

Retrieve a variant deliverable file

[API reference](https://sell.app/docs/api/product-variants) · Effect: **read**

```php
public function get(
        string $product,
        int $variant,
        int $file,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkGetVariantDeliverableFileResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| product | `string` | Yes |
| variant | `int` | Yes |
| file | `int` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkGetVariantDeliverableFileResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->variantDeliverableFiles()->get(
    product: 'string_example',
    variant: 1,
    file: 1,
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

## replace

Replace variant deliverable file settings

[API reference](https://sell.app/docs/api/product-variants) · Effect: **write**

```php
public function replace(
        string $product,
        int $variant,
        int $file,
        ?string $customName = null,
        ?int $folderId = null,
        ?bool $watermark = null,
        ?int $maxDownloads = null,
        ?bool $limitToPurchaseIp = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkReplaceVariantDeliverableFileSettingsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| product | `string` | Yes |
| variant | `int` | Yes |
| file | `int` | Yes |
| customName | `?string` | No |
| folderId | `?int` | No |
| watermark | `?bool` | No |
| maxDownloads | `?int` | No |
| limitToPurchaseIp | `?bool` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkReplaceVariantDeliverableFileSettingsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->variantDeliverableFiles()->replace(
    product: 'string_example',
    variant: 1,
    file: 1,
    customName: 'Design kit.zip',
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

## update

Update a variant deliverable file

[API reference](https://sell.app/docs/api/product-variants) · Effect: **write**

```php
public function update(
        string $product,
        int $variant,
        int $file,
        ?string $customName = null,
        ?int $folderId = null,
        ?bool $watermark = null,
        ?int $maxDownloads = null,
        ?bool $limitToPurchaseIp = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkUpdateVariantDeliverableFileResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| product | `string` | Yes |
| variant | `int` | Yes |
| file | `int` | Yes |
| customName | `?string` | No |
| folderId | `?int` | No |
| watermark | `?bool` | No |
| maxDownloads | `?int` | No |
| limitToPurchaseIp | `?bool` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkUpdateVariantDeliverableFileResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->variantDeliverableFiles()->update(
    product: 'string_example',
    variant: 1,
    file: 1,
    customName: 'Design kit.zip',
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

## delete

Delete a variant deliverable file

[API reference](https://sell.app/docs/api/product-variants) · Effect: **consequential**

```php
public function delete(
        string $product,
        int $variant,
        int $file,
        ?\SellApp\RequestOptions $options = null,
    ): void
```

| Argument | Native type | Required |
| --- | --- | --- |
| product | `string` | Yes |
| variant | `int` | Yes |
| file | `int` | Yes |
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

$result = $client->variantDeliverableFiles()->delete(
    product: 'string_example',
    variant: 1,
    file: 1,
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

