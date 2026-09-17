# PHP usage details

[Back to onboarding](../README.md)

Your first request is working. Here's what changes when you need a whole catalog,
a useful error report, or a request that changes store data.

## Pagination

Think of `limit` as the page size and `page` as the page number.
Product listings accept `limit` (1–100; the API defaults to 15) and numeric
`page` values. [pagination.php](../examples/pagination.php) stops at the returned
`meta['last_page']`, or a 100-page budget. Metadata keeps its
wire names; product model properties use camelCase. `links.next` is informational,
not an instruction to send your credentials to another host.

## Errors

An API error means SellApp answered but could not complete the request. A transport
error means the request could not make the trip. Handle those separately when your
app needs different recovery steps.

`SellApp\Exception\APIException` exposes `type`, `apiCode`, `status`,
`param`, `requestId`, `docsUrl`, and `getMessage()`. The request ID comes
from the body's `request_id`, falling back to `X-Request-ID`; it may be absent.
`AuthenticationException` reports missing local credentials. Network failures
use `TransportException`, timeouts use `TimeoutException`, and invalid JSON
or model data uses `SerializationException`. All derive from `SDKException`.
Keep credentials out of logs; a request ID is the useful breadcrumb.

## Retries, timeouts, and writes

Retrying means sending a request again after a failure. That's useful for a brief
outage; it needs more care when the request creates or changes something.

The runtime defaults to three additional attempts. Only safe HTTP methods, or a
POST whose operation declares idempotency and carries a nonblank key, can retry
transient transport failures or HTTP 408, 409, 429, and 5xx responses. Backoff is
exponential with bounded jitter and honors bounded integer-seconds or HTTP-date
`Retry-After`. The timeout applies to each Guzzle request,
so retries and waiting can extend the total duration.

For a write that cannot safely repeat, set `maxRetries: 0` on the client or pass
`new SellApp\RequestOptions(maxRetries: 0)` as the operation's `options`
argument. Request options also accept `idempotencyKey` and `headers`.
An idempotency key identifies one intended change so a supporting endpoint can
recognize repeated attempts. The SDK does not generate these keys. Where the
endpoint declares an idempotency parameter, use one stable key for attempts at the same intended change;
an arbitrary header does not make every endpoint idempotent.

See [API idempotency](https://sell.app/docs/api/idempotency) and
[API errors](https://sell.app/docs/api/errors). The runnable error example only
performs a read and reports failures when they occur; it does not create one.

## Client configuration

The environment is enough to get started. When your app needs different settings,
use named arguments to `new SellApp\Client(...)`. Explicit credentials override
environment values; each operation checks its required credential before sending.
It sends your key in `Authorization: Bearer …` and your store in `X-STORE`.

| Argument | Default | Meaning |
| --- | --- | --- |
| `apiKey` | `SELLAPP_API_KEY` | Secret key without the Bearer prefix |
| `store` | `SELLAPP_STORE` | Store slug |
| `baseUrl` | `https://sell.app/api` | API base including `/api` |
| `timeout` | `60` | Positive Guzzle request timeout in seconds |
| `maxRetries` | `3` | Additional attempts; `0` disables retries |
| `handler` | `null` | Optional Guzzle handler stack |

Use accessToken with store for OAuth business operations, or customerSession for
the customer portal. Seller credentials cannot replace customer sessions. When both
seller credentials are configured, supported v2 calls prefer accessToken; v1 calls
use apiKey. API keys can omit store for v2 operations.

OAuth management calls select their installation without a store header. Protocol
calls use the authorization server origin without /api; authorizationBaseUrl can
override it for testing. clientBasic accepts [client ID, secret]; do not also send
body client_id or client_secret. browserSession accepts the complete Cookie header
for consent forms. Anonymous operations send no credentials. Redirects return
Location without following it; the raw-response facade retains headers and status.

Token exchanges and customer-session creation never retry automatically. Serialize
refreshes per installation and save replacement tokens together. Do not blindly
repeat a refresh after losing its response.

There is no timeout environment override. Calls are synchronous and return typed
results; the client has no explicit close or disposal method.

## Pages and failures

More than one product? The API sends a page at a time rather than your entire
catalog. The [pagination example](https://github.com/sellapp/sellapp-php/blob/main/examples/pagination.php) asks for numbered pages
and stops at a defined limit. `PaginatedResponse` exposes `data`, `meta`,
`links`, and `listMetadata`; `getNextPage()` and `items()` traverse trusted
page-number metadata with optional item/page budgets.

If a request fails, start with what it tells you. The [error example](https://github.com/sellapp/sellapp-php/blob/main/examples/errors.php)
separates API rejections from timeouts and connection failures, then prints the
available details. Check the key for a 401, permissions for a 403, and the store
slug or resource ID for a 404.

API errors expose `status`, `apiCode`, and `requestId`. Use `apiCode` for
the API's string code; PHP's inherited `getCode()` gives you the HTTP status.
Before making writes, read [the retry rules](https://github.com/sellapp/sellapp-php/blob/main/docs/usage.md#retries-timeouts-and-writes):
this client can retry them too.
