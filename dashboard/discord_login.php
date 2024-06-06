
<?php
session_start();

$discord_client_id =  'XXXX';
$discord_client_secret =  'XXXX';
$discord_redirect_uri = 'http://XXXX/dashboard/redirect_uri.php'; 


$discord_auth_url = 'https://discord.com/api/oauth2/authorize?client_id=' . $discord_client_id . '&redirect_uri=' . urlencode($discord_redirect_uri) . '&response_type=code&scope=identify';


header('Location: ' . $discord_auth_url);
exit();
?>