<?php
echo "Set your keys and callback URL before playing with this example!!";exit;

$key = "<<your Key>>";
$secret = "<<your secret>>";
$callback_URL = "http://your.project.com/process_access_token.php";


// Get the id of the current user which is in your application
// this ID has nothing to do with splitwise
$user_id = 1;

//since splitwise uses 3-Leg oauth calls, we need to set up a database. 
//this is also included with google's oauth library
$options = array('server' => 'localhost', 'username' => 'oauth',
         'password' => 'oauth',  'database' => 'OAuth');
$objStore = OAuthStore::instance('MySQL', $options);


?>
