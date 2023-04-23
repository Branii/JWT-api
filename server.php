<?php
require  'vendor/autoload.php';
use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
use MyApp\Chat;
require_once "src/Chat.php";

#console client
// $server = IoServer::factory(
//     new Chat(),
//     9000
// );


//web client
$server = IoServer::factory(
    new HttpServer(
        new WsServer(
            new Chat()
        )
    ),
    9000
);

echo "WebSocket server listening on port 9000\n";
$server->run();