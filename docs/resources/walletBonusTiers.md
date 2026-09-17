# walletBonusTiers

[All resources](../methods.md)

## list

List wallet bonus tiers

[API reference](https://sell.app/docs/api/wallet/bonus-tiers) · Effect: **read**

```php
public function list(
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkListWalletBonusTiersResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkListWalletBonusTiersResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->walletBonusTiers()->list();
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

Create a wallet bonus tier

[API reference](https://sell.app/docs/api/wallet/bonus-tiers) · Effect: **consequential**

```php
public function create(
        int $minimumTopUpCents,
        \SellApp\Resource\SdkCreateWalletBonusTierRequestApplicationJsonBonusKind $bonusKind,
        ?int $fixedBonusCents,
        ?int $percentBasis,
        ?int $maximumBonusCents,
        int $priority,
        bool $isActive,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkCreateWalletBonusTierResponseValue201ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| minimumTopUpCents | `int` | Yes |
| bonusKind | `\SellApp\Resource\SdkCreateWalletBonusTierRequestApplicationJsonBonusKind` | Yes |
| fixedBonusCents | `?int` | Yes |
| percentBasis | `?int` | Yes |
| maximumBonusCents | `?int` | Yes |
| priority | `int` | Yes |
| isActive | `bool` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkCreateWalletBonusTierResponseValue201ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->walletBonusTiers()->create(
    minimumTopUpCents: 10000,
    bonusKind: 'fixed',
    fixedBonusCents: 500,
    percentBasis: null,
    maximumBonusCents: null,
    priority: 0,
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

Documented HTTP responses: 201, 400, 401, 403, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## replace

Update a wallet bonus tier

[API reference](https://sell.app/docs/api/wallet/bonus-tiers) · Effect: **consequential**

```php
public function replace(
        int $bonusTier,
        int $minimumTopUpCents,
        \SellApp\Resource\SdkCreateWalletBonusTierRequestApplicationJsonBonusKind $bonusKind,
        ?int $fixedBonusCents,
        ?int $percentBasis,
        ?int $maximumBonusCents,
        int $priority,
        bool $isActive,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkReplaceWalletBonusTierResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| bonusTier | `int` | Yes |
| minimumTopUpCents | `int` | Yes |
| bonusKind | `\SellApp\Resource\SdkCreateWalletBonusTierRequestApplicationJsonBonusKind` | Yes |
| fixedBonusCents | `?int` | Yes |
| percentBasis | `?int` | Yes |
| maximumBonusCents | `?int` | Yes |
| priority | `int` | Yes |
| isActive | `bool` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkReplaceWalletBonusTierResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->walletBonusTiers()->replace(
    bonusTier: 1,
    minimumTopUpCents: 10000,
    bonusKind: 'fixed',
    fixedBonusCents: 500,
    percentBasis: null,
    maximumBonusCents: null,
    priority: 0,
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

Documented HTTP responses: 200, 201, 400, 401, 403, 404, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## update

Update a wallet bonus tier

[API reference](https://sell.app/docs/api/wallet/bonus-tiers) · Effect: **consequential**

```php
public function update(
        int $bonusTier,
        ?int $minimumTopUpCents = null,
        ?\SellApp\Resource\SdkCreateWalletBonusTierRequestApplicationJsonBonusKind $bonusKind = null,
        ?int $fixedBonusCents = null,
        ?int $percentBasis = null,
        ?int $maximumBonusCents = null,
        ?int $priority = null,
        ?bool $isActive = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkUpdateWalletBonusTierResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| bonusTier | `int` | Yes |
| minimumTopUpCents | `?int` | No |
| bonusKind | `?\SellApp\Resource\SdkCreateWalletBonusTierRequestApplicationJsonBonusKind` | No |
| fixedBonusCents | `?int` | No |
| percentBasis | `?int` | No |
| maximumBonusCents | `?int` | No |
| priority | `?int` | No |
| isActive | `?bool` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkUpdateWalletBonusTierResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->walletBonusTiers()->update(
    bonusTier: 1,
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

Documented HTTP responses: 200, 201, 400, 401, 403, 404, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## archive

Archive a wallet bonus tier

[API reference](https://sell.app/docs/api/wallet/bonus-tiers) · Effect: **consequential**

```php
public function archive(
        int $bonusTier,
        ?\SellApp\RequestOptions $options = null,
    ): void
```

| Argument | Native type | Required |
| --- | --- | --- |
| bonusTier | `int` | Yes |
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

$result = $client->walletBonusTiers()->archive(bonusTier: 1);
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

## restore

Restore a wallet bonus tier

[API reference](https://sell.app/docs/api/wallet/bonus-tiers) · Effect: **consequential**

```php
public function restore(
        int $bonusTier,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkRestoreWalletBonusTierResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| bonusTier | `int` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkRestoreWalletBonusTierResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->walletBonusTiers()->restore(bonusTier: 1);
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

