<?php $botkey = '469634565:AAEjyt-8EAQrCmlNTvXctdxaBzsIzBbjNXk'; //key полученный от botfather
$webhook = "https://".$_SERVER['HTTP_HOST']."/".$_SERVER['REQUEST_URI'];
$sendto = "https://api.telegram.org/bot$botkey/setWebhook?url=".urlencode($webhook);
echo file_get_contents($sendto); 
?>