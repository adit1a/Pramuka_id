<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

putenv('APP_STORAGE=/tmp/storage');

$_ENV['APP_STORAGE'] = '/tmp/storage';
$_SERVER['APP_STORAGE'] = '/tmp/storage';

$folders = [
    '/tmp/storage',
    '/tmp/storage/app',
    '/tmp/storage/framework',
    '/tmp/storage/framework/cache',
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/framework/testing',
    '/tmp/storage/framework/views',
    '/tmp/storage/logs',
];

foreach ($folders as $folder) {

    if (!is_dir($folder)) {
        mkdir($folder, 0777, true);
    }

    chmod($folder, 0777);
}

require __DIR__ . '/../public/index.php';
return $app;

