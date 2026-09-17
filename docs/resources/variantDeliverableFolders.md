# variantDeliverableFolders

[All resources](../methods.md)

## list

List variant deliverable folders

[API reference](https://sell.app/docs/api/product-variants) · Effect: **read**

```php
public function list(
        string $product,
        int $variant,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkListVariantDeliverableFoldersResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| product | `string` | Yes |
| variant | `int` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkListVariantDeliverableFoldersResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->variantDeliverableFolders()->list(
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

## create

Create a variant deliverable folder

[API reference](https://sell.app/docs/api/product-variants) · Effect: **write**

```php
public function create(
        string $product,
        int $variant,
        string $name,
        ?string $description = null,
        ?int $parentId = null,
        ?int $sortOrder = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkCreateVariantDeliverableFolderResponseValue201ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| product | `string` | Yes |
| variant | `int` | Yes |
| name | `string` | Yes |
| description | `?string` | No |
| parentId | `?int` | No |
| sortOrder | `?int` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkCreateVariantDeliverableFolderResponseValue201ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->variantDeliverableFolders()->create(
    product: 'string_example',
    variant: 1,
    name: 'Design kit',
    description: 'Files included with your purchase.',
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

Retrieve a variant deliverable folder

[API reference](https://sell.app/docs/api/product-variants) · Effect: **read**

```php
public function get(
        string $product,
        int $variant,
        int $folder,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkGetVariantDeliverableFolderResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| product | `string` | Yes |
| variant | `int` | Yes |
| folder | `int` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkGetVariantDeliverableFolderResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->variantDeliverableFolders()->get(
    product: 'string_example',
    variant: 1,
    folder: 1,
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

Replace variant deliverable folder settings

[API reference](https://sell.app/docs/api/product-variants) · Effect: **write**

```php
public function replace(
        string $product,
        int $variant,
        int $folder,
        ?string $name = null,
        ?string $description = null,
        ?int $parentId = null,
        ?int $sortOrder = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkReplaceVariantDeliverableFolderSettingsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| product | `string` | Yes |
| variant | `int` | Yes |
| folder | `int` | Yes |
| name | `?string` | No |
| description | `?string` | No |
| parentId | `?int` | No |
| sortOrder | `?int` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkReplaceVariantDeliverableFolderSettingsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->variantDeliverableFolders()->replace(
    product: 'string_example',
    variant: 1,
    folder: 1,
    name: 'Design kit',
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

Update a variant deliverable folder

[API reference](https://sell.app/docs/api/product-variants) · Effect: **write**

```php
public function update(
        string $product,
        int $variant,
        int $folder,
        ?string $name = null,
        ?string $description = null,
        ?int $parentId = null,
        ?int $sortOrder = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkUpdateVariantDeliverableFolderResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| product | `string` | Yes |
| variant | `int` | Yes |
| folder | `int` | Yes |
| name | `?string` | No |
| description | `?string` | No |
| parentId | `?int` | No |
| sortOrder | `?int` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkUpdateVariantDeliverableFolderResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->variantDeliverableFolders()->update(
    product: 'string_example',
    variant: 1,
    folder: 1,
    name: 'Design kit',
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

Delete a variant deliverable folder

[API reference](https://sell.app/docs/api/product-variants) · Effect: **consequential**

```php
public function delete(
        string $product,
        int $variant,
        int $folder,
        ?\SellApp\RequestOptions $options = null,
    ): void
```

| Argument | Native type | Required |
| --- | --- | --- |
| product | `string` | Yes |
| variant | `int` | Yes |
| folder | `int` | Yes |
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

$result = $client->variantDeliverableFolders()->delete(
    product: 'string_example',
    variant: 1,
    folder: 1,
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

