# rewardCouponTemplates

[All resources](../methods.md)

## list

List reward coupon templates

[API reference](https://sell.app/docs/api/reward-coupon-templates/list-reward-coupon-templates) · Effect: **read**

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

$result = $client->rewardCouponTemplates()->list();
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

Create a reward coupon template

[API reference](https://sell.app/docs/api/reward-coupon-templates/create-a-reward-coupon-template) · Effect: **consequential**

```php
public function create(
        string $name,
        \SellApp\Resource\SdkCreateCouponRequestApplicationJsonType $type,
        string|float $discount,
        bool $storeWide,
        \SellApp\Resource\SdkCreateRewardCouponTemplateRequestApplicationJsonRedemptionMode $redemptionMode,
        bool $isActive,
        array $listingIds,
        string|float|null $minimumAmount = null,
        string|float|null $maximumDiscountAmount = null,
        ?\DateTimeImmutable $expiresAt = null,
        ?int $expiresAfterDays = null,
        ?\DateTimeImmutable $expectedUpdatedAt = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkCreateRewardCouponTemplateResponseValue201ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| name | `string` | Yes |
| type | `\SellApp\Resource\SdkCreateCouponRequestApplicationJsonType` | Yes |
| discount | `string\|float` | Yes |
| storeWide | `bool` | Yes |
| redemptionMode | `\SellApp\Resource\SdkCreateRewardCouponTemplateRequestApplicationJsonRedemptionMode` | Yes |
| isActive | `bool` | Yes |
| listingIds | `array` | Yes |
| minimumAmount | `string\|float\|null` | No |
| maximumDiscountAmount | `string\|float\|null` | No |
| expiresAt | `?\DateTimeImmutable` | No |
| expiresAfterDays | `?int` | No |
| expectedUpdatedAt | `?\DateTimeImmutable` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkCreateRewardCouponTemplateResponseValue201ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->rewardCouponTemplates()->create(
    name: 'Launch Lab thank you',
    type: 'PERCENTAGE',
    discount: '10.00',
    storeWide: true,
    redemptionMode: 'customer_locked',
    isActive: false,
    listingIds: [],
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

Search reward coupon templates

[API reference](https://sell.app/docs/api/reward-coupon-templates/search-reward-coupon-templates) · Effect: **read**

```php
public function search(
        ?array $filters = null,
        ?array $sort = null,
        ?\SellApp\Resource\SearchRewardRulesRequestApplicationJsonPropertySearch $search = null,
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
| search | `?\SellApp\Resource\SearchRewardRulesRequestApplicationJsonPropertySearch` | No |
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

$result = $client->rewardCouponTemplates()->search(
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

Retrieve a reward coupon template

[API reference](https://sell.app/docs/api/reward-coupon-templates/retrieve-a-reward-coupon-template) · Effect: **read**

```php
public function get(
        int $rewardCouponTemplate,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkGetRewardCouponTemplateResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| rewardCouponTemplate | `int` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkGetRewardCouponTemplateResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->rewardCouponTemplates()->get(rewardCouponTemplate: 1);
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

Update a reward coupon template

[API reference](https://sell.app/docs/api/reward-coupon-templates/update-a-reward-coupon-template) · Effect: **consequential**

```php
public function replace(
        int $rewardCouponTemplate,
        ?string $name = null,
        ?\SellApp\Resource\SdkCreateCouponRequestApplicationJsonType $type = null,
        string|float|null $discount = null,
        ?bool $storeWide = null,
        string|float|null $minimumAmount = null,
        string|float|null $maximumDiscountAmount = null,
        ?\DateTimeImmutable $expiresAt = null,
        ?int $expiresAfterDays = null,
        ?\SellApp\Resource\SdkCreateRewardCouponTemplateRequestApplicationJsonRedemptionMode $redemptionMode = null,
        ?bool $isActive = null,
        ?array $listingIds = null,
        ?\DateTimeImmutable $expectedUpdatedAt = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkReplaceRewardCouponTemplateResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| rewardCouponTemplate | `int` | Yes |
| name | `?string` | No |
| type | `?\SellApp\Resource\SdkCreateCouponRequestApplicationJsonType` | No |
| discount | `string\|float\|null` | No |
| storeWide | `?bool` | No |
| minimumAmount | `string\|float\|null` | No |
| maximumDiscountAmount | `string\|float\|null` | No |
| expiresAt | `?\DateTimeImmutable` | No |
| expiresAfterDays | `?int` | No |
| redemptionMode | `?\SellApp\Resource\SdkCreateRewardCouponTemplateRequestApplicationJsonRedemptionMode` | No |
| isActive | `?bool` | No |
| listingIds | `?array` | No |
| expectedUpdatedAt | `?\DateTimeImmutable` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkReplaceRewardCouponTemplateResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->rewardCouponTemplates()->replace(
    rewardCouponTemplate: 1,
    isActive: false,
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

Update a reward coupon template

[API reference](https://sell.app/docs/api/reward-coupon-templates/update-a-reward-coupon-template) · Effect: **consequential**

```php
public function update(
        int $rewardCouponTemplate,
        ?string $name = null,
        ?\SellApp\Resource\SdkCreateCouponRequestApplicationJsonType $type = null,
        string|float|null $discount = null,
        ?bool $storeWide = null,
        string|float|null $minimumAmount = null,
        string|float|null $maximumDiscountAmount = null,
        ?\DateTimeImmutable $expiresAt = null,
        ?int $expiresAfterDays = null,
        ?\SellApp\Resource\SdkCreateRewardCouponTemplateRequestApplicationJsonRedemptionMode $redemptionMode = null,
        ?bool $isActive = null,
        ?array $listingIds = null,
        ?\DateTimeImmutable $expectedUpdatedAt = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkUpdateRewardCouponTemplateResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| rewardCouponTemplate | `int` | Yes |
| name | `?string` | No |
| type | `?\SellApp\Resource\SdkCreateCouponRequestApplicationJsonType` | No |
| discount | `string\|float\|null` | No |
| storeWide | `?bool` | No |
| minimumAmount | `string\|float\|null` | No |
| maximumDiscountAmount | `string\|float\|null` | No |
| expiresAt | `?\DateTimeImmutable` | No |
| expiresAfterDays | `?int` | No |
| redemptionMode | `?\SellApp\Resource\SdkCreateRewardCouponTemplateRequestApplicationJsonRedemptionMode` | No |
| isActive | `?bool` | No |
| listingIds | `?array` | No |
| expectedUpdatedAt | `?\DateTimeImmutable` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkUpdateRewardCouponTemplateResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->rewardCouponTemplates()->update(
    rewardCouponTemplate: 1,
    isActive: false,
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

