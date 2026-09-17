# coupons

[All resources](../methods.md)

## list

List all coupons

[API reference](https://sell.app/docs/api/legacy-v1) · Effect: **read**

```php
public function list(
        ?int $limit = null,
        ?int $page = null,
        ?bool $withTrashed = null,
        ?bool $onlyTrashed = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\PaginatedResponse
```

| Argument | Native type | Required |
| --- | --- | --- |
| limit | `?int` | No |
| page | `?int` | No |
| withTrashed | `?bool` | No |
| onlyTrashed | `?bool` | No |
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

$result = $client->coupons()->list();
echo json_encode($result, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR), PHP_EOL;
```

### Authentication and errors

Supported credential alternatives (each object is one alternative):

```json
[
  {
    "bearerAuth": [],
    "storeAuth": []
  }
]
```

Documented HTTP responses: 200, 401, 403, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## create

Create a coupon

[API reference](https://sell.app/docs/api/legacy-v1) · Effect: **consequential**

```php
public function create(
        string $code,
        \SellApp\Resource\SdkCreateCouponRequestApplicationJsonType $type,
        float|string $discount,
        bool $storeWide,
        ?array $products = null,
        ?array $productVariants = null,
        ?int $limit = null,
        ?\DateTimeImmutable $expiresAt = null,
        float|string|null $minimumAmount = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkCreateCouponResponseValue201ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| code | `string` | Yes |
| type | `\SellApp\Resource\SdkCreateCouponRequestApplicationJsonType` | Yes |
| discount | `float\|string` | Yes |
| storeWide | `bool` | Yes |
| products | `?array` | No |
| productVariants | `?array` | No |
| limit | `?int` | No |
| expiresAt | `?\DateTimeImmutable` | No |
| minimumAmount | `float\|string\|null` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkCreateCouponResponseValue201ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->coupons()->create(
    code: 'PLAN10',
    type: 'PERCENTAGE',
    discount: 10,
    storeWide: false,
    products: [123, 456],
    productVariants: [1001, 1002],
);
echo json_encode($result, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR), PHP_EOL;
```

### Authentication and errors

Supported credential alternatives (each object is one alternative):

```json
[
  {
    "bearerAuth": [],
    "storeAuth": []
  }
]
```

Documented HTTP responses: 201, 401, 403, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## get

Retrieve a coupon

[API reference](https://sell.app/docs/api/legacy-v1) · Effect: **read**

```php
public function get(
        int $coupon,
        ?bool $withTrashed = null,
        ?bool $onlyTrashed = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkGetCouponResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| coupon | `int` | Yes |
| withTrashed | `?bool` | No |
| onlyTrashed | `?bool` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkGetCouponResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->coupons()->get(coupon: 1);
echo json_encode($result, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR), PHP_EOL;
```

### Authentication and errors

Supported credential alternatives (each object is one alternative):

```json
[
  {
    "bearerAuth": [],
    "storeAuth": []
  }
]
```

Documented HTTP responses: 200, 401, 403, 404, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## replace

Update a coupon

[API reference](https://sell.app/docs/api/legacy-v1) · Effect: **consequential**

```php
public function replace(
        int $coupon,
        ?string $code = null,
        ?\SellApp\Resource\SdkCreateCouponRequestApplicationJsonType $type = null,
        float|string|null $discount = null,
        ?bool $storeWide = null,
        ?array $products = null,
        ?array $productVariants = null,
        ?int $limit = null,
        ?\DateTimeImmutable $expiresAt = null,
        float|string|null $minimumAmount = null,
        ?bool $withTrashed = null,
        ?bool $onlyTrashed = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkReplaceCouponResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| coupon | `int` | Yes |
| code | `?string` | No |
| type | `?\SellApp\Resource\SdkCreateCouponRequestApplicationJsonType` | No |
| discount | `float\|string\|null` | No |
| storeWide | `?bool` | No |
| products | `?array` | No |
| productVariants | `?array` | No |
| limit | `?int` | No |
| expiresAt | `?\DateTimeImmutable` | No |
| minimumAmount | `float\|string\|null` | No |
| withTrashed | `?bool` | No |
| onlyTrashed | `?bool` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkReplaceCouponResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->coupons()->replace(
    coupon: 1,
    storeWide: false,
    products: [123],
    productVariants: [1001, 1002],
);
echo json_encode($result, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR), PHP_EOL;
```

### Authentication and errors

Supported credential alternatives (each object is one alternative):

```json
[
  {
    "bearerAuth": [],
    "storeAuth": []
  }
]
```

Documented HTTP responses: 200, 401, 403, 404, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## update

Update a coupon

[API reference](https://sell.app/docs/api/legacy-v1) · Effect: **consequential**

```php
public function update(
        int $coupon,
        ?string $code = null,
        ?\SellApp\Resource\SdkCreateCouponRequestApplicationJsonType $type = null,
        float|string|null $discount = null,
        ?bool $storeWide = null,
        ?array $products = null,
        ?array $productVariants = null,
        ?int $limit = null,
        ?\DateTimeImmutable $expiresAt = null,
        float|string|null $minimumAmount = null,
        ?bool $withTrashed = null,
        ?bool $onlyTrashed = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkUpdateCouponResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| coupon | `int` | Yes |
| code | `?string` | No |
| type | `?\SellApp\Resource\SdkCreateCouponRequestApplicationJsonType` | No |
| discount | `float\|string\|null` | No |
| storeWide | `?bool` | No |
| products | `?array` | No |
| productVariants | `?array` | No |
| limit | `?int` | No |
| expiresAt | `?\DateTimeImmutable` | No |
| minimumAmount | `float\|string\|null` | No |
| withTrashed | `?bool` | No |
| onlyTrashed | `?bool` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkUpdateCouponResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->coupons()->update(
    coupon: 1,
    storeWide: false,
    products: [123],
    productVariants: [1001, 1002],
);
echo json_encode($result, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR), PHP_EOL;
```

### Authentication and errors

Supported credential alternatives (each object is one alternative):

```json
[
  {
    "bearerAuth": [],
    "storeAuth": []
  }
]
```

Documented HTTP responses: 200, 401, 403, 404, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## delete

Delete a coupon

[API reference](https://sell.app/docs/api/legacy-v1) · Effect: **consequential**

```php
public function delete(
        int $coupon,
        ?bool $withTrashed = null,
        ?bool $onlyTrashed = null,
        ?\SellApp\RequestOptions $options = null,
    ): void
```

| Argument | Native type | Required |
| --- | --- | --- |
| coupon | `int` | Yes |
| withTrashed | `?bool` | No |
| onlyTrashed | `?bool` | No |
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

$result = $client->coupons()->delete(coupon: 1);
echo json_encode($result, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR), PHP_EOL;
```

### Authentication and errors

Supported credential alternatives (each object is one alternative):

```json
[
  {
    "bearerAuth": [],
    "storeAuth": []
  }
]
```

Documented HTTP responses: 200, 401, 403, 404, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## search

Search coupons

[API reference](https://sell.app/docs/api/legacy-v1) · Effect: **read**

```php
public function search(
        ?array $filters = null,
        ?array $sort = null,
        ?\SellApp\Resource\SearchCouponsRequestApplicationJsonPropertySearch $search = null,
        ?array $includes = null,
        ?bool $withTrashed = null,
        ?bool $onlyTrashed = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\PaginatedResponse
```

| Argument | Native type | Required |
| --- | --- | --- |
| filters | `?array` | No |
| sort | `?array` | No |
| search | `?\SellApp\Resource\SearchCouponsRequestApplicationJsonPropertySearch` | No |
| includes | `?array` | No |
| withTrashed | `?bool` | No |
| onlyTrashed | `?bool` | No |
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

$result = $client->coupons()->search(
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
    "bearerAuth": [],
    "storeAuth": []
  }
]
```

Documented HTTP responses: 200, 401, 403, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## batchCreate

Batch create coupons

[API reference](https://sell.app/docs/api/legacy-v1) · Effect: **consequential**

```php
public function batchCreate(
        array $resources,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkBatchCreateCouponsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| resources | `array` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkBatchCreateCouponsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->coupons()->batchCreate(
    resources: [
        [
            'code' => 'STARTER10',
            'type' => 'PERCENTAGE',
            'discount' => 10,
            'store_wide' => false,
            'products' => [123],
            'product_variants' => [1001],
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
    "bearerAuth": [],
    "storeAuth": []
  }
]
```

Documented HTTP responses: 200, 201, 401, 403, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## batchUpdate

Batch update coupons

[API reference](https://sell.app/docs/api/legacy-v1) · Effect: **consequential**

```php
public function batchUpdate(
        \SellApp\Resource\BatchUpdateCouponsRequestApplicationJsonPropertyResources $resources,
        ?bool $withTrashed = null,
        ?bool $onlyTrashed = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkBatchUpdateCouponsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| resources | `\SellApp\Resource\BatchUpdateCouponsRequestApplicationJsonPropertyResources` | Yes |
| withTrashed | `?bool` | No |
| onlyTrashed | `?bool` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkBatchUpdateCouponsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->coupons()->batchUpdate(
    resources: [
        '1' => ['store_wide' => false, 'products' => [123], 'product_variants' => [1001, 1002]],
    ],
);
echo json_encode($result, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR), PHP_EOL;
```

### Authentication and errors

Supported credential alternatives (each object is one alternative):

```json
[
  {
    "bearerAuth": [],
    "storeAuth": []
  }
]
```

Documented HTTP responses: 200, 401, 403, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## batchDelete

Batch delete coupons

[API reference](https://sell.app/docs/api/legacy-v1) · Effect: **consequential**

```php
public function batchDelete(
        array $resources,
        ?bool $withTrashed = null,
        ?bool $onlyTrashed = null,
        ?\SellApp\RequestOptions $options = null,
    ): void
```

| Argument | Native type | Required |
| --- | --- | --- |
| resources | `array` | Yes |
| withTrashed | `?bool` | No |
| onlyTrashed | `?bool` | No |
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

$result = $client->coupons()->batchDelete(resources: [1, 2]);
echo json_encode($result, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR), PHP_EOL;
```

### Authentication and errors

Supported credential alternatives (each object is one alternative):

```json
[
  {
    "bearerAuth": [],
    "storeAuth": []
  }
]
```

Documented HTTP responses: 200, 401, 403, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## v2ListCoupons

List all coupons

[API reference](https://sell.app/docs/api/coupons/list-all-coupons) · Effect: **read**

```php
public function v2ListCoupons(
        ?int $limit = null,
        ?int $page = null,
        ?bool $withTrashed = null,
        ?bool $onlyTrashed = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\PaginatedResponse
```

| Argument | Native type | Required |
| --- | --- | --- |
| limit | `?int` | No |
| page | `?int` | No |
| withTrashed | `?bool` | No |
| onlyTrashed | `?bool` | No |
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

$result = $client->coupons()->v2ListCoupons();
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

## v2CreateCoupon

Create a coupon

[API reference](https://sell.app/docs/api/coupons/create-a-coupon) · Effect: **consequential**

```php
public function v2CreateCoupon(
        string $code,
        \SellApp\Resource\SdkCreateCouponRequestApplicationJsonType $type,
        float|string $discount,
        bool $storeWide,
        ?array $products = null,
        ?array $productVariants = null,
        ?int $limit = null,
        ?\DateTimeImmutable $expiresAt = null,
        float|string|null $minimumAmount = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkV2CreateCouponResponseValue201ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| code | `string` | Yes |
| type | `\SellApp\Resource\SdkCreateCouponRequestApplicationJsonType` | Yes |
| discount | `float\|string` | Yes |
| storeWide | `bool` | Yes |
| products | `?array` | No |
| productVariants | `?array` | No |
| limit | `?int` | No |
| expiresAt | `?\DateTimeImmutable` | No |
| minimumAmount | `float\|string\|null` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkV2CreateCouponResponseValue201ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->coupons()->v2CreateCoupon(
    code: 'PLAN10',
    type: 'PERCENTAGE',
    discount: 10,
    storeWide: false,
    products: [123, 456],
    productVariants: [1001, 1002],
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

## v2SearchCoupons

Search coupons

[API reference](https://sell.app/docs/api/coupons/search-coupons) · Effect: **read**

```php
public function v2SearchCoupons(
        ?array $filters = null,
        ?array $sort = null,
        ?\SellApp\Resource\V2SearchCouponsRequestApplicationJsonPropertySearch $search = null,
        ?array $includes = null,
        ?bool $withTrashed = null,
        ?bool $onlyTrashed = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\PaginatedResponse
```

| Argument | Native type | Required |
| --- | --- | --- |
| filters | `?array` | No |
| sort | `?array` | No |
| search | `?\SellApp\Resource\V2SearchCouponsRequestApplicationJsonPropertySearch` | No |
| includes | `?array` | No |
| withTrashed | `?bool` | No |
| onlyTrashed | `?bool` | No |
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

$result = $client->coupons()->v2SearchCoupons(
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

## v2GetCoupon

Retrieve a coupon

[API reference](https://sell.app/docs/api/coupons/retrieve-a-coupon) · Effect: **read**

```php
public function v2GetCoupon(
        int $coupon,
        ?bool $withTrashed = null,
        ?bool $onlyTrashed = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkV2GetCouponResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| coupon | `int` | Yes |
| withTrashed | `?bool` | No |
| onlyTrashed | `?bool` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkV2GetCouponResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->coupons()->v2GetCoupon(coupon: 1);
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

## v2ReplaceCoupon

Update a coupon

[API reference](https://sell.app/docs/api/coupons/update-a-coupon) · Effect: **consequential**

```php
public function v2ReplaceCoupon(
        int $coupon,
        ?string $code = null,
        ?\SellApp\Resource\SdkCreateCouponRequestApplicationJsonType $type = null,
        float|string|null $discount = null,
        ?bool $storeWide = null,
        ?array $products = null,
        ?array $productVariants = null,
        ?int $limit = null,
        ?\DateTimeImmutable $expiresAt = null,
        float|string|null $minimumAmount = null,
        ?bool $withTrashed = null,
        ?bool $onlyTrashed = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkV2ReplaceCouponResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| coupon | `int` | Yes |
| code | `?string` | No |
| type | `?\SellApp\Resource\SdkCreateCouponRequestApplicationJsonType` | No |
| discount | `float\|string\|null` | No |
| storeWide | `?bool` | No |
| products | `?array` | No |
| productVariants | `?array` | No |
| limit | `?int` | No |
| expiresAt | `?\DateTimeImmutable` | No |
| minimumAmount | `float\|string\|null` | No |
| withTrashed | `?bool` | No |
| onlyTrashed | `?bool` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkV2ReplaceCouponResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->coupons()->v2ReplaceCoupon(
    coupon: 1,
    storeWide: false,
    products: [123],
    productVariants: [1001, 1002],
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

## v2UpdateCoupon

Update a coupon

[API reference](https://sell.app/docs/api/coupons/update-a-coupon) · Effect: **consequential**

```php
public function v2UpdateCoupon(
        int $coupon,
        ?string $code = null,
        ?\SellApp\Resource\SdkCreateCouponRequestApplicationJsonType $type = null,
        float|string|null $discount = null,
        ?bool $storeWide = null,
        ?array $products = null,
        ?array $productVariants = null,
        ?int $limit = null,
        ?\DateTimeImmutable $expiresAt = null,
        float|string|null $minimumAmount = null,
        ?bool $withTrashed = null,
        ?bool $onlyTrashed = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkV2UpdateCouponResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| coupon | `int` | Yes |
| code | `?string` | No |
| type | `?\SellApp\Resource\SdkCreateCouponRequestApplicationJsonType` | No |
| discount | `float\|string\|null` | No |
| storeWide | `?bool` | No |
| products | `?array` | No |
| productVariants | `?array` | No |
| limit | `?int` | No |
| expiresAt | `?\DateTimeImmutable` | No |
| minimumAmount | `float\|string\|null` | No |
| withTrashed | `?bool` | No |
| onlyTrashed | `?bool` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkV2UpdateCouponResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->coupons()->v2UpdateCoupon(
    coupon: 1,
    storeWide: false,
    products: [123],
    productVariants: [1001, 1002],
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

## v2DeleteCoupon

Delete a coupon

[API reference](https://sell.app/docs/api/coupons/delete-a-coupon) · Effect: **consequential**

```php
public function v2DeleteCoupon(
        int $coupon,
        ?bool $withTrashed = null,
        ?bool $onlyTrashed = null,
        ?\SellApp\RequestOptions $options = null,
    ): void
```

| Argument | Native type | Required |
| --- | --- | --- |
| coupon | `int` | Yes |
| withTrashed | `?bool` | No |
| onlyTrashed | `?bool` | No |
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

$result = $client->coupons()->v2DeleteCoupon(coupon: 1);
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

## v2BatchCreateCoupons

Batch create coupons

[API reference](https://sell.app/docs/api/coupons/batch-create-coupons) · Effect: **consequential**

```php
public function v2BatchCreateCoupons(
        array $resources,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkV2BatchCreateCouponsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| resources | `array` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkV2BatchCreateCouponsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->coupons()->v2BatchCreateCoupons(
    resources: [
        [
            'code' => 'STARTER10',
            'type' => 'PERCENTAGE',
            'discount' => 10,
            'store_wide' => false,
            'products' => [123],
            'product_variants' => [1001],
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

## v2BatchUpdateCoupons

Batch update coupons

[API reference](https://sell.app/docs/api/coupons/batch-update-coupons) · Effect: **consequential**

```php
public function v2BatchUpdateCoupons(
        \SellApp\Resource\V2BatchUpdateCouponsRequestApplicationJsonPropertyResources $resources,
        ?bool $withTrashed = null,
        ?bool $onlyTrashed = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkV2BatchUpdateCouponsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| resources | `\SellApp\Resource\V2BatchUpdateCouponsRequestApplicationJsonPropertyResources` | Yes |
| withTrashed | `?bool` | No |
| onlyTrashed | `?bool` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkV2BatchUpdateCouponsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->coupons()->v2BatchUpdateCoupons(
    resources: [
        '1' => ['store_wide' => false, 'products' => [123], 'product_variants' => [1001, 1002]],
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

Documented HTTP responses: 200, 400, 401, 403, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## v2BatchDeleteCoupons

Batch delete coupons

[API reference](https://sell.app/docs/api/coupons/batch-delete-coupons) · Effect: **consequential**

```php
public function v2BatchDeleteCoupons(
        array $resources,
        ?bool $withTrashed = null,
        ?bool $onlyTrashed = null,
        ?\SellApp\RequestOptions $options = null,
    ): void
```

| Argument | Native type | Required |
| --- | --- | --- |
| resources | `array` | Yes |
| withTrashed | `?bool` | No |
| onlyTrashed | `?bool` | No |
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

$result = $client->coupons()->v2BatchDeleteCoupons(resources: [1, 2]);
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

