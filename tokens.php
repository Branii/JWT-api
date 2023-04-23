<?php
$xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><data></data>');
require "src/DBUtil.php";
require_once 'vendor/autoload.php'; // include the JWT library
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Firebase\JWT\SignatureInvalidException;

//define("TOKEN_KEY", "756569590b796ecdc0ea756569590b796ecdc0ea");
// define your payload
$payload = array(
    "uid" => 123,
    "username" => "braniibalck",
    "email" => "braniblack@hotmain.com",
    "iat" => time(),
    "exp" => time() + 60
);

// set your secret key
// $key = random_bytes(10);
// $secret_key = bin2hex($key);
// echo $secret_key;
// alg
$alg = "HS256";
$key = "756569590b796ecdc0ea756569590b796ecdc0ea";



$jwt = JWT::encode($payload, $key, $alg);
// create the JWT

// echo "\n\n\n";
//echo $jwt; // output the token

function decodeToken($jwt,$database){

    $TOKEN_KEY = "756569590b796ecdc0ea756569590b796ecdc0ea";

    try {
        // decode the JWT and verify the signature
        $decoded = JWT::decode($jwt, new Key($TOKEN_KEY, 'HS256'));
     
        //var_dump($decoded);
        
         $email = $decoded->email;
         
         $data = $database->select("jwt_user",[
                "email"
         ],[
            "email" => $email
        ]);

        if($data){
            
            $result = $database->select("jwt_data","*");
            echo json_encode($result);

        }else{
            echo json_encode(["error" => "This account does not has paid subscription"]);
            
        }
    } catch (SignatureInvalidException $e) {
        // handle invalid signature
        echo json_encode(["error" => "Invalid signature"]);
    } catch (Exception $e) {
        // handle other exceptions
        echo json_encode(["error" => $e->getMessage()]);
    }


}

?>