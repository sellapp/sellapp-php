# supportAutomationRules

[All resources](../methods.md)

## list

List support automation rules

[API reference](https://sell.app/docs/api/support-automation-rules/list-support-automation-rules) · Effect: **read**

```php
public function list(
        ?int $limit = null,
        ?int $page = null,
        \SellApp\Resource\SupportReasonsActiveState $activeState = \SellApp\Resource\SupportReasonsActiveState::All,
        \SellApp\Resource\SupportAutomationRulesArchiveState $archiveState = \SellApp\Resource\SupportAutomationRulesArchiveState::Current,
        ?string $search = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\PaginatedResponse
```

| Argument | Native type | Required |
| --- | --- | --- |
| limit | `?int` | No |
| page | `?int` | No |
| activeState | `\SellApp\Resource\SupportReasonsActiveState` | No |
| archiveState | `\SellApp\Resource\SupportAutomationRulesArchiveState` | No |
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

$result = $client->supportAutomationRules()->list();
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

Create a support automation rule

[API reference](https://sell.app/docs/api/support-automation-rules/create-a-support-automation-rule) · Effect: **consequential**

```php
public function create(
        string $name,
        ?int $responseTemplateId,
        ?\SellApp\Resource\MatchReasonSource $matchReasonSource = null,
        ?string $matchReasonCode = null,
        ?array $matchProductIds = null,
        ?\SellApp\Resource\MatchCustomerFilter $matchCustomerFilter = null,
        ?\SellApp\Resource\HistoryWindow $historyWindow = null,
        ?int $matchMinOrderTotalCents = null,
        ?int $matchMaxOrderTotalCents = null,
        ?int $minCompletedOrders = null,
        ?int $maxCompletedOrders = null,
        ?int $minLifetimeSpendCents = null,
        ?int $maxLifetimeSpendCents = null,
        ?int $minPriorTicketCount = null,
        ?int $maxPriorTicketCount = null,
        ?int $minPriorSupportRefundCount = null,
        ?int $maxPriorSupportRefundCount = null,
        ?int $minPriorSupportRefundCents = null,
        ?int $maxPriorSupportRefundCents = null,
        ?int $customerAgeDaysMin = null,
        ?int $customerAgeDaysMax = null,
        ?\SellApp\Resource\ActionRefundKind $actionRefundKind = null,
        ?int $actionRefundPercentBasis = null,
        ?int $actionRefundFixedCents = null,
        ?int $actionRefundCapCents = null,
        ?\SellApp\Resource\Outcome $actionCloseOutcome = null,
        ?bool $isActive = null,
        ?int $id = null,
        ?bool $archived = null,
        ?string $currency = null,
        ?\DateTimeImmutable $createdAt = null,
        ?\DateTimeImmutable $updatedAt = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkCreateSupportAutomationRuleResponseValue201ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| name | `string` | Yes |
| responseTemplateId | `?int` | Yes |
| matchReasonSource | `?\SellApp\Resource\MatchReasonSource` | No |
| matchReasonCode | `?string` | No |
| matchProductIds | `?array` | No |
| matchCustomerFilter | `?\SellApp\Resource\MatchCustomerFilter` | No |
| historyWindow | `?\SellApp\Resource\HistoryWindow` | No |
| matchMinOrderTotalCents | `?int` | No |
| matchMaxOrderTotalCents | `?int` | No |
| minCompletedOrders | `?int` | No |
| maxCompletedOrders | `?int` | No |
| minLifetimeSpendCents | `?int` | No |
| maxLifetimeSpendCents | `?int` | No |
| minPriorTicketCount | `?int` | No |
| maxPriorTicketCount | `?int` | No |
| minPriorSupportRefundCount | `?int` | No |
| maxPriorSupportRefundCount | `?int` | No |
| minPriorSupportRefundCents | `?int` | No |
| maxPriorSupportRefundCents | `?int` | No |
| customerAgeDaysMin | `?int` | No |
| customerAgeDaysMax | `?int` | No |
| actionRefundKind | `?\SellApp\Resource\ActionRefundKind` | No |
| actionRefundPercentBasis | `?int` | No |
| actionRefundFixedCents | `?int` | No |
| actionRefundCapCents | `?int` | No |
| actionCloseOutcome | `?\SellApp\Resource\Outcome` | No |
| isActive | `?bool` | No |
| id | `?int` | No |
| archived | `?bool` | No |
| currency | `?string` | No |
| createdAt | `?\DateTimeImmutable` | No |
| updatedAt | `?\DateTimeImmutable` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkCreateSupportAutomationRuleResponseValue201ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->supportAutomationRules()->create(
    name: 'Expired download links',
    matchReasonSource: 'store',
    matchReasonCode: 'download-link-expired',
    matchProductIds: [120],
    matchMaxOrderTotalCents: 5000,
    maxPriorSupportRefundCount: 0,
    responseTemplateId: 32,
    actionRefundKind: 'partial',
    actionRefundPercentBasis: 5000,
    actionRefundCapCents: 1000,
    actionCloseOutcome: 'refunded_partial',
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

Retrieve a support automation rule

[API reference](https://sell.app/docs/api/support-automation-rules/retrieve-a-support-automation-rule) · Effect: **read**

```php
public function get(
        int $supportAutomationRule,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkGetSupportAutomationRuleResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| supportAutomationRule | `int` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkGetSupportAutomationRuleResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->supportAutomationRules()->get(supportAutomationRule: 7);
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

Update a support automation rule

[API reference](https://sell.app/docs/api/support-automation-rules/update-a-support-automation-rule) · Effect: **consequential**

```php
public function replace(
        int $supportAutomationRule,
        ?string $name = null,
        ?\SellApp\Resource\MatchReasonSource $matchReasonSource = null,
        ?string $matchReasonCode = null,
        ?array $matchProductIds = null,
        ?\SellApp\Resource\MatchCustomerFilter $matchCustomerFilter = null,
        ?\SellApp\Resource\HistoryWindow $historyWindow = null,
        ?int $matchMinOrderTotalCents = null,
        ?int $matchMaxOrderTotalCents = null,
        ?int $minCompletedOrders = null,
        ?int $maxCompletedOrders = null,
        ?int $minLifetimeSpendCents = null,
        ?int $maxLifetimeSpendCents = null,
        ?int $minPriorTicketCount = null,
        ?int $maxPriorTicketCount = null,
        ?int $minPriorSupportRefundCount = null,
        ?int $maxPriorSupportRefundCount = null,
        ?int $minPriorSupportRefundCents = null,
        ?int $maxPriorSupportRefundCents = null,
        ?int $customerAgeDaysMin = null,
        ?int $customerAgeDaysMax = null,
        ?int $responseTemplateId = null,
        ?\SellApp\Resource\ActionRefundKind $actionRefundKind = null,
        ?int $actionRefundPercentBasis = null,
        ?int $actionRefundFixedCents = null,
        ?int $actionRefundCapCents = null,
        ?\SellApp\Resource\Outcome $actionCloseOutcome = null,
        ?bool $isActive = null,
        ?array $clear = null,
        ?\DateTimeImmutable $expectedUpdatedAt = null,
        ?int $id = null,
        ?bool $archived = null,
        ?int $priority = null,
        ?string $currency = null,
        ?\DateTimeImmutable $createdAt = null,
        ?\DateTimeImmutable $updatedAt = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkReplaceSupportAutomationRuleResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| supportAutomationRule | `int` | Yes |
| name | `?string` | No |
| matchReasonSource | `?\SellApp\Resource\MatchReasonSource` | No |
| matchReasonCode | `?string` | No |
| matchProductIds | `?array` | No |
| matchCustomerFilter | `?\SellApp\Resource\MatchCustomerFilter` | No |
| historyWindow | `?\SellApp\Resource\HistoryWindow` | No |
| matchMinOrderTotalCents | `?int` | No |
| matchMaxOrderTotalCents | `?int` | No |
| minCompletedOrders | `?int` | No |
| maxCompletedOrders | `?int` | No |
| minLifetimeSpendCents | `?int` | No |
| maxLifetimeSpendCents | `?int` | No |
| minPriorTicketCount | `?int` | No |
| maxPriorTicketCount | `?int` | No |
| minPriorSupportRefundCount | `?int` | No |
| maxPriorSupportRefundCount | `?int` | No |
| minPriorSupportRefundCents | `?int` | No |
| maxPriorSupportRefundCents | `?int` | No |
| customerAgeDaysMin | `?int` | No |
| customerAgeDaysMax | `?int` | No |
| responseTemplateId | `?int` | No |
| actionRefundKind | `?\SellApp\Resource\ActionRefundKind` | No |
| actionRefundPercentBasis | `?int` | No |
| actionRefundFixedCents | `?int` | No |
| actionRefundCapCents | `?int` | No |
| actionCloseOutcome | `?\SellApp\Resource\Outcome` | No |
| isActive | `?bool` | No |
| clear | `?array` | No |
| expectedUpdatedAt | `?\DateTimeImmutable` | No |
| id | `?int` | No |
| archived | `?bool` | No |
| priority | `?int` | No |
| currency | `?string` | No |
| createdAt | `?\DateTimeImmutable` | No |
| updatedAt | `?\DateTimeImmutable` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkReplaceSupportAutomationRuleResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->supportAutomationRules()->replace(
    supportAutomationRule: 7,
    name: 'Expired download links, first refund only',
    clear: ['match_max_order_total_cents'],
    expectedUpdatedAt: '2026-07-03T09:20:00.000000Z',
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

Update a support automation rule

[API reference](https://sell.app/docs/api/support-automation-rules/update-a-support-automation-rule) · Effect: **consequential**

```php
public function update(
        int $supportAutomationRule,
        ?string $name = null,
        ?\SellApp\Resource\MatchReasonSource $matchReasonSource = null,
        ?string $matchReasonCode = null,
        ?array $matchProductIds = null,
        ?\SellApp\Resource\MatchCustomerFilter $matchCustomerFilter = null,
        ?\SellApp\Resource\HistoryWindow $historyWindow = null,
        ?int $matchMinOrderTotalCents = null,
        ?int $matchMaxOrderTotalCents = null,
        ?int $minCompletedOrders = null,
        ?int $maxCompletedOrders = null,
        ?int $minLifetimeSpendCents = null,
        ?int $maxLifetimeSpendCents = null,
        ?int $minPriorTicketCount = null,
        ?int $maxPriorTicketCount = null,
        ?int $minPriorSupportRefundCount = null,
        ?int $maxPriorSupportRefundCount = null,
        ?int $minPriorSupportRefundCents = null,
        ?int $maxPriorSupportRefundCents = null,
        ?int $customerAgeDaysMin = null,
        ?int $customerAgeDaysMax = null,
        ?int $responseTemplateId = null,
        ?\SellApp\Resource\ActionRefundKind $actionRefundKind = null,
        ?int $actionRefundPercentBasis = null,
        ?int $actionRefundFixedCents = null,
        ?int $actionRefundCapCents = null,
        ?\SellApp\Resource\Outcome $actionCloseOutcome = null,
        ?bool $isActive = null,
        ?array $clear = null,
        ?\DateTimeImmutable $expectedUpdatedAt = null,
        ?int $id = null,
        ?bool $archived = null,
        ?int $priority = null,
        ?string $currency = null,
        ?\DateTimeImmutable $createdAt = null,
        ?\DateTimeImmutable $updatedAt = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkUpdateSupportAutomationRuleResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| supportAutomationRule | `int` | Yes |
| name | `?string` | No |
| matchReasonSource | `?\SellApp\Resource\MatchReasonSource` | No |
| matchReasonCode | `?string` | No |
| matchProductIds | `?array` | No |
| matchCustomerFilter | `?\SellApp\Resource\MatchCustomerFilter` | No |
| historyWindow | `?\SellApp\Resource\HistoryWindow` | No |
| matchMinOrderTotalCents | `?int` | No |
| matchMaxOrderTotalCents | `?int` | No |
| minCompletedOrders | `?int` | No |
| maxCompletedOrders | `?int` | No |
| minLifetimeSpendCents | `?int` | No |
| maxLifetimeSpendCents | `?int` | No |
| minPriorTicketCount | `?int` | No |
| maxPriorTicketCount | `?int` | No |
| minPriorSupportRefundCount | `?int` | No |
| maxPriorSupportRefundCount | `?int` | No |
| minPriorSupportRefundCents | `?int` | No |
| maxPriorSupportRefundCents | `?int` | No |
| customerAgeDaysMin | `?int` | No |
| customerAgeDaysMax | `?int` | No |
| responseTemplateId | `?int` | No |
| actionRefundKind | `?\SellApp\Resource\ActionRefundKind` | No |
| actionRefundPercentBasis | `?int` | No |
| actionRefundFixedCents | `?int` | No |
| actionRefundCapCents | `?int` | No |
| actionCloseOutcome | `?\SellApp\Resource\Outcome` | No |
| isActive | `?bool` | No |
| clear | `?array` | No |
| expectedUpdatedAt | `?\DateTimeImmutable` | No |
| id | `?int` | No |
| archived | `?bool` | No |
| priority | `?int` | No |
| currency | `?string` | No |
| createdAt | `?\DateTimeImmutable` | No |
| updatedAt | `?\DateTimeImmutable` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkUpdateSupportAutomationRuleResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->supportAutomationRules()->update(
    supportAutomationRule: 7,
    name: 'Expired download links, first refund only',
    clear: ['match_max_order_total_cents'],
    expectedUpdatedAt: '2026-07-03T09:20:00.000000Z',
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

## updateState

Update a support automation rule state

[API reference](https://sell.app/docs/api/support-automation-rules/change-a-support-automation-rule-state) · Effect: **consequential**

```php
public function updateState(
        int $supportAutomationRule,
        \SellApp\Resource\SdkUpdateSupportAutomationRuleStateRequestApplicationJsonState $state,
        ?\DateTimeImmutable $expectedUpdatedAt = null,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkUpdateSupportAutomationRuleStateResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| supportAutomationRule | `int` | Yes |
| state | `\SellApp\Resource\SdkUpdateSupportAutomationRuleStateRequestApplicationJsonState` | Yes |
| expectedUpdatedAt | `?\DateTimeImmutable` | No |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkUpdateSupportAutomationRuleStateResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->supportAutomationRules()->updateState(
    supportAutomationRule: 1,
    state: 'active',
    expectedUpdatedAt: '2026-07-03T09:20:00.000000Z',
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

Reorder support automation rules

[API reference](https://sell.app/docs/api/support-automation-rules/reorder-support-automation-rules) · Effect: **consequential**

```php
public function reorder(
        array $orderedRuleIds,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkReorderSupportAutomationRulesResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| orderedRuleIds | `array` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkReorderSupportAutomationRulesResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->supportAutomationRules()->reorder(orderedRuleIds: [7]);
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

## dryRun

Dry run support automation rules

[API reference](https://sell.app/docs/api/support-automation-rules/dry-run-support-automation-rules) · Effect: **read**

```php
public function dryRun(
        int $ticketId,
        ?\SellApp\RequestOptions $options = null,
    ): \SellApp\Resource\SdkDryRunSupportAutomationRulesResponseValue200ApplicationJson
```

| Argument | Native type | Required |
| --- | --- | --- |
| ticketId | `int` | Yes |
| options | `?\SellApp\RequestOptions` | No |

Returns: `\SellApp\Resource\SdkDryRunSupportAutomationRulesResponseValue200ApplicationJson`.

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use SellApp\Client;

$client = new Client(
    apiKey: getenv('SELLAPP_API_KEY'),
    baseUrl: getenv('SELLAPP_API_BASE_URL'),
    store: getenv('SELLAPP_STORE'),
);

$result = $client->supportAutomationRules()->dryRun(ticketId: 4821);
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

