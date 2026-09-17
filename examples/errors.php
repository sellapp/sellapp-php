<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use SellApp\Client;

$baseUrl = getenv('SELLAPP_API_BASE_URL');
if (!$baseUrl) {
    throw new RuntimeException('Set SELLAPP_API_BASE_URL before running this example');
}
$client = new Client(baseUrl: $baseUrl); // Reads SELLAPP_API_KEY and SELLAPP_STORE.

try {
    $page = $client->products()->list(limit: 1);
    echo 'Products on this page: ' . count($page->data) . PHP_EOL;
} catch (\SellApp\Exception\APIException $error) {
    echo $error->status . ' ' . $error->apiCode . ' ' . $error->getMessage()
        . ' ' . ($error->requestId ?? 'no request ID') . PHP_EOL;
} catch (\SellApp\Exception\TimeoutException $error) {
    echo 'Request timed out: ' . $error->getMessage() . PHP_EOL;
} catch (\SellApp\Exception\TransportException $error) {
    echo 'Connection failed: ' . $error->getMessage() . PHP_EOL;
}
