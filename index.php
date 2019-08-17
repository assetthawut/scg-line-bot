<?php 
    require "vendor/autoload.php";
    $httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('cUxb83lhQFSLy4Ezs/im8hOUp7ci1CIBMZvj+5VDck4fJ8onlzMloqM95nKDs1Hp4LGj3ujlvOyFmFzeFb+/nEPOlSbHgnELtszqBFCaYcs9cMw2m+jDHh6Nj74jZsYheXQPHe3GRo8n3TCSv4OAugdB04t89/1O/w1cDnyilFU=');
    $bot = new \LINE\LINEBot($httpClient, ['channelSecret' => 'baacaa0d19f543b23583afd2059b9a74']);
    $response = $bot->replyText('<reply token>', 'hello!');
    // echo "Test line bot";
    print_r($bot);
?>