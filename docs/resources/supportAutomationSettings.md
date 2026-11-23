# supportAutomationSettings

[All resources](../methods.md)

## get

Retrieve support automation settings

[API reference](https://sell.app/docs/api/support-automation-settings/retrieve-support-automation-settings) · Effect: **read**

```php
public function get(
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkGetSupportAutomationSettingsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkGetSupportAutomationSettingsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->supportAutomationSettings()->get();
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

## replace

Update support automation settings

[API reference](https://sell.app/docs/api/support-automation-settings/update-support-automation-settings) · Effect: **consequential**

```php
public function replace(
        ?bool $automationEnabled = null,
        ?int $dailyRefundCapCents = null,
        ?bool $expectedAutomationEnabled = null,
        ?int $expectedDailyRefundCapCents = null,
        ?string $currency = null,
        ?int $activeRulesCount = null,
        ?int $activeRefundRulesCount = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkReplaceSupportAutomationSettingsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| automationEnabled | `?bool` | No |
| dailyRefundCapCents | `?int` | No |
| expectedAutomationEnabled | `?bool` | No |
| expectedDailyRefundCapCents | `?int` | No |
| currency | `?string` | No |
| activeRulesCount | `?int` | No |
| activeRefundRulesCount | `?int` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkReplaceSupportAutomationSettingsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->supportAutomationSettings()->replace(
    automationEnabled: true,
    dailyRefundCapCents: 5000,
    expectedAutomationEnabled: false,
    expectedDailyRefundCapCents: null,
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

## update

Update support automation settings

[API reference](https://sell.app/docs/api/support-automation-settings/update-support-automation-settings) · Effect: **consequential**

```php
public function update(
        ?bool $automationEnabled = null,
        ?int $dailyRefundCapCents = null,
        ?bool $expectedAutomationEnabled = null,
        ?int $expectedDailyRefundCapCents = null,
        ?string $currency = null,
        ?int $activeRulesCount = null,
        ?int $activeRefundRulesCount = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkUpdateSupportAutomationSettingsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| automationEnabled | `?bool` | No |
| dailyRefundCapCents | `?int` | No |
| expectedAutomationEnabled | `?bool` | No |
| expectedDailyRefundCapCents | `?int` | No |
| currency | `?string` | No |
| activeRulesCount | `?int` | No |
| activeRefundRulesCount | `?int` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkUpdateSupportAutomationSettingsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->supportAutomationSettings()->update(
    automationEnabled: true,
    dailyRefundCapCents: 5000,
    expectedAutomationEnabled: false,
    expectedDailyRefundCapCents: null,
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

