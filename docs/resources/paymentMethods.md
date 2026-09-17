# paymentMethods

[All resources](../methods.md)

## list

List payment methods

[API reference](https://sell.app/docs/api/payment-methods/manage-payment-methods) · Effect: **read**

```php
public function list(
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkListPaymentMethodsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkListPaymentMethodsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->paymentMethods()->list();
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

Retrieve payment method status

[API reference](https://sell.app/docs/api/payment-methods/manage-payment-methods) · Effect: **read**

```php
public function get(
        string $paymentMethod,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkGetPaymentMethodStatusResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| paymentMethod | `string` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkGetPaymentMethodStatusResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->paymentMethods()->get(paymentMethod: 'STRIPE');
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

## enable

Enable or disable a payment method

[API reference](https://sell.app/docs/api/payment-methods/manage-payment-methods) · Effect: **consequential**

```php
public function enable(
        string $paymentMethod,
        bool $enabled,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkEnableOrDisablePaymentMethodResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| paymentMethod | `string` | Yes |
| enabled | `bool` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkEnableOrDisablePaymentMethodResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->paymentMethods()->enable(
    paymentMethod: 'STRIPE',
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

## connect

Create a payment connection handoff

[API reference](https://sell.app/docs/api/payment-methods/manage-payment-methods) · Effect: **consequential**

```php
public function connect(
        string $paymentMethod,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkCreatePaymentConnectionHandoffResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| paymentMethod | `string` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkCreatePaymentConnectionHandoffResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->paymentMethods()->connect(paymentMethod: 'STRIPE');
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

## validate

Validate and save payment method configuration

[API reference](https://sell.app/docs/api/payment-methods/manage-payment-methods) · Effect: **consequential**

```php
public function validate(
        string $paymentMethod,
        \SellApp\Resource\ValidateAndSavePaymentMethodConfigurationRequestApplicationJsonOneOfValue1|\SellApp\Resource\ValidateAndSavePaymentMethodConfigurationRequestApplicationJsonOneOfValue2|\SellApp\Resource\ValidateAndSavePaymentMethodConfigurationRequestApplicationJsonOneOfValue3|\SellApp\Resource\ValidateAndSavePaymentMethodConfigurationRequestApplicationJsonOneOfValue4|\SellApp\Resource\ValidateAndSavePaymentMethodConfigurationRequestApplicationJsonOneOfValue5|\SellApp\Resource\ValidateAndSavePaymentMethodConfigurationRequestApplicationJsonOneOfValue6|array $body,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkValidateAndSavePaymentMethodConfigurationResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| paymentMethod | `string` | Yes |
| body | `\SellApp\Resource\ValidateAndSavePaymentMethodConfigurationRequestApplicationJsonOneOfValue1\|\SellApp\Resource\ValidateAndSavePaymentMethodConfigurationRequestApplicationJsonOneOfValue2\|\SellApp\Resource\ValidateAndSavePaymentMethodConfigurationRequestApplicationJsonOneOfValue3\|\SellApp\Resource\ValidateAndSavePaymentMethodConfigurationRequestApplicationJsonOneOfValue4\|\SellApp\Resource\ValidateAndSavePaymentMethodConfigurationRequestApplicationJsonOneOfValue5\|\SellApp\Resource\ValidateAndSavePaymentMethodConfigurationRequestApplicationJsonOneOfValue6\|array` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkValidateAndSavePaymentMethodConfigurationResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->paymentMethods()->validate(
    paymentMethod: 'NMI',
    body: [
        'merchant_secure_key' => 'replace-with-nmi-secure-key',
        'merchant_tokenization_key' => 'replace-with-nmi-tokenization-key',
        'signing_key' => 'replace-with-nmi-signing-key',
        'currencies' => ['USD'],
    ],
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

