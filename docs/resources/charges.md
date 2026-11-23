# charges

[All resources](../methods.md)

## list

List all charges

[API reference](https://sell.app/docs/api/charges/list-all-charges) · Effect: **read**

```php
public function list(
        ?int $limit = null,
        ?int $page = null,
        ?\SellApp\Resource\ChargesStatus $status = null,
        ?string $customerEmail = null,
        ?string $createdAfter = null,
        ?string $createdBefore = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\PaginatedResponse
```

| Argument | Native type | Required |
| --- | --- | --- |
| limit | `?int` | No |
| page | `?int` | No |
| status | `?\SellApp\Resource\ChargesStatus` | No |
| customerEmail | `?string` | No |
| createdAfter | `?string` | No |
| createdBefore | `?string` | No |
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

$result = $client->charges()->list();
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

Create a charge

[API reference](https://sell.app/docs/api/charges/create-a-charge) · Effect: **consequential**

```php
public function create(
        string $email,
        string $returnUrl,
        ?string $cancelUrl = null,
        ?string $webhook = null,
        ?string $reference = null,
        ?string $description = null,
        ?string $currency = null,
        ?int $total = null,
        ?\SellApp\Resource\PaymentMethod $paymentMethod = null,
        ?array $paymentMethods = null,
        ?string $customPaymentMethodId = null,
        ?array $customPaymentMethodIds = null,
        ?bool $useAllPaymentMethods = null,
        ?\SellApp\Resource\CreateChargeRequestApplicationJsonPropertyDeliverable $deliverable = null,
        ?\SellApp\Resource\CreateChargeRequestApplicationJsonPropertyMetadata $metadata = null,
        ?string $couponCode = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkCreateChargeResponseValue201ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| email | `string` | Yes |
| returnUrl | `string` | Yes |
| cancelUrl | `?string` | No |
| webhook | `?string` | No |
| reference | `?string` | No |
| description | `?string` | No |
| currency | `?string` | No |
| total | `?int` | No |
| paymentMethod | `?\SellApp\Resource\PaymentMethod` | No |
| paymentMethods | `?array` | No |
| customPaymentMethodId | `?string` | No |
| customPaymentMethodIds | `?array` | No |
| useAllPaymentMethods | `?bool` | No |
| deliverable | `?\SellApp\Resource\CreateChargeRequestApplicationJsonPropertyDeliverable` | No |
| metadata | `?\SellApp\Resource\CreateChargeRequestApplicationJsonPropertyMetadata` | No |
| couponCode | `?string` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkCreateChargeResponseValue201ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->charges()->create(
    email: 'sofia.rivera@example.com',
    returnUrl: 'https://example.com/launch-complete',
    reference: 'One more thing launch',
    currency: 'USD',
    total: 10000,
    paymentMethod: 'PAYPAL',
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

## get

Retrieve a charge

[API reference](https://sell.app/docs/api/charges/retrieve-a-charge) · Effect: **read**

```php
public function get(
        int $charge,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkGetChargeResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| charge | `int` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkGetChargeResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->charges()->get(charge: 1);
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

## markCompleted

Mark pending charge completed

[API reference](https://sell.app/docs/api/charges/mark-pending-charge-completed) · Effect: **consequential**

```php
public function markCompleted(
        int $chargeId,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkMarkPendingChargeCompletedResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| chargeId | `int` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkMarkPendingChargeCompletedResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->charges()->markCompleted(chargeId: 1);
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

## markVoided

Mark pending charge voided

[API reference](https://sell.app/docs/api/charges/mark-pending-charge-voided) · Effect: **consequential**

```php
public function markVoided(
        int $chargeId,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkMarkPendingChargeVoidedResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| chargeId | `int` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkMarkPendingChargeVoidedResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->charges()->markVoided(chargeId: 1);
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

## getSummary

Retrieve the charge summary

[API reference](https://sell.app/docs/api/charges/retrieve-the-charge-summary) · Effect: **read**

```php
public function getSummary(
        \SellApp\Resource\ChargesPreset $preset = \SellApp\Resource\ChargesPreset::Last30Days,
        ?string $startDate = null,
        ?string $endDate = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkGetChargeSummaryResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| preset | `\SellApp\Resource\ChargesPreset` | No |
| startDate | `?string` | No |
| endDate | `?string` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkGetChargeSummaryResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->charges()->getSummary();
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

