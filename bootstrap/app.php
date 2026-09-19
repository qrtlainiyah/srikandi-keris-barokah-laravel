<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

$app = Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        $exceptions->render(function (\Throwable $e) {
            return response("<pre style='padding:20px;background:#1a1a1a;color:#ff6b6b;font-family:monospace;white-space:pre-wrap;font-size:14px;'><b>Exception:</b> " . htmlspecialchars($e->getMessage()) . "\n\n<b>File:</b> " . htmlspecialchars($e->getFile()) . ":" . $e->getLine() . "\n\n<b>Trace:</b>\n" . htmlspecialchars($e->getTraceAsString()) . "</pre>", 500);
        });
    })->create();

if (isset($_SERVER['VERCEL']) || isset($_ENV['VERCEL']) || env('VERCEL') || (PHP_OS !== 'WINNT' && !is_writable(dirname(__DIR__).'/storage'))) {
    $app->useStoragePath('/tmp/storage');
}

return $app;
