<?php
require_once 'vendor/autoload.php'; // include the JWT library
use \Firebase\JWT\JWT;

// define your payload
$payload = array(
    "user_id" => 123,
    "username" => "braniibalck",
    "email" => "braniblack@hotmain.com"
);

// set your secret key
$key = random_bytes(10);
$secret_key = bin2hex($key);
echo $secret_key;
// alg
$alg = "HS256";

// create the JWT
//echo $jwt; // output the token

// try {
//     $decoded = JWT::decode($jwt, $secret_key, $alg);
//     print_r($decoded);
// } catch (Exception $e) {
//     echo 'Caught exception: ',  $e->getMessage(), "\n";
// }

?>