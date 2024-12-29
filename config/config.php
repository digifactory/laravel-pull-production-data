<?php

return [
    'deploy_server' => env('DEPLOY_SERVER'),
    'deploy_path' => env('DEPLOY_PATH'),

    'timeout' => 900, // Set default to 15 minutes for larger database or storage size

    'database_connection' => config('database.default'),

    'paths' => [
        'mysql' => 'mysql', // Path to mysql binary on your local machine
        'mysqldump' => 'mysqldump', // Path to mysqldump binary on remote server
        'env' => 'public_html/', // Path to the .env file relative to the SSH user's home directory
    ],

    'appending_commands' => [
        'commands' => [ // Add the commands you want to execute after Pull Production Data is finished
            'migrate' // As a default we run the `migrate` command to have all migrations completed after getting the production-database
        ],
        'display_output' => true, // Do you want to display the output of these commands
    ],
];
