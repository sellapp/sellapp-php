# subscriptionsActions

[All resources](../methods.md)

## list

List subscription actions

[API reference](https://sell.app/docs/api/subscriptions/list-subscription-actions) · Effect: **read**

```php
public function list(
        int $productSubscription,
        ?int $limit = null,
        ?int $page = null,
        ?bool $pagination = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\PaginatedResponse
```

| Argument | Native type | Required |
| --- | --- | --- |
| productSubscription | `int` | Yes |
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

$result = $client->subscriptionsActions()->list(productSubscription: 124);
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

## get

Retrieve a subscription action

[API reference](https://sell.app/docs/api/subscriptions/retrieve-a-subscription-action) · Effect: **read**

```php
public function get(
        int $productSubscription,
        int $action,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkGetSubscriptionActionResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| productSubscription | `int` | Yes |
| action | `int` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkGetSubscriptionActionResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->subscriptionsActions()->get(
    productSubscription: 124,
    action: 4192,
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

## dismiss

Dismiss a subscription action

[API reference](https://sell.app/docs/api/subscriptions/dismiss-a-subscription-action) · Effect: **consequential**

```php
public function dismiss(
        int $productSubscription,
        int $action,
        string $note,
        ?string $idempotencyKey = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkDismissSubscriptionActionResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| productSubscription | `int` | Yes |
| action | `int` | Yes |
| note | `string` | Yes |
| idempotencyKey | `?string` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkDismissSubscriptionActionResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->subscriptionsActions()->dismiss(
    productSubscription: 124,
    action: 4207,
    note: 'Confirmed with the customer that they no longer want the upgrade.',
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

