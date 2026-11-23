# supportReplyTemplates

[All resources](../methods.md)

## list

List support reply templates

[API reference](https://sell.app/docs/api/support-reply-templates/list-support-reply-templates) · Effect: **read**

```php
public function list(
        ?int $limit = null,
        ?int $page = null,
        \SellApp\Resource\SupportReasonsActiveState $activeState = \SellApp\Resource\SupportReasonsActiveState::All,
        \SellApp\Resource\SupportReplyTemplatesAvailability $availability = \SellApp\Resource\SupportReplyTemplatesAvailability::All,
        ?string $search = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\PaginatedResponse
```

| Argument | Native type | Required |
| --- | --- | --- |
| limit | `?int` | No |
| page | `?int` | No |
| activeState | `\SellApp\Resource\SupportReasonsActiveState` | No |
| availability | `\SellApp\Resource\SupportReplyTemplatesAvailability` | No |
| search | `?string` | No |
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

$result = $client->supportReplyTemplates()->list();
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

## create

Create a support reply template

[API reference](https://sell.app/docs/api/support-reply-templates/create-a-support-reply-template) · Effect: **consequential**

```php
public function create(
        string $label,
        string $body,
        ?bool $isActive = null,
        ?bool $supportsManual = null,
        ?bool $supportsAutoRespond = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkCreateSupportReplyTemplateResponseValue201ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| label | `string` | Yes |
| body | `string` | Yes |
| isActive | `?bool` | No |
| supportsManual | `?bool` | No |
| supportsAutoRespond | `?bool` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkCreateSupportReplyTemplateResponseValue201ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->supportReplyTemplates()->create(
    label: 'Refund credited',
    body: 'Hi {customer_email}, we credited {refund_amount} to your {store_name} wallet for {product_title}. Your wallet balance is now {wallet_balance}.',
    supportsAutoRespond: true,
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

## get

Retrieve a support reply template

[API reference](https://sell.app/docs/api/support-reply-templates/retrieve-a-support-reply-template) · Effect: **read**

```php
public function get(
        int $supportReplyTemplate,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkGetSupportReplyTemplateResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| supportReplyTemplate | `int` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkGetSupportReplyTemplateResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->supportReplyTemplates()->get(supportReplyTemplate: 32);
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

Update a support reply template

[API reference](https://sell.app/docs/api/support-reply-templates/update-a-support-reply-template) · Effect: **consequential**

```php
public function replace(
        int $supportReplyTemplate,
        ?string $label = null,
        ?string $body = null,
        ?bool $isActive = null,
        ?bool $supportsManual = null,
        ?bool $supportsAutoRespond = null,
        ?\DateTimeImmutable $expectedUpdatedAt = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkReplaceSupportReplyTemplateResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| supportReplyTemplate | `int` | Yes |
| label | `?string` | No |
| body | `?string` | No |
| isActive | `?bool` | No |
| supportsManual | `?bool` | No |
| supportsAutoRespond | `?bool` | No |
| expectedUpdatedAt | `?\DateTimeImmutable` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkReplaceSupportReplyTemplateResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->supportReplyTemplates()->replace(
    supportReplyTemplate: 31,
    isActive: false,
    expectedUpdatedAt: '2026-07-03T09:12:00.000000Z',
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

Update a support reply template

[API reference](https://sell.app/docs/api/support-reply-templates/update-a-support-reply-template) · Effect: **consequential**

```php
public function update(
        int $supportReplyTemplate,
        ?string $label = null,
        ?string $body = null,
        ?bool $isActive = null,
        ?bool $supportsManual = null,
        ?bool $supportsAutoRespond = null,
        ?\DateTimeImmutable $expectedUpdatedAt = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkUpdateSupportReplyTemplateResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| supportReplyTemplate | `int` | Yes |
| label | `?string` | No |
| body | `?string` | No |
| isActive | `?bool` | No |
| supportsManual | `?bool` | No |
| supportsAutoRespond | `?bool` | No |
| expectedUpdatedAt | `?\DateTimeImmutable` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkUpdateSupportReplyTemplateResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->supportReplyTemplates()->update(
    supportReplyTemplate: 31,
    isActive: false,
    expectedUpdatedAt: '2026-07-03T09:12:00.000000Z',
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

## delete

Delete a support reply template

[API reference](https://sell.app/docs/api/support-reply-templates/delete-a-support-reply-template) · Effect: **consequential**

```php
public function delete(
        int $supportReplyTemplate,
        ?\SellApp\RequestOptions $options = null,
    ): void
```

| Argument | Native type | Required |
| --- | --- | --- |
| supportReplyTemplate | `int` | Yes |
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

$result = $client->supportReplyTemplates()->delete(supportReplyTemplate: 33);
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

## render

Render a support reply template

[API reference](https://sell.app/docs/api/support-reply-templates/render-a-support-reply-template) · Effect: **consequential**

```php
public function render(
        int $supportReplyTemplate,
        int $ticketId,
        ?\SellApp\Resource\RenderSupportReplyTemplateRequestApplicationJsonPropertyValues $values = null,
        ?int $invoiceId = null,
        ?int $refundAmountCents = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkRenderSupportReplyTemplateResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| supportReplyTemplate | `int` | Yes |
| ticketId | `int` | Yes |
| values | `?\SellApp\Resource\RenderSupportReplyTemplateRequestApplicationJsonPropertyValues` | No |
| invoiceId | `?int` | No |
| refundAmountCents | `?int` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkRenderSupportReplyTemplateResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->supportReplyTemplates()->render(
    supportReplyTemplate: 1,
    ticketId: 4821,
    invoiceId: 7001,
    refundAmountCents: 999,
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

## reorder

Reorder support reply templates

[API reference](https://sell.app/docs/api/support-reply-templates/reorder-support-reply-templates) · Effect: **consequential**

```php
public function reorder(
        array $orderedTemplateIds,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkReorderSupportReplyTemplatesResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| orderedTemplateIds | `array` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkReorderSupportReplyTemplatesResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->supportReplyTemplates()->reorder(orderedTemplateIds: [32, 31]);
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

## getOptions

Retrieve support reply template options

[API reference](https://sell.app/docs/api/support-reply-templates/support-reply-template-options) · Effect: **read**

```php
public function getOptions(
        ?string $body = null,
        ?array $requestedPlaceholders = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkGetSupportReplyTemplateOptionsResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| body | `?string` | No |
| requestedPlaceholders | `?array` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkGetSupportReplyTemplateOptionsResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->supportReplyTemplates()->getOptions();
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

