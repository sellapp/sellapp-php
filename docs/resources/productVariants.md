# productVariants

[All resources](../methods.md)

## list

List all product variants

[API reference](https://sell.app/docs/api/product-variants/list-all-product-variants) · Effect: **read**

```php
public function list(
        int $product,
        ?int $limit = null,
        ?int $page = null,
        ?bool $withDrafts = null,
        ?bool $onlyDrafts = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\PaginatedResponse
```

| Argument | Native type | Required |
| --- | --- | --- |
| product | `int` | Yes |
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

$result = $client->productVariants()->list(product: 1);
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

Create a product variant

[API reference](https://sell.app/docs/api/product-variants/create-a-product-variant) · Effect: **write**

```php
public function create(
        int $product,
        string $title,
        string $description,
        \SellApp\Resource\CreateProductVariantRequestApplicationJsonPropertyDeliverable $deliverable,
        \SellApp\Resource\CreateProductVariantRequestApplicationJsonPropertyPricing $pricing,
        array $paymentMethods,
        ?int $minimumPurchaseQuantity = null,
        ?int $maximumPurchaseQuantity = null,
        ?array $bulkDiscount = null,
        ?\SellApp\Resource\CreateProductVariantRequestApplicationJsonPropertyOtherSettings $otherSettings = null,
        ?\DateTimeImmutable $expectedUpdatedAt = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkCreateProductVariantResponseValue201ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| product | `int` | Yes |
| title | `string` | Yes |
| description | `string` | Yes |
| deliverable | `\SellApp\Resource\CreateProductVariantRequestApplicationJsonPropertyDeliverable` | Yes |
| pricing | `\SellApp\Resource\CreateProductVariantRequestApplicationJsonPropertyPricing` | Yes |
| paymentMethods | `array` | Yes |
| minimumPurchaseQuantity | `?int` | No |
| maximumPurchaseQuantity | `?int` | No |
| bulkDiscount | `?array` | No |
| otherSettings | `?\SellApp\Resource\CreateProductVariantRequestApplicationJsonPropertyOtherSettings` | No |
| expectedUpdatedAt | `?\DateTimeImmutable` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkCreateProductVariantResponseValue201ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->productVariants()->create(
    product: 120,
    title: 'Monthly membership',
    description: 'One operating memo each month; access is provisioned by our team.',
    deliverable: [
        'types' => ['MANUAL'],
        'data' => ['stock' => null, 'comment' => 'We will send your reading-room invitation.'],
    ],
    pricing: ['humble' => false, 'price' => ['price' => 1999, 'currency' => 'USD']],
    paymentMethods: ['STRIPE'],
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

Retrieve a product variant

[API reference](https://sell.app/docs/api/product-variants/retrieve-a-product-variant) · Effect: **read**

```php
public function get(
        int $product,
        int $variant,
        ?bool $withDrafts = null,
        ?bool $onlyDrafts = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkGetProductVariantResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| product | `int` | Yes |
| variant | `int` | Yes |
| withDrafts | `?bool` | No |
| onlyDrafts | `?bool` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkGetProductVariantResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->productVariants()->get(
    product: 1,
    variant: 2,
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

Update a product variant with PUT

[API reference](https://sell.app/docs/api/product-variants) · Effect: **write**

```php
public function replace(
        int $product,
        int $variant,
        ?string $title = null,
        ?string $description = null,
        ?\SellApp\Resource\ReplaceProductVariantWithPutRequestApplicationJsonPropertyDeliverable $deliverable = null,
        ?\SellApp\Resource\ReplaceProductVariantWithPutRequestApplicationJsonPropertyPricing $pricing = null,
        ?int $minimumPurchaseQuantity = null,
        ?int $maximumPurchaseQuantity = null,
        ?array $bulkDiscount = null,
        ?array $paymentMethods = null,
        ?\SellApp\Resource\ReplaceProductVariantWithPutRequestApplicationJsonPropertyOtherSettings $otherSettings = null,
        ?\DateTimeImmutable $expectedUpdatedAt = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkReplaceProductVariantWithPutResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| product | `int` | Yes |
| variant | `int` | Yes |
| title | `?string` | No |
| description | `?string` | No |
| deliverable | `?\SellApp\Resource\ReplaceProductVariantWithPutRequestApplicationJsonPropertyDeliverable` | No |
| pricing | `?\SellApp\Resource\ReplaceProductVariantWithPutRequestApplicationJsonPropertyPricing` | No |
| minimumPurchaseQuantity | `?int` | No |
| maximumPurchaseQuantity | `?int` | No |
| bulkDiscount | `?array` | No |
| paymentMethods | `?array` | No |
| otherSettings | `?\SellApp\Resource\ReplaceProductVariantWithPutRequestApplicationJsonPropertyOtherSettings` | No |
| expectedUpdatedAt | `?\DateTimeImmutable` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkReplaceProductVariantWithPutResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->productVariants()->replace(
    product: 120,
    variant: 4321,
    title: 'Monthly membership plus',
    description: 'One annotated operating memo and a monthly founder discussion.',
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

Update a product variant

[API reference](https://sell.app/docs/api/product-variants/update-a-product-variant) · Effect: **write**

```php
public function update(
        int $product,
        int $variant,
        ?string $title = null,
        ?string $description = null,
        ?\SellApp\Resource\UpdateProductVariantRequestApplicationJsonPropertyDeliverable $deliverable = null,
        ?\SellApp\Resource\UpdateProductVariantRequestApplicationJsonPropertyPricing $pricing = null,
        ?int $minimumPurchaseQuantity = null,
        ?int $maximumPurchaseQuantity = null,
        ?array $bulkDiscount = null,
        ?array $paymentMethods = null,
        ?\SellApp\Resource\UpdateProductVariantRequestApplicationJsonPropertyOtherSettings $otherSettings = null,
        ?\DateTimeImmutable $expectedUpdatedAt = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkUpdateProductVariantResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| product | `int` | Yes |
| variant | `int` | Yes |
| title | `?string` | No |
| description | `?string` | No |
| deliverable | `?\SellApp\Resource\UpdateProductVariantRequestApplicationJsonPropertyDeliverable` | No |
| pricing | `?\SellApp\Resource\UpdateProductVariantRequestApplicationJsonPropertyPricing` | No |
| minimumPurchaseQuantity | `?int` | No |
| maximumPurchaseQuantity | `?int` | No |
| bulkDiscount | `?array` | No |
| paymentMethods | `?array` | No |
| otherSettings | `?\SellApp\Resource\UpdateProductVariantRequestApplicationJsonPropertyOtherSettings` | No |
| expectedUpdatedAt | `?\DateTimeImmutable` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkUpdateProductVariantResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->productVariants()->update(
    product: 120,
    variant: 4321,
    title: 'Monthly membership plus',
    description: 'One annotated operating memo and a monthly founder discussion.',
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

Delete a product variant

[API reference](https://sell.app/docs/api/product-variants/delete-a-product-variant) · Effect: **consequential**

```php
public function delete(
        int $product,
        int $variant,
        ?\SellApp\RequestOptions $options = null,
    ): void
```

| Argument | Native type | Required |
| --- | --- | --- |
| product | `int` | Yes |
| variant | `int` | Yes |
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

$result = $client->productVariants()->delete(
    product: 1,
    variant: 2,
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

Search product variants

[API reference](https://sell.app/docs/api/product-variants/search-product-variants) · Effect: **read**

```php
public function search(
        int $product,
        ?array $filters = null,
        ?array $sort = null,
        ?\SellApp\Resource\SearchProductVariantsRequestApplicationJsonPropertySearch $search = null,
        ?array $includes = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\PaginatedResponse
```

| Argument | Native type | Required |
| --- | --- | --- |
| product | `int` | Yes |
| filters | `?array` | No |
| sort | `?array` | No |
| search | `?\SellApp\Resource\SearchProductVariantsRequestApplicationJsonPropertySearch` | No |
| includes | `?array` | No |
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

$result = $client->productVariants()->search(
    product: 1,
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

Documented HTTP responses: 200, 400, 401, 403, 404, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## batchCreate

Batch create product variants

[API reference](https://sell.app/docs/api/product-variants/batch-create-product-variants) · Effect: **consequential**

```php
public function batchCreate(
        int $product,
        array $resources,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkBatchCreateProductVariantsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| product | `int` | Yes |
| resources | `array` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkBatchCreateProductVariantsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->productVariants()->batchCreate(
    product: 1,
    resources: [
        [
            'title' => 'Default',
            'description' => 'Default product variant.',
            'deliverable' => [
                'types' => ['TEXT'],
                'data' => [
                    'serials' => ['SERIAL-001'],
                    'parsingMode' => 'NEW_LINE',
                    'removeDuplicate' => true,
                ],
            ],
            'pricing' => ['humble' => false, 'price' => ['price' => 1000, 'currency' => 'USD']],
            'payment_methods' => ['PAYPAL'],
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

Documented HTTP responses: 200, 201, 400, 401, 403, 404, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## batchUpdate

Batch update product variants

[API reference](https://sell.app/docs/api/product-variants/batch-update-product-variants) · Effect: **consequential**

```php
public function batchUpdate(
        int $product,
        \SellApp\Resource\BatchUpdateProductVariantsRequestApplicationJsonPropertyResources $resources,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkBatchUpdateProductVariantsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| product | `int` | Yes |
| resources | `\SellApp\Resource\BatchUpdateProductVariantsRequestApplicationJsonPropertyResources` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkBatchUpdateProductVariantsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->productVariants()->batchUpdate(
    product: 1,
    resources: ['1' => ['title' => 'Updated variant']],
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

## batchDelete

Batch delete product variants

[API reference](https://sell.app/docs/api/product-variants/batch-delete-product-variants) · Effect: **consequential**

```php
public function batchDelete(
        int $product,
        array $resources,
        ?\SellApp\RequestOptions $options = null,
    ): void
```

| Argument | Native type | Required |
| --- | --- | --- |
| product | `int` | Yes |
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

$result = $client->productVariants()->batchDelete(
    product: 1,
    resources: [1, 2],
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

