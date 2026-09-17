# productVariantsBooking

[All resources](../methods.md)

## listAvailability

List booking availability

[API reference](https://sell.app/docs/api/product-variants/list-booking-availability) · Effect: **read**

```php
public function listAvailability(
        int $product,
        int $variant,
        ?string $from = null,
        ?string $to = null,
        ?int $quantity = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkListBookingAvailabilityResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| product | `int` | Yes |
| variant | `int` | Yes |
| from | `?string` | No |
| to | `?string` | No |
| quantity | `?int` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkListBookingAvailabilityResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->productVariantsBooking()->listAvailability(
    product: 1,
    variant: 1,
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

## createHold

Create a booking hold

[API reference](https://sell.app/docs/api/product-variants/create-booking-hold) · Effect: **consequential**

```php
public function createHold(
        int $product,
        int $variant,
        \DateTimeImmutable $slotStartAt,
        ?int $quantity = null,
        ?string $customerKey = null,
        ?\SellApp\Resource\CreateBookingHoldRequestApplicationJsonPropertyMeta $meta = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkCreateBookingHoldResponseValue201ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| product | `int` | Yes |
| variant | `int` | Yes |
| slotStartAt | `\DateTimeImmutable` | Yes |
| quantity | `?int` | No |
| customerKey | `?string` | No |
| meta | `?\SellApp\Resource\CreateBookingHoldRequestApplicationJsonPropertyMeta` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkCreateBookingHoldResponseValue201ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->productVariantsBooking()->createHold(
    product: 1,
    variant: 1,
    slotStartAt: '2026-06-22T14:00:00+00:00',
    quantity: 1,
    customerKey: 'visitor-session-123',
    meta: ['customer_timezone' => 'America/New_York'],
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

## releaseHold

Release a booking hold

[API reference](https://sell.app/docs/api/product-variants/release-booking-hold) · Effect: **consequential**

```php
public function releaseHold(
        int $product,
        string $hold,
        ?string $customerKey = null,
        ?\SellApp\RequestOptions $options = null,
    ): void
```

| Argument | Native type | Required |
| --- | --- | --- |
| product | `int` | Yes |
| hold | `string` | Yes |
| customerKey | `?string` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `void`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->productVariantsBooking()->releaseHold(
    product: 1,
    hold: 'string_example',
    customerKey: 'visitor-session-123',
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

## get

Retrieve booking configuration

[API reference](https://sell.app/docs/api/bookings/retrieve-booking-configuration) · Effect: **read**

```php
public function get(
        string $product,
        int $variant,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkGetBookingConfigurationResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| product | `string` | Yes |
| variant | `int` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkGetBookingConfigurationResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->productVariantsBooking()->get(
    product: '41',
    variant: 73,
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

## replace

Update booking configuration

[API reference](https://sell.app/docs/api/bookings/update-booking-configuration) · Effect: **consequential**

```php
public function replace(
        string $product,
        int $variant,
        ?string $mode = null,
        ?\SellApp\Resource\SdkUpdateBookingConfigurationRequestApplicationJsonConflictScope $conflictScope = null,
        ?string $timezone = null,
        ?int $durationMinutes = null,
        ?int $capacityPerSlot = null,
        ?int $minNoticeMinutes = null,
        ?int $maxAdvanceDays = null,
        ?int $bufferBeforeMinutes = null,
        ?int $bufferAfterMinutes = null,
        ?array $availability = null,
        ?array $providerConnectionIds = null,
        ?\SellApp\Resource\SdkUpdateBookingConfigurationRequestApplicationJsonVideoProvider $videoProvider = null,
        ?int $videoProviderConnectionId = null,
        ?bool $remindersEnabled = null,
        ?int $reminderOffsetValue = null,
        ?\SellApp\Resource\SdkUpdateBookingConfigurationRequestApplicationJsonReminderOffsetUnit $reminderOffsetUnit = null,
        ?\SellApp\Resource\ReplaceBookingConfigurationRequestApplicationJsonPropertyMeta $meta = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkReplaceBookingConfigurationResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| product | `string` | Yes |
| variant | `int` | Yes |
| mode | `?string` | No |
| conflictScope | `?\SellApp\Resource\SdkUpdateBookingConfigurationRequestApplicationJsonConflictScope` | No |
| timezone | `?string` | No |
| durationMinutes | `?int` | No |
| capacityPerSlot | `?int` | No |
| minNoticeMinutes | `?int` | No |
| maxAdvanceDays | `?int` | No |
| bufferBeforeMinutes | `?int` | No |
| bufferAfterMinutes | `?int` | No |
| availability | `?array` | No |
| providerConnectionIds | `?array` | No |
| videoProvider | `?\SellApp\Resource\SdkUpdateBookingConfigurationRequestApplicationJsonVideoProvider` | No |
| videoProviderConnectionId | `?int` | No |
| remindersEnabled | `?bool` | No |
| reminderOffsetValue | `?int` | No |
| reminderOffsetUnit | `?\SellApp\Resource\SdkUpdateBookingConfigurationRequestApplicationJsonReminderOffsetUnit` | No |
| meta | `?\SellApp\Resource\ReplaceBookingConfigurationRequestApplicationJsonPropertyMeta` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkReplaceBookingConfigurationResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->productVariantsBooking()->replace(
    product: '41',
    variant: 73,
    timezone: 'Europe/London',
    durationMinutes: 60,
    capacityPerSlot: 1,
    minNoticeMinutes: 1440,
    maxAdvanceDays: 60,
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

## update

Update booking configuration

[API reference](https://sell.app/docs/api/bookings/update-booking-configuration) · Effect: **consequential**

```php
public function update(
        string $product,
        int $variant,
        ?string $mode = null,
        ?\SellApp\Resource\SdkUpdateBookingConfigurationRequestApplicationJsonConflictScope $conflictScope = null,
        ?string $timezone = null,
        ?int $durationMinutes = null,
        ?int $capacityPerSlot = null,
        ?int $minNoticeMinutes = null,
        ?int $maxAdvanceDays = null,
        ?int $bufferBeforeMinutes = null,
        ?int $bufferAfterMinutes = null,
        ?array $availability = null,
        ?array $providerConnectionIds = null,
        ?\SellApp\Resource\SdkUpdateBookingConfigurationRequestApplicationJsonVideoProvider $videoProvider = null,
        ?int $videoProviderConnectionId = null,
        ?bool $remindersEnabled = null,
        ?int $reminderOffsetValue = null,
        ?\SellApp\Resource\SdkUpdateBookingConfigurationRequestApplicationJsonReminderOffsetUnit $reminderOffsetUnit = null,
        ?\SellApp\Resource\UpdateBookingConfigurationRequestApplicationJsonPropertyMeta $meta = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkUpdateBookingConfigurationResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| product | `string` | Yes |
| variant | `int` | Yes |
| mode | `?string` | No |
| conflictScope | `?\SellApp\Resource\SdkUpdateBookingConfigurationRequestApplicationJsonConflictScope` | No |
| timezone | `?string` | No |
| durationMinutes | `?int` | No |
| capacityPerSlot | `?int` | No |
| minNoticeMinutes | `?int` | No |
| maxAdvanceDays | `?int` | No |
| bufferBeforeMinutes | `?int` | No |
| bufferAfterMinutes | `?int` | No |
| availability | `?array` | No |
| providerConnectionIds | `?array` | No |
| videoProvider | `?\SellApp\Resource\SdkUpdateBookingConfigurationRequestApplicationJsonVideoProvider` | No |
| videoProviderConnectionId | `?int` | No |
| remindersEnabled | `?bool` | No |
| reminderOffsetValue | `?int` | No |
| reminderOffsetUnit | `?\SellApp\Resource\SdkUpdateBookingConfigurationRequestApplicationJsonReminderOffsetUnit` | No |
| meta | `?\SellApp\Resource\UpdateBookingConfigurationRequestApplicationJsonPropertyMeta` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkUpdateBookingConfigurationResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->productVariantsBooking()->update(
    product: '41',
    variant: 73,
    timezone: 'Europe/London',
    durationMinutes: 60,
    capacityPerSlot: 1,
    minNoticeMinutes: 1440,
    maxAdvanceDays: 60,
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

