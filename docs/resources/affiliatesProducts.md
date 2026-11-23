# affiliatesProducts

[All resources](../methods.md)

## get

Retrieve affiliate products

[API reference](https://sell.app/docs/api/affiliates/affiliate-products) · Effect: **read**

```php
public function get(
        int $affiliate,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkGetAffiliateProductsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| affiliate | `int` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkGetAffiliateProductsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->affiliatesProducts()->get(affiliate: 88);
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

Update affiliate products

[API reference](https://sell.app/docs/api/affiliates/affiliate-products) · Effect: **consequential**

```php
public function update(
        int $affiliate,
        ?bool $enableSpecificProducts = null,
        ?array $products = null,
        ?bool $replaceProducts = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkUpdateAffiliateProductsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| affiliate | `int` | Yes |
| enableSpecificProducts | `?bool` | No |
| products | `?array` | No |
| replaceProducts | `?bool` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkUpdateAffiliateProductsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->affiliatesProducts()->update(
    affiliate: 88,
    enableSpecificProducts: true,
    products: [
        [
            'id' => 42,
            'enabled' => true,
            'commission' => ['type' => 'percentage', 'percentage' => '25'],
        ],
        [
            'id' => 43,
            'enabled' => true,
            'commission' => ['type' => 'fixed', 'amount_usd_cents' => 550],
        ],
    ],
    replaceProducts: true,
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

