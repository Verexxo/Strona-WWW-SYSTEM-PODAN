<?php
session_start();

if(isset($_GET['code'])) {
    $discord_client_id =  'XXXXX';
    $discord_client_secret =  'XXXXX';
    $discord_redirect_uri = 'http://XXXXXX/dashboard/redirect_uri.php'; 

    
    $token_request_url = 'https://discord.com/api/oauth2/token';
    $token_request_data = array(
        'client_id' => $discord_client_id,
        'client_secret' => $discord_client_secret,
        'grant_type' => 'authorization_code',
        'code' => $_GET['code'],
        'redirect_uri' => $discord_redirect_uri,
        'scope' => 'identify'
    );

    $token_request = curl_init($token_request_url);
    curl_setopt($token_request, CURLOPT_POST, true);
    curl_setopt($token_request, CURLOPT_POSTFIELDS, http_build_query($token_request_data));
    curl_setopt($token_request, CURLOPT_RETURNTRANSFER, true);
    $token_response = curl_exec($token_request);
    curl_close($token_request);

    $token_data = json_decode($token_response, true);

    if(isset($token_data['access_token'])) {
       
        $user_request_url = 'https://discord.com/api/users/@me';
        $user_request_headers = array(
            'Authorization: Bearer ' . $token_data['access_token']
        );

        $user_request = curl_init($user_request_url);
        curl_setopt($user_request, CURLOPT_HTTPHEADER, $user_request_headers);
        curl_setopt($user_request, CURLOPT_RETURNTRANSFER, true);
        $user_response = curl_exec($user_request);
        curl_close($user_request);

        $user_data = json_decode($user_response, true);

        if(isset($user_data['id'])) {
            
            $_SESSION['discord_id'] = $user_data['id'];
            $_SESSION['discord_username'] = $user_data['username'];
            $_SESSION['discord_avatar'] = 'https://cdn.discordapp.com/avatars/' . $user_data['id'] . '/' . $user_data['avatar'] . '.png';
            header('Location: index.php');
            exit();
        }
    }
}


header('Location: discord_login.php');
exit();
?>
