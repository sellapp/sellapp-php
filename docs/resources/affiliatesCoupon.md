# affiliatesCoupon

[All resources](../methods.md)

## get

Retrieve an affiliate coupon

[API reference](https://sell.app/docs/api/affiliates/affiliate-coupon) · Effect: **read**

```php
public function get(
        int $affiliate,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkGetAffiliateCouponResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| affiliate | `int` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkGetAffiliateCouponResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->affiliatesCoupon()->get(affiliate: 88);
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

## save

Save an affiliate coupon

[API reference](https://sell.app/docs/api/affiliates/affiliate-coupon) · Effect: **consequential**

```php
public function save(
        int $affiliate,
        ?string $code = null,
        ?\SellApp\Resource\SdkCreateCouponRequestApplicationJsonType $type = null,
        float|string|null $discount = null,
        ?bool $storeWide = null,
        ?array $products = null,
        ?array $productVariants = null,
        ?int $limit = null,
        ?\DateTimeImmutable $expiresAt = null,
        float|string|null $minimumAmount = null,
        ?\SellApp\Resource\SdkCreateCouponRequestApplicationJsonAppliesTo $appliesTo = null,
        ?int $subscriptionPayments = null,
        ?string $maximumDiscountAmount = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkSaveAffiliateCouponResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| affiliate | `int` | Yes |
| code | `?string` | No |
| type | `?\SellApp\Resource\SdkCreateCouponRequestApplicationJsonType` | No |
| discount | `float\|string\|null` | No |
| storeWide | `?bool` | No |
| products | `?array` | No |
| productVariants | `?array` | No |
| limit | `?int` | No |
| expiresAt | `?\DateTimeImmutable` | No |
| minimumAmount | `float\|string\|null` | No |
| appliesTo | `?\SellApp\Resource\SdkCreateCouponRequestApplicationJsonAppliesTo` | No |
| subscriptionPayments | `?int` | No |
| maximumDiscountAmount | `?string` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkSaveAffiliateCouponResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->affiliatesCoupon()->save(
    affiliate: 88,
    code: 'ALEX15',
    type: 'PERCENTAGE',
    discount: '15',
    storeWide: true,
    maximumDiscountAmount: '20',
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

## disable

Disable an affiliate coupon

[API reference](https://sell.app/docs/api/affiliates/affiliate-coupon) · Effect: **consequential**

```php
public function disable(
        int $affiliate,
        ?\SellApp\RequestOptions $options = null,
    ): void
```

| Argument | Native type | Required |
| --- | --- | --- |
| affiliate | `int` | Yes |
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

$result = $client->affiliatesCoupon()->disable(affiliate: 88);
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

