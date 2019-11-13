<?php

return [
    'deploy_server' => env('DEPLOY_SERVER'),
    'deploy_path' => env('DEPLOY_PATH'),
    'timeout' => 900, // set default to 15 minutes for larger database of storage size

    'database_connection' => config('database.default'),
];
