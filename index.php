
<?php
//require the leaf php lib
require "vendor/autoload.php";
require_once "tokens.php";

$app = new Leaf\App;


$app->get('kabll/api/v1/draw/{jwt}', function ($jwt) {
    require "src/DBUtil.php";
    decodeToken($jwt,$database);

});

$app->run();