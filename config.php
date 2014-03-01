<?php

$key = "X9mkOrdaZt53blFUAZBqKGVfRanfooiNEcEoWkg4";
$secret = "WXbEOZngyXDbKWo3P60hTeq8KT7qsumFbXwukmGy";
$callback_URL = "http://projects.curtisholland.com/splitwise/process_access_token.php";


// Get the id of the current user which is in your application
// this ID has nothing to do with splitwise
$user_id = 1;

//since splitwise uses 3-Leg oauth calls, we need to set up a database. 
//this is also included with google's oauth library
$options = array('server' => 'localhost', 'username' => 'oauth',
         'password' => 'oauth',  'database' => 'OAuth');
$objStore = OAuthStore::instance('MySQL', $options);


?>