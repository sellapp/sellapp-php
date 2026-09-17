# products

[All resources](../methods.md)

## list

List all products

[API reference](https://sell.app/docs/api/products/list-all-products) · Effect: **read**

```php
public function list(
        ?int $limit = null,
        ?int $page = null,
        ?bool $withDrafts = null,
        ?bool $onlyDrafts = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\PaginatedResponse
```

| Argument | Native type | Required |
| --- | --- | --- |
| limit | `?int` | No |
| page | `?int` | No |
| withDrafts | `?bool` | No |
| onlyDrafts | `?bool` | No |
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

$result = $client->products()->list(limit: 1);
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

## create

Create a product

[API reference](https://sell.app/docs/api/products/create-a-product) · Effect: **write**

```php
public function create(
        string $title,
        string $description,
        \SellApp\Resource\CatalogVisibility $visibility,
        ?string $slug = null,
        ?\SellApp\Resource\SdkCreateProductRequestApplicationJsonType $type = null,
        ?int $section = null,
        ?array $additionalInformation = null,
        ?\SellApp\Resource\CreateProductRequestApplicationJsonPropertyOtherSettings $otherSettings = null,
        ?array $variants = null,
        ?array $bundleItems = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkCreateProductResponseValue201ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| title | `string` | Yes |
| description | `string` | Yes |
| visibility | `\SellApp\Resource\CatalogVisibility` | Yes |
| slug | `?string` | No |
| type | `?\SellApp\Resource\SdkCreateProductRequestApplicationJsonType` | No |
| section | `?int` | No |
| additionalInformation | `?array` | No |
| otherSettings | `?\SellApp\Resource\CreateProductRequestApplicationJsonPropertyOtherSettings` | No |
| variants | `?array` | No |
| bundleItems | `?array` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkCreateProductResponseValue201ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->products()->create(
    title: 'Design kit',
    description: 'Templates for your next project.',
    visibility: 'HIDDEN',
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

Documented HTTP responses: 201, 400, 401, 403, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## get

Retrieve a product

[API reference](https://sell.app/docs/api/products/retrieve-a-product) · Effect: **read**

```php
public function get(
        int $product,
        ?bool $withDrafts = null,
        ?bool $onlyDrafts = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkGetProductResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| product | `int` | Yes |
| withDrafts | `?bool` | No |
| onlyDrafts | `?bool` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkGetProductResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->products()->get(product: 1);
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

Update a product

[API reference](https://sell.app/docs/api/products) · Effect: **write**

```php
public function replace(
        int $product,
        ?string $title = null,
        ?string $description = null,
        ?\SellApp\Resource\CatalogVisibility $visibility = null,
        ?string $slug = null,
        ?int $section = null,
        ?array $additionalInformation = null,
        ?\SellApp\Resource\ReplaceProductRequestApplicationJsonPropertyOtherSettings $otherSettings = null,
        ?\DateTimeImmutable $expectedUpdatedAt = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkReplaceProductResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| product | `int` | Yes |
| title | `?string` | No |
| description | `?string` | No |
| visibility | `?\SellApp\Resource\CatalogVisibility` | No |
| slug | `?string` | No |
| section | `?int` | No |
| additionalInformation | `?array` | No |
| otherSettings | `?\SellApp\Resource\ReplaceProductRequestApplicationJsonPropertyOtherSettings` | No |
| expectedUpdatedAt | `?\DateTimeImmutable` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkReplaceProductResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->products()->replace(
    product: 120,
    title: 'Design kit',
    description: 'Templates for your next project.',
    visibility: 'HIDDEN',
    expectedUpdatedAt: '2026-08-30T12:00:00.000000Z',
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

Update a product

[API reference](https://sell.app/docs/api/products/update-a-product) · Effect: **write**

```php
public function update(
        int $product,
        ?string $title = null,
        ?string $description = null,
        ?\SellApp\Resource\CatalogVisibility $visibility = null,
        ?string $slug = null,
        ?int $section = null,
        ?array $additionalInformation = null,
        ?\SellApp\Resource\UpdateProductRequestApplicationJsonPropertyOtherSettings $otherSettings = null,
        ?\DateTimeImmutable $expectedUpdatedAt = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkUpdateProductResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| product | `int` | Yes |
| title | `?string` | No |
| description | `?string` | No |
| visibility | `?\SellApp\Resource\CatalogVisibility` | No |
| slug | `?string` | No |
| section | `?int` | No |
| additionalInformation | `?array` | No |
| otherSettings | `?\SellApp\Resource\UpdateProductRequestApplicationJsonPropertyOtherSettings` | No |
| expectedUpdatedAt | `?\DateTimeImmutable` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkUpdateProductResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->products()->update(
    product: 120,
    title: 'Design kit',
    description: 'Templates for your next project.',
    visibility: 'HIDDEN',
    expectedUpdatedAt: '2026-08-30T12:00:00.000000Z',
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

Delete a product

[API reference](https://sell.app/docs/api/products/delete-a-product) · Effect: **consequential**

```php
public function delete(
        int $product,
        ?\DateTimeImmutable $expectedUpdatedAt = null,
        ?\SellApp\RequestOptions $options = null,
    ): void
```

| Argument | Native type | Required |
| --- | --- | --- |
| product | `int` | Yes |
| expectedUpdatedAt | `?\DateTimeImmutable` | No |
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

$result = $client->products()->delete(
    product: 1,
    expectedUpdatedAt: '2026-08-01T12:00:00Z',
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

## search

Search products

[API reference](https://sell.app/docs/api/products/search-products) · Effect: **read**

```php
public function search(
        ?array $filters = null,
        ?array $sort = null,
        ?\SellApp\Resource\SearchProductsRequestApplicationJsonPropertySearch $search = null,
        ?array $includes = null,
        ?int $limit = null,
        ?int $page = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\PaginatedResponse
```

| Argument | Native type | Required |
| --- | --- | --- |
| filters | `?array` | No |
| sort | `?array` | No |
| search | `?\SellApp\Resource\SearchProductsRequestApplicationJsonPropertySearch` | No |
| includes | `?array` | No |
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

$result = $client->products()->search(
    filters: [['field' => 'id', 'operator' => '=', 'value' => 1]],
    sort: [['field' => 'created_at', 'direction' => 'desc']],
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

Documented HTTP responses: 200, 400, 401, 403, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## batchCreate

Batch create products

[API reference](https://sell.app/docs/api/products/batch-create-products) · Effect: **consequential**

```php
public function batchCreate(
        array $resources,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkBatchCreateProductsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| resources | `array` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkBatchCreateProductsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->products()->batchCreate(
    resources: [
        [
            'title' => 'Example product',
            'description' => 'An example product created through the API.',
            'visibility' => 'PUBLIC',
            'type' => 'product',
        ],
    ],
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

## batchUpdate

Batch update products

[API reference](https://sell.app/docs/api/products/batch-update-products) · Effect: **consequential**

```php
public function batchUpdate(
        \SellApp\Resource\BatchUpdateProductsRequestApplicationJsonPropertyResources $resources,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkBatchUpdateProductsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| resources | `\SellApp\Resource\BatchUpdateProductsRequestApplicationJsonPropertyResources` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkBatchUpdateProductsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->products()->batchUpdate(resources: ['1' => ['title' => 'Updated product', 'visibility' => 'PUBLIC']]);
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

## batchDelete

Batch delete products

[API reference](https://sell.app/docs/api/products/batch-delete-products) · Effect: **consequential**

```php
public function batchDelete(
        array $resources,
        ?\SellApp\RequestOptions $options = null,
    ): void
```

| Argument | Native type | Required |
| --- | --- | --- |
| resources | `array` | Yes |
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

$result = $client->products()->batchDelete(resources: [1, 2]);
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

