# customerPortal

[All resources](../methods.md)

## getCustomerPortalProfile

Retrieve the signed-in customer

[API reference](https://sell.app/docs/api/customer-portal) · Effect: **read**

```php
public function getCustomerPortalProfile(
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkGetCustomerPortalProfileResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkGetCustomerPortalProfileResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    customerSession: getenv('SELLAPP_CUSTOMER_SESSION'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: "",
);

$result = $client->customerPortal()->getCustomerPortalProfile();
echo json_encode($result, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR), PHP_EOL;
```

### Authentication and errors

Supported credential alternatives (each object is one alternative):

```json
[
  {
    "customerSession": []
  }
]
```

Documented HTTP responses: 200, 400, 401, 403, 404, 409, 410, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## updateCustomerPortalProfile

Update the signed-in customer

[API reference](https://sell.app/docs/api/customer-portal) · Effect: **consequential**

```php
public function updateCustomerPortalProfile(
        ?string $email = null,
        ?string $name = null,
        ?string $locale = null,
        ?\SellApp\Resource\UpdateCustomerPortalProfileRequestApplicationJsonPropertyMetadata $metadata = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkUpdateCustomerPortalProfileResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| email | `?string` | No |
| name | `?string` | No |
| locale | `?string` | No |
| metadata | `?\SellApp\Resource\UpdateCustomerPortalProfileRequestApplicationJsonPropertyMetadata` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkUpdateCustomerPortalProfileResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    customerSession: getenv('SELLAPP_CUSTOMER_SESSION'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: "",
);

$result = $client->customerPortal()->updateCustomerPortalProfile(locale: 'en-US');
echo json_encode($result, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR), PHP_EOL;
```

### Authentication and errors

Supported credential alternatives (each object is one alternative):

```json
[
  {
    "customerSession": []
  }
]
```

Documented HTTP responses: 200, 400, 401, 403, 404, 409, 410, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## listCustomerPortalOrders

List customer orders

[API reference](https://sell.app/docs/api/customer-portal) · Effect: **read**

```php
public function listCustomerPortalOrders(
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\PaginatedResponse
```

| Argument | Native type | Required |
| --- | --- | --- |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\PaginatedResponse`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    customerSession: getenv('SELLAPP_CUSTOMER_SESSION'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: "",
);

$result = $client->customerPortal()->listCustomerPortalOrders();
echo json_encode($result, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR), PHP_EOL;
```

### Authentication and errors

Supported credential alternatives (each object is one alternative):

```json
[
  {
    "customerSession": []
  }
]
```

Documented HTTP responses: 200, 400, 401, 403, 404, 409, 410, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## getCustomerPortalOrder

Retrieve a customer order

[API reference](https://sell.app/docs/api/customer-portal) · Effect: **read**

```php
public function getCustomerPortalOrder(
        int $order,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkGetCustomerPortalOrderResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| order | `int` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkGetCustomerPortalOrderResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    customerSession: getenv('SELLAPP_CUSTOMER_SESSION'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: "",
);

$result = $client->customerPortal()->getCustomerPortalOrder(order: 9001);
echo json_encode($result, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR), PHP_EOL;
```

### Authentication and errors

Supported credential alternatives (each object is one alternative):

```json
[
  {
    "customerSession": []
  }
]
```

Documented HTTP responses: 200, 400, 401, 403, 404, 409, 410, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## listCustomerPortalSubscriptions

List customer subscriptions

[API reference](https://sell.app/docs/api/customer-portal) · Effect: **read**

```php
public function listCustomerPortalSubscriptions(
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\PaginatedResponse
```

| Argument | Native type | Required |
| --- | --- | --- |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\PaginatedResponse`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    customerSession: getenv('SELLAPP_CUSTOMER_SESSION'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: "",
);

$result = $client->customerPortal()->listCustomerPortalSubscriptions();
echo json_encode($result, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR), PHP_EOL;
```

### Authentication and errors

Supported credential alternatives (each object is one alternative):

```json
[
  {
    "customerSession": []
  }
]
```

Documented HTTP responses: 200, 400, 401, 403, 404, 409, 410, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## getCustomerPortalSubscription

Retrieve a customer subscription

[API reference](https://sell.app/docs/api/customer-portal) · Effect: **read**

```php
public function getCustomerPortalSubscription(
        int $subscription,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkGetCustomerPortalSubscriptionResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| subscription | `int` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkGetCustomerPortalSubscriptionResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    customerSession: getenv('SELLAPP_CUSTOMER_SESSION'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: "",
);

$result = $client->customerPortal()->getCustomerPortalSubscription(subscription: 991);
echo json_encode($result, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR), PHP_EOL;
```

### Authentication and errors

Supported credential alternatives (each object is one alternative):

```json
[
  {
    "customerSession": []
  }
]
```

Documented HTTP responses: 200, 400, 401, 403, 404, 409, 410, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## getCustomerPortalSubscriptionCapabilities

Retrieve subscription capabilities

[API reference](https://sell.app/docs/api/customer-portal) · Effect: **read**

```php
public function getCustomerPortalSubscriptionCapabilities(
        int $subscription,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkGetCustomerPortalSubscriptionCapabilitiesResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| subscription | `int` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkGetCustomerPortalSubscriptionCapabilitiesResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    customerSession: getenv('SELLAPP_CUSTOMER_SESSION'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: "",
);

$result = $client->customerPortal()->getCustomerPortalSubscriptionCapabilities(subscription: 42);
echo json_encode($result, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR), PHP_EOL;
```

### Authentication and errors

Supported credential alternatives (each object is one alternative):

```json
[
  {
    "customerSession": []
  }
]
```

Documented HTTP responses: 200, 400, 401, 403, 404, 409, 410, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## listCustomerPortalEntitlements

List customer entitlements

[API reference](https://sell.app/docs/api/customer-portal) · Effect: **read**

```php
public function listCustomerPortalEntitlements(
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkListCustomerPortalEntitlementsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkListCustomerPortalEntitlementsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    customerSession: getenv('SELLAPP_CUSTOMER_SESSION'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: "",
);

$result = $client->customerPortal()->listCustomerPortalEntitlements();
echo json_encode($result, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR), PHP_EOL;
```

### Authentication and errors

Supported credential alternatives (each object is one alternative):

```json
[
  {
    "customerSession": []
  }
]
```

Documented HTTP responses: 200, 400, 401, 403, 404, 409, 410, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## cancelCustomerSubscriptionAtPeriodEnd

Cancel at period end

[API reference](https://sell.app/docs/api/customer-portal) · Effect: **consequential**

```php
public function cancelCustomerSubscriptionAtPeriodEnd(
        int $productSubscription,
        ?string $reason = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkCancelCustomerSubscriptionAtPeriodEndResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| productSubscription | `int` | Yes |
| reason | `?string` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkCancelCustomerSubscriptionAtPeriodEndResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    customerSession: getenv('SELLAPP_CUSTOMER_SESSION'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: "",
);

$result = $client->customerPortal()->cancelCustomerSubscriptionAtPeriodEnd(
    productSubscription: 42,
    reason: 'Taking a break over the summer.',
);
echo json_encode($result, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR), PHP_EOL;
```

### Authentication and errors

Supported credential alternatives (each object is one alternative):

```json
[
  {
    "customerSession": []
  }
]
```

Documented HTTP responses: 200, 400, 401, 403, 404, 409, 410, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## cancelCustomerSubscriptionImmediately

Cancel immediately

[API reference](https://sell.app/docs/api/customer-portal) · Effect: **consequential**

```php
public function cancelCustomerSubscriptionImmediately(
        int $productSubscription,
        ?string $reason = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkCancelCustomerSubscriptionImmediatelyResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| productSubscription | `int` | Yes |
| reason | `?string` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkCancelCustomerSubscriptionImmediatelyResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    customerSession: getenv('SELLAPP_CUSTOMER_SESSION'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: "",
);

$result = $client->customerPortal()->cancelCustomerSubscriptionImmediately(
    productSubscription: 42,
    reason: 'No longer needed.',
);
echo json_encode($result, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR), PHP_EOL;
```

### Authentication and errors

Supported credential alternatives (each object is one alternative):

```json
[
  {
    "customerSession": []
  }
]
```

Documented HTTP responses: 200, 400, 401, 403, 404, 409, 410, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## pauseCustomerSubscription

Pause a subscription

[API reference](https://sell.app/docs/api/customer-portal) · Effect: **consequential**

```php
public function pauseCustomerSubscription(
        int $productSubscription,
        ?\DateTimeImmutable $resumeAt = null,
        ?string $reason = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkPauseCustomerSubscriptionResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| productSubscription | `int` | Yes |
| resumeAt | `?\DateTimeImmutable` | No |
| reason | `?string` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkPauseCustomerSubscriptionResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    customerSession: getenv('SELLAPP_CUSTOMER_SESSION'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: "",
);

$result = $client->customerPortal()->pauseCustomerSubscription(
    productSubscription: 42,
    resumeAt: '2026-11-01T00:00:00Z',
);
echo json_encode($result, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR), PHP_EOL;
```

### Authentication and errors

Supported credential alternatives (each object is one alternative):

```json
[
  {
    "customerSession": []
  }
]
```

Documented HTTP responses: 200, 400, 401, 403, 404, 409, 410, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## resumeCustomerSubscription

Resume a subscription

[API reference](https://sell.app/docs/api/customer-portal) · Effect: **consequential**

```php
public function resumeCustomerSubscription(
        int $productSubscription,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkResumeCustomerSubscriptionResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| productSubscription | `int` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkResumeCustomerSubscriptionResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    customerSession: getenv('SELLAPP_CUSTOMER_SESSION'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: "",
);

$result = $client->customerPortal()->resumeCustomerSubscription(productSubscription: 42);
echo json_encode($result, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR), PHP_EOL;
```

### Authentication and errors

Supported credential alternatives (each object is one alternative):

```json
[
  {
    "customerSession": []
  }
]
```

Documented HTTP responses: 200, 400, 401, 403, 404, 409, 410, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## updateCustomerSubscriptionPaymentMethod

Update payment method

[API reference](https://sell.app/docs/api/customer-portal) · Effect: **consequential**

```php
public function updateCustomerSubscriptionPaymentMethod(
        int $productSubscription,
        ?string $returnUrl = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkUpdateCustomerSubscriptionPaymentMethodResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| productSubscription | `int` | Yes |
| returnUrl | `?string` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkUpdateCustomerSubscriptionPaymentMethodResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    customerSession: getenv('SELLAPP_CUSTOMER_SESSION'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: "",
);

$result = $client->customerPortal()->updateCustomerSubscriptionPaymentMethod(
    productSubscription: 42,
    returnUrl: 'https://acme.sell.app/customer-portal/subscriptions/991',
);
echo json_encode($result, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR), PHP_EOL;
```

### Authentication and errors

Supported credential alternatives (each object is one alternative):

```json
[
  {
    "customerSession": []
  }
]
```

Documented HTTP responses: 200, 400, 401, 403, 404, 409, 410, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## previewCustomerSubscriptionPlanChange

Preview a plan change

[API reference](https://sell.app/docs/api/customer-portal) · Effect: **consequential**

```php
public function previewCustomerSubscriptionPlanChange(
        int $productSubscription,
        int $targetVariantId,
        ?\SellApp\Resource\SdkPreviewSubscriptionPlanChangeRequestApplicationJsonEffectiveTiming $effectiveTiming = null,
        ?\SellApp\Resource\SdkPreviewSubscriptionPlanChangeRequestApplicationJsonProrationBehavior $prorationBehavior = null,
        ?\SellApp\Resource\PreviewCustomerSubscriptionPlanChangeRequestApplicationJsonPropertyMetadata $metadata = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkPreviewCustomerSubscriptionPlanChangeResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| productSubscription | `int` | Yes |
| targetVariantId | `int` | Yes |
| effectiveTiming | `?\SellApp\Resource\SdkPreviewSubscriptionPlanChangeRequestApplicationJsonEffectiveTiming` | No |
| prorationBehavior | `?\SellApp\Resource\SdkPreviewSubscriptionPlanChangeRequestApplicationJsonProrationBehavior` | No |
| metadata | `?\SellApp\Resource\PreviewCustomerSubscriptionPlanChangeRequestApplicationJsonPropertyMetadata` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkPreviewCustomerSubscriptionPlanChangeResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    customerSession: getenv('SELLAPP_CUSTOMER_SESSION'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: "",
);

$result = $client->customerPortal()->previewCustomerSubscriptionPlanChange(
    productSubscription: 42,
    targetVariantId: 97,
);
echo json_encode($result, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR), PHP_EOL;
```

### Authentication and errors

Supported credential alternatives (each object is one alternative):

```json
[
  {
    "customerSession": []
  }
]
```

Documented HTTP responses: 200, 400, 401, 403, 404, 409, 410, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## confirmCustomerSubscriptionPlanChange

Confirm a plan change

[API reference](https://sell.app/docs/api/customer-portal) · Effect: **consequential**

```php
public function confirmCustomerSubscriptionPlanChange(
        int $productSubscription,
        int $targetVariantId,
        string $previewToken,
        ?\SellApp\Resource\SdkPreviewSubscriptionPlanChangeRequestApplicationJsonEffectiveTiming $effectiveTiming = null,
        ?\SellApp\Resource\SdkPreviewSubscriptionPlanChangeRequestApplicationJsonProrationBehavior $prorationBehavior = null,
        ?\SellApp\Resource\ConfirmCustomerSubscriptionPlanChangeRequestApplicationJsonPropertyMetadata $metadata = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkConfirmCustomerSubscriptionPlanChangeResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| productSubscription | `int` | Yes |
| targetVariantId | `int` | Yes |
| previewToken | `string` | Yes |
| effectiveTiming | `?\SellApp\Resource\SdkPreviewSubscriptionPlanChangeRequestApplicationJsonEffectiveTiming` | No |
| prorationBehavior | `?\SellApp\Resource\SdkPreviewSubscriptionPlanChangeRequestApplicationJsonProrationBehavior` | No |
| metadata | `?\SellApp\Resource\ConfirmCustomerSubscriptionPlanChangeRequestApplicationJsonPropertyMetadata` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkConfirmCustomerSubscriptionPlanChangeResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    customerSession: getenv('SELLAPP_CUSTOMER_SESSION'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: "",
);

$result = $client->customerPortal()->confirmCustomerSubscriptionPlanChange(
    productSubscription: 42,
    targetVariantId: 97,
    previewToken: 'subprev_portal_991',
);
echo json_encode($result, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR), PHP_EOL;
```

### Authentication and errors

Supported credential alternatives (each object is one alternative):

```json
[
  {
    "customerSession": []
  }
]
```

Documented HTTP responses: 200, 400, 401, 403, 404, 409, 410, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## previewCustomerSubscriptionRenewalDateChange

Preview a renewal-date change

[API reference](https://sell.app/docs/api/customer-portal) · Effect: **consequential**

```php
public function previewCustomerSubscriptionRenewalDateChange(
        int $productSubscription,
        \DateTimeImmutable $renewalDate,
        ?string $reason = null,
        ?\SellApp\Resource\PreviewCustomerSubscriptionRenewalDateChangeRequestApplicationJsonPropertyMetadata $metadata = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkPreviewCustomerSubscriptionRenewalDateChangeResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| productSubscription | `int` | Yes |
| renewalDate | `\DateTimeImmutable` | Yes |
| reason | `?string` | No |
| metadata | `?\SellApp\Resource\PreviewCustomerSubscriptionRenewalDateChangeRequestApplicationJsonPropertyMetadata` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkPreviewCustomerSubscriptionRenewalDateChangeResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    customerSession: getenv('SELLAPP_CUSTOMER_SESSION'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: "",
);

$result = $client->customerPortal()->previewCustomerSubscriptionRenewalDateChange(
    productSubscription: 42,
    renewalDate: '2026-10-15T00:00:00Z',
);
echo json_encode($result, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR), PHP_EOL;
```

### Authentication and errors

Supported credential alternatives (each object is one alternative):

```json
[
  {
    "customerSession": []
  }
]
```

Documented HTTP responses: 200, 400, 401, 403, 404, 409, 410, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## confirmCustomerSubscriptionRenewalDateChange

Confirm a renewal-date change

[API reference](https://sell.app/docs/api/customer-portal) · Effect: **consequential**

```php
public function confirmCustomerSubscriptionRenewalDateChange(
        int $productSubscription,
        \DateTimeImmutable $renewalDate,
        ?string $previewToken = null,
        ?string $reason = null,
        ?\SellApp\Resource\ConfirmCustomerSubscriptionRenewalDateChangeRequestApplicationJsonPropertyMetadata $metadata = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkConfirmCustomerSubscriptionRenewalDateChangeResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| productSubscription | `int` | Yes |
| renewalDate | `\DateTimeImmutable` | Yes |
| previewToken | `?string` | No |
| reason | `?string` | No |
| metadata | `?\SellApp\Resource\ConfirmCustomerSubscriptionRenewalDateChangeRequestApplicationJsonPropertyMetadata` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkConfirmCustomerSubscriptionRenewalDateChangeResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    customerSession: getenv('SELLAPP_CUSTOMER_SESSION'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: "",
);

$result = $client->customerPortal()->confirmCustomerSubscriptionRenewalDateChange(
    productSubscription: 42,
    renewalDate: '2026-10-15T00:00:00Z',
    previewToken: 'subprev_portal_renewal_991',
);
echo json_encode($result, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR), PHP_EOL;
```

### Authentication and errors

Supported credential alternatives (each object is one alternative):

```json
[
  {
    "customerSession": []
  }
]
```

Documented HTTP responses: 200, 400, 401, 403, 404, 409, 410, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

