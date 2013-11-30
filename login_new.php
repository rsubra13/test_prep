
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

#user->session_begin();
#cho $u;
#a=$auth->acl($user->data);

#user->setup('ucp');

session_start();
$usersSQL="SELECT * FROM Users WHERE Username='" . $_REQUEST['username'] . "'";
#$usersSQL="SELECT * FROM phpbb_users WHERE username='" . $_REQUEST['username'] . "'";

$myRsRes=mysql_query($usersSQL, $conn)
	or redirect_to("./login_new/alert.php");
$myRs=mysql_fetch_assoc($myRsRes);
	#or redirect_to("./login_new/index.php");
if (mysql_num_rows($myRsRes) != 0) 
{
	if ($myRs['Password']==md5($_REQUEST['password'])) 
	{
			$_SESSION['loggedInTest']="1";
			$_SESSION['username']=$myRs['Username'];
			$_SESSION['password']=$myRs['Password'];
			$_SESSION['firstname']=$myRs['FirstName'];
			$_SESSION['lastname']=$myRs['LastName'];
			$_SESSION['userID']=$myRs['ID'];
			$_SESSION['limited']=$myRs['Limited'];
			$_SESSION['limitedsubjects']=$myRs['LimitedSubjects'];

			echo "Final: Cool";
			redirect_to("./home_page/index.php");
	} else 
	{
		echo "Password Wrong , Login Failed.  Please try again";
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