# upsellOffers

[All resources](../methods.md)

## list

List upsell offers

[API reference](https://sell.app/docs/api/products) · Effect: **read**

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

$result = $client->upsellOffers()->list();
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

Create an upsell offer

[API reference](https://sell.app/docs/api/products) · Effect: **consequential**

```php
public function create(
        string $name,
        bool $isActive,
        int $sourceListingId,
        array $items,
        ?string $description = null,
        ?int $sourceVariantId = null,
        ?int $minimumOrderTotalUsdCents = null,
        ?int $maximumOrderTotalUsdCents = null,
        ?\DateTimeImmutable $startsAt = null,
        ?\DateTimeImmutable $endsAt = null,
        ?int $availableForDays = null,
        ?int $maxAcceptsPerCustomer = null,
        ?int $expectedVersion = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkCreateUpsellOfferResponseValue201ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| name | `string` | Yes |
| isActive | `bool` | Yes |
| sourceListingId | `int` | Yes |
| items | `array` | Yes |
| description | `?string` | No |
| sourceVariantId | `?int` | No |
| minimumOrderTotalUsdCents | `?int` | No |
| maximumOrderTotalUsdCents | `?int` | No |
| startsAt | `?\DateTimeImmutable` | No |
| endsAt | `?\DateTimeImmutable` | No |
| availableForDays | `?int` | No |
| maxAcceptsPerCustomer | `?int` | No |
| expectedVersion | `?int` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkCreateUpsellOfferResponseValue201ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->upsellOffers()->create(
    name: 'One More Feature',
    description: 'Offer the advanced package with additional resources.',
    isActive: true,
    sourceListingId: 120,
    sourceVariantId: 880,
    minimumOrderTotalUsdCents: 1000,
    maximumOrderTotalUsdCents: 25000,
    availableForDays: 14,
    maxAcceptsPerCustomer: 1,
    items: [
        [
            'target_listing_id' => 121,
            'target_variant_id' => 881,
            'headline' => 'Upgrade today',
            'description' => 'Unlock dark mode, webhooks, and the premium launch checklist.',
            'discount_type' => 'percentage',
            'discount_value' => '15.00',
            'maximum_discount_amount' => '25.00',
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

Search upsell offers

[API reference](https://sell.app/docs/api/products) · Effect: **read**

```php
public function search(
        ?array $filters = null,
        ?array $sort = null,
        ?\SellApp\Resource\SearchUpsellOffersRequestApplicationJsonPropertySearch $search = null,
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
| search | `?\SellApp\Resource\SearchUpsellOffersRequestApplicationJsonPropertySearch` | No |
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

$result = $client->upsellOffers()->search(
    filters: [['field' => 'id', 'operator' => '=', 'value' => 71]],
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

Retrieve an upsell offer

[API reference](https://sell.app/docs/api/products) · Effect: **read**

```php
public function get(
        int $upsellOffer,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkGetUpsellOfferResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| upsellOffer | `int` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkGetUpsellOfferResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->upsellOffers()->get(upsellOffer: 71);
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

Update an upsell offer

[API reference](https://sell.app/docs/api/products) · Effect: **consequential**

```php
public function replace(
        int $upsellOffer,
        int $expectedVersion,
        ?string $name = null,
        ?string $description = null,
        ?bool $isActive = null,
        ?int $sourceListingId = null,
        ?int $sourceVariantId = null,
        ?int $minimumOrderTotalUsdCents = null,
        ?int $maximumOrderTotalUsdCents = null,
        ?\DateTimeImmutable $startsAt = null,
        ?\DateTimeImmutable $endsAt = null,
        ?int $availableForDays = null,
        ?int $maxAcceptsPerCustomer = null,
        ?array $items = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkReplaceUpsellOfferResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| upsellOffer | `int` | Yes |
| expectedVersion | `int` | Yes |
| name | `?string` | No |
| description | `?string` | No |
| isActive | `?bool` | No |
| sourceListingId | `?int` | No |
| sourceVariantId | `?int` | No |
| minimumOrderTotalUsdCents | `?int` | No |
| maximumOrderTotalUsdCents | `?int` | No |
| startsAt | `?\DateTimeImmutable` | No |
| endsAt | `?\DateTimeImmutable` | No |
| availableForDays | `?int` | No |
| maxAcceptsPerCustomer | `?int` | No |
| items | `?array` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkReplaceUpsellOfferResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->upsellOffers()->replace(
    upsellOffer: 71,
    name: 'One More Feature 2.0',
    isActive: false,
    expectedVersion: 1,
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

Update an upsell offer

[API reference](https://sell.app/docs/api/products) · Effect: **consequential**

```php
public function update(
        int $upsellOffer,
        int $expectedVersion,
        ?string $name = null,
        ?string $description = null,
        ?bool $isActive = null,
        ?int $sourceListingId = null,
        ?int $sourceVariantId = null,
        ?int $minimumOrderTotalUsdCents = null,
        ?int $maximumOrderTotalUsdCents = null,
        ?\DateTimeImmutable $startsAt = null,
        ?\DateTimeImmutable $endsAt = null,
        ?int $availableForDays = null,
        ?int $maxAcceptsPerCustomer = null,
        ?array $items = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkUpdateUpsellOfferResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| upsellOffer | `int` | Yes |
| expectedVersion | `int` | Yes |
| name | `?string` | No |
| description | `?string` | No |
| isActive | `?bool` | No |
| sourceListingId | `?int` | No |
| sourceVariantId | `?int` | No |
| minimumOrderTotalUsdCents | `?int` | No |
| maximumOrderTotalUsdCents | `?int` | No |
| startsAt | `?\DateTimeImmutable` | No |
| endsAt | `?\DateTimeImmutable` | No |
| availableForDays | `?int` | No |
| maxAcceptsPerCustomer | `?int` | No |
| items | `?array` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkUpdateUpsellOfferResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->upsellOffers()->update(
    upsellOffer: 71,
    name: 'One More Feature 2.0',
    isActive: false,
    expectedVersion: 1,
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

Delete an upsell offer

[API reference](https://sell.app/docs/api/products) · Effect: **consequential**

```php
public function delete(
        int $upsellOffer,
        ?\SellApp\RequestOptions $options = null,
    ): void
```

| Argument | Native type | Required |
| --- | --- | --- |
| upsellOffer | `int` | Yes |
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

$result = $client->upsellOffers()->delete(upsellOffer: 71);
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

