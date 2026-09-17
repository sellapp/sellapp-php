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
