<?php

return [
    'app' => [
        'url' => $app->env('APP_URL', 'http://e2p3.alexandercosta.net'),
        'name' => $app->env('APP_NAME', '20 Sided Dice Game'),
        'timezone' => 'America/New_York',
        'email' => 'alex.costa.a@gmail.com'
    ],
    'database' => [
        'name' => 'p3',
        'username' => 'hes',
        'password' => 'helloworld!',
    ]
];
