# variantDeliverables

[All resources](../methods.md)

## get

Retrieve variant deliverable configuration

[API reference](https://sell.app/docs/api/product-variants) · Effect: **read**

```php
public function get(
        string $product,
        int $variant,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkGetVariantDeliverableConfigurationResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| product | `string` | Yes |
| variant | `int` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkGetVariantDeliverableConfigurationResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->variantDeliverables()->get(
    product: 'string_example',
    variant: 1,
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

Replace variant deliverable configuration

[API reference](https://sell.app/docs/api/product-variants) · Effect: **write**

```php
public function replace(
        string $product,
        int $variant,
        array $types,
        \SellApp\Resource\ReplaceVariantDeliverableConfigurationRequestApplicationJsonPropertyData $data,
        ?\DateTimeImmutable $expectedUpdatedAt = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkReplaceVariantDeliverableConfigurationResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| product | `string` | Yes |
| variant | `int` | Yes |
| types | `array` | Yes |
| data | `\SellApp\Resource\ReplaceVariantDeliverableConfigurationRequestApplicationJsonPropertyData` | Yes |
| expectedUpdatedAt | `?\DateTimeImmutable` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkReplaceVariantDeliverableConfigurationResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->variantDeliverables()->replace(
    product: 'string_example',
    variant: 1,
    types: ['MANUAL'],
    data: ['comment' => 'Delivery is arranged by Launch Lab.'],
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

