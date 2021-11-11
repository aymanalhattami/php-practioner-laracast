<?php

return [
    'database' => [
        'connection' => 'mysql:host=localhost',
        'name' => 'mytodo',
        'username' => 'root',
        'password' => '',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];
