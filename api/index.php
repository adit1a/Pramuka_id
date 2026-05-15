<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

define('APP_BOOTSTRAP_CACHE', '/tmp/storage/bootstrap/cache');

$_ENV['APP_STORAGE'] = '/tmp/storage';
$_SERVER['APP_STORAGE'] = '/tmp/storage';

$_ENV['APP_BOOTSTRAP_CACHE'] = '/tmp/storage/bootstrap/cache';
$_SERVER['APP_BOOTSTRAP_CACHE'] = '/tmp/storage/bootstrap/cache';

putenv('APP_STORAGE=/tmp/storage');
putenv('APP_BOOTSTRAP_CACHE=/tmp/storage/bootstrap/cache');

$folders = [
    '/tmp/storage/framework/cache',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/framework/views',
    '/tmp/storage/bootstrap/cache',
];

foreach ($folders as $folder) {
    if (!is_dir($folder)) {
        mkdir($folder, 0777, true);
    }
}

try {

    require __DIR__.'/../vendor/autoload.php';

    echo "AUTOLOAD OK<br>";

} catch (Throwable $e) {

    echo "AUTOLOAD ERROR:<br>";
    echo $e->getMessage();
    die();
}

try {

    $app = require_once __DIR__.'/../bootstrap/app.php';

    echo "BOOTSTRAP OK<br>";

    $kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

    $response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);
}
try {

    $kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

    $response = $kernel->handle(
        $request = Illuminate\Http\Request::capture()
    );

    echo "KERNEL OK<br>";

    $response->send();

    $kernel->terminate($request, $response);

} catch (Throwable $e) {

    echo "KERNEL ERROR:<br>";
    echo $e->getMessage();
    echo "<br><br>";
    echo $e->getTraceAsString();
}
return $app;

