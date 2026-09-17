# affiliateProgram

[All resources](../methods.md)

## get

Retrieve affiliate program configuration

[API reference](https://sell.app/docs/api/affiliate-program/retrieve-affiliate-program) · Effect: **read**

```php
public function get(
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkGetAffiliateProgramConfigurationResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkGetAffiliateProgramConfigurationResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->affiliateProgram()->get();
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

Replace affiliate program configuration

[API reference](https://sell.app/docs/api/affiliate-program/replace-affiliate-program) · Effect: **consequential**

```php
public function replace(
        bool $enabled,
        \SellApp\Resource\ReplaceAffiliateProgramConfigurationRequestApplicationJsonPropertySettings $settings,
        array $products,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkReplaceAffiliateProgramConfigurationResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| enabled | `bool` | Yes |
| settings | `\SellApp\Resource\ReplaceAffiliateProgramConfigurationRequestApplicationJsonPropertySettings` | Yes |
| products | `array` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkReplaceAffiliateProgramConfigurationResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->affiliateProgram()->replace(
    enabled: true,
    settings: [
        'auto_approve_affiliates' => false,
        'minimum_payout' => '25',
        'commission' => ['type' => 'percentage', 'amount' => '20'],
        'referrer_type' => 'first_referrer',
        'tracking_length' => 30,
        'subscription_commission' => true,
        'enabled_specific_products' => true,
        'payout_methods' => ['PAYPAL'],
        'enable_hub' => false,
    ],
    products: [
        [
            'id' => 42,
            'enabled' => true,
            'commission' => ['type' => 'percentage', 'percentage' => '25'],
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

Documented HTTP responses: 200, 400, 401, 403, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## list

List pending affiliate invitations

[API reference](https://sell.app/docs/api/affiliate-program/list-affiliate-invitations) · Effect: **read**

```php
public function list(
        ?int $limit = null,
        ?int $page = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\PaginatedResponse
```

| Argument | Native type | Required |
| --- | --- | --- |
| limit | `?int` | No |
| page | `?int` | No |
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

$result = $client->affiliateProgram()->list();
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

## invite

Invite an affiliate

[API reference](https://sell.app/docs/api/affiliate-program/invite-an-affiliate) · Effect: **consequential**

```php
public function invite(
        string $email,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkInviteAffiliateResponseValue201ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| email | `string` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkInviteAffiliateResponseValue201ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->affiliateProgram()->invite(email: 'alex.morgan@example.com');
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

