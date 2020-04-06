<?php

return [
    'deploy_server' => env('DEPLOY_SERVER'),
    'deploy_path' => env('DEPLOY_PATH'),

    'timeout' => 900, // Set default to 15 minutes for larger database or storage size

    'database_connection' => config('database.default'),

    'paths' => [
        'mysql' => 'mysql', // Path to mysql binary on your local machine
        'mysqldump' => 'mysqldump', // Path to mysqldump binary on remote server
        'env-prefix-path' => 'public_html/', // Path to the .env file relative to the SSH user's home directory
    ],
];
