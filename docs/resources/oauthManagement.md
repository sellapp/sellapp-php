# oauthManagement

[All resources](../methods.md)

## getOAuthInstallation

Read your CLI connection

[API reference](https://sell.app/docs/api/oauth) · Effect: **read**

```php
public function getOAuthInstallation(
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkGetOAuthInstallationResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkGetOAuthInstallationResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    accessToken: getenv('SELLAPP_ACCESS_TOKEN'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: "",
);

$result = $client->oauthManagement()->getOAuthInstallation();
echo json_encode($result, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR), PHP_EOL;
```

### Authentication and errors

Supported credential alternatives (each object is one alternative):

```json
[
  {
    "oauthAccessToken": [
      "admin"
    ]
  }
]
```

Documented HTTP responses: 200, 400, 401, 403, 404, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## deleteOAuthInstallation

Disconnect your CLI connection

[API reference](https://sell.app/docs/api/oauth) · Effect: **consequential**

```php
public function deleteOAuthInstallation(
        ?\SellApp\RequestOptions $options = null,
    ): void
```

| Argument | Native type | Required |
| --- | --- | --- |
| options | `?\SellApp\RequestOptions` | No |

Returns: `void`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    accessToken: getenv('SELLAPP_ACCESS_TOKEN'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: "",
);

$result = $client->oauthManagement()->deleteOAuthInstallation();
echo json_encode($result, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR), PHP_EOL;
```

### Authentication and errors

Supported credential alternatives (each object is one alternative):

```json
[
  {
    "oauthAccessToken": [
      "admin"
    ]
  }
]
```

Documented HTTP responses: 204, 400, 401, 403, 404, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

