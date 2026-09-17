# addOns

[All resources](../methods.md)

## list

List add-ons

[API reference](https://sell.app/docs/api/add-ons/list-add-ons) · Effect: **read**

```php
public function list(
        ?int $limit = null,
        ?int $page = null,
        ?bool $pagination = null,
        ?bool $withDrafts = null,
        ?bool $onlyDrafts = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\PaginatedResponse
```

| Argument | Native type | Required |
| --- | --- | --- |
| limit | `?int` | No |
| page | `?int` | No |
| pagination | `?bool` | No |
| withDrafts | `?bool` | No |
| onlyDrafts | `?bool` | No |
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

$result = $client->addOns()->list();
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

Create an add-on draft

[API reference](https://sell.app/docs/api/add-ons/create-an-add-on-draft) · Effect: **consequential**

```php
public function create(
        string $title,
        string $description,
        \SellApp\Resource\CatalogVisibility $visibility,
        ?string $slug = null,
        ?bool $isDraft = null,
        ?array $parentProductIds = null,
        ?\SellApp\Resource\CreateAddOnDraftRequestApplicationJsonPropertyVariant $variant = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkCreateAddOnDraftResponseValue201ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| title | `string` | Yes |
| description | `string` | Yes |
| visibility | `\SellApp\Resource\CatalogVisibility` | Yes |
| slug | `?string` | No |
| isDraft | `?bool` | No |
| parentProductIds | `?array` | No |
| variant | `?\SellApp\Resource\CreateAddOnDraftRequestApplicationJsonPropertyVariant` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkCreateAddOnDraftResponseValue201ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->addOns()->create(
    title: 'Customer support',
    description: 'Priority support for launches scheduled suspiciously close to Friday.',
    visibility: 'PUBLIC',
    parentProductIds: [120, 121],
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

Search add-ons

[API reference](https://sell.app/docs/api/add-ons/search-add-ons) · Effect: **read**

```php
public function search(
        ?array $filters = null,
        ?array $sort = null,
        ?\SellApp\Resource\SearchAddOnsRequestApplicationJsonPropertySearch $search = null,
        ?array $includes = null,
        ?int $limit = null,
        ?int $page = null,
        ?bool $pagination = null,
        ?bool $withDrafts = null,
        ?bool $onlyDrafts = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\PaginatedResponse
```

| Argument | Native type | Required |
| --- | --- | --- |
| filters | `?array` | No |
| sort | `?array` | No |
| search | `?\SellApp\Resource\SearchAddOnsRequestApplicationJsonPropertySearch` | No |
| includes | `?array` | No |
| limit | `?int` | No |
| page | `?int` | No |
| pagination | `?bool` | No |
| withDrafts | `?bool` | No |
| onlyDrafts | `?bool` | No |
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

$result = $client->addOns()->search(
    filters: [['field' => 'id', 'operator' => '=', 'value' => 410]],
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

Documented HTTP responses: 200, 400, 401, 403, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## get

Retrieve an add-on

[API reference](https://sell.app/docs/api/add-ons/retrieve-an-add-on) · Effect: **read**

```php
public function get(
        int $addon,
        ?bool $pagination = null,
        ?bool $withDrafts = null,
        ?bool $onlyDrafts = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkGetAddOnResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| addon | `int` | Yes |
| pagination | `?bool` | No |
| withDrafts | `?bool` | No |
| onlyDrafts | `?bool` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkGetAddOnResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->addOns()->get(addon: 410);
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

Update an add-on

[API reference](https://sell.app/docs/api/add-ons/replace-an-add-on) · Effect: **consequential**

```php
public function replace(
        int $addon,
        ?string $title = null,
        ?string $slug = null,
        ?string $description = null,
        ?\SellApp\Resource\CatalogVisibility $visibility = null,
        ?bool $isDraft = null,
        ?array $parentProductIds = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkReplaceAddOnResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| addon | `int` | Yes |
| title | `?string` | No |
| slug | `?string` | No |
| description | `?string` | No |
| visibility | `?\SellApp\Resource\CatalogVisibility` | No |
| isDraft | `?bool` | No |
| parentProductIds | `?array` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkReplaceAddOnResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->addOns()->replace(
    addon: 410,
    description: 'Priority email, chat, and launch-day reassurance.',
    isDraft: false,
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

Update an add-on

[API reference](https://sell.app/docs/api/add-ons/update-an-add-on) · Effect: **consequential**

```php
public function update(
        int $addon,
        ?string $title = null,
        ?string $slug = null,
        ?string $description = null,
        ?\SellApp\Resource\CatalogVisibility $visibility = null,
        ?bool $isDraft = null,
        ?array $parentProductIds = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkUpdateAddOnResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| addon | `int` | Yes |
| title | `?string` | No |
| slug | `?string` | No |
| description | `?string` | No |
| visibility | `?\SellApp\Resource\CatalogVisibility` | No |
| isDraft | `?bool` | No |
| parentProductIds | `?array` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkUpdateAddOnResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->addOns()->update(
    addon: 410,
    description: 'Priority email, chat, and launch-day reassurance.',
    isDraft: false,
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

Delete an add-on

[API reference](https://sell.app/docs/api/add-ons/delete-an-add-on) · Effect: **consequential**

```php
public function delete(
        int $addon,
        ?\SellApp\RequestOptions $options = null,
    ): void
```

| Argument | Native type | Required |
| --- | --- | --- |
| addon | `int` | Yes |
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

$result = $client->addOns()->delete(addon: 410);
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

