## Splitwise API Example in PHP ##

This is an example of Splitwise's API with oauth authentication.  After a few discussions with Splitwise's support staff, they use 3-leg oauth.  I have successfully made requests to their servers with google's oauth library (https://code.google.com/p/oauth-php) and is required in this example.  There are a few additional steps that that we must do before we are able to make requests to splitwise.

#### Before you begin ####

Be sure you have a [splitwise](http://www.splitwise.com) account, and a [registered application](https://secure.splitwise.com/oauth_clients)

#### config File Note ####

The config file in this example contains variables used in every example file.  It contains the user ID, consumer key and consumer secret key.

### 1. Create MySQL databases ###

Because Splitwise uses 3-Leg oauth, and I'm using google's oauth code, we require the use of a mysql database.  These tables are located in oauth/mysql/mysql.sql.  Be sure to create a user and execute these on a mysql server you have access to.

### 2. Client server setup ###
- `server_setup.php`

To make request to Splitwise, we need to add Splitwise's server and keys to into the database.  To do this in this example we need to call the authorize.php file.  This file creates the server with the consumer key and a user id (that pertains to your application).

### 3. Authenticate Client ###
- `authenticate.php`

This is where we send the user to their splitwise account to have them click "authorize" for us to query against their data.  Please take a look at this code, because there is an automatic redirect in this file.  The callback URL that is in this file is what Splitwise will redirect the user to after the user clicks "Authorize" with 2 get parameters: `oauth_token` and `oauth_verifier`.

### 4. Process the response from Splitwise ###
- `process_access_token.php`

After the user clicks "Authorize", they are redirected the URL that was passed in step 3.  The one function call in this file will process the response from splitwise, save it to the database, and request an access token from splitwise.

After this call, if it's successful, then you will have access the account using the user id that you have been using throughout this whole process for set up.

### Accessing Account Data ###
In the `api_calls` folder, you will find an example of the `get_expenses` api call.  This will execute with a response code of 200 if everything prior to this was successful.    

*Update:*  I forgot to remoge my project testing url and keys (which won't work now because the application was deleted.)  If you play with this example, be sure to set your keys and application URL.
