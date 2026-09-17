# creditsProducts

[All resources](../methods.md)

## list

List credits products

[API reference](https://sell.app/docs/api/credits/list-credit-products) · Effect: **read**

```php
public function list(
        ?int $limit = null,
        ?int $page = null,
        ?bool $pagination = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\PaginatedResponse
```

| Argument | Native type | Required |
| --- | --- | --- |
| limit | `?int` | No |
| page | `?int` | No |
| pagination | `?bool` | No |
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

$result = $client->creditsProducts()->list();
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

Create a credits product

[API reference](https://sell.app/docs/api/credits/create-a-credit-product) · Effect: **consequential**

```php
public function create(
        string $title,
        \SellApp\Resource\CatalogVisibility $visibility,
        ?string $slug = null,
        ?string $description = null,
        ?int $sectionId = null,
        ?bool $isDraft = null,
        ?int $priceCents = null,
        ?string $currency = null,
        ?int $minimumPurchaseQuantity = null,
        ?int $maximumPurchaseQuantity = null,
        ?int $quantityIncrement = null,
        ?int $stock = null,
        ?array $paymentMethods = null,
        ?array $rateTiers = null,
        ?\DateTimeImmutable $expectedUpdatedAt = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkCreateCreditsProductResponseValue201ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| title | `string` | Yes |
| visibility | `\SellApp\Resource\CatalogVisibility` | Yes |
| slug | `?string` | No |
| description | `?string` | No |
| sectionId | `?int` | No |
| isDraft | `?bool` | No |
| priceCents | `?int` | No |
| currency | `?string` | No |
| minimumPurchaseQuantity | `?int` | No |
| maximumPurchaseQuantity | `?int` | No |
| quantityIncrement | `?int` | No |
| stock | `?int` | No |
| paymentMethods | `?array` | No |
| rateTiers | `?array` | No |
| expectedUpdatedAt | `?\DateTimeImmutable` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkCreateCreditsProductResponseValue201ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->creditsProducts()->create(
    title: 'Design credits',
    visibility: 'HIDDEN',
    priceCents: 1999,
    currency: 'USD',
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

## search

Search credits products

[API reference](https://sell.app/docs/api/credits/search-credit-products) · Effect: **read**

```php
public function search(
        ?array $filters = null,
        ?array $sort = null,
        ?\SellApp\Resource\SearchCreditsProductsRequestApplicationJsonPropertySearch $search = null,
        ?array $includes = null,
        ?int $limit = null,
        ?int $page = null,
        ?bool $pagination = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\PaginatedResponse
```

| Argument | Native type | Required |
| --- | --- | --- |
| filters | `?array` | No |
| sort | `?array` | No |
| search | `?\SellApp\Resource\SearchCreditsProductsRequestApplicationJsonPropertySearch` | No |
| includes | `?array` | No |
| limit | `?int` | No |
| page | `?int` | No |
| pagination | `?bool` | No |
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

$result = $client->creditsProducts()->search();
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

Retrieve a credits product

[API reference](https://sell.app/docs/api/credits/retrieve-a-credit-product) · Effect: **read**

```php
public function get(
        int $creditProduct,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkGetCreditsProductResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| creditProduct | `int` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkGetCreditsProductResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->creditsProducts()->get(creditProduct: 1);
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

Replace a credits product

[API reference](https://sell.app/docs/api/credits/replace-a-credit-product) · Effect: **consequential**

```php
public function replace(
        int $creditProduct,
        ?string $title = null,
        ?string $slug = null,
        ?string $description = null,
        ?\SellApp\Resource\CatalogVisibility $visibility = null,
        ?int $sectionId = null,
        ?bool $isDraft = null,
        ?int $priceCents = null,
        ?string $currency = null,
        ?int $minimumPurchaseQuantity = null,
        ?int $maximumPurchaseQuantity = null,
        ?int $quantityIncrement = null,
        ?int $stock = null,
        ?array $paymentMethods = null,
        ?array $rateTiers = null,
        ?\DateTimeImmutable $expectedUpdatedAt = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkReplaceCreditsProductResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| creditProduct | `int` | Yes |
| title | `?string` | No |
| slug | `?string` | No |
| description | `?string` | No |
| visibility | `?\SellApp\Resource\CatalogVisibility` | No |
| sectionId | `?int` | No |
| isDraft | `?bool` | No |
| priceCents | `?int` | No |
| currency | `?string` | No |
| minimumPurchaseQuantity | `?int` | No |
| maximumPurchaseQuantity | `?int` | No |
| quantityIncrement | `?int` | No |
| stock | `?int` | No |
| paymentMethods | `?array` | No |
| rateTiers | `?array` | No |
| expectedUpdatedAt | `?\DateTimeImmutable` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkReplaceCreditsProductResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->creditsProducts()->replace(
    creditProduct: 1,
    title: 'Design credits',
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

Update a credits product

[API reference](https://sell.app/docs/api/credits/update-a-credit-product) · Effect: **consequential**

```php
public function update(
        int $creditProduct,
        ?string $title = null,
        ?string $slug = null,
        ?string $description = null,
        ?\SellApp\Resource\CatalogVisibility $visibility = null,
        ?int $sectionId = null,
        ?bool $isDraft = null,
        ?int $priceCents = null,
        ?string $currency = null,
        ?int $minimumPurchaseQuantity = null,
        ?int $maximumPurchaseQuantity = null,
        ?int $quantityIncrement = null,
        ?int $stock = null,
        ?array $paymentMethods = null,
        ?array $rateTiers = null,
        ?\DateTimeImmutable $expectedUpdatedAt = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkUpdateCreditsProductResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| creditProduct | `int` | Yes |
| title | `?string` | No |
| slug | `?string` | No |
| description | `?string` | No |
| visibility | `?\SellApp\Resource\CatalogVisibility` | No |
| sectionId | `?int` | No |
| isDraft | `?bool` | No |
| priceCents | `?int` | No |
| currency | `?string` | No |
| minimumPurchaseQuantity | `?int` | No |
| maximumPurchaseQuantity | `?int` | No |
| quantityIncrement | `?int` | No |
| stock | `?int` | No |
| paymentMethods | `?array` | No |
| rateTiers | `?array` | No |
| expectedUpdatedAt | `?\DateTimeImmutable` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkUpdateCreditsProductResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->creditsProducts()->update(
    creditProduct: 1,
    title: 'Design credits',
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

Delete a credits product

[API reference](https://sell.app/docs/api/credits/delete-a-credit-product) · Effect: **consequential**

```php
public function delete(
        int $creditProduct,
        ?\DateTimeImmutable $expectedUpdatedAt = null,
        ?\SellApp\RequestOptions $options = null,
    ): void
```

| Argument | Native type | Required |
| --- | --- | --- |
| creditProduct | `int` | Yes |
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

$result = $client->creditsProducts()->delete(
    creditProduct: 1,
    expectedUpdatedAt: '2026-08-24T10:00:00.000000Z',
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

