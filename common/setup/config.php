<?php

return [
    'database' => [
        'name' => 'ergast',
        'username' => 'root',
        'password' => 'Passw0rd!',
        'connection' => 'mysql:host=127.0.0.1',
        'port' => '3307',
        'options' => [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    ]
];