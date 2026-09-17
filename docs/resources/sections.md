# sections

[All resources](../methods.md)

## list

List all sections

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

$result = $client->sections()->list();
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

Create a section

[API reference](https://sell.app/docs/api/legacy-v1) · Effect: **consequential**

```php
public function create(
        string $title,
        bool $hidden,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkCreateSectionResponseValue201ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| title | `string` | Yes |
| hidden | `bool` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkCreateSectionResponseValue201ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->sections()->create(
    title: 'Founder resources',
    hidden: false,
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

Retrieve a section

[API reference](https://sell.app/docs/api/legacy-v1) · Effect: **read**

```php
public function get(
        int $section,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkGetSectionResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| section | `int` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkGetSectionResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->sections()->get(section: 1);
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

## replace

Update a section

[API reference](https://sell.app/docs/api/legacy-v1) · Effect: **consequential**

```php
public function replace(
        int $section,
        ?string $title = null,
        ?bool $hidden = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkReplaceSectionResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| section | `int` | Yes |
| title | `?string` | No |
| hidden | `?bool` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkReplaceSectionResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->sections()->replace(
    section: 1,
    title: 'Founder resources',
    hidden: false,
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

## update

Update a section

[API reference](https://sell.app/docs/api/legacy-v1) · Effect: **consequential**

```php
public function update(
        int $section,
        ?string $title = null,
        ?bool $hidden = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkUpdateSectionResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| section | `int` | Yes |
| title | `?string` | No |
| hidden | `?bool` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkUpdateSectionResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->sections()->update(
    section: 1,
    title: 'Founder resources',
    hidden: false,
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

## delete

Delete a section

[API reference](https://sell.app/docs/api/legacy-v1) · Effect: **consequential**

```php
public function delete(
        int $section,
        ?\SellApp\RequestOptions $options = null,
    ): void
```

| Argument | Native type | Required |
| --- | --- | --- |
| section | `int` | Yes |
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

$result = $client->sections()->delete(section: 1);
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

## replaceOrder

Replace section order

[API reference](https://sell.app/docs/api/legacy-v1) · Effect: **consequential**

```php
public function replaceOrder(
        array $resources,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkReplaceSectionOrderResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| resources | `array` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkReplaceSectionOrderResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->sections()->replaceOrder(resources: [3, 1, 2]);
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

## replaceProducts

Replace section products

[API reference](https://sell.app/docs/api/legacy-v1) · Effect: **consequential**

```php
public function replaceProducts(
        int $section,
        array $resources,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkReplaceSectionProductsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| section | `int` | Yes |
| resources | `array` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkReplaceSectionProductsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->sections()->replaceProducts(
    section: 1,
    resources: [3, 1, 2],
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

## replaceGroups

Replace section groups

[API reference](https://sell.app/docs/api/legacy-v1) · Effect: **consequential**

```php
public function replaceGroups(
        int $section,
        array $resources,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkReplaceSectionGroupsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| section | `int` | Yes |
| resources | `array` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkReplaceSectionGroupsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->sections()->replaceGroups(
    section: 1,
    resources: [3, 1, 2],
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

Search sections

[API reference](https://sell.app/docs/api/legacy-v1) · Effect: **read**

```php
public function search(
        ?array $filters = null,
        ?array $sort = null,
        ?\SellApp\Resource\SearchSectionsRequestApplicationJsonPropertySearch $search = null,
        ?array $includes = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\PaginatedResponse
```

| Argument | Native type | Required |
| --- | --- | --- |
| filters | `?array` | No |
| sort | `?array` | No |
| search | `?\SellApp\Resource\SearchSectionsRequestApplicationJsonPropertySearch` | No |
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

$result = $client->sections()->search(
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

Documented HTTP responses: 200, 401, 403, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## batchCreate

Batch create sections

[API reference](https://sell.app/docs/api/legacy-v1) · Effect: **consequential**

```php
public function batchCreate(
        array $resources,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkBatchCreateSectionsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| resources | `array` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkBatchCreateSectionsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->sections()->batchCreate(resources: [['title' => 'Featured', 'hidden' => false]]);
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

Documented HTTP responses: 200, 201, 401, 403, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## batchUpdate

Batch update sections

[API reference](https://sell.app/docs/api/legacy-v1) · Effect: **consequential**

```php
public function batchUpdate(
        \SellApp\Resource\BatchUpdateSectionsRequestApplicationJsonPropertyResources $resources,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkBatchUpdateSectionsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| resources | `\SellApp\Resource\BatchUpdateSectionsRequestApplicationJsonPropertyResources` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkBatchUpdateSectionsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->sections()->batchUpdate(resources: ['1' => ['title' => 'Featured', 'hidden' => false]]);
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

## batchDelete

Batch delete sections

[API reference](https://sell.app/docs/api/legacy-v1) · Effect: **consequential**

```php
public function batchDelete(
        array $resources,
        ?\SellApp\RequestOptions $options = null,
    ): void
```

| Argument | Native type | Required |
| --- | --- | --- |
| resources | `array` | Yes |
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

$result = $client->sections()->batchDelete(resources: [1, 2]);
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

## v2ListSections

List all sections

[API reference](https://sell.app/docs/api/sections/list-all-sections) · Effect: **read**

```php
public function v2ListSections(
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

$result = $client->sections()->v2ListSections();
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

## v2CreateSection

Create a section

[API reference](https://sell.app/docs/api/sections/create-a-section) · Effect: **write**

```php
public function v2CreateSection(
        string $title,
        bool $hidden,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkV2CreateSectionResponseValue201ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| title | `string` | Yes |
| hidden | `bool` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkV2CreateSectionResponseValue201ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->sections()->v2CreateSection(
    title: 'Founder resources',
    hidden: false,
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

## v2SearchSections

Search sections

[API reference](https://sell.app/docs/api/sections/search-sections) · Effect: **read**

```php
public function v2SearchSections(
        ?array $filters = null,
        ?array $sort = null,
        ?\SellApp\Resource\V2SearchSectionsRequestApplicationJsonPropertySearch $search = null,
        ?array $includes = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\PaginatedResponse
```

| Argument | Native type | Required |
| --- | --- | --- |
| filters | `?array` | No |
| sort | `?array` | No |
| search | `?\SellApp\Resource\V2SearchSectionsRequestApplicationJsonPropertySearch` | No |
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

$result = $client->sections()->v2SearchSections(
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

Documented HTTP responses: 200, 400, 401, 403, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## v2GetSection

Retrieve a section

[API reference](https://sell.app/docs/api/sections/retrieve-a-section) · Effect: **read**

```php
public function v2GetSection(
        int $section,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkV2GetSectionResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| section | `int` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkV2GetSectionResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->sections()->v2GetSection(section: 1);
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

## v2ReplaceSection

Update a section

[API reference](https://sell.app/docs/api/sections/update-a-section) · Effect: **write**

```php
public function v2ReplaceSection(
        int $section,
        ?string $title = null,
        ?bool $hidden = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkV2ReplaceSectionResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| section | `int` | Yes |
| title | `?string` | No |
| hidden | `?bool` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkV2ReplaceSectionResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->sections()->v2ReplaceSection(
    section: 1,
    title: 'Founder resources',
    hidden: false,
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

## v2UpdateSection

Update a section

[API reference](https://sell.app/docs/api/sections/update-a-section) · Effect: **write**

```php
public function v2UpdateSection(
        int $section,
        ?string $title = null,
        ?bool $hidden = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkV2UpdateSectionResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| section | `int` | Yes |
| title | `?string` | No |
| hidden | `?bool` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkV2UpdateSectionResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->sections()->v2UpdateSection(
    section: 1,
    title: 'Founder resources',
    hidden: false,
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

## v2DeleteSection

Delete a section

[API reference](https://sell.app/docs/api/sections/delete-a-section) · Effect: **consequential**

```php
public function v2DeleteSection(
        int $section,
        ?\SellApp\RequestOptions $options = null,
    ): void
```

| Argument | Native type | Required |
| --- | --- | --- |
| section | `int` | Yes |
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

$result = $client->sections()->v2DeleteSection(section: 1);
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

## v2BatchCreateSections

Batch create sections

[API reference](https://sell.app/docs/api/sections/batch-create-sections) · Effect: **consequential**

```php
public function v2BatchCreateSections(
        array $resources,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkV2BatchCreateSectionsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| resources | `array` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkV2BatchCreateSectionsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->sections()->v2BatchCreateSections(resources: [['title' => 'Featured', 'hidden' => false]]);
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

Documented HTTP responses: 200, 201, 400, 401, 403, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## v2BatchUpdateSections

Batch update sections

[API reference](https://sell.app/docs/api/sections/batch-update-sections) · Effect: **consequential**

```php
public function v2BatchUpdateSections(
        \SellApp\Resource\V2BatchUpdateSectionsRequestApplicationJsonPropertyResources $resources,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkV2BatchUpdateSectionsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| resources | `\SellApp\Resource\V2BatchUpdateSectionsRequestApplicationJsonPropertyResources` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkV2BatchUpdateSectionsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->sections()->v2BatchUpdateSections(resources: ['1' => ['title' => 'Featured', 'hidden' => false]]);
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

## v2BatchDeleteSections

Batch delete sections

[API reference](https://sell.app/docs/api/sections/batch-delete-sections) · Effect: **consequential**

```php
public function v2BatchDeleteSections(
        array $resources,
        ?\SellApp\RequestOptions $options = null,
    ): void
```

| Argument | Native type | Required |
| --- | --- | --- |
| resources | `array` | Yes |
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

$result = $client->sections()->v2BatchDeleteSections(resources: [1, 2]);
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

## v2ReplaceSectionOrder

Replace section order

[API reference](https://sell.app/docs/api/sections/order-sections) · Effect: **consequential**

```php
public function v2ReplaceSectionOrder(
        array $resources,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkV2ReplaceSectionOrderResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| resources | `array` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkV2ReplaceSectionOrderResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->sections()->v2ReplaceSectionOrder(resources: [3, 1, 2]);
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

## v2ReplaceSectionProducts

Replace section products

[API reference](https://sell.app/docs/api/sections/replace-section-products) · Effect: **consequential**

```php
public function v2ReplaceSectionProducts(
        int $section,
        array $resources,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkV2ReplaceSectionProductsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| section | `int` | Yes |
| resources | `array` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkV2ReplaceSectionProductsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->sections()->v2ReplaceSectionProducts(
    section: 1,
    resources: [3, 1, 2],
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

## v2ReplaceSectionGroups

Replace section groups

[API reference](https://sell.app/docs/api/sections/replace-section-groups) · Effect: **consequential**

```php
public function v2ReplaceSectionGroups(
        int $section,
        array $resources,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkV2ReplaceSectionGroupsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| section | `int` | Yes |
| resources | `array` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkV2ReplaceSectionGroupsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->sections()->v2ReplaceSectionGroups(
    section: 1,
    resources: [3, 1, 2],
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

