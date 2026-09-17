# ticketsMessages

[All resources](../methods.md)

## list

List all ticket messages

[API reference](https://sell.app/docs/api/legacy-v1) · Effect: **read**

```php
public function list(
        int $ticket,
        ?int $limit = null,
        ?int $page = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\PaginatedResponse
```

| Argument | Native type | Required |
| --- | --- | --- |
| ticket | `int` | Yes |
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

$result = $client->ticketsMessages()->list(ticket: 1);
echo json_encode($result, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR), PHP_EOL;
```

### Authentication and errors

Supported credential alternatives (each object is one alternative):

```json
[
  {
    "bearerAuth": [],
    "storeAuth": []
  }
]
```

Documented HTTP responses: 200, 401, 403, 404, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## reply

Reply to ticket

[API reference](https://sell.app/docs/api/legacy-v1) · Effect: **consequential**

```php
public function reply(
        int $ticket,
        string $content,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkReplyToTicketResponseValue201ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| ticket | `int` | Yes |
| content | `string` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkReplyToTicketResponseValue201ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->ticketsMessages()->reply(
    ticket: 1,
    content: 'You can choose from the payment methods shown at checkout.',
);
echo json_encode($result, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR), PHP_EOL;
```

### Authentication and errors

Supported credential alternatives (each object is one alternative):

```json
[
  {
    "bearerAuth": [],
    "storeAuth": []
  }
]
```

Documented HTTP responses: 201, 401, 403, 404, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## get

Retrieve specific ticket message

[API reference](https://sell.app/docs/api/legacy-v1) · Effect: **read**

```php
public function get(
        int $ticket,
        int $message,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkGetTicketMessageResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| ticket | `int` | Yes |
| message | `int` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkGetTicketMessageResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->ticketsMessages()->get(
    ticket: 1,
    message: 2,
);
echo json_encode($result, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR), PHP_EOL;
```

### Authentication and errors

Supported credential alternatives (each object is one alternative):

```json
[
  {
    "bearerAuth": [],
    "storeAuth": []
  }
]
```

Documented HTTP responses: 200, 401, 403, 404, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## search

Search ticket messages

[API reference](https://sell.app/docs/api/legacy-v1) · Effect: **read**

```php
public function search(
        int $ticket,
        ?array $filters = null,
        ?array $sort = null,
        ?\SellApp\Resource\SearchTicketMessagesRequestApplicationJsonPropertySearch $search = null,
        ?array $includes = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\PaginatedResponse
```

| Argument | Native type | Required |
| --- | --- | --- |
| ticket | `int` | Yes |
| filters | `?array` | No |
| sort | `?array` | No |
| search | `?\SellApp\Resource\SearchTicketMessagesRequestApplicationJsonPropertySearch` | No |
| includes | `?array` | No |
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

$result = $client->ticketsMessages()->search(
    ticket: 1,
    filters: [['field' => 'id', 'operator' => '=', 'value' => 1]],
    sort: [['field' => 'created_at', 'direction' => 'desc']],
);
echo json_encode($result, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR), PHP_EOL;
```

### Authentication and errors

Supported credential alternatives (each object is one alternative):

```json
[
  {
    "bearerAuth": [],
    "storeAuth": []
  }
]
```

Documented HTTP responses: 200, 401, 403, 404, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## v2ListTicketMessages

List all ticket messages

[API reference](https://sell.app/docs/api/tickets/list-all-ticket-messages) · Effect: **read**

```php
public function v2ListTicketMessages(
        int $ticket,
        ?int $limit = null,
        ?int $page = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\PaginatedResponse
```

| Argument | Native type | Required |
| --- | --- | --- |
| ticket | `int` | Yes |
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

$result = $client->ticketsMessages()->v2ListTicketMessages(ticket: 1);
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

## v2ReplyToTicket

Reply to ticket

[API reference](https://sell.app/docs/api/tickets/reply-to-ticket) · Effect: **consequential**

```php
public function v2ReplyToTicket(
        int $ticket,
        string $content,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkV2ReplyToTicketResponseValue201ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| ticket | `int` | Yes |
| content | `string` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkV2ReplyToTicketResponseValue201ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->ticketsMessages()->v2ReplyToTicket(
    ticket: 1,
    content: 'You can choose from the payment methods shown at checkout.',
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

## v2SearchTicketMessages

Search ticket messages

[API reference](https://sell.app/docs/api/tickets/search-ticket-messages) · Effect: **read**

```php
public function v2SearchTicketMessages(
        int $ticket,
        ?array $filters = null,
        ?array $sort = null,
        ?\SellApp\Resource\V2SearchTicketMessagesRequestApplicationJsonPropertySearch $search = null,
        ?array $includes = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\PaginatedResponse
```

| Argument | Native type | Required |
| --- | --- | --- |
| ticket | `int` | Yes |
| filters | `?array` | No |
| sort | `?array` | No |
| search | `?\SellApp\Resource\V2SearchTicketMessagesRequestApplicationJsonPropertySearch` | No |
| includes | `?array` | No |
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

$result = $client->ticketsMessages()->v2SearchTicketMessages(
    ticket: 1,
    filters: [['field' => 'id', 'operator' => '=', 'value' => 1]],
    sort: [['field' => 'created_at', 'direction' => 'desc']],
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

## v2GetTicketMessage

Retrieve specific ticket message

[API reference](https://sell.app/docs/api/tickets/retrieve-specific-ticket-message) · Effect: **read**

```php
public function v2GetTicketMessage(
        int $ticket,
        int $message,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkV2GetTicketMessageResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| ticket | `int` | Yes |
| message | `int` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkV2GetTicketMessageResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->ticketsMessages()->v2GetTicketMessage(
    ticket: 1,
    message: 2,
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

