# productVariantsSubscriptionSettings

[All resources](../methods.md)

## get

Retrieve variant subscription settings

[API reference](https://sell.app/docs/api/product-variants/variant-subscription-settings) · Effect: **read**

```php
public function get(
        int $product,
        int $variant,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkGetVariantSubscriptionSettingsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| product | `int` | Yes |
| variant | `int` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkGetVariantSubscriptionSettingsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->productVariantsSubscriptionSettings()->get(
    product: 1,
    variant: 4,
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

Update variant subscription settings

[API reference](https://sell.app/docs/api/product-variants/variant-subscription-settings) · Effect: **write**

```php
public function update(
        int $product,
        int $variant,
        ?\SellApp\Resource\UpdateVariantSubscriptionSettingsRequestApplicationJsonPropertyPausePolicy $pausePolicy = null,
        ?\SellApp\Resource\UpdateVariantSubscriptionSettingsRequestApplicationJsonPropertyBillingDatePolicy $billingDatePolicy = null,
        ?\SellApp\Resource\UpdateVariantSubscriptionSettingsRequestApplicationJsonPropertyRenewalPolicy $renewalPolicy = null,
        ?string $expectedState = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkUpdateVariantSubscriptionSettingsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| product | `int` | Yes |
| variant | `int` | Yes |
| pausePolicy | `?\SellApp\Resource\UpdateVariantSubscriptionSettingsRequestApplicationJsonPropertyPausePolicy` | No |
| billingDatePolicy | `?\SellApp\Resource\UpdateVariantSubscriptionSettingsRequestApplicationJsonPropertyBillingDatePolicy` | No |
| renewalPolicy | `?\SellApp\Resource\UpdateVariantSubscriptionSettingsRequestApplicationJsonPropertyRenewalPolicy` | No |
| expectedState | `?string` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkUpdateVariantSubscriptionSettingsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->productVariantsSubscriptionSettings()->update(
    product: 1,
    variant: 4,
    pausePolicy: ['max_pause_days' => 30],
    renewalPolicy: ['redeliver_on_renewal' => false],
    expectedState: '3f9a1c0e7b2d4a6f8e1c5b9d0a7f3e2c4b6d8a0f1e3c5a7b9d2f4e6a8c0b1d3e',
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

