
html>
<head>
<title>Login</title>

<style type="text/css">
body {background-color:#b0c4de;}
</style>


</head>
<body>

<a href="./login_new/index.php" style="color: #003399" tabindex="1">Return to Login Page</a><!--END REGISTER BUTTON-->

<?php
include "./includes/conn.php";
include "./includes/includes.php";


define('IN_PHPBB', true);
$phpbb_root_path = './phpBB/';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
require($phpbb_root_path . 'common.' . $phpEx);
require($phpbb_root_path . 'includes/functions_user.' . $phpEx);
require($phpbb_root_path . 'includes/functions_module.' . $phpEx);

// Basic parameter data
$id   = request_var('i', '');
$mode = request_var('mode', '');

if (in_array($mode, array('login', 'logout', 'confirm', 'sendpassword', 'activate')))
{
  define('IN_LOGIN', true);
}

// Start session management
$u = $user->session_begin();
echo $u;
$a=$auth->acl($user->data);
$user->setup('ucp');
// Setting a variable to let the style designer know where he is...
$template->assign_var('S_IN_UCP', true);

#session_start();
#$usersSQL="SELECT * FROM Users WHERE Username='" . $_REQUEST['username'] . "'";
$usersSQL="SELECT * FROM phpbb_users WHERE username='" . $_REQUEST['username'] . "'";

$myRsRes=mysql_query($usersSQL, $conn)
	or redirect_to("./login_new/alert.php");
$myRs=mysql_fetch_assoc($myRsRes);
	#or redirect_to("./login_new/index.php");
if (mysql_num_rows($myRsRes) != 0) 
{
	if ($myRs['user_password']==md5($_REQUEST['password'])) 
	{
			#$_SESSION['loggedInTest']="1";
			#$_SESSION['username']=$myRs['Username'];
			#$_SESSION['password']=$myRs['Password'];
			#$_SESSION['firstname']=$myRs['FirstName'];
			#$_SESSION['lastname']=$myRs['LastName'];
			#$_SESSION['userID']=$myRs['ID'];
			#$_SESSION['limited']=$myRs['Limited'];
			#$_SESSION['limitedsubjects']=$myRs['LimitedSubjects'];

			echo "Final: Cool";
			redirect_to("./home_page/index.php");
	} else 
	{
		echo "Login Failed please try again";
		exit;
	}
}

else 
{
		echo '<script type="text/javascript">alert(\'Wrong username or password\')</script>';
		exit;
}



?>




</body>
</html>