<?php
// token bot Anda
$token = "6117709271:AAGPDPczM9nAg0oquNo80zfIMQCKPACKjrs";
// chat ID obrolan
$chat_id = "5923791304";
// pesan yang ingin dikirim
$message = "Hello, ini pesan dari Dari Boot Pengingat. <3";
// URL untuk mengirim pesan
$url = "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=".urlencode($message);
// kirim permintaan ke URL
file_get_contents($url);
?>
