<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use SellApp\Client;

$baseUrl = getenv('SELLAPP_API_BASE_URL');
if (!$baseUrl) {
    throw new RuntimeException('Set SELLAPP_API_BASE_URL before running this example');
}
$client = new Client(baseUrl: $baseUrl); // Reads SELLAPP_API_KEY and SELLAPP_STORE.

// Keep a finite page budget; your catalog may be bigger than your terminal.
for ($pageNumber = 1; $pageNumber <= 100; $pageNumber++) {
    $page = $client->products()->list(limit: 20, page: $pageNumber);
    foreach ($page->data as $product) {
        echo $product->id . ' ' . $product->title . PHP_EOL;
    }
    $lastPage = $page->meta['last_page'] ?? null;
    if ((is_int($lastPage) && $pageNumber >= $lastPage)) {
        break;
    }
    if ($pageNumber === 100) {
        throw new RuntimeException('Page budget reached; resume from page 101');
    }
}
