# promotions

[All resources](../methods.md)

## list

List promotions

[API reference](https://sell.app/docs/api/promotions/list-promotions) · Effect: **read**

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

$result = $client->promotions()->list();
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

Create a promotion

[API reference](https://sell.app/docs/api/promotions/create-promotion) · Effect: **consequential**

```php
public function create(
        string $name,
        \SellApp\Resource\SdkCreatePromotionRequestApplicationJsonStatus $status,
        int $priority,
        bool $isStackable,
        array $phases,
        ?\DateTimeImmutable $startsAt = null,
        ?\DateTimeImmutable $endsAt = null,
        ?int $maxRedemptions = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkCreatePromotionResponseValue201ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| name | `string` | Yes |
| status | `\SellApp\Resource\SdkCreatePromotionRequestApplicationJsonStatus` | Yes |
| priority | `int` | Yes |
| isStackable | `bool` | Yes |
| phases | `array` | Yes |
| startsAt | `?\DateTimeImmutable` | No |
| endsAt | `?\DateTimeImmutable` | No |
| maxRedemptions | `?int` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkCreatePromotionResponseValue201ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->promotions()->create(
    name: 'Ship Week',
    status: 'active',
    startsAt: '2026-08-01T00:00:00Z',
    endsAt: '2026-08-08T00:00:00Z',
    priority: 1,
    isStackable: false,
    maxRedemptions: 500,
    phases: [
        [
            'discount_type' => 'percentage',
            'discount_value' => '20',
            'ends_at' => '2026-08-04T00:00:00Z',
            'max_redemptions' => 200,
            'minimum_amount' => '10',
        ],
        [
            'discount_type' => 'fixed',
            'discount_value' => '5',
            'ends_at' => null,
            'max_redemptions' => null,
            'minimum_amount' => '25',
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

Documented HTTP responses: 201, 400, 401, 403, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## search

Search promotions

[API reference](https://sell.app/docs/api/promotions/search-promotions) · Effect: **read**

```php
public function search(
        ?array $filters = null,
        ?array $sort = null,
        ?\SellApp\Resource\SearchPromotionsRequestApplicationJsonPropertySearch $search = null,
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
| search | `?\SellApp\Resource\SearchPromotionsRequestApplicationJsonPropertySearch` | No |
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

$result = $client->promotions()->search(
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

## get

Retrieve a promotion

[API reference](https://sell.app/docs/api/promotions/retrieve-promotion) · Effect: **read**

```php
public function get(
        int $promotion,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkGetPromotionResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| promotion | `int` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkGetPromotionResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->promotions()->get(promotion: 1);
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

Update a promotion

[API reference](https://sell.app/docs/api/promotions/update-promotion) · Effect: **consequential**

```php
public function replace(
        int $promotion,
        ?string $name = null,
        ?\SellApp\Resource\SdkCreatePromotionRequestApplicationJsonStatus $status = null,
        ?\DateTimeImmutable $startsAt = null,
        ?\DateTimeImmutable $endsAt = null,
        ?int $priority = null,
        ?bool $isStackable = null,
        ?int $maxRedemptions = null,
        ?array $phases = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkReplacePromotionResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| promotion | `int` | Yes |
| name | `?string` | No |
| status | `?\SellApp\Resource\SdkCreatePromotionRequestApplicationJsonStatus` | No |
| startsAt | `?\DateTimeImmutable` | No |
| endsAt | `?\DateTimeImmutable` | No |
| priority | `?int` | No |
| isStackable | `?bool` | No |
| maxRedemptions | `?int` | No |
| phases | `?array` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkReplacePromotionResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->promotions()->replace(
    promotion: 1,
    name: 'One More Sprint',
    isStackable: true,
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

Update a promotion

[API reference](https://sell.app/docs/api/promotions/update-promotion) · Effect: **consequential**

```php
public function update(
        int $promotion,
        ?string $name = null,
        ?\SellApp\Resource\SdkCreatePromotionRequestApplicationJsonStatus $status = null,
        ?\DateTimeImmutable $startsAt = null,
        ?\DateTimeImmutable $endsAt = null,
        ?int $priority = null,
        ?bool $isStackable = null,
        ?int $maxRedemptions = null,
        ?array $phases = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkUpdatePromotionResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| promotion | `int` | Yes |
| name | `?string` | No |
| status | `?\SellApp\Resource\SdkCreatePromotionRequestApplicationJsonStatus` | No |
| startsAt | `?\DateTimeImmutable` | No |
| endsAt | `?\DateTimeImmutable` | No |
| priority | `?int` | No |
| isStackable | `?bool` | No |
| maxRedemptions | `?int` | No |
| phases | `?array` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkUpdatePromotionResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->promotions()->update(
    promotion: 1,
    name: 'One More Sprint',
    isStackable: true,
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

Delete a promotion

[API reference](https://sell.app/docs/api/promotions/delete-promotion) · Effect: **consequential**

```php
public function delete(
        int $promotion,
        ?\SellApp\RequestOptions $options = null,
    ): void
```

| Argument | Native type | Required |
| --- | --- | --- |
| promotion | `int` | Yes |
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

$result = $client->promotions()->delete(promotion: 1);
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

## restore

Restore a promotion

[API reference](https://sell.app/docs/api/promotions/restore-promotion) · Effect: **consequential**

```php
public function restore(
        int $promotion,
        string $name,
        \SellApp\Resource\SdkCreatePromotionRequestApplicationJsonStatus $status,
        int $priority,
        bool $isStackable,
        array $phases,
        ?\DateTimeImmutable $startsAt = null,
        ?\DateTimeImmutable $endsAt = null,
        ?int $maxRedemptions = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkRestorePromotionResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| promotion | `int` | Yes |
| name | `string` | Yes |
| status | `\SellApp\Resource\SdkCreatePromotionRequestApplicationJsonStatus` | Yes |
| priority | `int` | Yes |
| isStackable | `bool` | Yes |
| phases | `array` | Yes |
| startsAt | `?\DateTimeImmutable` | No |
| endsAt | `?\DateTimeImmutable` | No |
| maxRedemptions | `?int` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkRestorePromotionResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->promotions()->restore(
    promotion: 1,
    name: 'Ship Week',
    status: 'active',
    startsAt: '2026-08-01T00:00:00Z',
    endsAt: '2026-08-08T00:00:00Z',
    priority: 1,
    isStackable: false,
    maxRedemptions: 500,
    phases: [
        [
            'discount_type' => 'percentage',
            'discount_value' => '20',
            'ends_at' => '2026-08-04T00:00:00Z',
            'max_redemptions' => 200,
            'minimum_amount' => '10',
        ],
        [
            'discount_type' => 'fixed',
            'discount_value' => '5',
            'ends_at' => null,
            'max_redemptions' => null,
            'minimum_amount' => '25',
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

Documented HTTP responses: 200, 400, 401, 403, 404, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

