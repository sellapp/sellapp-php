# blacklists

[All resources](../methods.md)

## list

List all blacklist rules

[API reference](https://sell.app/docs/api/legacy-v1) · Effect: **read**

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

$result = $client->blacklists()->list();
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

Documented HTTP responses: 200, 401, 403, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## create

Create a blacklist rule

[API reference](https://sell.app/docs/api/legacy-v1) · Effect: **consequential**

```php
public function create(
        \SellApp\Resource\BlacklistType $type,
        string $data,
        string $description,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\BlacklistResponse
```

| Argument | Native type | Required |
| --- | --- | --- |
| type | `\SellApp\Resource\BlacklistType` | Yes |
| data | `string` | Yes |
| description | `string` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\BlacklistResponse`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->blacklists()->create(
    type: 'ASN',
    data: '@blocked.example',
    description: 'Retired after the growth experiment ended.',
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

Documented HTTP responses: 201, 401, 403, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## get

Retrieve a blacklist rule

[API reference](https://sell.app/docs/api/legacy-v1) · Effect: **read**

```php
public function get(
        int $blacklist,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\BlacklistResponse
```

| Argument | Native type | Required |
| --- | --- | --- |
| blacklist | `int` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\BlacklistResponse`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->blacklists()->get(blacklist: 1);
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

## update

Update a blacklist rule

[API reference](https://sell.app/docs/api/legacy-v1) · Effect: **consequential**

```php
public function update(
        int $blacklist,
        ?\SellApp\Resource\BlacklistType $type = null,
        ?string $data = null,
        ?string $description = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\BlacklistResponse
```

| Argument | Native type | Required |
| --- | --- | --- |
| blacklist | `int` | Yes |
| type | `?\SellApp\Resource\BlacklistType` | No |
| data | `?string` | No |
| description | `?string` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\BlacklistResponse`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->blacklists()->update(blacklist: 1);
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

## delete

Delete a blacklist rule

[API reference](https://sell.app/docs/api/legacy-v1) · Effect: **consequential**

```php
public function delete(
        int $blacklist,
        ?\SellApp\RequestOptions $options = null,
    ): void
```

| Argument | Native type | Required |
| --- | --- | --- |
| blacklist | `int` | Yes |
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

$result = $client->blacklists()->delete(blacklist: 1);
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

## v2ListBlacklists

List blacklist rules

[API reference](https://sell.app/docs/api/blacklists/list-blacklists) · Effect: **read**

```php
public function v2ListBlacklists(
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
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->blacklists()->v2ListBlacklists();
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

## v2CreateBlacklist

Create a blacklist rule

[API reference](https://sell.app/docs/api/blacklists/create-blacklist) · Effect: **consequential**

```php
public function v2CreateBlacklist(
        \SellApp\Resource\BlacklistType $type,
        string $data,
        string $description,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\BlacklistResponse
```

| Argument | Native type | Required |
| --- | --- | --- |
| type | `\SellApp\Resource\BlacklistType` | Yes |
| data | `string` | Yes |
| description | `string` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\BlacklistResponse`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->blacklists()->v2CreateBlacklist(
    type: 'EMAIL',
    data: 'blocked@example.com',
    description: 'Blocked after a verified fraud report.',
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

## v2GetBlacklist

Retrieve a blacklist rule

[API reference](https://sell.app/docs/api/blacklists/retrieve-blacklist) · Effect: **read**

```php
public function v2GetBlacklist(
        int $blacklist,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\BlacklistResponse
```

| Argument | Native type | Required |
| --- | --- | --- |
| blacklist | `int` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\BlacklistResponse`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->blacklists()->v2GetBlacklist(blacklist: 42);
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

## v2ReplaceBlacklist

Replace a blacklist rule

[API reference](https://sell.app/docs/api/blacklists) · Effect: **consequential**

```php
public function v2ReplaceBlacklist(
        int $blacklist,
        ?\SellApp\Resource\BlacklistType $type = null,
        ?string $data = null,
        ?string $description = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\BlacklistResponse
```

| Argument | Native type | Required |
| --- | --- | --- |
| blacklist | `int` | Yes |
| type | `?\SellApp\Resource\BlacklistType` | No |
| data | `?string` | No |
| description | `?string` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\BlacklistResponse`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->blacklists()->v2ReplaceBlacklist(
    blacklist: 42,
    description: 'Blocked after a verified fraud report.',
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

## v2UpdateBlacklist

Update a blacklist rule

[API reference](https://sell.app/docs/api/blacklists/update-blacklist) · Effect: **consequential**

```php
public function v2UpdateBlacklist(
        int $blacklist,
        ?\SellApp\Resource\BlacklistType $type = null,
        ?string $data = null,
        ?string $description = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\BlacklistResponse
```

| Argument | Native type | Required |
| --- | --- | --- |
| blacklist | `int` | Yes |
| type | `?\SellApp\Resource\BlacklistType` | No |
| data | `?string` | No |
| description | `?string` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\BlacklistResponse`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->blacklists()->v2UpdateBlacklist(
    blacklist: 42,
    description: 'Blocked after a verified fraud report.',
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

## v2DeleteBlacklist

Delete a blacklist rule

[API reference](https://sell.app/docs/api/blacklists/delete-blacklist) · Effect: **consequential**

```php
public function v2DeleteBlacklist(
        int $blacklist,
        ?\SellApp\RequestOptions $options = null,
    ): void
```

| Argument | Native type | Required |
| --- | --- | --- |
| blacklist | `int` | Yes |
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

$result = $client->blacklists()->v2DeleteBlacklist(blacklist: 42);
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

