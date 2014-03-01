<?php

/*
 * Here we're going to use the token returned from splitwise, and store the access token in the mysql database.
 * 
 */
 
require "oauth/OAuthStore.php";
require "oauth/OAuthRequester.php";
require "config.php";

$oauth_token = $_GET['oauth_token'];
$oauth_verifyer = $_GET['oauth_verifier'];

try
{
    $data = OAuthRequester::requestAccessToken($key, $oauth_token, $user_id,"POST", array('oauth_verifier' => $oauth_verifyer));
	echo "<pre>".print_r($data, true)."\n";
	echo "request ok";
}
catch (OAuthException2 $e)
{
	echo "<pre>";
	print_r($e);
    // Something wrong with the oauth_token.
    // Could be:
    // 1. Was already ok
    // 2. We were not authorized
}

?>