# storeSettings

[All resources](../methods.md)

## get

Retrieve store settings

[API reference](https://sell.app/docs/api/store-settings/retrieve-store-settings) · Effect: **read**

```php
public function get(
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkGetStoreSettingsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkGetStoreSettingsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->storeSettings()->get();
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

## replaceGeneral

Update general store settings

[API reference](https://sell.app/docs/api/store-settings/update-general-settings) · Effect: **consequential**

```php
public function replaceGeneral(
        string $name,
        \SellApp\Resource\StoreVisibility $visibility,
        string $timezone,
        string $currency,
        ?\SellApp\Resource\DarkMode $darkMode = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkReplaceGeneralStoreSettingsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| name | `string` | Yes |
| visibility | `\SellApp\Resource\StoreVisibility` | Yes |
| timezone | `string` | Yes |
| currency | `string` | Yes |
| darkMode | `?\SellApp\Resource\DarkMode` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkReplaceGeneralStoreSettingsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->storeSettings()->replaceGeneral(
    name: 'Launch Lab',
    visibility: 'HIDDEN',
    timezone: 'Europe/London',
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

Documented HTTP responses: 200, 400, 401, 403, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## updateGeneral

Update general store settings

[API reference](https://sell.app/docs/api/store-settings/update-general-settings) · Effect: **consequential**

```php
public function updateGeneral(
        ?string $name = null,
        ?\SellApp\Resource\StoreVisibility $visibility = null,
        ?string $timezone = null,
        ?string $currency = null,
        ?\SellApp\Resource\DarkMode $darkMode = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkUpdateGeneralStoreSettingsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| name | `?string` | No |
| visibility | `?\SellApp\Resource\StoreVisibility` | No |
| timezone | `?string` | No |
| currency | `?string` | No |
| darkMode | `?\SellApp\Resource\DarkMode` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkUpdateGeneralStoreSettingsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->storeSettings()->updateGeneral(name: 'Launch Lab');
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

## replaceAnalytics

Update analytics settings

[API reference](https://sell.app/docs/api/store-settings/update-analytics-settings) · Effect: **consequential**

```php
public function replaceAnalytics(
        ?string $ga4MeasurementId = null,
        ?string $metaPixelId = null,
        ?string $tiktokPixelId = null,
        ?string $ga4ApiSecret = null,
        ?string $metaAccessToken = null,
        ?string $tiktokAccessToken = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkReplaceAnalyticsSettingsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| ga4MeasurementId | `?string` | No |
| metaPixelId | `?string` | No |
| tiktokPixelId | `?string` | No |
| ga4ApiSecret | `?string` | No |
| metaAccessToken | `?string` | No |
| tiktokAccessToken | `?string` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkReplaceAnalyticsSettingsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->storeSettings()->replaceAnalytics(ga4MeasurementId: null);
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

## updateAnalytics

Update analytics settings

[API reference](https://sell.app/docs/api/store-settings/update-analytics-settings) · Effect: **consequential**

```php
public function updateAnalytics(
        ?string $ga4MeasurementId = null,
        ?string $metaPixelId = null,
        ?string $tiktokPixelId = null,
        ?string $ga4ApiSecret = null,
        ?string $metaAccessToken = null,
        ?string $tiktokAccessToken = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkUpdateAnalyticsSettingsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| ga4MeasurementId | `?string` | No |
| metaPixelId | `?string` | No |
| tiktokPixelId | `?string` | No |
| ga4ApiSecret | `?string` | No |
| metaAccessToken | `?string` | No |
| tiktokAccessToken | `?string` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkUpdateAnalyticsSettingsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->storeSettings()->updateAnalytics(ga4MeasurementId: null);
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

## replaceMarketing

Update marketing settings

[API reference](https://sell.app/docs/api/store-settings/update-marketing-settings) · Effect: **consequential**

```php
public function replaceMarketing(
        \SellApp\Resource\ReplaceMarketingSettingsRequestApplicationJsonPropertyAbandonedCart $abandonedCart,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkReplaceMarketingSettingsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| abandonedCart | `\SellApp\Resource\ReplaceMarketingSettingsRequestApplicationJsonPropertyAbandonedCart` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkReplaceMarketingSettingsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->storeSettings()->replaceMarketing(abandonedCart: ['enabled' => false]);
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

## updateMarketing

Update marketing settings

[API reference](https://sell.app/docs/api/store-settings/update-marketing-settings) · Effect: **consequential**

```php
public function updateMarketing(
        \SellApp\Resource\UpdateMarketingSettingsRequestApplicationJsonPropertyAbandonedCart $abandonedCart,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkUpdateMarketingSettingsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| abandonedCart | `\SellApp\Resource\UpdateMarketingSettingsRequestApplicationJsonPropertyAbandonedCart` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkUpdateMarketingSettingsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->storeSettings()->updateMarketing(abandonedCart: ['enabled' => false]);
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

