<?php



require "vendor/autoload.php";

$access_token = 'uB+caqQPQ4E0qTpMIebEgIU/LbqlqvKUna/RetLvgYz9eij00sCPPGtLxAV3yo7s4JI/0JxqlMLOk+T5WRKP7k26OrT46Z3o+eVfL6oYHk1sRgtwDzEcPZnvz0ES0Zl7s6wAwdLtyqp9/ZiQ9TXQ9gdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'bd2b748e66d2081807ad9281be4afe39';

$pushID = 'U68140a2a00330006c76aee0172d323a9'; //Id น้องโบนัส

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('สวัสดีน้องโบนัส จากพ่อหนึ่ง');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







