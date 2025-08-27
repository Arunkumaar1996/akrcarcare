<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Maintenance mode
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Composer autoloader
require __DIR__.'/../vendor/autoload.php';

// Bootstrap the application
$app = require_once __DIR__.'/../bootstrap/app.php';

/** @var \Illuminate\Contracts\Http\Kernel $kernel */
$kernel = $app->make(Kernel::class);

// Capture the HTTP request
$request = Request::capture();

// Handle the request through the Kernel
$response = $kernel->handle($request);

// Send the response to the browser
$response->send();

// Terminate the Kernel (for middleware termination, logging, etc.)
$kernel->terminate($request, $response);
