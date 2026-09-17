# licenses

[All resources](../methods.md)

## activate

Activate a license key

[API reference](https://sell.app/docs/api/licenses/activate-a-license-key) · Effect: **consequential**

```php
public function activate(
        string $licenseKey,
        string $instanceName,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkActivateLicenseKeyResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| licenseKey | `string` | Yes |
| instanceName | `string` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkActivateLicenseKeyResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->licenses()->activate(
    licenseKey: '01965f1d-f038-7116-b57f-9e7ecb4e7b8f',
    instanceName: 'Grace Wilson',
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

## validate

Validate a license key

[API reference](https://sell.app/docs/api/licenses/validate-a-license-key) · Effect: **consequential**

```php
public function validate(
        string $licenseKey,
        ?string $instanceId = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkValidateLicenseKeyResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| licenseKey | `string` | Yes |
| instanceId | `?string` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkValidateLicenseKeyResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->licenses()->validate(licenseKey: '01965f1d-f038-7116-b57f-9e7ecb4e7b8f');
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

## list

List all license keys

[API reference](https://sell.app/docs/api/licenses/list-all-license-keys) · Effect: **read**

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

$result = $client->licenses()->list();
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

Retrieve a license key

[API reference](https://sell.app/docs/api/licenses/retrieve-a-license-key) · Effect: **read**

```php
public function get(
        int $licenseKey,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkGetLicenseKeyResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| licenseKey | `int` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkGetLicenseKeyResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->licenses()->get(licenseKey: 1);
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

Update a license key

[API reference](https://sell.app/docs/api/licenses/update-a-license-key) · Effect: **consequential**

```php
public function update(
        int $licenseKey,
        ?int $limit = null,
        ?\DateTimeImmutable $expiresAt = null,
        ?bool $active = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkUpdateLicenseKeyResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| licenseKey | `int` | Yes |
| limit | `?int` | No |
| expiresAt | `?\DateTimeImmutable` | No |
| active | `?bool` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkUpdateLicenseKeyResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->licenses()->update(
    licenseKey: 1,
    limit: 10,
    active: false,
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

## deactivateLicense

Deactivate a license instance

[API reference](https://sell.app/docs/api/licenses/deactivate-a-license) · Effect: **consequential**

```php
public function deactivateLicense(
        string $licenseKey,
        string $instanceId,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkDeactivateLicenseResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| licenseKey | `string` | Yes |
| instanceId | `string` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkDeactivateLicenseResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->licenses()->deactivateLicense(
    licenseKey: 'SELL-LICENSE-REDACTED',
    instanceId: 'laptop-maya',
    options: new \SellApp\RequestOptions(idempotencyKey: "example-mutation-001"),
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

