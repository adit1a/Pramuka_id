<?php
$_ENV['APP_STORAGE'] = '/tmp/storage';
$_SERVER['APP_STORAGE'] = '/tmp/storage';

putenv('APP_STORAGE=/tmp/storage');

if (!is_dir('/tmp/storage/bootstrap/cache')) {
    mkdir('/tmp/storage/bootstrap/cache', 0777, true);
}

if (!is_dir('/tmp/storage/framework/views')) {
    mkdir('/tmp/storage/framework/views', 0777, true);
}

if (!is_dir('/tmp/storage/framework/cache')) {
    mkdir('/tmp/storage/framework/cache', 0777, true);
}

if (!is_dir('/tmp/storage/framework/sessions')) {
    mkdir('/tmp/storage/framework/sessions', 0777, true);
}
echo "<pre>";

echo "DIR:\n";
echo __DIR__ . "\n\n";

echo "Bootstrap Path:\n";
echo realpath(__DIR__ . '/../bootstrap') . "\n\n";

echo "Public Path:\n";
echo realpath(__DIR__ . '/../public') . "\n\n";

echo "APP_STORAGE:\n";
echo getenv('APP_STORAGE') . "\n\n";

echo "ENV TEST:\n";
var_dump($_ENV);

echo "\n\nTMP CHECK:\n";

$folders = [
    '/tmp/storage',
    '/tmp/storage/framework',
    '/tmp/storage/framework/cache',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/framework/views',
    '/tmp/storage/bootstrap',
    '/tmp/storage/bootstrap/cache',
];

foreach ($folders as $folder) {

    if (!is_dir($folder)) {
        mkdir($folder, 0777, true);
        echo "CREATED: $folder\n";
    } else {
        echo "EXISTS: $folder\n";
    }

    echo "WRITABLE: " . (is_writable($folder) ? 'YES' : 'NO') . "\n\n";
}

echo "DONE";
die();