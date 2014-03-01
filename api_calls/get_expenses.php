<?php

require "../oauth/OAuthStore.php";
require "../oauth/OAuthRequester.php";
require "../config.php";

$url = "https://secure.splitwise.com/api/v2.0/get_expenses";
$request = new OAuthRequester($url, "GET");
try{
	$result = $request->doRequest(1);
	echo "<pre>";
	print_r($result);
}catch(OAuthException2 $e){
	echo $e->getMessage();
}

?>