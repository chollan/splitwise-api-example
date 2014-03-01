<?php


/*
 * We will now request a token from splitwise 
 * this is when we will be sending the client to splitwise to authenticate the application you registered.
 * 
 */
require "oauth/OAuthStore.php";
require "oauth/OAuthRequester.php";
require "config.php";


// Obtain a request token from splitwises' servers
try{
	$token = OAuthRequester::requestRequestToken($key, $user_id, array('oauth_callback' => $callback_URL));
	$uri = $token['authorize_uri'] . '?oauth_token='.rawurlencode($token['token']);
	header('Location: '.$uri);
}catch(OAuthException2 $e){
	echo $e->getMessage();
}
