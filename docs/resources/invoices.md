# invoices

[All resources](../methods.md)

## list

List all invoices

[API reference](https://sell.app/docs/api/invoices/list-all-invoices) · Effect: **read**

```php
public function list(
        ?int $limit = null,
        ?int $page = null,
        ?string $search = null,
        ?\SellApp\Resource\InvoicesSearchBy $searchBy = null,
        ?string $id = null,
        ?string $email = null,
        ?string $transactionId = null,
        ?string $serialCode = null,
        ?string $additionalInfo = null,
        ?string $productName = null,
        ?string $discordData = null,
        ?string $cryptoTxid = null,
        ?string $cryptoAddress = null,
        ?string $couponCode = null,
        ?array $status = null,
        ?array $paymentMethods = null,
        ?\SellApp\Resource\InvoicesSort $sort = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\PaginatedResponse
```

| Argument | Native type | Required |
| --- | --- | --- |
| limit | `?int` | No |
| page | `?int` | No |
| search | `?string` | No |
| searchBy | `?\SellApp\Resource\InvoicesSearchBy` | No |
| id | `?string` | No |
| email | `?string` | No |
| transactionId | `?string` | No |
| serialCode | `?string` | No |
| additionalInfo | `?string` | No |
| productName | `?string` | No |
| discordData | `?string` | No |
| cryptoTxid | `?string` | No |
| cryptoAddress | `?string` | No |
| couponCode | `?string` | No |
| status | `?array` | No |
| paymentMethods | `?array` | No |
| sort | `?\SellApp\Resource\InvoicesSort` | No |
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

$result = $client->invoices()->list();
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

Create an invoice

[API reference](https://sell.app/docs/api/invoices/create-an-invoice) · Effect: **consequential**

```php
public function create(
        string $customerEmail,
        \SellApp\Resource\PaymentMethod $paymentMethod,
        \SellApp\Resource\CreateInvoiceRequestApplicationJsonPropertyProductVariants $productVariants,
        ?string $customerIp = null,
        ?string $coupon = null,
        ?string $vatId = null,
        ?string $country = null,
        ?string $affiliate = null,
        ?\SellApp\Resource\CreateInvoiceRequestApplicationJsonPropertyExtra $extra = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkCreateInvoiceResponseValue201ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| customerEmail | `string` | Yes |
| paymentMethod | `\SellApp\Resource\PaymentMethod` | Yes |
| productVariants | `\SellApp\Resource\CreateInvoiceRequestApplicationJsonPropertyProductVariants` | Yes |
| customerIp | `?string` | No |
| coupon | `?string` | No |
| vatId | `?string` | No |
| country | `?string` | No |
| affiliate | `?string` | No |
| extra | `?\SellApp\Resource\CreateInvoiceRequestApplicationJsonPropertyExtra` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkCreateInvoiceResponseValue201ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->invoices()->create(
    customerEmail: 'maya.chen@example.com',
    paymentMethod: 'STRIPE',
    productVariants: ['4321' => ['quantity' => 1]],
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

## search

Search invoices

[API reference](https://sell.app/docs/api/invoices/search-invoices) · Effect: **read**

```php
public function search(
        ?string $search = null,
        ?\SellApp\Resource\InvoicesSearchBy $searchBy = null,
        ?string $id = null,
        ?string $email = null,
        ?string $transactionId = null,
        ?string $serialCode = null,
        ?string $additionalInfo = null,
        ?string $productName = null,
        ?string $discordData = null,
        ?string $cryptoTxid = null,
        ?string $cryptoAddress = null,
        ?string $couponCode = null,
        ?array $status = null,
        ?array $paymentMethods = null,
        ?\SellApp\Resource\InvoicesSort $sort = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\PaginatedResponse
```

| Argument | Native type | Required |
| --- | --- | --- |
| search | `?string` | No |
| searchBy | `?\SellApp\Resource\InvoicesSearchBy` | No |
| id | `?string` | No |
| email | `?string` | No |
| transactionId | `?string` | No |
| serialCode | `?string` | No |
| additionalInfo | `?string` | No |
| productName | `?string` | No |
| discordData | `?string` | No |
| cryptoTxid | `?string` | No |
| cryptoAddress | `?string` | No |
| couponCode | `?string` | No |
| status | `?array` | No |
| paymentMethods | `?array` | No |
| sort | `?\SellApp\Resource\InvoicesSort` | No |
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

$result = $client->invoices()->search(
    id: '1',
    sort: '-created_at',
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

## get

Retrieve an invoice

[API reference](https://sell.app/docs/api/invoices/retrieve-an-invoice) · Effect: **read**

```php
public function get(
        int $invoice,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkGetInvoiceResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| invoice | `int` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkGetInvoiceResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->invoices()->get(invoice: 1);
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

## goToCheckout

Create a checkout session

[API reference](https://sell.app/docs/api/invoices/create-a-checkout-session) · Effect: **consequential**

```php
public function goToCheckout(
        int $invoice,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkCreateCheckoutSessionResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| invoice | `int` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkCreateCheckoutSessionResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->invoices()->goToCheckout(invoice: 9001);
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

## getDeliverables

View invoice deliverables

[API reference](https://sell.app/docs/api/invoices/view-invoice-deliverables) · Effect: **read**

```php
public function getDeliverables(
        int $invoice,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkGetInvoiceDeliverablesResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| invoice | `int` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkGetInvoiceDeliverablesResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->invoices()->getDeliverables(invoice: 1234);
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

Mark pending invoice completed

[API reference](https://sell.app/docs/api/invoices/mark-pending-invoice-completed) · Effect: **consequential**

```php
public function markCompleted(
        int $invoice,
        ?\SellApp\Resource\ExpectedStatus $expectedStatus = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkMarkPendingInvoiceCompletedResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| invoice | `int` | Yes |
| expectedStatus | `?\SellApp\Resource\ExpectedStatus` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkMarkPendingInvoiceCompletedResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->invoices()->markCompleted(
    invoice: 1,
    expectedStatus: 'PENDING',
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

## markVoided

Mark pending invoice voided

[API reference](https://sell.app/docs/api/invoices/mark-pending-invoice-voided) · Effect: **consequential**

```php
public function markVoided(
        int $invoice,
        ?\SellApp\Resource\ExpectedStatus $expectedStatus = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkMarkPendingInvoiceVoidedResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| invoice | `int` | Yes |
| expectedStatus | `?\SellApp\Resource\ExpectedStatus` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkMarkPendingInvoiceVoidedResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->invoices()->markVoided(
    invoice: 1,
    expectedStatus: 'PENDING',
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

## issueReplacement

Issue replacement for completed invoice

[API reference](https://sell.app/docs/api/invoices/issue-replacement-for-completed-invoice) · Effect: **consequential**

```php
public function issueReplacement(
        int $invoice,
        \SellApp\Resource\IssueReplacementForCompletedInvoiceRequestApplicationJsonPropertyProductVariants $productVariants,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkIssueReplacementForCompletedInvoiceResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| invoice | `int` | Yes |
| productVariants | `\SellApp\Resource\IssueReplacementForCompletedInvoiceRequestApplicationJsonPropertyProductVariants` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkIssueReplacementForCompletedInvoiceResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->invoices()->issueReplacement(
    invoice: 1,
    productVariants: [117214],
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

## updateStatus

Update invoice status

[API reference](https://sell.app/docs/api/invoices/update-invoice-status) · Effect: **consequential**

```php
public function updateStatus(
        int $invoice,
        \SellApp\Resource\SdkUpdateOrderStatusRequestApplicationJsonStatus $status,
        ?\SellApp\Resource\ExpectedStatus $expectedStatus = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkUpdateInvoiceStatusResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| invoice | `int` | Yes |
| status | `\SellApp\Resource\SdkUpdateOrderStatusRequestApplicationJsonStatus` | Yes |
| expectedStatus | `?\SellApp\Resource\ExpectedStatus` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkUpdateInvoiceStatusResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->invoices()->updateStatus(
    invoice: 1,
    status: 'REVIEW',
    expectedStatus: 'PENDING',
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

## createRefund

Create invoice refund

[API reference](https://sell.app/docs/api/invoices/refund-an-invoice) · Effect: **consequential**

```php
public function createRefund(
        int $invoice,
        ?string $amount = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkCreateInvoiceRefundResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| invoice | `int` | Yes |
| amount | `?string` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkCreateInvoiceRefundResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->invoices()->createRefund(
    invoice: 1,
    amount: '12.50',
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

## retryFulfillment

Create fulfillment retry

[API reference](https://sell.app/docs/api/invoices/retry-invoice-fulfillment) · Effect: **consequential**

```php
public function retryFulfillment(
        int $invoice,
        ?string $email = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkCreateFulfillmentRetryResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| invoice | `int` | Yes |
| email | `?string` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkCreateFulfillmentRetryResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->invoices()->retryFulfillment(invoice: 1);
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

## retryDynamicDelivery

Create dynamic delivery retry

[API reference](https://sell.app/docs/api/invoices/retry-dynamic-delivery) · Effect: **consequential**

```php
public function retryDynamicDelivery(
        int $invoice,
        int $deliveredProductId,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkCreateDynamicDeliveryRetryResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| invoice | `int` | Yes |
| deliveredProductId | `int` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkCreateDynamicDeliveryRetryResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->invoices()->retryDynamicDelivery(
    invoice: 1,
    deliveredProductId: 42,
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

## notifyFulfillment

Create fulfillment notifications

[API reference](https://sell.app/docs/api/invoices/resend-invoice-deliverables) · Effect: **consequential**

```php
public function notifyFulfillment(
        int $invoice,
        ?string $email = null,
        ?array $productVariantIds = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkCreateFulfillmentNotificationsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| invoice | `int` | Yes |
| email | `?string` | No |
| productVariantIds | `?array` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkCreateFulfillmentNotificationsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->invoices()->notifyFulfillment(invoice: 1);
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

