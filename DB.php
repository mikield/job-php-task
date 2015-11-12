<?php
include 'vendor/autoload.php';
$dbConfig = include 'phinx.php';
$selectedDBConfig = $dbConfig['environments'][$dbConfig['environments']['default_database']];
$db = new MeekroDB($selectedDBConfig['host'], $selectedDBConfig['user'], $selectedDBConfig['pass'], $selectedDBConfig['name']);
$db->throw_exception_on_error = true;
$db->error_handler = false;
return $db;
