<?php
// phpBB login integration
define ("PHPBB","0");
define ("PHPBB_PATH","/path/to/phpbb/");

// Handle sessions via IP address or cookies
define ("IPSESSIONS","0");

// Simple design settings
define ("TITLE", "WebTester Online Testing");
define ("BGCOLOR", "#FFFFFF");
define ("LOGOW", "337");
define ("LOGOH", "75");

// Global Test Settings
define ("DISABLE_GRADE", "0");   // Disables showing grade chart on the final grade page
define ("DISABLE_ANSWERS", "0"); // Disables showing answers on the final grade page
define ("DISABLE_PRINT", "1");   // Disables the ability to print
define ("EXPLAIN_ALL", "0");     // Forces explanation to be printed on all questions
define ("VERIFY_EMAIL", "0");    // Requires the email address to be entered twice
define ("CLOSE_WINDOW", "0");    // Closes window when 'Done' is pressed
define ("RETRY", "0");           // Places Retry button on grade page
define ("NODONE", "0");          // Removes Done button on grade page
define ("ALLOW_OVERRIDE", "0");  // Disables strict session checking
define ("SKIP_REVIEW", "0");     // Skip review page
define ("SHUFFLEANSWERS", "0");	 // Shuffle answers for each question

// LDAP Authentication Settings
define ("LDAP_ENABLED", "0");
define ("LDAP_SERVER", "127.0.0.1");
define ("LDAP_PREFIX", "cn=");
define ("LDAP_USERNAME", "username");
define ("LDAP_PASSWORD", "password");
define ("LDAP_SUFFIX", ",dc=company,dc=org");
define ("LDAP_SEARCH_ATTRIB", "uid");
define ("LDAP_SURNAME_ATTRIB", "sn");
define ("LDAP_GIVENNAME_ATTRIB", "givenname");
define ("LDAP_EMAIL_ATTRIB", "mail");




// Below is magic quotes code.  No need to modify 
// unless you *really* know what you are doing.  
// Code from php.net

//Make sure when reading file data,
//PHP doesn't "magically" mangle backslashes!
ini_set("magic_quotes_runtime", 0);

if (get_magic_quotes_gpc()) {
 $_SERVER = stripslashes_array($_SERVER);
 $_GET = stripslashes_array($_GET);
 $_POST = stripslashes_array($_POST);
 $_COOKIE = stripslashes_array($_COOKIE);
 $_FILES = stripslashes_array($_FILES);
 $_ENV = stripslashes_array($_ENV);
 $_REQUEST = stripslashes_array($_REQUEST);
 $HTTP_SERVER_VARS = stripslashes_array($HTTP_SERVER_VARS);
 $HTTP_GET_VARS = stripslashes_array($HTTP_GET_VARS);
 $HTTP_POST_VARS = stripslashes_array($HTTP_POST_VARS);
 $HTTP_COOKIE_VARS = stripslashes_array($HTTP_COOKIE_VARS);
 $HTTP_POST_FILES = stripslashes_array($HTTP_POST_FILES);
 $HTTP_ENV_VARS = stripslashes_array($HTTP_ENV_VARS);
 if (isset($_SESSION)) {  #These are unconfirmed (?)
   $_SESSION = stripslashes_array($_SESSION, '');
   $HTTP_SESSION_VARS = stripslashes_array($HTTP_SESSION_VARS, '');
 }
 /*
 The $GLOBALS array is also slash-encoded, but when all the above are
 changed, $GLOBALS is updated to reflect those changes. (Therefore
 $GLOBALS should never be modified directly). $GLOBALS also contains
 infinite recursion, so it's dangerous...
 */
}

function stripslashes_array($data) {
 if (is_array($data)){
   foreach ($data as $key => $value){
     $data[$key] = stripslashes_array($value);
   }
   return $data;
 }else{
   return stripslashes($data);
 }
}


?>