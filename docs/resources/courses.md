# courses

[All resources](../methods.md)

## list

List courses

[API reference](https://sell.app/docs/api/courses/list-courses) · Effect: **read**

```php
public function list(
        ?int $limit = null,
        ?int $page = null,
        ?bool $pagination = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\PaginatedResponse
```

| Argument | Native type | Required |
| --- | --- | --- |
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

$result = $client->courses()->list();
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

## search

Search courses

[API reference](https://sell.app/docs/api/courses/search-courses) · Effect: **read**

```php
public function search(
        ?array $filters = null,
        ?array $sort = null,
        ?\SellApp\Resource\SearchRewardRulesRequestApplicationJsonPropertySearch $search = null,
        ?array $includes = null,
        ?int $limit = null,
        ?int $page = null,
        ?bool $pagination = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\PaginatedResponse
```

| Argument | Native type | Required |
| --- | --- | --- |
| filters | `?array` | No |
| sort | `?array` | No |
| search | `?\SellApp\Resource\SearchRewardRulesRequestApplicationJsonPropertySearch` | No |
| includes | `?array` | No |
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

$result = $client->courses()->search(
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

## get

Retrieve a course

[API reference](https://sell.app/docs/api/courses/retrieve-course) · Effect: **read**

```php
public function get(
        string $course,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkGetCourseResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| course | `string` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkGetCourseResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->courses()->get(course: 'string_example');
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

Update a course

[API reference](https://sell.app/docs/api/courses/update-course) · Effect: **write**

```php
public function replace(
        string $course,
        ?\SellApp\Resource\Category $category = null,
        ?\SellApp\Resource\SdkUpdateCourseRequestApplicationJsonLevel $level = null,
        ?string $language = null,
        ?string $subtitle = null,
        ?string $author = null,
        ?string $subcategory = null,
        ?array $whatYouLearn = null,
        ?array $requirements = null,
        ?bool $certificateEnabled = null,
        ?\SellApp\Resource\SdkUpdateCourseRequestApplicationJsonAccessType $accessType = null,
        ?int $accessDurationDays = null,
        ?int $enrollmentLimit = null,
        ?string $deliveryText = null,
        ?\SellApp\Resource\CatalogVisibility $visibility = null,
        ?\DateTimeImmutable $expectedUpdatedAt = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkReplaceCourseResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| course | `string` | Yes |
| category | `?\SellApp\Resource\Category` | No |
| level | `?\SellApp\Resource\SdkUpdateCourseRequestApplicationJsonLevel` | No |
| language | `?string` | No |
| subtitle | `?string` | No |
| author | `?string` | No |
| subcategory | `?string` | No |
| whatYouLearn | `?array` | No |
| requirements | `?array` | No |
| certificateEnabled | `?bool` | No |
| accessType | `?\SellApp\Resource\SdkUpdateCourseRequestApplicationJsonAccessType` | No |
| accessDurationDays | `?int` | No |
| enrollmentLimit | `?int` | No |
| deliveryText | `?string` | No |
| visibility | `?\SellApp\Resource\CatalogVisibility` | No |
| expectedUpdatedAt | `?\DateTimeImmutable` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkReplaceCourseResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->courses()->replace(
    course: 'string_example',
    level: 'beginner',
    visibility: 'HIDDEN',
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

Update a course

[API reference](https://sell.app/docs/api/courses/update-course) · Effect: **write**

```php
public function update(
        string $course,
        ?\SellApp\Resource\Category $category = null,
        ?\SellApp\Resource\SdkUpdateCourseRequestApplicationJsonLevel $level = null,
        ?string $language = null,
        ?string $subtitle = null,
        ?string $author = null,
        ?string $subcategory = null,
        ?array $whatYouLearn = null,
        ?array $requirements = null,
        ?bool $certificateEnabled = null,
        ?\SellApp\Resource\SdkUpdateCourseRequestApplicationJsonAccessType $accessType = null,
        ?int $accessDurationDays = null,
        ?int $enrollmentLimit = null,
        ?string $deliveryText = null,
        ?\SellApp\Resource\CatalogVisibility $visibility = null,
        ?\DateTimeImmutable $expectedUpdatedAt = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkUpdateCourseResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| course | `string` | Yes |
| category | `?\SellApp\Resource\Category` | No |
| level | `?\SellApp\Resource\SdkUpdateCourseRequestApplicationJsonLevel` | No |
| language | `?string` | No |
| subtitle | `?string` | No |
| author | `?string` | No |
| subcategory | `?string` | No |
| whatYouLearn | `?array` | No |
| requirements | `?array` | No |
| certificateEnabled | `?bool` | No |
| accessType | `?\SellApp\Resource\SdkUpdateCourseRequestApplicationJsonAccessType` | No |
| accessDurationDays | `?int` | No |
| enrollmentLimit | `?int` | No |
| deliveryText | `?string` | No |
| visibility | `?\SellApp\Resource\CatalogVisibility` | No |
| expectedUpdatedAt | `?\DateTimeImmutable` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkUpdateCourseResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->courses()->update(
    course: 'string_example',
    level: 'beginner',
    visibility: 'HIDDEN',
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

