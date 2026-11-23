# ticketsAnalytics

[All resources](../methods.md)

## get

Retrieve support analytics

[API reference](https://sell.app/docs/api/tickets/retrieve-support-analytics) · Effect: **read**

```php
public function get(
        \SellApp\Resource\TicketsRange $range = \SellApp\Resource\TicketsRange::Value30D,
        ?int $ruleLimit = null,
        ?int $activityLimit = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkGetSupportAnalyticsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| range | `\SellApp\Resource\TicketsRange` | No |
| ruleLimit | `?int` | No |
| activityLimit | `?int` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkGetSupportAnalyticsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->ticketsAnalytics()->get();
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

