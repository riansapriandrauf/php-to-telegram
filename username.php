<?php 
$botToken = 'Token boot telegram anda';
$username = 'username telegram target';
$message = 'Pesan Telegram mu';

$sendMessageUrl = "https://api.telegram.org/bot{$botToken}/sendMessage?chat_id={$username}&text={$message}";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $sendMessageUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);

$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>