<?php
declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;

final class DocumentationTest extends TestCase
{
    public function testExactDocumentationExamples(): void
    {
        $root = dirname(__DIR__);
        $this->assertStringContainsString(trim(file_get_contents($root . '/examples/first-request.php')), file_get_contents($root . '/README.md'));
        foreach (['first-request' => '1 test_title', 'empty' => 'No products yet', 'pagination' => '3 test_title', 'errors' => '401 unauthenticated Dummy key rejected req-docs'] as $mode => $expected) {
            $process = proc_open([PHP_BINARY, __DIR__ . '/documentation-server.php', $mode], [['pipe', 'r'], ['pipe', 'w'], ['pipe', 'w']], $pipes);
            $this->assertIsResource($process);
            $port = trim(fgets($pipes[1]));
            $this->assertMatchesRegularExpression('/^[0-9]+$/', $port);
            $previous = [];
            foreach (['SELLAPP_API_KEY' => 'docs-dummy', 'SELLAPP_STORE' => 'docs-store', 'SELLAPP_API_BASE_URL' => 'http://127.0.0.1:' . $port] as $key => $value) {
                $previous[$key] = getenv($key);
                putenv($key . '=' . $value);
            }
            try {
                ob_start();
                require $root . '/examples/' . ($mode === 'empty' ? 'first-request' : $mode) . '.php';
                $output = ob_get_clean();
                $this->assertStringContainsString($expected, $output);
                $this->assertSame('', stream_get_contents($pipes[2]));
                foreach ($pipes as $pipe) fclose($pipe);
                $this->assertSame(0, proc_close($process), 'Mock validates auth, path and page sequence');
            } finally {
                foreach ($previous as $key => $value) putenv($value === false ? $key : $key . '=' . $value);
                if (is_resource($process)) proc_terminate($process);
            }
        }
    }

    public function testExamplesRequireAnExplicitEndpoint(): void
    {
        $old = getenv('SELLAPP_API_BASE_URL');
        putenv('SELLAPP_API_BASE_URL');
        try {
            $this->expectException(\RuntimeException::class);
            $this->expectExceptionMessage('Set SELLAPP_API_BASE_URL');
            require dirname(__DIR__) . '/examples/first-request.php';
        } finally {
            putenv($old === false ? 'SELLAPP_API_BASE_URL' : 'SELLAPP_API_BASE_URL=' . $old);
        }
    }
}
