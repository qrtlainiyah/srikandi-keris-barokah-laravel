<?php

// Create necessary writable storage directories in /tmp for Vercel Serverless environment
$dirs = [
    '/tmp/storage/app',
    '/tmp/storage/app/public',
    '/tmp/storage/framework',
    '/tmp/storage/framework/cache',
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/framework/views',
    '/tmp/storage/logs',
];

foreach ($dirs as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }
}

if (!file_exists('/tmp/storage/logs/laravel.log')) {
    @touch('/tmp/storage/logs/laravel.log');
}

putenv('VIEW_COMPILED_PATH=/tmp/storage/framework/views');
putenv('APP_CONFIG_CACHE=/tmp/storage/framework/cache/config.php');
putenv('APP_EVENTS_CACHE=/tmp/storage/framework/cache/events.php');
putenv('APP_PACKAGES_CACHE=/tmp/storage/framework/cache/packages.php');
putenv('APP_ROUTES_CACHE=/tmp/storage/framework/cache/routes.php');
putenv('APP_SERVICES_CACHE=/tmp/storage/framework/cache/services.php');
putenv('LOG_CHANNEL=stderr');
putenv('SESSION_DRIVER=cookie');
putenv('CACHE_STORE=array');
putenv('APP_MAINTENANCE_DRIVER=file');
putenv('APP_MAINTENANCE_STORE=array');

try {
    require __DIR__ . '/../public/index.php';
} catch (\Throwable $e) {
    http_response_code(500);
    echo "<pre style='padding:20px;background:#1a1a1a;color:#ff6b6b;font-family:monospace;white-space:pre-wrap;'><b>Entrypoint Exception:</b> " . htmlspecialchars($e->getMessage()) . "\n\n<b>File:</b> " . htmlspecialchars($e->getFile()) . ":" . $e->getLine() . "\n\n<b>Trace:</b>\n" . htmlspecialchars($e->getTraceAsString()) . "</pre>";
}
