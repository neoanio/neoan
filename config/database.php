<?php

return [

    'driver' => env('DATABASE_DRIVER'),

    'drivers' => [

        'mysql' => [

            'host'     => env('DATABASE_HOST'),
            'port'     => env('DATABASE_PORT', 3306),
            'database' => env('DATABASE_NAME'),
            'user'     => env('DATABASE_USER'),
            'password' => env('DATABASE_PASSWORD'),
        ],
    ],

];