<?php

return [
    'database' => [
        'name' => 'example_db',
        'username' => 'homestead',
        'password' => 'secret',
        'connection' => 'mysql:host=192.168.10.10',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];
