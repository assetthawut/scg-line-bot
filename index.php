<?php 
    require "vendor/autoload.php";
    $httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('cUxb83lhQFSLy4Ezs/im8hOUp7ci1CIBMZvj+5VDck4fJ8onlzMloqM95nKDs1Hp4LGj3ujlvOyFmFzeFb+/nEPOlSbHgnELtszqBFCaYcs9cMw2m+jDHh6Nj74jZsYheXQPHe3GRo8n3TCSv4OAugdB04t89/1O/w1cDnyilFU=');
    $bot = new \LINE\LINEBot($httpClient, ['channelSecret' => 'baacaa0d19f543b23583afd2059b9a74']);
    $body 	   = file_get_contents('php://input');
    // $data = json_decode($body, true);
    // print_r($data);

    // $response = $bot->replyText('baacaa0d19f543b23583afd2059b9a74', 'hello!');
    // // echo "Test line bot";
    // print_r($bot);
    // $body 	   = file_get_contents('php://input');
    // foreach ($data['events'] as $event)
	// {
	// 	$userMessage = $event['message']['text'];
	// 	if(strtolower($userMessage) == 'halo')
	// 	{
	// 		$message = "Halo juga";
    //         $textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($message);
	// 		$result = $bot->replyMessage($event['replyToken'], $textMessageBuilder);
	// 		return $result->getHTTPStatus() . ' ' . $result->getRawBody();
		
	// 	}
	// }
	

?>