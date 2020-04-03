<?php
function bot_error_log($text) {
    $handle = fopen('log.txt', 'a');
    $txt = '[ ' . date("Y-m-d H:i:s") . ' ] ' . $text . "\n";
    fwrite($handle, $txt);
    fclose($handle);
}

function reply($text) {
    bot_error_log($event['replyToken']);
    $client->replyMessage([
        'replyToken' => $event['replyToken'],
        'messages' => [
            [
                'type' => 'text',
                'text' => $text
            ]
        ]
    ]);
}
