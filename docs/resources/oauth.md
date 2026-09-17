# oauth

[All resources](../methods.md)

## getOAuthAuthorizationServerMetadata

Read OAuth server metadata

[API reference](https://sell.app/docs/api/oauth) · Effect: **read**

```php
public function getOAuthAuthorizationServerMetadata(
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkGetOAuthAuthorizationServerMetadataResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkGetOAuthAuthorizationServerMetadataResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: "",
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: "",
);

$result = $client->oauth()->getOAuthAuthorizationServerMetadata();
echo json_encode($result, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR), PHP_EOL;
```

### Authentication and errors

Supported credential alternatives (each object is one alternative):

```json
[]
```

Documented HTTP responses: 200, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## getOAuthAuthorizationRequest

Review CLI authorization

[API reference](https://sell.app/docs/api/oauth) · Effect: **read**

```php
public function getOAuthAuthorizationRequest(
        string $responseType,
        string $clientId,
        string $redirectUri,
        string $state,
        string $codeChallenge,
        string $codeChallengeMethod,
        ?string $scope = null,
        ?\SellApp\RequestOptions $options = null,
    ): mixed
```

| Argument | Native type | Required |
| --- | --- | --- |
| responseType | `string` | Yes |
| clientId | `string` | Yes |
| redirectUri | `string` | Yes |
| state | `string` | Yes |
| codeChallenge | `string` | Yes |
| codeChallengeMethod | `string` | Yes |
| scope | `?string` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `mixed`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: "",
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: "",
);

$result = $client->oauth()->getOAuthAuthorizationRequest(
    responseType: 'code',
    clientId: '01992a65-e064-71ba-b38f-902b7966a6be',
    redirectUri: 'http://127.0.0.1:49152/callback',
    state: 'RANDOM_STATE',
    codeChallenge: 'E9Melhoa2OwvFrEMTJguCHaoeK1t8URWbuGJSstw-cM',
    codeChallengeMethod: 'S256',
);
echo json_encode($result, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR), PHP_EOL;
```

### Authentication and errors

Supported credential alternatives (each object is one alternative):

```json
[]
```

Documented HTTP responses: 200, 302, 400, 401, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## approveOAuthAuthorization

Approve CLI access

[API reference](https://sell.app/docs/api/oauth) · Effect: **consequential**

```php
public function approveOAuthAuthorization(
        string $authToken,
        string $clientId,
        string $state,
        string $token,
        ?\SellApp\RequestOptions $options = null,
    ): mixed
```

| Argument | Native type | Required |
| --- | --- | --- |
| authToken | `string` | Yes |
| clientId | `string` | Yes |
| state | `string` | Yes |
| token | `string` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `mixed`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    browserSession: getenv('SELLAPP_BROWSER_SESSION'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: "",
);

$result = $client->oauth()->approveOAuthAuthorization(
    authToken: 'CONSENT_AUTH_TOKEN',
    clientId: '01992a65-e064-71ba-b38f-902b7966a6be',
    state: 'RANDOM_STATE',
    token: 'CSRF_TOKEN',
);
echo json_encode($result, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR), PHP_EOL;
```

### Authentication and errors

Supported credential alternatives (each object is one alternative):

```json
[
  {
    "oauthBrowserSession": []
  }
]
```

Documented HTTP responses: 302, 400, 401, 403, 419, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## denyOAuthAuthorization

Deny CLI access

[API reference](https://sell.app/docs/api/oauth) · Effect: **consequential**

```php
public function denyOAuthAuthorization(
        string $authToken,
        string $token,
        ?\SellApp\RequestOptions $options = null,
    ): mixed
```

| Argument | Native type | Required |
| --- | --- | --- |
| authToken | `string` | Yes |
| token | `string` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `mixed`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    browserSession: getenv('SELLAPP_BROWSER_SESSION'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: "",
);

$result = $client->oauth()->denyOAuthAuthorization(
    authToken: 'CONSENT_AUTH_TOKEN',
    token: 'CSRF_TOKEN',
);
echo json_encode($result, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR), PHP_EOL;
```

### Authentication and errors

Supported credential alternatives (each object is one alternative):

```json
[
  {
    "oauthBrowserSession": []
  }
]
```

Documented HTTP responses: 302, 400, 401, 419, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## exchangeOAuthToken

Exchange or refresh OAuth tokens

[API reference](https://sell.app/docs/api/oauth) · Effect: **consequential**

```php
public function exchangeOAuthToken(
        \SellApp\Resource\ExchangeOAuthTokenRequestApplicationXWwwFormUrlencodedOneOfValue1|\SellApp\Resource\ExchangeOAuthTokenRequestApplicationXWwwFormUrlencodedOneOfValue2|array $body,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkExchangeOAuthTokenResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| body | `\SellApp\Resource\ExchangeOAuthTokenRequestApplicationXWwwFormUrlencodedOneOfValue1\|\SellApp\Resource\ExchangeOAuthTokenRequestApplicationXWwwFormUrlencodedOneOfValue2\|array` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkExchangeOAuthTokenResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: "",
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: "",
);

$result = $client->oauth()->exchangeOAuthToken(
    body: [
        'client_id' => '01992a65-e064-71ba-b38f-902b7966a6be',
        'grant_type' => 'authorization_code',
        'code' => 'AUTHORIZATION_CODE',
        'redirect_uri' => 'http://127.0.0.1:49152/callback',
        'code_verifier' => 'dBjftJeZ4CVP-mB92K27uhbUJU1p1r_wW1gFWFOEjXk',
    ],
);
echo json_encode($result, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR), PHP_EOL;
```

### Authentication and errors

Supported credential alternatives (each object is one alternative):

```json
[
  {},
  {
    "oauthClientBasic": []
  }
]
```

Documented HTTP responses: 200, 400, 401, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

## revokeOAuthToken

Revoke an OAuth token

[API reference](https://sell.app/docs/api/oauth) · Effect: **consequential**

```php
public function revokeOAuthToken(
        string $token,
        ?string $clientId = null,
        ?string $clientSecret = null,
        ?\SellApp\Resource\SdkRevokeOAuthTokenRequestApplicationXWwwFormUrlencodedTokenTypeHint $tokenTypeHint = null,
        ?\SellApp\RequestOptions $options = null,
    ): mixed
```

| Argument | Native type | Required |
| --- | --- | --- |
| token | `string` | Yes |
| clientId | `?string` | No |
| clientSecret | `?string` | No |
| tokenTypeHint | `?\SellApp\Resource\SdkRevokeOAuthTokenRequestApplicationXWwwFormUrlencodedTokenTypeHint` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `mixed`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: "",
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: "",
);

$result = $client->oauth()->revokeOAuthToken(
    clientId: '01992a65-e064-71ba-b38f-902b7966a6be',
    token: 'REFRESH_TOKEN',
    tokenTypeHint: 'refresh_token',
);
echo json_encode($result, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR), PHP_EOL;
```

### Authentication and errors

Supported credential alternatives (each object is one alternative):

```json
[
  {},
  {
    "oauthClientBasic": []
  }
]
```

Documented HTTP responses: 200, 400, 401, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

