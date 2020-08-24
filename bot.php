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
                        'originalContentUrl' => 'https://scontent.fnak3-1.fna.fbcdn.net/v/t1.0-9/117968953_2717519608485260_7304846207956371328_o.jpg?_nc_cat=105&_nc_sid=0debeb&_nc_ohc=d9oGcq-gu48AX95lNjE&_nc_ht=scontent.fnak3-1.fna&oh=dd30573a3254f9791154ce56e28ef0c6&oe=5F695448', 
                        'previewImageUrl' => 'https://scontent.fnak3-1.fna.fbcdn.net/v/t1.0-9/118137487_2717519575151930_1679849048473005771_n.jpg?_nc_cat=107&_nc_sid=0debeb&_nc_ohc=BU6yETm38_EAX8-05cA&_nc_ht=scontent.fnak3-1.fna&oh=7c1bf9ac22fda25718ce834dfa8679c1&oe=5F68EDB6' ]];
        } elseif (strcmp($text, 'บริการของแฟลชโฮม') == 0) {
            $content = [['type' => 'image', 
                        'originalContentUrl' => 'https://scontent.fnak3-1.fna.fbcdn.net/v/t1.0-9/118259264_2717518718485349_4692824437533581294_o.jpg?_nc_cat=111&_nc_sid=0debeb&_nc_ohc=MWgK-h-wViIAX8kSjwu&_nc_ht=scontent.fnak3-1.fna&oh=93ca6bf8f864f2011658bc9c9949ccc7&oe=5F67DD28', 
                        'previewImageUrl' => 'https://scontent.fnak3-1.fna.fbcdn.net/v/t1.0-9/118403818_2717518691818685_4660056128397161033_n.jpg?_nc_cat=105&_nc_sid=0debeb&_nc_ohc=FyhOoPWt1uMAX9jWzkG&_nc_ht=scontent.fnak3-1.fna&oh=cd5890acbc3f24bb17e8a8d7ddffc6a0&oe=5F6731D0' ]];
        } elseif (strcmp($text, 'บริการของแอร์เพย์') == 0) {
            $content = [['type' => 'image', 
                        'originalContentUrl' => 'https://scontent.fnak3-1.fna.fbcdn.net/v/t1.0-9/118209226_2717519281818626_8294990958346355237_o.png?_nc_cat=106&_nc_sid=0debeb&_nc_ohc=1qOlojOmOPUAX8MoaEC&_nc_ht=scontent.fnak3-1.fna&oh=fd55b494fc19fbf018db5e12039263b4&oe=5F699C4A', 
                        'previewImageUrl' => 'https://scontent.fnak3-1.fna.fbcdn.net/v/t1.0-9/117915197_2717519235151964_6979801145805612622_n.png?_nc_cat=108&_nc_sid=0debeb&_nc_ohc=d4R6QnLcaZsAX-_fToD&_nc_ht=scontent.fnak3-1.fna&oh=4f8a6cad86ee0488875aa913495693d3&oe=5F69CB7A' ],
                       ['type' => 'image', 
                        'originalContentUrl' => 'https://scontent.fnak3-1.fna.fbcdn.net/v/t1.0-9/118010576_2717519271818627_5621324536321344641_n.png?_nc_cat=107&_nc_sid=0debeb&_nc_ohc=f3b2FAS7eTsAX8XoFQ_&_nc_ht=scontent.fnak3-1.fna&oh=cc32b2f83bf2604add19b041f5881327&oe=5F69987A', 
                        'previewImageUrl' => 'https://scontent.fnak3-1.fna.fbcdn.net/v/t1.0-9/117969915_2717519248485296_7255607665299012765_n.png?_nc_cat=104&_nc_sid=0debeb&_nc_ohc=MehOyItPTtgAX_iQMQm&_nc_ht=scontent.fnak3-1.fna&oh=0a94429692648a8ead0c555aa37c5e4c&oe=5F69174F' ]];
        } elseif (strcmp($text, 'เมนูน้ำสมุนไพร') == 0) {
            $content = [['type' => 'image', 
                        'originalContentUrl' => 'https://scontent.fnak3-1.fna.fbcdn.net/v/t1.0-9/118067830_2717525768484644_8642224016747076054_o.jpg?_nc_cat=102&_nc_sid=0debeb&_nc_ohc=mTH8zIAUb24AX-DKs0o&_nc_ht=scontent.fnak3-1.fna&oh=aea026d83608814b0764b6d94e1841de&oe=5F686AF1', 
                        'previewImageUrl' => 'https://scontent.fnak3-1.fna.fbcdn.net/v/t1.0-9/118197485_2717525751817979_2194548654203665850_n.jpg?_nc_cat=111&_nc_sid=0debeb&_nc_ohc=vLGLQg87wr8AX9hftlr&_nc_ht=scontent.fnak3-1.fna&oh=c87ec8d5e4707c6a3c5404dd914f15dc&oe=5F68DAC2' ]];
        } elseif (strcmp($text, 'เมนู GATTO') == 0) {
            $content = [['type' => 'image', 
                        'originalContentUrl' => 'https://scontent.fnak3-1.fna.fbcdn.net/v/t1.0-9/117890211_2717519778485243_8230970006010490800_o.jpg?_nc_cat=103&_nc_sid=0debeb&_nc_ohc=ZiyKogzzzlkAX_usCGy&_nc_ht=scontent.fnak3-1.fna&oh=82bcce56319efe6db237eef3630b9f70&oe=5F69936A', 
                        'previewImageUrl' => 'https://scontent.fnak3-1.fna.fbcdn.net/v/t1.0-9/118112671_2717519731818581_8270525358875055378_n.jpg?_nc_cat=100&_nc_sid=0debeb&_nc_ohc=mmpmGClnAWQAX-Z1P0e&_nc_ht=scontent.fnak3-1.fna&oh=f1906911b1baa392c35401e784aa0bba&oe=5F6A22E0' ]];
        } elseif (strcmp($text, 'เรียกพนักงาน @bnalive') == 0) {
            $content = [['type' => 'text', 
                        'text' => 'ขออภัยครับ เรายังไม่มีบริการในส่วนนี้']];
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
