<?php

require "src/DBUtil.php";
//------------------------------------
$data = $database->select("jwt_user", [
	"username",
	"email",
    "password"
]);

echo json_encode($data);

//------------------------------------


