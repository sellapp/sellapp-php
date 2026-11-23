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

## getCheckout

Retrieve checkout settings

[API reference](https://sell.app/docs/api/store-settings/checkout-settings) · Effect: **read**

```php
public function getCheckout(
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkGetCheckoutSettingsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkGetCheckoutSettingsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->storeSettings()->getCheckout();
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

## replaceCheckout

Update checkout settings

[API reference](https://sell.app/docs/api/store-settings/checkout-settings) · Effect: **consequential**

```php
public function replaceCheckout(
        bool $shoppingCartEnabled,
        bool $customerEmailRequired,
        bool $allowVpnPurchases,
        bool $blacklistOnDispute,
        ?string $minimumSpend,
        ?string $billingDescriptor,
        int $attemptsPerCustomer,
        ?int $attemptsPerIp,
        ?int $attemptsPerEmail,
        ?int $attemptsPerFingerprint,
        int $rateLimitWindowSeconds,
        ?\SellApp\Resource\ReplaceCheckoutSettingsRequestApplicationJsonPropertyCrypto $crypto = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkReplaceCheckoutSettingsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| shoppingCartEnabled | `bool` | Yes |
| customerEmailRequired | `bool` | Yes |
| allowVpnPurchases | `bool` | Yes |
| blacklistOnDispute | `bool` | Yes |
| minimumSpend | `?string` | Yes |
| billingDescriptor | `?string` | Yes |
| attemptsPerCustomer | `int` | Yes |
| attemptsPerIp | `?int` | Yes |
| attemptsPerEmail | `?int` | Yes |
| attemptsPerFingerprint | `?int` | Yes |
| rateLimitWindowSeconds | `int` | Yes |
| crypto | `?\SellApp\Resource\ReplaceCheckoutSettingsRequestApplicationJsonPropertyCrypto` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkReplaceCheckoutSettingsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->storeSettings()->replaceCheckout(
    shoppingCartEnabled: true,
    customerEmailRequired: true,
    allowVpnPurchases: true,
    blacklistOnDispute: true,
    minimumSpend: '5.00',
    billingDescriptor: 'LAUNCH LAB',
    attemptsPerCustomer: 5,
    attemptsPerIp: 20,
    attemptsPerEmail: null,
    attemptsPerFingerprint: null,
    rateLimitWindowSeconds: 3600,
    crypto: ['underpaid_percentage' => 2, 'minimum_confirmations' => 2],
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

## updateCheckout

Update checkout settings

[API reference](https://sell.app/docs/api/store-settings/checkout-settings) · Effect: **consequential**

```php
public function updateCheckout(
        ?bool $shoppingCartEnabled = null,
        ?bool $customerEmailRequired = null,
        ?bool $allowVpnPurchases = null,
        ?bool $blacklistOnDispute = null,
        ?string $minimumSpend = null,
        ?string $billingDescriptor = null,
        ?int $attemptsPerCustomer = null,
        ?int $attemptsPerIp = null,
        ?int $attemptsPerEmail = null,
        ?int $attemptsPerFingerprint = null,
        ?int $rateLimitWindowSeconds = null,
        ?\SellApp\Resource\UpdateCheckoutSettingsRequestApplicationJsonPropertyCrypto $crypto = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkUpdateCheckoutSettingsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| shoppingCartEnabled | `?bool` | No |
| customerEmailRequired | `?bool` | No |
| allowVpnPurchases | `?bool` | No |
| blacklistOnDispute | `?bool` | No |
| minimumSpend | `?string` | No |
| billingDescriptor | `?string` | No |
| attemptsPerCustomer | `?int` | No |
| attemptsPerIp | `?int` | No |
| attemptsPerEmail | `?int` | No |
| attemptsPerFingerprint | `?int` | No |
| rateLimitWindowSeconds | `?int` | No |
| crypto | `?\SellApp\Resource\UpdateCheckoutSettingsRequestApplicationJsonPropertyCrypto` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkUpdateCheckoutSettingsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->storeSettings()->updateCheckout(
    minimumSpend: '10.00',
    attemptsPerEmail: 10,
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

## getTaxes

Retrieve tax settings

[API reference](https://sell.app/docs/api/store-settings/tax-settings) · Effect: **read**

```php
public function getTaxes(
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkGetTaxSettingsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkGetTaxSettingsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->storeSettings()->getTaxes();
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

## replaceTaxes

Update tax settings

[API reference](https://sell.app/docs/api/store-settings/tax-settings) · Effect: **consequential**

```php
public function replaceTaxes(
        bool $vatEnabled,
        bool $vatInclusivePricing,
        bool $collectBillingDetails,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkReplaceTaxSettingsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| vatEnabled | `bool` | Yes |
| vatInclusivePricing | `bool` | Yes |
| collectBillingDetails | `bool` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkReplaceTaxSettingsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->storeSettings()->replaceTaxes(
    vatEnabled: true,
    vatInclusivePricing: true,
    collectBillingDetails: false,
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

## updateTaxes

Update tax settings

[API reference](https://sell.app/docs/api/store-settings/tax-settings) · Effect: **consequential**

```php
public function updateTaxes(
        ?bool $vatEnabled = null,
        ?bool $vatInclusivePricing = null,
        ?bool $collectBillingDetails = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkUpdateTaxSettingsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| vatEnabled | `?bool` | No |
| vatInclusivePricing | `?bool` | No |
| collectBillingDetails | `?bool` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkUpdateTaxSettingsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->storeSettings()->updateTaxes(vatInclusivePricing: true);
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

## getCustomerEmails

Retrieve customer email settings

[API reference](https://sell.app/docs/api/store-settings/customer-email-settings) · Effect: **read**

```php
public function getCustomerEmails(
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkGetCustomerEmailSettingsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkGetCustomerEmailSettingsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->storeSettings()->getCustomerEmails();
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

## replaceCustomerEmails

Update customer email settings

[API reference](https://sell.app/docs/api/store-settings/customer-email-settings) · Effect: **consequential**

```php
public function replaceCustomerEmails(
        bool $sendDeliveryEmail,
        bool $sendPaymentFailureEmail,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkReplaceCustomerEmailSettingsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| sendDeliveryEmail | `bool` | Yes |
| sendPaymentFailureEmail | `bool` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkReplaceCustomerEmailSettingsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->storeSettings()->replaceCustomerEmails(
    sendDeliveryEmail: true,
    sendPaymentFailureEmail: false,
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

## updateCustomerEmails

Update customer email settings

[API reference](https://sell.app/docs/api/store-settings/customer-email-settings) · Effect: **consequential**

```php
public function updateCustomerEmails(
        ?bool $sendDeliveryEmail = null,
        ?bool $sendPaymentFailureEmail = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkUpdateCustomerEmailSettingsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| sendDeliveryEmail | `?bool` | No |
| sendPaymentFailureEmail | `?bool` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkUpdateCustomerEmailSettingsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->storeSettings()->updateCustomerEmails(sendPaymentFailureEmail: false);
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

## getStoreAlerts

Retrieve store alert settings

[API reference](https://sell.app/docs/api/store-settings/store-alert-settings) · Effect: **read**

```php
public function getStoreAlerts(
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkGetStoreAlertSettingsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkGetStoreAlertSettingsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->storeSettings()->getStoreAlerts();
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

## replaceStoreAlerts

Update store alert settings

[API reference](https://sell.app/docs/api/store-settings/store-alert-settings) · Effect: **consequential**

```php
public function replaceStoreAlerts(
        bool $saleEmailsEnabled,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkReplaceStoreAlertSettingsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| saleEmailsEnabled | `bool` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkReplaceStoreAlertSettingsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->storeSettings()->replaceStoreAlerts(saleEmailsEnabled: false);
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

## updateStoreAlerts

Update store alert settings

[API reference](https://sell.app/docs/api/store-settings/store-alert-settings) · Effect: **consequential**

```php
public function updateStoreAlerts(
        ?bool $saleEmailsEnabled = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkUpdateStoreAlertSettingsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| saleEmailsEnabled | `?bool` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkUpdateStoreAlertSettingsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->storeSettings()->updateStoreAlerts(saleEmailsEnabled: false);
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

## getPersonalization

Retrieve personalization settings

[API reference](https://sell.app/docs/api/store-settings/personalization-settings) · Effect: **read**

```php
public function getPersonalization(
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkGetPersonalizationSettingsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkGetPersonalizationSettingsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->storeSettings()->getPersonalization();
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

## replacePersonalization

Update personalization settings

[API reference](https://sell.app/docs/api/store-settings/personalization-settings) · Effect: **consequential**

```php
public function replacePersonalization(
        ?string $supportEmail,
        ?string $trustpilotEmail,
        ?string $senderName,
        ?string $storeAddress,
        ?string $storeCity,
        ?string $storeState,
        ?string $storeZip,
        ?string $storeCountry,
        ?string $storeTax,
        ?string $backLinkLabel,
        ?string $backLinkUrl,
        ?string $senderEmail = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkReplacePersonalizationSettingsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| supportEmail | `?string` | Yes |
| trustpilotEmail | `?string` | Yes |
| senderName | `?string` | Yes |
| storeAddress | `?string` | Yes |
| storeCity | `?string` | Yes |
| storeState | `?string` | Yes |
| storeZip | `?string` | Yes |
| storeCountry | `?string` | Yes |
| storeTax | `?string` | Yes |
| backLinkLabel | `?string` | Yes |
| backLinkUrl | `?string` | Yes |
| senderEmail | `?string` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkReplacePersonalizationSettingsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->storeSettings()->replacePersonalization(
    supportEmail: 'support@launch-lab.example.com',
    trustpilotEmail: null,
    senderName: 'Launch Lab',
    senderEmail: 'orders@launch-lab.example.com',
    storeAddress: '651 N Broad St, Suite 206',
    storeCity: 'Middletown',
    storeState: 'Delaware',
    storeZip: '19709',
    storeCountry: 'United States',
    storeTax: 'EIN 98-7654321',
    backLinkLabel: 'Back to Launch Lab',
    backLinkUrl: 'https://launch-lab.example.com',
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

## updatePersonalization

Update personalization settings

[API reference](https://sell.app/docs/api/store-settings/personalization-settings) · Effect: **consequential**

```php
public function updatePersonalization(
        ?string $supportEmail = null,
        ?string $trustpilotEmail = null,
        ?string $senderName = null,
        ?string $senderEmail = null,
        ?string $storeAddress = null,
        ?string $storeCity = null,
        ?string $storeState = null,
        ?string $storeZip = null,
        ?string $storeCountry = null,
        ?string $storeTax = null,
        ?string $backLinkLabel = null,
        ?string $backLinkUrl = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkUpdatePersonalizationSettingsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| supportEmail | `?string` | No |
| trustpilotEmail | `?string` | No |
| senderName | `?string` | No |
| senderEmail | `?string` | No |
| storeAddress | `?string` | No |
| storeCity | `?string` | No |
| storeState | `?string` | No |
| storeZip | `?string` | No |
| storeCountry | `?string` | No |
| storeTax | `?string` | No |
| backLinkLabel | `?string` | No |
| backLinkUrl | `?string` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkUpdatePersonalizationSettingsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->storeSettings()->updatePersonalization(
    backLinkLabel: 'Return to the shop',
    backLinkUrl: 'https://launch-lab.example.com/shop',
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

## replaceCryptoCheckout

Update crypto checkout settings

[API reference](https://sell.app/docs/api/store-settings/crypto-checkout-settings) · Effect: **consequential**

```php
public function replaceCryptoCheckout(
        int $underpaidPercentage,
        int $minimumConfirmations,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkReplaceCryptoCheckoutSettingsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| underpaidPercentage | `int` | Yes |
| minimumConfirmations | `int` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkReplaceCryptoCheckoutSettingsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->storeSettings()->replaceCryptoCheckout(
    underpaidPercentage: 1,
    minimumConfirmations: 3,
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

## updateCryptoCheckout

Update crypto checkout settings

[API reference](https://sell.app/docs/api/store-settings/crypto-checkout-settings) · Effect: **consequential**

```php
public function updateCryptoCheckout(
        ?int $underpaidPercentage = null,
        ?int $minimumConfirmations = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkUpdateCryptoCheckoutSettingsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| underpaidPercentage | `?int` | No |
| minimumConfirmations | `?int` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkUpdateCryptoCheckoutSettingsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->storeSettings()->updateCryptoCheckout(minimumConfirmations: 3);
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

