# productVariantsCommunityAccess

[All resources](../methods.md)

## replace

Replace variant community access

[API reference](https://sell.app/docs/api/product-variants/replace-variant-community-access) · Effect: **write**

```php
public function replace(
        int $product,
        int $variant,
        \SellApp\Resource\ReplaceVariantCommunityAccessRequestApplicationJsonPropertyCommunity $community,
        ?\DateTimeImmutable $expectedUpdatedAt = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkReplaceVariantCommunityAccessResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| product | `int` | Yes |
| variant | `int` | Yes |
| community | `\SellApp\Resource\ReplaceVariantCommunityAccessRequestApplicationJsonPropertyCommunity` | Yes |
| expectedUpdatedAt | `?\DateTimeImmutable` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkReplaceVariantCommunityAccessResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->productVariantsCommunityAccess()->replace(
    product: 1,
    variant: 2,
    community: [
        'platform' => 'discord',
        'server_id' => '1187040134912155648',
        'role_ids' => ['1187040299781210112'],
        'required' => true,
        'remove_on_expire' => true,
    ],
    expectedUpdatedAt: '2024-01-10T18:47:22.000000Z',
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

