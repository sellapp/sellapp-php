# SellApp for PHP

Bring your SellApp catalog into a PHP app, build a checkout, or connect orders to
the tools you already use. This SDK is the PHP library that talks to the SellApp
API for you: call a method, get a typed PHP object back.

We'll start by reading one product and printing its name. A small first win;
your checkout can wait until the connection works.
Already know the basics? Jump to [configuration](https://github.com/sellapp/sellapp-php/blob/main/docs/usage.md#client-configuration) or the
[method index](https://github.com/sellapp/sellapp-php/blob/main/docs/methods.md).

## Install

The package requires **PHP 8.2 or newer within PHP 8** and **Composer 2**.
Composer installs Guzzle and checks the required PHP extensions.

From your application's directory, install [sellapp/sellapp from Packagist](https://packagist.org/packages/sellapp/sellapp):

```sh
composer require 'sellapp/sellapp:^0.1.1'
```

## Your first request

Let's ask your store for one product. This request only reads data.
You'll need two things:

- A secret API key with the `listing` ability: permission to read the catalog.
- Your store slug: the `launch-lab` part of `launch-lab.sell.app`.

The [authentication guide](https://sell.app/docs/api/authentication) covers key setup
and access rules. Keep the key on your server and out of Git.

Create an `examples/` directory beside your application's `vendor/` directory.
Save this complete program as `examples/first-request.php`. It loads Composer's
autoloader, creates the client, and asks for one product:

```php
<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use SellApp\Client;

$baseUrl = getenv('SELLAPP_API_BASE_URL');
if (!$baseUrl) {
    throw new RuntimeException('Set SELLAPP_API_BASE_URL before running this example');
}
$client = new Client(baseUrl: $baseUrl); // Reads SELLAPP_API_KEY and SELLAPP_STORE.

$page = $client->products()->list(limit: 1);
foreach ($page->data as $product) {
    echo $product->id . ' ' . $product->title . PHP_EOL;
}
if ($page->data === []) {
    echo 'No products yet. The request worked!' . PHP_EOL;
}
```

Then run these commands in a Bash-compatible terminal from your application's
root directory, replacing the key and store. The `export` lines set environment
variables: values your program reads without putting secrets in its source code.

```sh
export SELLAPP_API_KEY='replace-with-your-key'
export SELLAPP_STORE='launch-lab'
export SELLAPP_API_BASE_URL='https://sell.app/api'
php examples/first-request.php
```

The endpoint above reads your real store. `SELLAPP_API_BASE_URL` is an example
variable passed explicitly to the client, not a built-in SDK setting. The SDK uses
`SELLAPP_STORE` for the store slug, as in the API guides.

You'll see a product ID and title from your own store. No products yet? The
success message means the connection worked; there's simply nothing to list.

The result's `data` array holds the products on this page. Model properties
use camelCase, and date-time properties are `DateTimeImmutable` values.

## Account access and first-store setup

Create a user-owned key in [API keys](https://sell.app/user/api-tokens), even
before you have a store. Enable `account:read` for identity, store discovery and
permission inspection, and `stores:create` separately for store creation.
Identity, discovery, store detail by ID and creation omit `X-STORE`; permission
inspection and business requests select a store explicitly.

An unrestricted key covers current and future accessible stores. A selected-store
key covers only its fixed list; an empty list covers none. Membership and role
changes still apply. Selected-store keys cannot create stores. Existing keys do
not gain abilities automatically; `*` satisfies the new abilities while retaining
membership, role and restriction checks.

The [account guide](https://sell.app/docs/api/authentication#discover-your-account-before-selecting-a-store)
shows first-store creation, required idempotency keys, and bounded reads across
several stores with partial failures. Creation returns an ID and slug; use the
slug for subsequent product requests. Find your language's methods in the
[resource reference](https://github.com/sellapp/sellapp-php/blob/main/docs/methods.md). CLI and MCP connections retain browser OAuth.

## If the request fails

| Result | Next step |
| --- | --- |
| Empty product list | The read succeeded. Create a product when you are ready. |
| 401 | Check the selected credential and whether it has expired or been revoked. |
| 403 | Check the key's listing ability, selected-store restrictions and the account's current store permissions. Official CLI OAuth also requires its active grant. |
| 400 with a missing-store message | Set SELLAPP_STORE to an authorized store slug. |
| 429 | Follow Retry-After and the SDK's documented retry behavior. |

Keep the request ID when reporting an API failure. Never include credentials.

## Three useful next actions

1. [Create and edit a product](https://github.com/sellapp/sellapp-php/blob/main/docs/resources/products.md): exact signatures and complete examples.
2. [Read orders or create a checkout](https://github.com/sellapp/sellapp-php/blob/main/docs/resources/orders.md): inspect permissions and effects before changing a purchase.
3. [Read more than one page](https://github.com/sellapp/sellapp-php/blob/main/docs/usage.md): pagination, request controls, errors, and retry behavior.

## Reference and examples

- [Resource reference](https://github.com/sellapp/sellapp-php/blob/main/docs/methods.md)
- [Runnable examples](https://github.com/sellapp/sellapp-php/blob/main/examples/README.md)
- [API documentation](https://sell.app/docs/api)

## Support and releases

Find available packages and installation instructions in the [SDK guide](https://sell.app/docs/api/sdks).
[Report an SDK issue](https://github.com/sellapp/sellapp-php/issues).
Include the SDK version, runtime version, and a redacted reproduction.
Licensed under [MIT](https://github.com/sellapp/sellapp-php/blob/main/LICENSE.txt); see [third-party notices](https://github.com/sellapp/sellapp-php/blob/main/NOTICE.txt).
