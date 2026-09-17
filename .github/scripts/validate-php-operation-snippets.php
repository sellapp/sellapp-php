<?php

declare(strict_types=1);

$directory = $argv[1];
require $directory . '/vendor/autoload.php';
function captureArguments(...$arguments): array { return $arguments; }
$client = new SellApp\Client(apiKey: 'documentation-fixture', store: 'launch-lab');
$snippets = array_merge(...array_map(fn (string $name): array => json_decode(file_get_contents($directory . '/docs/' . $name), true, flags: JSON_THROW_ON_ERROR), ['operation-examples.json', 'operation-variants.json']));
$errors = [];
foreach ($snippets as $snippet) {
    try {
        token_get_all($snippet['content'], TOKEN_PARSE);
        if (!preg_match('/\$client->(\w+)\(\)->(\w+)\(([\s\S]*)\);/', $snippet['content'], $call)) {
            throw new RuntimeException('No SDK operation call found');
        }
        $method = new ReflectionMethod($client->{$call[1]}(), $call[2]);
        $arguments = eval('return captureArguments(' . $call[3] . ');');
        $parameters = [];
        foreach ($method->getParameters() as $parameter) {
            $parameters[$parameter->getName()] = $parameter;
            if (!$parameter->isOptional() && !array_key_exists($parameter->getName(), $arguments)) {
                throw new RuntimeException('Missing required argument ' . $parameter->getName());
            }
        }
        foreach ($arguments as $name => $value) {
            if (!isset($parameters[$name])) throw new RuntimeException('Unknown named argument ' . $name);
        }
    } catch (Throwable $error) {
        $errors[] = $snippet['operationId'] . ': ' . $error->getMessage();
    }
}
if ($errors) { fwrite(STDERR, implode("\n", $errors) . "\n"); exit(1); }
echo 'Parsed and signature-bound ' . count($snippets) . " PHP examples; no HTTP requests executed.\n";
