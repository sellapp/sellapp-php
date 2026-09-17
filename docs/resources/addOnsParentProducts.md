# addOnsParentProducts

[All resources](../methods.md)

## list

List an add-on's parent products

[API reference](https://sell.app/docs/api/add-ons/list-parent-products) · Effect: **read**

```php
public function list(
        int $addon,
        ?int $limit = null,
        ?int $page = null,
        ?bool $pagination = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\PaginatedResponse
```

| Argument | Native type | Required |
| --- | --- | --- |
| addon | `int` | Yes |
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

$result = $client->addOnsParentProducts()->list(addon: 1);
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

Replace an add-on's parent products

[API reference](https://sell.app/docs/api/add-ons/replace-parent-products) · Effect: **consequential**

```php
public function replace(
        int $addon,
        array $resources,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkReplaceAddOnSParentProductsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| addon | `int` | Yes |
| resources | `array` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkReplaceAddOnSParentProductsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->addOnsParentProducts()->replace(
    addon: 410,
    resources: [121, 120],
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

