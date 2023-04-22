<?php
require_once 'vendor/autoload.php'; // include the JWT library

// define your payload
$payload = array(
    "user_id" => 123,
    "username" => "john_doe",
    "email" => "john.doe@example.com"
);

// set your secret key
$secret_key = "my_secret_key";

// create the JWT
$jwt = \Firebase\JWT\JWT::encode($payload, $secret_key);

echo $jwt; // output the token
?>