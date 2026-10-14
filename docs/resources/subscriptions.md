# subscriptions

[All resources](../methods.md)

## cancel

Cancel a subscription

[API reference](https://sell.app/docs/api/subscriptions/cancel-a-subscription-immediately-with-a-refund) · Effect: **consequential**

```php
public function cancel(
        int $subscription,
        bool $cancelAtPeriodEnd,
        ?bool $refundLastPayment = null,
        ?bool $proRatedRefund = null,
        ?string $idempotencyKey = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkCancelSubscriptionResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| subscription | `int` | Yes |
| cancelAtPeriodEnd | `bool` | Yes |
| refundLastPayment | `?bool` | No |
| proRatedRefund | `?bool` | No |
| idempotencyKey | `?string` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkCancelSubscriptionResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->subscriptions()->cancel(
    subscription: 55,
    cancelAtPeriodEnd: true,
    idempotencyKey: 'design-kit-subscription-55-cancel-v1',
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

## listSubscriptions

List subscriptions

[API reference](https://sell.app/docs/api/subscriptions/read-subscriptions) · Effect: **read**

```php
public function listSubscriptions(
        ?int $limit = null,
        ?int $page = null,
        ?bool $pagination = null,
        ?array $status = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\PaginatedResponse
```

| Argument | Native type | Required |
| --- | --- | --- |
| limit | `?int` | No |
| page | `?int` | No |
| pagination | `?bool` | No |
| status | `?array` | No |
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

$result = $client->subscriptions()->listSubscriptions();
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

## searchSubscriptions

Search subscriptions

[API reference](https://sell.app/docs/api/subscriptions/read-subscriptions) · Effect: **read**

```php
public function searchSubscriptions(
        ?array $filters = null,
        ?array $sort = null,
        ?\SellApp\Resource\SearchSubscriptionsRequestApplicationJsonPropertySearch $search = null,
        ?array $includes = null,
        ?int $limit = null,
        ?int $page = null,
        ?bool $pagination = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\PaginatedResponse
```

| Argument | Native type | Required |
| --- | --- | --- |
| filters | `?array` | No |
| sort | `?array` | No |
| search | `?\SellApp\Resource\SearchSubscriptionsRequestApplicationJsonPropertySearch` | No |
| includes | `?array` | No |
| limit | `?int` | No |
| page | `?int` | No |
| pagination | `?bool` | No |
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

$result = $client->subscriptions()->searchSubscriptions(
    filters: [['field' => 'status', 'operator' => '=', 'value' => 'ACTIVE']],
    search: ['value' => 'maya.chen@example.com'],
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

## getSubscription

Retrieve a subscription

[API reference](https://sell.app/docs/api/subscriptions/read-subscriptions) · Effect: **read**

```php
public function getSubscription(
        int $productSubscription,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkGetSubscriptionResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| productSubscription | `int` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkGetSubscriptionResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->subscriptions()->getSubscription(productSubscription: 123);
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

## getCapabilities

View subscription capabilities

[API reference](https://sell.app/docs/api/subscriptions/view-subscription-capabilities) · Effect: **read**

```php
public function getCapabilities(
        int $productSubscription,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkGetSubscriptionCapabilitiesResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| productSubscription | `int` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkGetSubscriptionCapabilitiesResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->subscriptions()->getCapabilities(productSubscription: 1);
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

## cancelAtPeriodEnd

Cancel a subscription at period end

[API reference](https://sell.app/docs/api/subscriptions/cancel-at-period-end) · Effect: **consequential**

```php
public function cancelAtPeriodEnd(
        int $productSubscription,
        ?string $idempotencyKey = null,
        ?string $reason = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkCancelSubscriptionAtPeriodEndResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| productSubscription | `int` | Yes |
| idempotencyKey | `?string` | No |
| reason | `?string` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkCancelSubscriptionAtPeriodEndResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->subscriptions()->cancelAtPeriodEnd(
    productSubscription: 55,
    reason: 'Customer request',
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

## cancelImmediately

Cancel a subscription immediately

[API reference](https://sell.app/docs/api/subscriptions/cancel-immediately) · Effect: **consequential**

```php
public function cancelImmediately(
        int $productSubscription,
        ?string $idempotencyKey = null,
        ?string $reason = null,
        ?bool $refundLastPayment = null,
        ?bool $proRatedRefund = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkCancelSubscriptionImmediatelyResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| productSubscription | `int` | Yes |
| idempotencyKey | `?string` | No |
| reason | `?string` | No |
| refundLastPayment | `?bool` | No |
| proRatedRefund | `?bool` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkCancelSubscriptionImmediatelyResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->subscriptions()->cancelImmediately(
    productSubscription: 55,
    reason: 'Customer request',
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

## keep

Keep a subscription

[API reference](https://sell.app/docs/api/subscriptions/keep-a-subscription) · Effect: **consequential**

```php
public function keep(
        int $productSubscription,
        ?string $idempotencyKey = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkKeepSubscriptionResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| productSubscription | `int` | Yes |
| idempotencyKey | `?string` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkKeepSubscriptionResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->subscriptions()->keep(productSubscription: 55);
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

## pause

Pause a subscription

[API reference](https://sell.app/docs/api/subscriptions/pause-a-subscription) · Effect: **consequential**

```php
public function pause(
        int $productSubscription,
        ?string $idempotencyKey = null,
        ?\DateTimeImmutable $resumeAt = null,
        ?string $reason = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkPauseSubscriptionResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| productSubscription | `int` | Yes |
| idempotencyKey | `?string` | No |
| resumeAt | `?\DateTimeImmutable` | No |
| reason | `?string` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkPauseSubscriptionResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->subscriptions()->pause(
    productSubscription: 55,
    resumeAt: '2026-10-10T12:00:00Z',
    reason: 'Customer request',
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

## resume

Resume a subscription

[API reference](https://sell.app/docs/api/subscriptions/resume-a-subscription) · Effect: **consequential**

```php
public function resume(
        int $productSubscription,
        ?string $idempotencyKey = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkResumeSubscriptionResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| productSubscription | `int` | Yes |
| idempotencyKey | `?string` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkResumeSubscriptionResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->subscriptions()->resume(productSubscription: 55);
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

## updatePaymentMethod

Update a subscription payment method

[API reference](https://sell.app/docs/api/subscriptions/update-payment-method) · Effect: **consequential**

```php
public function updatePaymentMethod(
        int $productSubscription,
        ?string $idempotencyKey = null,
        ?string $returnUrl = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkUpdateSubscriptionPaymentMethodResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| productSubscription | `int` | Yes |
| idempotencyKey | `?string` | No |
| returnUrl | `?string` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkUpdateSubscriptionPaymentMethodResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->subscriptions()->updatePaymentMethod(
    productSubscription: 55,
    returnUrl: 'https://store.example.com/billing/updated',
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

## previewPlanChange

Preview a subscription plan change

[API reference](https://sell.app/docs/api/subscriptions/preview-plan-change) · Effect: **consequential**

```php
public function previewPlanChange(
        int $productSubscription,
        int $targetVariantId,
        ?string $idempotencyKey = null,
        ?\SellApp\Resource\SdkPreviewSubscriptionPlanChangeRequestApplicationJsonEffectiveTiming $effectiveTiming = null,
        ?\SellApp\Resource\SdkPreviewSubscriptionPlanChangeRequestApplicationJsonProrationBehavior $prorationBehavior = null,
        ?\SellApp\Resource\PreviewSubscriptionPlanChangeRequestApplicationJsonPropertyMetadata $metadata = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkPreviewSubscriptionPlanChangeResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| productSubscription | `int` | Yes |
| targetVariantId | `int` | Yes |
| idempotencyKey | `?string` | No |
| effectiveTiming | `?\SellApp\Resource\SdkPreviewSubscriptionPlanChangeRequestApplicationJsonEffectiveTiming` | No |
| prorationBehavior | `?\SellApp\Resource\SdkPreviewSubscriptionPlanChangeRequestApplicationJsonProrationBehavior` | No |
| metadata | `?\SellApp\Resource\PreviewSubscriptionPlanChangeRequestApplicationJsonPropertyMetadata` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkPreviewSubscriptionPlanChangeResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->subscriptions()->previewPlanChange(
    productSubscription: 1,
    targetVariantId: 4321,
    effectiveTiming: 'immediate',
    prorationBehavior: 'provider_default',
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

## confirmPlanChange

Confirm a subscription plan change

[API reference](https://sell.app/docs/api/subscriptions/confirm-plan-change) · Effect: **consequential**

```php
public function confirmPlanChange(
        int $productSubscription,
        int $targetVariantId,
        string $previewToken,
        ?string $idempotencyKey = null,
        ?\SellApp\Resource\SdkPreviewSubscriptionPlanChangeRequestApplicationJsonEffectiveTiming $effectiveTiming = null,
        ?\SellApp\Resource\SdkPreviewSubscriptionPlanChangeRequestApplicationJsonProrationBehavior $prorationBehavior = null,
        ?\SellApp\Resource\ConfirmSubscriptionPlanChangeRequestApplicationJsonPropertyMetadata $metadata = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkConfirmSubscriptionPlanChangeResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| productSubscription | `int` | Yes |
| targetVariantId | `int` | Yes |
| previewToken | `string` | Yes |
| idempotencyKey | `?string` | No |
| effectiveTiming | `?\SellApp\Resource\SdkPreviewSubscriptionPlanChangeRequestApplicationJsonEffectiveTiming` | No |
| prorationBehavior | `?\SellApp\Resource\SdkPreviewSubscriptionPlanChangeRequestApplicationJsonProrationBehavior` | No |
| metadata | `?\SellApp\Resource\ConfirmSubscriptionPlanChangeRequestApplicationJsonPropertyMetadata` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkConfirmSubscriptionPlanChangeResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->subscriptions()->confirmPlanChange(
    productSubscription: 55,
    targetVariantId: 4321,
    previewToken: 'subprev_9c4b2f',
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

## previewRenewalDate

Preview a subscription renewal date change

[API reference](https://sell.app/docs/api/subscriptions/preview-renewal-date-change) · Effect: **consequential**

```php
public function previewRenewalDate(
        int $productSubscription,
        \DateTimeImmutable $renewalDate,
        ?string $idempotencyKey = null,
        ?string $reason = null,
        ?\SellApp\Resource\PreviewSubscriptionRenewalDateChangeRequestApplicationJsonPropertyMetadata $metadata = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkPreviewSubscriptionRenewalDateChangeResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| productSubscription | `int` | Yes |
| renewalDate | `\DateTimeImmutable` | Yes |
| idempotencyKey | `?string` | No |
| reason | `?string` | No |
| metadata | `?\SellApp\Resource\PreviewSubscriptionRenewalDateChangeRequestApplicationJsonPropertyMetadata` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkPreviewSubscriptionRenewalDateChangeResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->subscriptions()->previewRenewalDate(
    productSubscription: 1,
    renewalDate: '2026-10-01T12:00:00Z',
    reason: 'Align Maya\'s membership with the monthly reading circle.',
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

## confirmRenewalDate

Confirm a subscription renewal date change

[API reference](https://sell.app/docs/api/subscriptions/confirm-renewal-date-change) · Effect: **consequential**

```php
public function confirmRenewalDate(
        int $productSubscription,
        \DateTimeImmutable $renewalDate,
        ?string $idempotencyKey = null,
        ?string $previewToken = null,
        ?string $reason = null,
        ?\SellApp\Resource\ConfirmSubscriptionRenewalDateChangeRequestApplicationJsonPropertyMetadata $metadata = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkConfirmSubscriptionRenewalDateChangeResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| productSubscription | `int` | Yes |
| renewalDate | `\DateTimeImmutable` | Yes |
| idempotencyKey | `?string` | No |
| previewToken | `?string` | No |
| reason | `?string` | No |
| metadata | `?\SellApp\Resource\ConfirmSubscriptionRenewalDateChangeRequestApplicationJsonPropertyMetadata` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkConfirmSubscriptionRenewalDateChangeResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->subscriptions()->confirmRenewalDate(
    productSubscription: 1,
    renewalDate: '2026-10-01T12:00:00Z',
    previewToken: 'subprev_project_library_55',
    reason: 'Align Maya\'s membership with the monthly reading circle.',
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

