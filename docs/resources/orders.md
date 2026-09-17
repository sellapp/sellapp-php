# orders

[All resources](../methods.md)

## list

List orders

[API reference](https://sell.app/docs/api/orders/list-orders) · Effect: **read**

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

$result = $client->orders()->list();
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

Create an order

[API reference](https://sell.app/docs/api/orders/create-and-operate) · Effect: **consequential**

```php
public function create(
        string $customerEmail,
        \SellApp\Resource\PaymentMethod $paymentMethod,
        \SellApp\Resource\CreateOrderRequestApplicationJsonPropertyProductVariants $productVariants,
        ?string $customerIp = null,
        ?string $coupon = null,
        ?string $vatId = null,
        ?string $country = null,
        ?string $affiliate = null,
        ?\SellApp\Resource\CreateOrderRequestApplicationJsonPropertyExtra $extra = null,
        ?string $customPaymentMethodId = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkCreateOrderResponseValue201ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| customerEmail | `string` | Yes |
| paymentMethod | `\SellApp\Resource\PaymentMethod` | Yes |
| productVariants | `\SellApp\Resource\CreateOrderRequestApplicationJsonPropertyProductVariants` | Yes |
| customerIp | `?string` | No |
| coupon | `?string` | No |
| vatId | `?string` | No |
| country | `?string` | No |
| affiliate | `?string` | No |
| extra | `?\SellApp\Resource\CreateOrderRequestApplicationJsonPropertyExtra` | No |
| customPaymentMethodId | `?string` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkCreateOrderResponseValue201ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->orders()->create(
    customerEmail: 'maya@example.com',
    paymentMethod: 'STRIPE',
    productVariants: ['4321' => ['quantity' => 1]],
    options: new \SellApp\RequestOptions(idempotencyKey: "example-mutation-001"),
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

Documented HTTP responses: 201, 400, 401, 403, 404, 409, 410, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## search

Search orders

[API reference](https://sell.app/docs/api/orders/search-orders) · Effect: **read**

```php
public function search(
        ?array $filters = null,
        ?array $sort = null,
        ?\SellApp\Resource\SearchOrdersRequestApplicationJsonPropertyPagination $pagination = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\PaginatedResponse
```

| Argument | Native type | Required |
| --- | --- | --- |
| filters | `?array` | No |
| sort | `?array` | No |
| pagination | `?\SellApp\Resource\SearchOrdersRequestApplicationJsonPropertyPagination` | No |
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

$result = $client->orders()->search(
    filters: [
        [
            'field' => 'transaction_id',
            'operator' => 'contains',
            'value' => 'pi_3Example',
        ],
        ['field' => 'status', 'operator' => 'in', 'value' => ['COMPLETED']],
    ],
    sort: [['field' => 'created_at', 'direction' => 'desc']],
    pagination: ['page' => 1, 'limit' => 25],
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

Retrieve an order

[API reference](https://sell.app/docs/api/orders/retrieve-an-order) · Effect: **read**

```php
public function get(
        int $order,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkGetOrderResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| order | `int` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkGetOrderResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->orders()->get(order: 1042);
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

Update order status

[API reference](https://sell.app/docs/api/orders/create-and-operate) · Effect: **consequential**

```php
public function updateStatus(
        int $order,
        \SellApp\Resource\SdkUpdateOrderStatusRequestApplicationJsonStatus $status,
        ?\SellApp\Resource\ExpectedStatus $expectedStatus = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkUpdateOrderStatusResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| order | `int` | Yes |
| status | `\SellApp\Resource\SdkUpdateOrderStatusRequestApplicationJsonStatus` | Yes |
| expectedStatus | `?\SellApp\Resource\ExpectedStatus` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkUpdateOrderStatusResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->orders()->updateStatus(
    order: 9001,
    status: 'COMPLETED',
    expectedStatus: 'PAID',
    options: new \SellApp\RequestOptions(idempotencyKey: "example-mutation-001"),
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

Documented HTTP responses: 200, 400, 401, 403, 404, 409, 410, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## createCheckout

Create order checkout

[API reference](https://sell.app/docs/api/orders/create-and-operate) · Effect: **consequential**

```php
public function createCheckout(
        int $order,
        ?\SellApp\Resource\ExpectedStatus $expectedStatus = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkCreateOrderCheckoutResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| order | `int` | Yes |
| expectedStatus | `?\SellApp\Resource\ExpectedStatus` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkCreateOrderCheckoutResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->orders()->createCheckout(
    order: 9001,
    options: new \SellApp\RequestOptions(idempotencyKey: "example-mutation-001"),
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

Documented HTTP responses: 200, 201, 400, 401, 403, 404, 409, 410, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## createReplacement

Issue replacements

[API reference](https://sell.app/docs/api/orders/create-and-operate) · Effect: **consequential**

```php
public function createReplacement(
        int $order,
        \SellApp\Resource\CreateOrderReplacementRequestApplicationJsonPropertyProductVariants $productVariants,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkCreateOrderReplacementResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| order | `int` | Yes |
| productVariants | `\SellApp\Resource\CreateOrderReplacementRequestApplicationJsonPropertyProductVariants` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkCreateOrderReplacementResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->orders()->createReplacement(
    order: 9001,
    productVariants: [4321],
    options: new \SellApp\RequestOptions(idempotencyKey: "example-mutation-001"),
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

Documented HTTP responses: 200, 400, 401, 403, 404, 409, 410, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## createRefund

Refund an order

[API reference](https://sell.app/docs/api/orders/create-and-operate) · Effect: **consequential**

```php
public function createRefund(
        int $order,
        ?string $amount = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkCreateOrderRefundResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| order | `int` | Yes |
| amount | `?string` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkCreateOrderRefundResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->orders()->createRefund(
    order: 9001,
    amount: '5.00',
    options: new \SellApp\RequestOptions(idempotencyKey: "example-mutation-001"),
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

Documented HTTP responses: 200, 400, 401, 403, 404, 409, 410, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## retryFulfillment

Retry fulfillment

[API reference](https://sell.app/docs/api/orders/create-and-operate) · Effect: **consequential**

```php
public function retryFulfillment(
        int $order,
        ?string $email = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkRetryOrderFulfillmentResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| order | `int` | Yes |
| email | `?string` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkRetryOrderFulfillmentResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->orders()->retryFulfillment(
    order: 9001,
    email: 'maya@example.com',
    options: new \SellApp\RequestOptions(idempotencyKey: "example-mutation-001"),
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

Documented HTTP responses: 200, 400, 401, 403, 404, 409, 410, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## retryDynamicDelivery

Retry dynamic delivery

[API reference](https://sell.app/docs/api/orders/create-and-operate) · Effect: **consequential**

```php
public function retryDynamicDelivery(
        int $order,
        int $deliveredProductId,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkRetryOrderDynamicDeliveryResponseValue202ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| order | `int` | Yes |
| deliveredProductId | `int` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkRetryOrderDynamicDeliveryResponseValue202ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->orders()->retryDynamicDelivery(
    order: 9001,
    deliveredProductId: 81,
    options: new \SellApp\RequestOptions(idempotencyKey: "example-mutation-001"),
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

Documented HTTP responses: 202, 400, 401, 403, 404, 409, 410, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## sendFulfillmentNotifications

Send fulfillment notifications

[API reference](https://sell.app/docs/api/orders/create-and-operate) · Effect: **consequential**

```php
public function sendFulfillmentNotifications(
        int $order,
        ?string $email = null,
        ?array $productVariantIds = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkSendOrderFulfillmentNotificationsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| order | `int` | Yes |
| email | `?string` | No |
| productVariantIds | `?array` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkSendOrderFulfillmentNotificationsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->orders()->sendFulfillmentNotifications(
    order: 9001,
    email: 'maya@example.com',
    productVariantIds: [4321],
    options: new \SellApp\RequestOptions(idempotencyKey: "example-mutation-001"),
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

Documented HTTP responses: 200, 400, 401, 403, 404, 409, 410, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## listDeliverables

List order deliverables

[API reference](https://sell.app/docs/api/orders/create-and-operate) · Effect: **read**

```php
public function listDeliverables(
        int $order,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkListOrderDeliverablesResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| order | `int` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkListOrderDeliverablesResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->orders()->listDeliverables(order: 9001);
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

Documented HTTP responses: 200, 400, 401, 403, 404, 409, 410, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## createFromWallet

Create and pay an order from a wallet

[API reference](https://sell.app/docs/api/orders/create-and-operate) · Effect: **consequential**

```php
public function createFromWallet(
        string $customerEmail,
        \SellApp\Resource\CreateWalletOrderRequestApplicationJsonPropertyProductVariants $productVariants,
        ?string $customerIp = null,
        ?string $coupon = null,
        ?string $vatId = null,
        ?string $country = null,
        ?string $affiliate = null,
        ?\SellApp\Resource\CreateWalletOrderRequestApplicationJsonPropertyExtra $extra = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkCreateWalletOrderResponseValue201ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| customerEmail | `string` | Yes |
| productVariants | `\SellApp\Resource\CreateWalletOrderRequestApplicationJsonPropertyProductVariants` | Yes |
| customerIp | `?string` | No |
| coupon | `?string` | No |
| vatId | `?string` | No |
| country | `?string` | No |
| affiliate | `?string` | No |
| extra | `?\SellApp\Resource\CreateWalletOrderRequestApplicationJsonPropertyExtra` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkCreateWalletOrderResponseValue201ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->orders()->createFromWallet(
    customerEmail: 'maya.chen@example.com',
    country: 'US',
    productVariants: ['4321' => ['quantity' => 1]],
    options: new \SellApp\RequestOptions(idempotencyKey: "example-mutation-001"),
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

Documented HTTP responses: 201, 400, 401, 403, 404, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## payFromWallet

Pay an existing order from its customer wallet

[API reference](https://sell.app/docs/api/orders/create-and-operate) · Effect: **consequential**

```php
public function payFromWallet(
        int $order,
        ?\SellApp\Resource\ExpectedStatus $expectedStatus = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkPayOrderFromWalletResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| order | `int` | Yes |
| expectedStatus | `?\SellApp\Resource\ExpectedStatus` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkPayOrderFromWalletResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->orders()->payFromWallet(
    order: 42,
    expectedStatus: 'PENDING',
    options: new \SellApp\RequestOptions(idempotencyKey: "example-mutation-001"),
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

