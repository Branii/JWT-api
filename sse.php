<?php

header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

while (true) {
    $data = [
        'time' => date("H:i:s"),
        'message' => 'Hello, world!33333333'
    ];

    echo 'data: ' . json_encode($data) . "\n\n";
    flush();

    sleep(1);
}
?>
