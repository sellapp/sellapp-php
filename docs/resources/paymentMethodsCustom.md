# paymentMethodsCustom

[All resources](../methods.md)

## list

List custom payment methods

[API reference](https://sell.app/docs/api/payment-methods/manage-custom-payment-methods) · Effect: **read**

```php
public function list(
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkListCustomPaymentMethodsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkListCustomPaymentMethodsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->paymentMethodsCustom()->list();
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

Create a custom payment method

[API reference](https://sell.app/docs/api/payment-methods/manage-custom-payment-methods) · Effect: **consequential**

```php
public function create(
        \SellApp\Resource\SdkCreateCustomPaymentMethodRequestApplicationJsonType $type,
        string $name,
        ?string $description = null,
        ?string $instructions = null,
        ?array $steps = null,
        ?string $redirectUrl = null,
        ?bool $skipInterstitialPage = null,
        ?bool $showProcessingStatusPage = null,
        ?bool $requireProofOfPayment = null,
        ?bool $enabled = null,
        ?int $sortOrder = null,
        ?\SellApp\Resource\CreateCustomPaymentMethodRequestApplicationJsonPropertyModifier $modifier = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkCreateCustomPaymentMethodResponseValue201ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| type | `\SellApp\Resource\SdkCreateCustomPaymentMethodRequestApplicationJsonType` | Yes |
| name | `string` | Yes |
| description | `?string` | No |
| instructions | `?string` | No |
| steps | `?array` | No |
| redirectUrl | `?string` | No |
| skipInterstitialPage | `?bool` | No |
| showProcessingStatusPage | `?bool` | No |
| requireProofOfPayment | `?bool` | No |
| enabled | `?bool` | No |
| sortOrder | `?int` | No |
| modifier | `?\SellApp\Resource\CreateCustomPaymentMethodRequestApplicationJsonPropertyModifier` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkCreateCustomPaymentMethodResponseValue201ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->paymentMethodsCustom()->create(
    type: 'instructions',
    name: 'Manual payment',
    instructions: 'Contact Launch Lab before sending a payment.',
    enabled: false,
    modifier: ['percentage' => '-2.50', 'fixed' => '-1.00'],
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

## get

Retrieve a custom payment method

[API reference](https://sell.app/docs/api/payment-methods/manage-custom-payment-methods) · Effect: **read**

```php
public function get(
        string $customPaymentMethod,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkGetCustomPaymentMethodResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| customPaymentMethod | `string` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkGetCustomPaymentMethodResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->paymentMethodsCustom()->get(customPaymentMethod: 'string_example');
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

Replace a custom payment method

[API reference](https://sell.app/docs/api/payment-methods/manage-custom-payment-methods) · Effect: **consequential**

```php
public function replace(
        string $customPaymentMethod,
        \SellApp\Resource\SdkCreateCustomPaymentMethodRequestApplicationJsonType $type,
        string $name,
        ?string $description = null,
        ?string $instructions = null,
        ?array $steps = null,
        ?string $redirectUrl = null,
        ?bool $skipInterstitialPage = null,
        ?bool $showProcessingStatusPage = null,
        ?bool $requireProofOfPayment = null,
        ?bool $enabled = null,
        ?int $sortOrder = null,
        ?\SellApp\Resource\ReplaceCustomPaymentMethodRequestApplicationJsonPropertyModifier $modifier = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkReplaceCustomPaymentMethodResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| customPaymentMethod | `string` | Yes |
| type | `\SellApp\Resource\SdkCreateCustomPaymentMethodRequestApplicationJsonType` | Yes |
| name | `string` | Yes |
| description | `?string` | No |
| instructions | `?string` | No |
| steps | `?array` | No |
| redirectUrl | `?string` | No |
| skipInterstitialPage | `?bool` | No |
| showProcessingStatusPage | `?bool` | No |
| requireProofOfPayment | `?bool` | No |
| enabled | `?bool` | No |
| sortOrder | `?int` | No |
| modifier | `?\SellApp\Resource\ReplaceCustomPaymentMethodRequestApplicationJsonPropertyModifier` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkReplaceCustomPaymentMethodResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->paymentMethodsCustom()->replace(
    customPaymentMethod: 'string_example',
    type: 'instructions',
    name: 'Manual payment',
    instructions: 'Contact Launch Lab before sending a payment.',
    enabled: false,
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

Update a custom payment method

[API reference](https://sell.app/docs/api/payment-methods/manage-custom-payment-methods) · Effect: **consequential**

```php
public function update(
        string $customPaymentMethod,
        ?\SellApp\Resource\SdkCreateCustomPaymentMethodRequestApplicationJsonType $type = null,
        ?string $name = null,
        ?string $description = null,
        ?string $instructions = null,
        ?array $steps = null,
        ?string $redirectUrl = null,
        ?bool $skipInterstitialPage = null,
        ?bool $showProcessingStatusPage = null,
        ?bool $requireProofOfPayment = null,
        ?bool $enabled = null,
        ?int $sortOrder = null,
        ?\SellApp\Resource\UpdateCustomPaymentMethodRequestApplicationJsonPropertyModifier $modifier = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkUpdateCustomPaymentMethodResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| customPaymentMethod | `string` | Yes |
| type | `?\SellApp\Resource\SdkCreateCustomPaymentMethodRequestApplicationJsonType` | No |
| name | `?string` | No |
| description | `?string` | No |
| instructions | `?string` | No |
| steps | `?array` | No |
| redirectUrl | `?string` | No |
| skipInterstitialPage | `?bool` | No |
| showProcessingStatusPage | `?bool` | No |
| requireProofOfPayment | `?bool` | No |
| enabled | `?bool` | No |
| sortOrder | `?int` | No |
| modifier | `?\SellApp\Resource\UpdateCustomPaymentMethodRequestApplicationJsonPropertyModifier` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkUpdateCustomPaymentMethodResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->paymentMethodsCustom()->update(
    customPaymentMethod: 'string_example',
    enabled: false,
    modifier: null,
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

Delete a custom payment method

[API reference](https://sell.app/docs/api/payment-methods/manage-custom-payment-methods) · Effect: **consequential**

```php
public function delete(
        string $customPaymentMethod,
        ?\SellApp\RequestOptions $options = null,
    ): void
```

| Argument | Native type | Required |
| --- | --- | --- |
| customPaymentMethod | `string` | Yes |
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

$result = $client->paymentMethodsCustom()->delete(customPaymentMethod: 'string_example');
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

