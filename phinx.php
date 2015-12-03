<?php
    return [
        'paths' => [
            'migrations' => 'migrations',
        ],
        'environments' => [
            'default_migration_table' => 'migrations',
            'default_database'        => 'dev',
            'dev'                     => [
                'adapter' => 'mysql',
                'host'    => 'localhost',
                'name'    => 'task',
                'user'    => 'root',
                'pass'    => '',
            ],
        ],
    ];
