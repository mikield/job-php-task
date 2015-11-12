<?php
    return array(
        "paths" => array(
            "migrations" => "migrations"
        ),
        "environments" => array(
            "default_migration_table" => "migrations",
            "default_database" => "dev",
            "dev" => array(
                "adapter" => "mysql",
                "host" => 'localhost',
                "name" => 'task',
                "user" => 'root',
                "pass" => ''
            )
        )
    );