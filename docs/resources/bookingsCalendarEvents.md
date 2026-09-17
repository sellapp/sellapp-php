# bookingsCalendarEvents

[All resources](../methods.md)

## list

List booking date overrides

[API reference](https://sell.app/docs/api/bookings/list-booking-date-overrides) · Effect: **read**

```php
public function list(
        ?int $productVariantId = null,
        ?\DateTimeImmutable $from = null,
        ?\DateTimeImmutable $to = null,
        ?\SellApp\Resource\BookingsStatus $status = null,
        ?bool $pagination = null,
        ?int $limit = null,
        ?int $page = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\PaginatedResponse
```

| Argument | Native type | Required |
| --- | --- | --- |
| productVariantId | `?int` | No |
| from | `?\DateTimeImmutable` | No |
| to | `?\DateTimeImmutable` | No |
| status | `?\SellApp\Resource\BookingsStatus` | No |
| pagination | `?bool` | No |
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

$result = $client->bookingsCalendarEvents()->list();
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

## set

Set booking date availability

[API reference](https://sell.app/docs/api/bookings/set-booking-date-availability) · Effect: **consequential**

```php
public function set(
        array $dates,
        bool $available,
        ?int $productVariantId = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkSetBookingDateAvailabilityResponseValue201ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| dates | `array` | Yes |
| available | `bool` | Yes |
| productVariantId | `?int` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkSetBookingDateAvailabilityResponseValue201ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->bookingsCalendarEvents()->set(
    productVariantId: 73,
    dates: ['2028-03-26', '2028-03-27'],
    available: false,
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

Documented HTTP responses: 201, 400, 401, 403, 404, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

