<?php
// token bot Anda
$token = " ";
// chat ID obrolan
$chat_id = " ";
// pesan yang ingin dikirim
$message = "Hello, ini pesan dari PHP!";
// URL untuk mengirim pesan
$url = "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=".urlencode($message);
// kirim permintaan ke URL
file_get_contents($url);
?>
