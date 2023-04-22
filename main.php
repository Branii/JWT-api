<?php
require_once 'vendor/autoload.php'; // include the JWT library
use \Firebase\JWT\JWT;

// define your payload
$payload = array(
    "user_id" => 123,
    "username" => "braniibalckk",
    "email" => "braniblack@hotmain.com"
);

// set your secret key
$secret_key = "my_secret_key";

// alg
$alg = "HS256";

// create the JWT
$jwt = JWT::encode($payload, $secret_key,$alg);

echo $jwt; // output the token

try {
    $decoded = JWT::decode($jwt, $secret_key, array('HS256'));
    print_r($decoded);
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}

?>