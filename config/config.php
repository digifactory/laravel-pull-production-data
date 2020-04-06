<?php

return [
    'deploy_server' => env('DEPLOY_SERVER'),
    'deploy_path' => env('DEPLOY_PATH'),

    'timeout' => 900, // Set default to 15 minutes for larger database or storage size

    'database_connection' => config('database.default'),

    'paths' => [
        'mysql' => 'mysql', // Path to mysql binary on your local machine
        'mysqldump' => 'mysqldump', // Path to mysqldump binary on remote server
        'env' => 'public_html/' // The path from where the ssh client enters to the .env file
    ],
];
