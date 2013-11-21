<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>


<!--META-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GRE PREP </title>

<!--STYLESHEETS-->
<link href="css/style.css" rel="stylesheet" type="text/css" />

<!--SCRIPTS-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
<!--Slider-in icons-->
<script type="text/javascript">
$(document).ready(function() {
	$(".username").focus(function() {
		$(".user-icon").css("left","-48px");
	});
	$(".username").blur(function() {
		$(".user-icon").css("left","0px");
	});
	
	$(".password").focus(function() {
		$(".pass-icon").css("left","-48px");
	});
	$(".password").blur(function() {
		$(".pass-icon").css("left","0px");
	});
});
</script>

</head>
<body>

<!--WRAPPER-->
<div id="wrapper">

	<!--SLIDE-IN ICONS-->
    <div class="user-icon"></div>
    <div class="pass-icon"></div>
    <!--END SLIDE-IN ICONS-->

<!--LOGIN FORM-->
<form name="login-form" class="login-form" action="" method="post">

	<!--HEADER-->
    <div class="header">
    <!--TITLE-->
    <h1>GRE PREP</h1>
    </div>
    <!--END HEADER-->
	
	<!--CONTENT-->
    <div class="content">
	<!--USERNAME--><input name="username" type="text" class="input username" value="Username" onfocus="this.value=''" /><!--END USERNAME-->
    <!--PASSWORD--><input name="password" type="password" class="input password" value="Password" onfocus="this.value=''" /><!--END PASSWORD-->
    </div>
    <!--END CONTENT-->
    
    <!--FOOTER-->
    <div class="footer">
    <!--LOGIN BUTTON--><input type="submit" name="submit" value="Login" class="button" /><!--END LOGIN BUTTON-->
    <!--REGISTER BUTTON--><input type="submit" name="submit" value="Register" class="register" /><!--END REGISTER BUTTON-->
    </div>
    <!--END FOOTER-->

</form>
<!--END LOGIN FORM-->

</div>
<!--END WRAPPER-->

<!--GRADIENT--><div class="gradient"></div><!--END GRADIENT-->


// <?php
// // #include "./includes/conn.php";
// // #include "./includes/includes.php";


// session_start();
// $usersSQL="SELECT * FROM Users WHERE Username='" . $_REQUEST['username'] . "'";
// $myRsRes=mysql_query($usersSQL, $conn)
	// or redirect_to("userLogin.php?id");
// $myRs=mysql_fetch_assoc($myRsRes)
	// or redirect_to("userLogin.php?iu");
// if (mysql_num_rows($myRsRes) != 0) {
	// if ($myRs['Password']==md5($_REQUEST['password'])) {
			// $_SESSION['loggedInTest']="1";
			// $_SESSION['username']=$myRs['Username'];
			// $_SESSION['password']=$myRs['Password'];
			// $_SESSION['firstname']=$myRs['FirstName'];
			// $_SESSION['lastname']=$myRs['LastName'];
			// $_SESSION['userID']=$myRs['ID'];
			// $_SESSION['limited']=$myRs['Limited'];
			// $_SESSION['limitedsubjects']=$myRs['LimitedSubjects'];
	// } else {
		// redirect_to("userLogin.php?ip");
		// exit;
	// }
// }
// // redirect_to("./login/rsubra1/Login_page/left/index.php");
// // ?>

</body>
</html>