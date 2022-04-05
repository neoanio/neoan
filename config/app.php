<?php

return [

    'name' => env('APP_NAME', 'Neoan'),

    'debug' => env('APP_DEBUG', false),

    'default' => [

        'action' => 'Home',
        'function' => 'init',

        'controllerResolver' => fn(string $action) : string => "\\App\\Component\\{$action}\\{$action}Controller"
    ],

];