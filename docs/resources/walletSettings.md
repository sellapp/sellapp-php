# walletSettings

[All resources](../methods.md)

## get

Retrieve wallet settings

[API reference](https://sell.app/docs/api/wallet/wallet-settings) · Effect: **read**

```php
public function get(
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkGetWalletSettingsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkGetWalletSettingsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->walletSettings()->get();
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

Update wallet settings

[API reference](https://sell.app/docs/api/wallet/wallet-settings) · Effect: **consequential**

```php
public function replace(
        bool $enabled,
        ?int $minimumTopUpCents,
        ?int $maximumTopUpCents,
        ?int $expirationDays,
        array $paymentMethods,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkReplaceWalletSettingsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| enabled | `bool` | Yes |
| minimumTopUpCents | `?int` | Yes |
| maximumTopUpCents | `?int` | Yes |
| expirationDays | `?int` | Yes |
| paymentMethods | `array` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkReplaceWalletSettingsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->walletSettings()->replace(
    enabled: false,
    minimumTopUpCents: null,
    maximumTopUpCents: null,
    expirationDays: null,
    paymentMethods: [],
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

