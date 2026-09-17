# webhookChannels

[All resources](../methods.md)

## list

List webhook channels

[API reference](https://sell.app/docs/api/webhook-channels/list-webhook-channels) · Effect: **read**

```php
public function list(
        ?int $page = null,
        ?int $limit = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\PaginatedResponse
```

| Argument | Native type | Required |
| --- | --- | --- |
| page | `?int` | No |
| limit | `?int` | No |
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

$result = $client->webhookChannels()->list();
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

Create a webhook channel

[API reference](https://sell.app/docs/api/webhook-channels/create-a-webhook-channel) · Effect: **consequential**

```php
public function create(
        string $url,
        array $allowedNotifications,
        ?string $name = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkCreateWebhookChannelResponseValue201ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| url | `string` | Yes |
| allowedNotifications | `array` | Yes |
| name | `?string` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkCreateWebhookChannelResponseValue201ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->webhookChannels()->create(
    name: 'Ship It webhook',
    url: 'https://example.com/webhooks/ship-it',
    allowedNotifications: ['order.created', 'order.paid'],
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

Search webhook channels

[API reference](https://sell.app/docs/api/webhook-channels/search-webhook-channels) · Effect: **read**

```php
public function search(
        ?\SellApp\Resource\SearchWebhookChannelsRequestApplicationJsonPropertySearch $search = null,
        ?\SellApp\Resource\Event $event = null,
        ?int $page = null,
        ?int $limit = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\PaginatedResponse
```

| Argument | Native type | Required |
| --- | --- | --- |
| search | `?\SellApp\Resource\SearchWebhookChannelsRequestApplicationJsonPropertySearch` | No |
| event | `?\SellApp\Resource\Event` | No |
| page | `?int` | No |
| limit | `?int` | No |
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

$result = $client->webhookChannels()->search(
    search: ['value' => 'orders'],
    event: 'order.paid',
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

## rotate

Rotate the webhook signing secret

[API reference](https://sell.app/docs/api/webhook-channels/rotate-the-signing-secret) · Effect: **consequential**

```php
public function rotate(
        string $signingSecret,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkRotateWebhookSigningSecretResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| signingSecret | `string` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkRotateWebhookSigningSecretResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->webhookChannels()->rotate(signingSecret: 'replace-with-a-random-secret-at-least-32-characters-long');
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

Retrieve a webhook channel

[API reference](https://sell.app/docs/api/webhook-channels/retrieve-a-webhook-channel) · Effect: **read**

```php
public function get(
        string $webhookChannel,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkGetWebhookChannelResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| webhookChannel | `string` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkGetWebhookChannelResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->webhookChannels()->get(webhookChannel: '0f33d01f-f9f8-45e8-80c8-7734d057196d');
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

## replace

Replace a webhook channel

[API reference](https://sell.app/docs/api/webhook-channels/replace-a-webhook-channel) · Effect: **consequential**

```php
public function replace(
        string $webhookChannel,
        ?string $name,
        string $url,
        array $allowedNotifications,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkReplaceWebhookChannelResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| webhookChannel | `string` | Yes |
| name | `?string` | Yes |
| url | `string` | Yes |
| allowedNotifications | `array` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkReplaceWebhookChannelResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->webhookChannels()->replace(
    webhookChannel: '0f33d01f-f9f8-45e8-80c8-7734d057196d',
    name: 'Primary Ship It webhook',
    url: 'https://example.com/webhooks/ship-it',
    allowedNotifications: ['order.paid'],
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

Update a webhook channel

[API reference](https://sell.app/docs/api/webhook-channels/update-a-webhook-channel) · Effect: **consequential**

```php
public function update(
        string $webhookChannel,
        ?string $name = null,
        ?string $url = null,
        ?array $allowedNotifications = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkUpdateWebhookChannelResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| webhookChannel | `string` | Yes |
| name | `?string` | No |
| url | `?string` | No |
| allowedNotifications | `?array` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkUpdateWebhookChannelResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->webhookChannels()->update(
    webhookChannel: '0f33d01f-f9f8-45e8-80c8-7734d057196d',
    name: 'Primary Ship It webhook',
    allowedNotifications: ['order.paid'],
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

## delete

Delete a webhook channel

[API reference](https://sell.app/docs/api/webhook-channels/delete-a-webhook-channel) · Effect: **consequential**

```php
public function delete(
        string $webhookChannel,
        ?\SellApp\RequestOptions $options = null,
    ): void
```

| Argument | Native type | Required |
| --- | --- | --- |
| webhookChannel | `string` | Yes |
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

$result = $client->webhookChannels()->delete(webhookChannel: '0f33d01f-f9f8-45e8-80c8-7734d057196d');
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

## send

Send a test webhook

[API reference](https://sell.app/docs/api/webhook-channels/send-a-test-webhook) · Effect: **consequential**

```php
public function send(
        string $webhookChannel,
        \SellApp\Resource\Event $event,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkSendTestWebhookResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| webhookChannel | `string` | Yes |
| event | `\SellApp\Resource\Event` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkSendTestWebhookResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->webhookChannels()->send(
    webhookChannel: '0f33d01f-f9f8-45e8-80c8-7734d057196d',
    event: 'order.created',
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

