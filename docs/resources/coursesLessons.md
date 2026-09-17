# coursesLessons

[All resources](../methods.md)

## create

Create a course lesson

[API reference](https://sell.app/docs/api/courses/manage-course-lessons) · Effect: **write**

```php
public function create(
        string $course,
        int $section,
        string $title,
        \SellApp\Resource\SdkCreateCourseLessonRequestApplicationJsonType $type,
        ?string $content = null,
        ?bool $isPreview = null,
        ?bool $isPublished = null,
        ?\SellApp\Resource\CreateCourseLessonRequestApplicationJsonPropertyAssignment $assignment = null,
        ?array $questions = null,
        ?\DateTimeImmutable $expectedUpdatedAt = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkCreateCourseLessonResponseValue201ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| course | `string` | Yes |
| section | `int` | Yes |
| title | `string` | Yes |
| type | `\SellApp\Resource\SdkCreateCourseLessonRequestApplicationJsonType` | Yes |
| content | `?string` | No |
| isPreview | `?bool` | No |
| isPublished | `?bool` | No |
| assignment | `?\SellApp\Resource\CreateCourseLessonRequestApplicationJsonPropertyAssignment` | No |
| questions | `?array` | No |
| expectedUpdatedAt | `?\DateTimeImmutable` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkCreateCourseLessonResponseValue201ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->coursesLessons()->create(
    course: 'string_example',
    section: 1,
    title: 'Welcome',
    type: 'text',
    content: 'Welcome to Launch Lab.',
    isPublished: false,
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

Update a course lesson

[API reference](https://sell.app/docs/api/courses/manage-course-lessons) · Effect: **write**

```php
public function replace(
        string $course,
        int $lesson,
        ?string $title = null,
        ?\SellApp\Resource\SdkCreateCourseLessonRequestApplicationJsonType $type = null,
        ?string $content = null,
        ?bool $isPreview = null,
        ?bool $isPublished = null,
        ?\SellApp\Resource\ReplaceCourseLessonRequestApplicationJsonPropertyAssignment $assignment = null,
        ?array $questions = null,
        ?\DateTimeImmutable $expectedUpdatedAt = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkReplaceCourseLessonResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| course | `string` | Yes |
| lesson | `int` | Yes |
| title | `?string` | No |
| type | `?\SellApp\Resource\SdkCreateCourseLessonRequestApplicationJsonType` | No |
| content | `?string` | No |
| isPreview | `?bool` | No |
| isPublished | `?bool` | No |
| assignment | `?\SellApp\Resource\ReplaceCourseLessonRequestApplicationJsonPropertyAssignment` | No |
| questions | `?array` | No |
| expectedUpdatedAt | `?\DateTimeImmutable` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkReplaceCourseLessonResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->coursesLessons()->replace(
    course: 'string_example',
    lesson: 1,
    title: 'Welcome',
    isPublished: false,
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

Update a course lesson

[API reference](https://sell.app/docs/api/courses/manage-course-lessons) · Effect: **write**

```php
public function update(
        string $course,
        int $lesson,
        ?string $title = null,
        ?\SellApp\Resource\SdkCreateCourseLessonRequestApplicationJsonType $type = null,
        ?string $content = null,
        ?bool $isPreview = null,
        ?bool $isPublished = null,
        ?\SellApp\Resource\UpdateCourseLessonRequestApplicationJsonPropertyAssignment $assignment = null,
        ?array $questions = null,
        ?\DateTimeImmutable $expectedUpdatedAt = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkUpdateCourseLessonResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| course | `string` | Yes |
| lesson | `int` | Yes |
| title | `?string` | No |
| type | `?\SellApp\Resource\SdkCreateCourseLessonRequestApplicationJsonType` | No |
| content | `?string` | No |
| isPreview | `?bool` | No |
| isPublished | `?bool` | No |
| assignment | `?\SellApp\Resource\UpdateCourseLessonRequestApplicationJsonPropertyAssignment` | No |
| questions | `?array` | No |
| expectedUpdatedAt | `?\DateTimeImmutable` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkUpdateCourseLessonResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->coursesLessons()->update(
    course: 'string_example',
    lesson: 1,
    title: 'Welcome',
    isPublished: false,
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

Delete a course lesson

[API reference](https://sell.app/docs/api/courses/manage-course-lessons) · Effect: **consequential**

```php
public function delete(
        string $course,
        int $lesson,
        ?\SellApp\RequestOptions $options = null,
    ): void
```

| Argument | Native type | Required |
| --- | --- | --- |
| course | `string` | Yes |
| lesson | `int` | Yes |
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

$result = $client->coursesLessons()->delete(
    course: 'string_example',
    lesson: 1,
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

Reorder course lessons

[API reference](https://sell.app/docs/api/courses/reorder-course-lessons) · Effect: **consequential**

```php
public function reorder(
        string $course,
        array $resources,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkReorderCourseLessonsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| course | `string` | Yes |
| resources | `array` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkReorderCourseLessonsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->coursesLessons()->reorder(
    course: 'string_example',
    resources: [['id' => 601, 'section_id' => 501], ['id' => 602, 'section_id' => 501]],
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

