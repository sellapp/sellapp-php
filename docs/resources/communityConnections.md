# communityConnections

[All resources](../methods.md)

## list

List community connections

[API reference](https://sell.app/docs/api/community-connections) · Effect: **read**

```php
public function list(
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkListCommunityConnectionsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkListCommunityConnectionsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->communityConnections()->list();
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

## start

Start a community connection

[API reference](https://sell.app/docs/api/community-connections) · Effect: **consequential**

```php
public function start(
        \SellApp\Resource\CommunityConnectionsPlatform $platform,
        ?\SellApp\Resource\SdkStartCommunityConnectionRequestApplicationJsonMode $mode = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkStartCommunityConnectionResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| platform | `\SellApp\Resource\CommunityConnectionsPlatform` | Yes |
| mode | `?\SellApp\Resource\SdkStartCommunityConnectionRequestApplicationJsonMode` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkStartCommunityConnectionResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->communityConnections()->start(
    platform: 'discord',
    mode: 'official_bot',
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

## poll

Poll a community connection

[API reference](https://sell.app/docs/api/community-connections) · Effect: **read**

```php
public function poll(
        \SellApp\Resource\CommunityConnectionsPlatform $platform,
        string $statusToken,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkPollCommunityConnectionResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| platform | `\SellApp\Resource\CommunityConnectionsPlatform` | Yes |
| statusToken | `string` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkPollCommunityConnectionResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->communityConnections()->poll(
    platform: 'discord',
    statusToken: 'string_example',
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

## complete

Complete a community connection

[API reference](https://sell.app/docs/api/community-connections) · Effect: **consequential**

```php
public function complete(
        \SellApp\Resource\CommunityConnectionsPlatform $platform,
        string $statusToken,
        string $serverId,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkCompleteCommunityConnectionResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| platform | `\SellApp\Resource\CommunityConnectionsPlatform` | Yes |
| statusToken | `string` | Yes |
| serverId | `string` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkCompleteCommunityConnectionResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->communityConnections()->complete(
    platform: 'whatsapp',
    statusToken: 'replace-with-token-from-connection-start',
    serverId: 'replace-with-returned-server-id',
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

## verify

Verify a community connection

[API reference](https://sell.app/docs/api/community-connections) · Effect: **consequential**

```php
public function verify(
        \SellApp\Resource\CommunityConnectionsPlatform $platform,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkVerifyCommunityConnectionResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| platform | `\SellApp\Resource\CommunityConnectionsPlatform` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkVerifyCommunityConnectionResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->communityConnections()->verify(platform: 'discord');
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

## disconnect

Disconnect a community platform

[API reference](https://sell.app/docs/api/community-connections) · Effect: **consequential**

```php
public function disconnect(
        \SellApp\Resource\CommunityConnectionsPlatform $platform,
        ?\SellApp\RequestOptions $options = null,
    ): void
```

| Argument | Native type | Required |
| --- | --- | --- |
| platform | `\SellApp\Resource\CommunityConnectionsPlatform` | Yes |
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

$result = $client->communityConnections()->disconnect(platform: 'discord');
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

