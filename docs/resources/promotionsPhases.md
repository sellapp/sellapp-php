# promotionsPhases

[All resources](../methods.md)

## list

List promotion phases

[API reference](https://sell.app/docs/api/promotions/replace-promotion-phases) · Effect: **read**

```php
public function list(
        int $promotion,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkListPromotionPhasesResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| promotion | `int` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkListPromotionPhasesResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->promotionsPhases()->list(promotion: 1);
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

Replace promotion phases

[API reference](https://sell.app/docs/api/promotions/replace-promotion-phases) · Effect: **consequential**

```php
public function replace(
        int $promotion,
        array $phases,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkReplacePromotionPhasesResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| promotion | `int` | Yes |
| phases | `array` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkReplacePromotionPhasesResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->promotionsPhases()->replace(
    promotion: 1,
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

