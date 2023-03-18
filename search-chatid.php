<?php 
$botToken = 'token boot telegram anda';

$getUpdatesUrl = "https://api.telegram.org/bot{$botToken}/getUpdates";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $getUpdatesUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);
curl_close($ch);

$data = json_decode($result, true);

$chatId = $data['result'][0]['message']['chat']['id'];

echo "Chat ID: " . $chatId;

?>