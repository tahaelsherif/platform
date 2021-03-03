<?php

header('Access-Control-Allow-Origin', '*');
header('Access-Control-Allow-Methods', 'GET, POST, OPTIONS');
header('Access-Control-Allow-Headers', 'DNT,X-ApiKey,Keep-Alive,User-Agent,X-Requested-With,If-Modified-Since,Cache-Control,Content-Type,Content-Range,Range');
header('Access-Control-Expose-Headers', 'DNT,X-ApiKey,Keep-Alive,User-Agent,X-Requested-With,If-Modified-Since,Cache-Control,Content-Type,Content-Range,Range');

require_once __DIR__.'/../vendor/autoload.php';

try {
    (new Dotenv\Dotenv(__DIR__.'/../'))->load();
} catch (Dotenv\Exception\InvalidPathException $e) {
    //
}


// Ushahidi: load transitional code
require_once __DIR__.'/../src/Init.php';

$app = require __DIR__.'/lumen.php';




return $app;
