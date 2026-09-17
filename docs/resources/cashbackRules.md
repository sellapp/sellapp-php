# cashbackRules

[All resources](../methods.md)

## list

List cashback rules

[API reference](https://sell.app/docs/api/wallet/cashback-rules) · Effect: **read**

```php
public function list(
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkListCashbackRulesResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkListCashbackRulesResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->cashbackRules()->list();
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

Create a cashback rule

[API reference](https://sell.app/docs/api/wallet/cashback-rules) · Effect: **consequential**

```php
public function create(
        int $percentBasis,
        ?int $maximumCashbackCents,
        bool $isActive,
        array $productIds,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkCreateCashbackRuleResponseValue201ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| percentBasis | `int` | Yes |
| maximumCashbackCents | `?int` | Yes |
| isActive | `bool` | Yes |
| productIds | `array` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkCreateCashbackRuleResponseValue201ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->cashbackRules()->create(
    percentBasis: 500,
    maximumCashbackCents: 1000,
    isActive: false,
    productIds: [120],
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

Update a cashback rule

[API reference](https://sell.app/docs/api/wallet/cashback-rules) · Effect: **consequential**

```php
public function replace(
        int $cashbackRule,
        int $percentBasis,
        ?int $maximumCashbackCents,
        bool $isActive,
        array $productIds,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkReplaceCashbackRuleResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| cashbackRule | `int` | Yes |
| percentBasis | `int` | Yes |
| maximumCashbackCents | `?int` | Yes |
| isActive | `bool` | Yes |
| productIds | `array` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkReplaceCashbackRuleResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->cashbackRules()->replace(
    cashbackRule: 1,
    percentBasis: 500,
    maximumCashbackCents: 1000,
    isActive: false,
    productIds: [120],
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

Update a cashback rule

[API reference](https://sell.app/docs/api/wallet/cashback-rules) · Effect: **consequential**

```php
public function update(
        int $cashbackRule,
        ?int $percentBasis = null,
        ?int $maximumCashbackCents = null,
        ?bool $isActive = null,
        ?array $productIds = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkUpdateCashbackRuleResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| cashbackRule | `int` | Yes |
| percentBasis | `?int` | No |
| maximumCashbackCents | `?int` | No |
| isActive | `?bool` | No |
| productIds | `?array` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkUpdateCashbackRuleResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->cashbackRules()->update(
    cashbackRule: 1,
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

Documented HTTP responses: 200, 400, 401, 403, 404, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## archive

Archive a cashback rule

[API reference](https://sell.app/docs/api/wallet/cashback-rules) · Effect: **consequential**

```php
public function archive(
        int $cashbackRule,
        ?\SellApp\RequestOptions $options = null,
    ): void
```

| Argument | Native type | Required |
| --- | --- | --- |
| cashbackRule | `int` | Yes |
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

$result = $client->cashbackRules()->archive(cashbackRule: 1);
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

Restore a cashback rule

[API reference](https://sell.app/docs/api/wallet/cashback-rules) · Effect: **consequential**

```php
public function restore(
        int $cashbackRule,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkRestoreCashbackRuleResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| cashbackRule | `int` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkRestoreCashbackRuleResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->cashbackRules()->restore(cashbackRule: 1);
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

