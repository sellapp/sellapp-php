# PHP examples

The [connected workflow](../tests/ConnectedWorkflowTest.php) creates a product and variant, reads and updates the returned product ID, uploads a file, and uses the returned variant and order IDs for checkout. It also checks pagination through an empty page, typed failures, and OAuth credential isolation. Run `vendor/bin/phpunit --filter ConnectedWorkflowTest`. The test uses a mock transport and dummy credentials; no requests reach a real store. Real catalog and checkout calls require the documented write permissions and can create customer-visible data or payment workflows; follow each operation’s retry rules.

Three small scripts, each with one job: read a product, walk the catalog, or
explain a failed request. No application framework needed.

Run `composer install` in the SDK checkout. Set the three variables in
[onboarding](../README.md#your-first-request), then run:

```sh
php examples/first-request.php
php examples/pagination.php
php examples/errors.php
```

Run them one at a time to see the difference. These complete files use Composer's
public autoloader. You may copy the directory
into another application with the SDK installed. Every request is read-only.
An explicit `SELLAPP_API_BASE_URL` is required; missing configuration never
silently selects production. Error handling here prints diagnostic information;
adapt it to your application's exit status or exception policy.

Want to try the checks without contacting your store? `composer test` runs these
exact files against a localhost mock (a small local stand-in for the API) with dummy
credentials, covering products, an empty store, two pages, and a 401 request ID.
