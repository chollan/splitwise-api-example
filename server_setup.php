<?php
/*
 * We need to do some initial set up for the oauth client you'll be running
 * this will be using a mysql backend
 * 
 */

//we need to include google's oauth library in the oauth directory
require "oauth/OAuthStore.php";
require "oauth/OAuthRequester.php";
require "config.php";


// The server description
//this will be saved in the DB
$server = array(
    'consumer_key' => $key,
    'consumer_secret' => $secret,
    'server_uri' => 'https://secure.splitwise.com/api/v2.0',
    'signature_methods' => array('HMAC-SHA1'),
    'request_token_uri' => 'https://secure.splitwise.com/api/v2.0/get_request_token',
    'authorize_uri' => 'https://secure.splitwise.com/authorize',
    'access_token_uri' => 'https://secure.splitwise.com/api/v3.0/get_access_token'
);

// Save the server in the the OAuthStore
$consumer_key = $objStore->updateServer($server, $user_id);
echo "Setup Compelete<br>";
echo $consumer_key;
?>