# bookings

[All resources](../methods.md)

## list

List appointments

[API reference](https://sell.app/docs/api/bookings/list-appointments) · Effect: **read**

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

$result = $client->bookings()->list();
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

## search

Search appointments

[API reference](https://sell.app/docs/api/bookings/search-appointments) · Effect: **read**

```php
public function search(
        ?array $filters = null,
        ?array $sort = null,
        ?\SellApp\Resource\SearchAppointmentsRequestApplicationJsonPropertySearch $search = null,
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
| search | `?\SellApp\Resource\SearchAppointmentsRequestApplicationJsonPropertySearch` | No |
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

$result = $client->bookings()->search(
    filters: [
        [
            'field' => 'id',
            'operator' => '=',
            'value' => '018f61d6-1c46-7b42-8a94-522bc6b5c53f',
        ],
    ],
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

Retrieve an appointment

[API reference](https://sell.app/docs/api/bookings/retrieve-an-appointment) · Effect: **read**

```php
public function get(
        string $booking,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkGetAppointmentResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| booking | `string` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkGetAppointmentResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->bookings()->get(booking: '018f61d6-1c46-7b42-8a94-522bc6b5c53f');
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

Update an appointment

[API reference](https://sell.app/docs/api/bookings/update-an-appointment) · Effect: **consequential**

```php
public function update(
        string $booking,
        \DateTimeImmutable $slotStartAt,
        ?string $timezone = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkUpdateAppointmentResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| booking | `string` | Yes |
| slotStartAt | `\DateTimeImmutable` | Yes |
| timezone | `?string` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkUpdateAppointmentResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->bookings()->update(
    booking: '018f61d6-1c46-7b42-8a94-522bc6b5c53f',
    slotStartAt: '2028-03-27T10:00:00+01:00',
    timezone: 'Europe/London',
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

## cancel

Cancel an appointment

[API reference](https://sell.app/docs/api/bookings/update-an-appointment) · Effect: **consequential**

```php
public function cancel(
        string $booking,
        string $status,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkCancelAppointmentResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| booking | `string` | Yes |
| status | `string` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkCancelAppointmentResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->bookings()->cancel(
    booking: '018f61d6-1c46-7b42-8a94-522bc6b5c53f',
    status: 'cancelled',
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

## create

Create a booking product

[API reference](https://sell.app/docs/api/bookings/create-a-booking-product) · Effect: **consequential**

```php
public function create(
        string $title,
        int $priceCents,
        ?string $description = null,
        ?\SellApp\Resource\CatalogVisibility $visibility = null,
        ?string $variantTitle = null,
        ?string $variantDescription = null,
        ?int $compareAtPriceCents = null,
        ?\SellApp\Resource\SdkCreateBookingProductRequestApplicationJsonCurrency $currency = null,
        ?array $paymentMethods = null,
        ?string $timezone = null,
        ?int $durationMinutes = null,
        ?int $minNoticeMinutes = null,
        ?int $maxAdvanceDays = null,
        ?int $bufferBeforeMinutes = null,
        ?int $bufferAfterMinutes = null,
        ?array $providerConnectionIds = null,
        ?\SellApp\Resource\SdkCreateBookingProductRequestApplicationJsonVideoProvider $videoProvider = null,
        ?int $videoProviderConnectionId = null,
        ?bool $remindersEnabled = null,
        ?int $reminderOffsetValue = null,
        ?\SellApp\Resource\SdkCreateBookingProductRequestApplicationJsonReminderOffsetUnit $reminderOffsetUnit = null,
        ?array $availability = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkCreateBookingProductResponseValue201ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| title | `string` | Yes |
| priceCents | `int` | Yes |
| description | `?string` | No |
| visibility | `?\SellApp\Resource\CatalogVisibility` | No |
| variantTitle | `?string` | No |
| variantDescription | `?string` | No |
| compareAtPriceCents | `?int` | No |
| currency | `?\SellApp\Resource\SdkCreateBookingProductRequestApplicationJsonCurrency` | No |
| paymentMethods | `?array` | No |
| timezone | `?string` | No |
| durationMinutes | `?int` | No |
| minNoticeMinutes | `?int` | No |
| maxAdvanceDays | `?int` | No |
| bufferBeforeMinutes | `?int` | No |
| bufferAfterMinutes | `?int` | No |
| providerConnectionIds | `?array` | No |
| videoProvider | `?\SellApp\Resource\SdkCreateBookingProductRequestApplicationJsonVideoProvider` | No |
| videoProviderConnectionId | `?int` | No |
| remindersEnabled | `?bool` | No |
| reminderOffsetValue | `?int` | No |
| reminderOffsetUnit | `?\SellApp\Resource\SdkCreateBookingProductRequestApplicationJsonReminderOffsetUnit` | No |
| availability | `?array` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkCreateBookingProductResponseValue201ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->bookings()->create(
    title: 'Strategy consultation',
    description: '<p>A private strategy session for your next launch.</p>',
    variantTitle: '60 minute session',
    priceCents: 2500,
    currency: 'USD',
    paymentMethods: ['STRIPE'],
    timezone: 'Europe/London',
    durationMinutes: 60,
    availability: [
        ['day' => 1, 'enabled' => true, 'start' => '09:00', 'end' => '12:00'],
        ['day' => 3, 'enabled' => true, 'start' => '13:00', 'end' => '17:00'],
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

Documented HTTP responses: 201, 400, 401, 403, 422, 429, 500. See the API reference for field-level validation and consequences.

[Response access, transport controls, pagination, and typed errors](../usage.md)

