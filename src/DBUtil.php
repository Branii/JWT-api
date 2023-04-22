<?php

//include medoo PHP_ORM lib
require "vendor/autoload.php";
//require  'Medoo.php';
use Medoo\Medoo;
class DBUtil{

    private $database;
    
public function __construct() {
  
}

//create connection to MySQL database
public function getConnection(){

    $this->database = new Medoo([
        // [required]
        'type' => 'mysql',
        'host' => 'localhost',
        'database' => 'jwt_db',
        'username' => 'root',
        'password' => 'root',
        // [optional] To enable logging. It is disabled by default for better performance.
        'logging' => true
       
    ]);

    return $this->database;

}

}