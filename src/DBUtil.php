<?php

//include medoo PHP_ORM lib
require "vendor/autoload.php";
use Medoo\Medoo;

$database = new Medoo([
    // [required]
    'type' => 'mysql',
    'host' => 'localhost',
    'database' => 'jwt_db',
    'username' => 'root',
    'password' => 'root',
    // [optional] To enable logging. It is disabled by default for better performance.
    'logging' => true
    
]);
