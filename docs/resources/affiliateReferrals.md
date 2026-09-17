# affiliateReferrals

[All resources](../methods.md)

## list

List affiliate referrals

[API reference](https://sell.app/docs/api/affiliates/list-referrals) · Effect: **read**

```php
public function list(
        ?int $affiliateId = null,
        ?int $orderId = null,
        ?\SellApp\Resource\AffiliateReferralsStatus $status = null,
        ?int $limit = null,
        ?int $page = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\PaginatedResponse
```

| Argument | Native type | Required |
| --- | --- | --- |
| affiliateId | `?int` | No |
| orderId | `?int` | No |
| status | `?\SellApp\Resource\AffiliateReferralsStatus` | No |
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

$result = $client->affiliateReferrals()->list();
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

Retrieve an affiliate referral

[API reference](https://sell.app/docs/api/affiliates/manage-referral) · Effect: **read**

```php
public function get(
        int $referral,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkGetAffiliateReferralResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| referral | `int` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkGetAffiliateReferralResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->affiliateReferrals()->get(referral: 1);
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

Update referral status

[API reference](https://sell.app/docs/api/affiliates/manage-referral) · Effect: **consequential**

```php
public function update(
        int $referral,
        \SellApp\Resource\SdkUpdateReferralStatusRequestApplicationJsonStatus $status,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkUpdateReferralStatusResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| referral | `int` | Yes |
| status | `\SellApp\Resource\SdkUpdateReferralStatusRequestApplicationJsonStatus` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkUpdateReferralStatusResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->affiliateReferrals()->update(
    referral: 71,
    status: 'accepted',
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

