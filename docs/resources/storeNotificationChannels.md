# storeNotificationChannels

[All resources](../methods.md)

## list

List notification channels

[API reference](https://sell.app/docs/api/store-settings/list-notification-channels) · Effect: **read**

```php
public function list(
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkListNotificationChannelsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkListNotificationChannelsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->storeNotificationChannels()->list();
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

Create a notification channel

[API reference](https://sell.app/docs/api/store-settings/create-notification-channel) · Effect: **consequential**

```php
public function create(
        \SellApp\Resource\CreateNotificationChannelRequestApplicationJsonPropertyChannel $channel,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkCreateNotificationChannelResponseValue201ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| channel | `\SellApp\Resource\CreateNotificationChannelRequestApplicationJsonPropertyChannel` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkCreateNotificationChannelResponseValue201ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->storeNotificationChannels()->create(
    channel: [
        'type' => 'email',
        'email' => 'maya@example.com',
        'allowed_notifications' => [],
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

Documented HTTP responses: 201, 400, 401, 403, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## get

Retrieve a notification channel

[API reference](https://sell.app/docs/api/store-settings/manage-notification-channel) · Effect: **read**

```php
public function get(
        string $notificationChannel,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkGetNotificationChannelResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| notificationChannel | `string` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkGetNotificationChannelResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->storeNotificationChannels()->get(notificationChannel: 'string_example');
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

Update a notification channel

[API reference](https://sell.app/docs/api/store-settings/manage-notification-channel) · Effect: **consequential**

```php
public function replace(
        string $notificationChannel,
        \SellApp\Resource\ReplaceNotificationChannelRequestApplicationJsonPropertyChannel $channel,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkReplaceNotificationChannelResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| notificationChannel | `string` | Yes |
| channel | `\SellApp\Resource\ReplaceNotificationChannelRequestApplicationJsonPropertyChannel` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkReplaceNotificationChannelResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->storeNotificationChannels()->replace(
    notificationChannel: 'string_example',
    channel: [
        'type' => 'email',
        'email' => 'maya@example.com',
        'allowed_notifications' => [],
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

Documented HTTP responses: 200, 400, 401, 403, 404, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## update

Update a notification channel

[API reference](https://sell.app/docs/api/store-settings/manage-notification-channel) · Effect: **consequential**

```php
public function update(
        string $notificationChannel,
        \SellApp\Resource\UpdateNotificationChannelRequestApplicationJsonPropertyChannel $channel,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkUpdateNotificationChannelResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| notificationChannel | `string` | Yes |
| channel | `\SellApp\Resource\UpdateNotificationChannelRequestApplicationJsonPropertyChannel` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkUpdateNotificationChannelResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->storeNotificationChannels()->update(
    notificationChannel: 'string_example',
    channel: ['allowed_notifications' => []],
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

Delete a notification channel

[API reference](https://sell.app/docs/api/store-settings/manage-notification-channel) · Effect: **consequential**

```php
public function delete(
        string $notificationChannel,
        ?\SellApp\RequestOptions $options = null,
    ): void
```

| Argument | Native type | Required |
| --- | --- | --- |
| notificationChannel | `string` | Yes |
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

$result = $client->storeNotificationChannels()->delete(notificationChannel: 'string_example');
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

