# highlightsMedia

[All resources](../methods.md)

## list

List highlight media

[API reference](https://sell.app/docs/api/highlights/manage-highlight-media) · Effect: **read**

```php
public function list(
        int $highlight,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkListHighlightMediaResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| highlight | `int` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkListHighlightMediaResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->highlightsMedia()->list(highlight: 1);
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

## add

Add highlight media

[API reference](https://sell.app/docs/api/highlights/manage-highlight-media) · Effect: **write**

```php
public function add(
        int $highlight,
        string $file,
        ?string $ctaTitle = null,
        ?int $productId = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkAddHighlightMediaResponseValue201ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| highlight | `int` | Yes |
| file | `string` | Yes |
| ctaTitle | `?string` | No |
| productId | `?int` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkAddHighlightMediaResponseValue201ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->highlightsMedia()->add(
    highlight: 1,
    file: '/path/to/example.png',
    ctaTitle: 'View product',
    productId: 123,
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

## reorder

Reorder highlight media

[API reference](https://sell.app/docs/api/highlights/manage-highlight-media) · Effect: **consequential**

```php
public function reorder(
        int $highlight,
        array $resources,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkReorderHighlightMediaResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| highlight | `int` | Yes |
| resources | `array` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkReorderHighlightMediaResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->highlightsMedia()->reorder(
    highlight: 1,
    resources: [42, 41],
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

## replace

Replace highlight media

[API reference](https://sell.app/docs/api/highlights/manage-highlight-media) · Effect: **write**

```php
public function replace(
        int $highlight,
        int $media,
        string $file,
        ?string $ctaTitle = null,
        ?int $productId = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkReplaceHighlightMediaResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| highlight | `int` | Yes |
| media | `int` | Yes |
| file | `string` | Yes |
| ctaTitle | `?string` | No |
| productId | `?int` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkReplaceHighlightMediaResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->highlightsMedia()->replace(
    highlight: 1,
    media: 84,
    file: '/path/to/example.png',
    ctaTitle: 'View product',
    productId: 123,
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

## replaceMetadata

Update highlight media

[API reference](https://sell.app/docs/api/highlights/manage-highlight-media) · Effect: **write**

```php
public function replaceMetadata(
        int $highlight,
        int $media,
        ?string $ctaTitle = null,
        ?int $productId = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkReplaceHighlightMediaMetadataResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| highlight | `int` | Yes |
| media | `int` | Yes |
| ctaTitle | `?string` | No |
| productId | `?int` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkReplaceHighlightMediaMetadataResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->highlightsMedia()->replaceMetadata(
    highlight: 1,
    media: 84,
    ctaTitle: 'View product',
    productId: 123,
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

Update highlight media

[API reference](https://sell.app/docs/api/highlights/manage-highlight-media) · Effect: **write**

```php
public function update(
        int $highlight,
        int $media,
        ?string $ctaTitle = null,
        ?int $productId = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkUpdateHighlightMediaResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| highlight | `int` | Yes |
| media | `int` | Yes |
| ctaTitle | `?string` | No |
| productId | `?int` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkUpdateHighlightMediaResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->highlightsMedia()->update(
    highlight: 1,
    media: 84,
    ctaTitle: 'View product',
    productId: 123,
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

Delete highlight media

[API reference](https://sell.app/docs/api/highlights/manage-highlight-media) · Effect: **consequential**

```php
public function delete(
        int $highlight,
        int $media,
        ?\SellApp\RequestOptions $options = null,
    ): void
```

| Argument | Native type | Required |
| --- | --- | --- |
| highlight | `int` | Yes |
| media | `int` | Yes |
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

$result = $client->highlightsMedia()->delete(
    highlight: 1,
    media: 84,
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

