<?php
$storageFolders = [
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/bootstrap/cache',
];
foreach ($storageFolders as $folder) {
    if (!is_dir($folder)) {
        mkdir($folder, 0777, true);
    }
}

require __DIR__ . '/../public/index.php';