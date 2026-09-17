# customers

[All resources](../methods.md)

## list

List customers

[API reference](https://sell.app/docs/api/customers/list-customers) · Effect: **read**

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

$result = $client->customers()->list();
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

## createCustomer

Create a customer

[API reference](https://sell.app/docs/api/customers/identity-and-entitlements) · Effect: **consequential**

```php
public function createCustomer(
        string $email,
        ?string $externalId = null,
        ?string $name = null,
        ?string $locale = null,
        ?\SellApp\Resource\CreateCustomerRequestApplicationJsonPropertyMetadata $metadata = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkCreateCustomerResponseValue201ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| email | `string` | Yes |
| externalId | `?string` | No |
| name | `?string` | No |
| locale | `?string` | No |
| metadata | `?\SellApp\Resource\CreateCustomerRequestApplicationJsonPropertyMetadata` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkCreateCustomerResponseValue201ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->customers()->createCustomer(
    externalId: 'crm_maya_314',
    email: 'maya.chen@example.com',
    name: 'Maya Chen',
    locale: 'en-GB',
    metadata: ['plan' => 'standard', 'seats' => 3],
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

Documented HTTP responses: 201, 400, 401, 403, 404, 409, 410, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## search

Search customers

[API reference](https://sell.app/docs/api/customers/search-customers) · Effect: **read**

```php
public function search(
        ?array $filters = null,
        ?array $sort = null,
        ?\SellApp\Resource\SearchCustomersRequestApplicationJsonPropertySearch $search = null,
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
| search | `?\SellApp\Resource\SearchCustomersRequestApplicationJsonPropertySearch` | No |
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

$result = $client->customers()->search(
    filters: [['field' => 'id', 'operator' => '=', 'value' => 125]],
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

Retrieve a customer

[API reference](https://sell.app/docs/api/customers/retrieve-customer) · Effect: **read**

```php
public function get(
        int $customer,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkGetCustomerResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| customer | `int` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkGetCustomerResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->customers()->get(customer: 125);
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

## updateCustomer

Update a customer

[API reference](https://sell.app/docs/api/customers/identity-and-entitlements) · Effect: **consequential**

```php
public function updateCustomer(
        int $customer,
        ?string $email = null,
        ?string $name = null,
        ?string $locale = null,
        ?\SellApp\Resource\UpdateCustomerRequestApplicationJsonPropertyMetadata $metadata = null,
        ?string $externalId = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkUpdateCustomerResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| customer | `int` | Yes |
| email | `?string` | No |
| name | `?string` | No |
| locale | `?string` | No |
| metadata | `?\SellApp\Resource\UpdateCustomerRequestApplicationJsonPropertyMetadata` | No |
| externalId | `?string` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkUpdateCustomerResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->customers()->updateCustomer(
    customer: 314,
    locale: 'en-US',
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

Documented HTTP responses: 200, 400, 401, 403, 404, 409, 410, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## getCustomerByExternalId

Retrieve a customer by external ID

[API reference](https://sell.app/docs/api/customers/identity-and-entitlements) · Effect: **read**

```php
public function getCustomerByExternalId(
        string $externalId,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkGetCustomerResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| externalId | `string` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkGetCustomerResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->customers()->getCustomerByExternalId(externalId: '314');
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

Documented HTTP responses: 200, 400, 401, 403, 404, 409, 410, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## upsertByExternalId

Create or update a customer by external ID

[API reference](https://sell.app/docs/api/customers/identity-and-entitlements) · Effect: **consequential**

```php
public function upsertByExternalId(
        string $externalId,
        string $email,
        ?string $name = null,
        ?string $locale = null,
        ?\SellApp\Resource\UpsertCustomerRequestApplicationJsonPropertyMetadata $metadata = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkUpsertCustomerResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| externalId | `string` | Yes |
| email | `string` | Yes |
| name | `?string` | No |
| locale | `?string` | No |
| metadata | `?\SellApp\Resource\UpsertCustomerRequestApplicationJsonPropertyMetadata` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkUpsertCustomerResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->customers()->upsertByExternalId(
    externalId: 'crm_maya_314',
    email: 'maya.chen@example.com',
    name: 'Maya Chen',
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

Documented HTTP responses: 200, 201, 400, 401, 403, 404, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## updateCustomerByExternalId

Update a customer by external ID

[API reference](https://sell.app/docs/api/customers/identity-and-entitlements) · Effect: **consequential**

```php
public function updateCustomerByExternalId(
        string $externalId,
        ?string $email = null,
        ?string $name = null,
        ?string $locale = null,
        ?\SellApp\Resource\UpdateCustomerRequestApplicationJsonPropertyMetadata $metadata = null,
        ?string $bodyExternalId = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkUpdateCustomerResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| externalId | `string` | Yes |
| email | `?string` | No |
| name | `?string` | No |
| locale | `?string` | No |
| metadata | `?\SellApp\Resource\UpdateCustomerRequestApplicationJsonPropertyMetadata` | No |
| bodyExternalId | `?string` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkUpdateCustomerResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->customers()->updateCustomerByExternalId(
    externalId: '314',
    locale: 'en-US',
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

Documented HTTP responses: 200, 400, 401, 403, 404, 409, 410, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

