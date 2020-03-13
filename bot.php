<?php


$API_URL = 'https://api.line.me/v2/bot/message';
$ACCESS_TOKEN = 'jkT73l6R8lr/SXW+XgfZMM1sYsrCDM2f83eTFfp2pT+ze9jyi5H+LtJeFXN1F1dRv5cg9g6ur5AvV+6cdEkuOyG/+yzBbisfsxnHXiCxJkTe0/qCEU/LiQO9VqdwFxVtBJow4HKONCimHSGyuc2LmQdB04t89/1O/w1cDnyilFU='; 
$channelSecret = '033772c31790f5a6587121b093ce751c';


$POST_HEADER = array('Content-Type: application/json', 'Authorization: Bearer ' . $ACCESS_TOKEN);

$request = file_get_contents('php://input');   // Get request content
$request_array = json_decode($request, true);   // Decode JSON to Array



if ( sizeof($request_array['events']) > 0 ) {

    foreach ($request_array['events'] as $event) {

        $reply_message = '';
        $reply_token = $event['replyToken'];

        $text = $event['message']['text'];
        $content = [];
        if (strcmp($text, 'บริการของสยามเซอร์วิส') == 0) {
            $content = [['type' => 'image', 
                        'originalContentUrl' => 'https://sv1.picz.in.th/images/2020/03/13/QBaoJe.jpg', 
                        'previewImageUrl' => 'hhttps://sv1.picz.in.th/images/2020/03/13/QBalDt.jpg' ]];
        } elseif (strcmp($text, 'บริการของแฟลชโฮม') == 0) {
            $content = [['type' => 'image', 
                        'originalContentUrl' => 'https://sv1.picz.in.th/images/2020/03/13/QBasVv.jpg', 
                        'previewImageUrl' => 'https://sv1.picz.in.th/images/2020/03/13/QBaPEk.jpg' ]];
        } elseif (strcmp($text, 'บริการของแอร์เพย์') == 0) {
            $content = [['type' => 'image', 
                        'originalContentUrl' => 'https://sv1.picz.in.th/images/2020/03/13/QBaCYE.png', 
                        'previewImageUrl' => 'https://sv1.picz.in.th/images/2020/03/13/QBauRN.png' ],
                       ['type' => 'image', 
                        'originalContentUrl' => 'https://sv1.picz.in.th/images/2020/03/13/QBa6uV.png', 
                        'previewImageUrl' => 'https://sv1.picz.in.th/images/2020/03/13/QBanMQ.png' ]];
        } elseif (strcmp($text, 'เมนูน้ำสมุนไพร') == 0) {
            $content = [['type' => 'image', 
                        'originalContentUrl' => 'https://sv1.picz.in.th/images/2020/03/13/QBae69.jpg', 
                        'previewImageUrl' => 'https://sv1.picz.in.th/images/2020/03/13/QBaAhl.jpg' ]];
        } elseif (strcmp($text, 'เมนู GATTO') == 0) {
            $content = [['type' => 'image', 
                        'originalContentUrl' => 'https://sv1.picz.in.th/images/2020/03/13/QBamMJ.jpg', 
                        'previewImageUrl' => 'https://sv1.picz.in.th/images/2020/03/13/QBaF1b.jpg' ]];
        } elseif (strcmp($text, 'เรียกพนักงาน @bnalive') == 0) {
            $content = [['type' => 'text', 
                        'text' => '@siamsupermart กำลังให้บริการ ครับ']];
        }
        
        
        if ($content && array_filter($content) != null) {
            $data = [
                'replyToken' => $reply_token,
                // 'messages' => [['type' => 'text', 'text' => json_encode($request_array) ]]  Debug Detail message
                'messages' => $content
            ];

            $post_body = json_encode($data, JSON_UNESCAPED_UNICODE);

            $send_result = send_reply_message($API_URL.'/reply', $POST_HEADER, $post_body);

            echo "Result: ".$send_result."\r\n";
        }
    }
}

echo "OK";




function send_reply_message($url, $post_header, $post_body)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $post_header);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_body);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    $result = curl_exec($ch);
    curl_close($ch);

    return $result;
}

?>
