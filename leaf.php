<?php
//require the leaf php lib
require_once 'vendor/autoload.php';
$app = new Leaf\App();

$app->get('kabll/api/v1/draw/{$JsonWebToken}', function ($JsonWebToken) {

    echo $JsonWebToken;

});

$app->run();