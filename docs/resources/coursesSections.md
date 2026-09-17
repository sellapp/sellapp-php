# coursesSections

[All resources](../methods.md)

## create

Create a course section

[API reference](https://sell.app/docs/api/courses/manage-course-sections) · Effect: **write**

```php
public function create(
        string $course,
        string $title,
        ?string $description = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkCreateCourseSectionResponseValue201ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| course | `string` | Yes |
| title | `string` | Yes |
| description | `?string` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkCreateCourseSectionResponseValue201ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->coursesSections()->create(
    course: 'string_example',
    title: 'Getting started',
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

## replace

Update a course section

[API reference](https://sell.app/docs/api/courses/manage-course-sections) · Effect: **write**

```php
public function replace(
        string $course,
        int $section,
        ?string $title = null,
        ?string $description = null,
        ?\DateTimeImmutable $expectedUpdatedAt = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkReplaceCourseSectionResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| course | `string` | Yes |
| section | `int` | Yes |
| title | `?string` | No |
| description | `?string` | No |
| expectedUpdatedAt | `?\DateTimeImmutable` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkReplaceCourseSectionResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->coursesSections()->replace(
    course: 'string_example',
    section: 1,
    title: 'Getting started',
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

Update a course section

[API reference](https://sell.app/docs/api/courses/manage-course-sections) · Effect: **write**

```php
public function update(
        string $course,
        int $section,
        ?string $title = null,
        ?string $description = null,
        ?\DateTimeImmutable $expectedUpdatedAt = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkUpdateCourseSectionResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| course | `string` | Yes |
| section | `int` | Yes |
| title | `?string` | No |
| description | `?string` | No |
| expectedUpdatedAt | `?\DateTimeImmutable` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkUpdateCourseSectionResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->coursesSections()->update(
    course: 'string_example',
    section: 1,
    title: 'Getting started',
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

Delete a course section

[API reference](https://sell.app/docs/api/courses/manage-course-sections) · Effect: **consequential**

```php
public function delete(
        string $course,
        int $section,
        ?\SellApp\RequestOptions $options = null,
    ): void
```

| Argument | Native type | Required |
| --- | --- | --- |
| course | `string` | Yes |
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

$result = $client->coursesSections()->delete(
    course: 'string_example',
    section: 1,
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

## reorder

Reorder course sections

[API reference](https://sell.app/docs/api/courses/reorder-course-sections) · Effect: **consequential**

```php
public function reorder(
        string $course,
        array $resources,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkReorderCourseSectionsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| course | `string` | Yes |
| resources | `array` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkReorderCourseSectionsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->coursesSections()->reorder(
    course: 'string_example',
    resources: [501, 502],
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

