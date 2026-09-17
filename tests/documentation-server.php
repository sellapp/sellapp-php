<?php
declare(strict_types=1);

$mode = $argv[1];
$server = stream_socket_server('tcp://127.0.0.1:0', $errno, $error);
if (!$server) throw new RuntimeException($error);
echo parse_url('tcp://' . stream_socket_get_name($server, false), PHP_URL_PORT) . PHP_EOL;
flush();
$fixture = json_decode(file_get_contents(__DIR__ . '/Fixtures/list_list_products_response_value_200_application_json_property_data_item.json'), true, 512, JSON_THROW_ON_ERROR);
for ($page = 1; $page <= ($mode === 'pagination' ? 3 : 1); $page++) {
    $socket = stream_socket_accept($server, 10);
    if (!$socket) throw new RuntimeException('Documentation request did not arrive');
    $request = '';
    while (($line = fgets($socket)) !== false && trim($line) !== '') $request .= $line;
    if (!str_starts_with($request, 'GET /v2/products?') || stripos($request, 'Authorization: Bearer docs-dummy') === false || stripos($request, 'X-STORE: docs-store') === false) throw new RuntimeException('Unexpected documentation request');
    if ($mode === 'pagination' && !str_contains($request, 'page=' . $page)) throw new RuntimeException('Unexpected page number');
    $body = $fixture;
    $body['data'][0]['id'] = $page;
    $body['meta']['last_page'] = $mode === 'pagination' ? 3 : 1;
    if ($mode === 'empty' || ($mode === 'pagination' && $page === 2)) $body['data'] = [];
    $body['meta']['current_page'] = $page;
    $body['links']['next'] = $mode === 'pagination' && $page < 3 ? '?page=' . ($page + 1) : null;
    if ($mode === 'errors') $body = ['type' => 'authentication_error', 'code' => 'unauthenticated', 'message' => 'Dummy key rejected'];
    $json = json_encode($body, JSON_THROW_ON_ERROR);
    fwrite($socket, 'HTTP/1.1 ' . ($mode === 'errors' ? '401 Unauthorized' : '200 OK') . "\r\nContent-Type: application/json\r\nX-Request-ID: req-docs\r\nContent-Length: " . strlen($json) . "\r\nConnection: close\r\n\r\n" . $json);
    fclose($socket);
}
fclose($server);
