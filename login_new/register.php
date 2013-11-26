<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>


<!--META-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GRE PREP </title>

<!--STYLESHEETS-->
<link href="css/style1.css" rel="stylesheet" type="text/css" />

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

<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>var __adobewebfontsappname__="dreamweaver"</script>
<script src="http://use.edgefonts.net/alex-brush:n4:default;aguafina-script:n4:default;arizonia:n4:default.js" type="text/javascript"></script>

</head>
<body class="register">

<!--WRAPPER-->
<div id="wrapper">

	<!--SLIDE-IN ICONS--><!--END SLIDE-IN ICONS-->

<!--LOGIN FORM-->
<form name="login-form" class="login-form" action="" method="post" height="400">

	<div align="center">
	  <!--HEADER-->
    </div>
	<div class="header"> <!--TITLE-->
      <h1 align="center" class="register" style="font-style: normal; font-weight: 400; font-family: aguafina-script;"><strong>User</strong> <strong>Registration</strong></h1>
    </div>
    <div align="center"><!--END HEADER-->
      
      <!--CONTENT-->
    </div>
    <div class="content">
      <div align="right">
        <p>
          <!--USERNAME-->
          <strong style="color: #999; text-align: left;">Your desired Username: </strong>
          </strong>   
          <input name="username" type="text" required="required" class="input username" onfocus="this.value=''" value="Username" />
        </p>
        <p>          <strong style="color: #999; text-align: left;">Any Password: </strong>
          </strong>
          <input name="password" type="password" required="required" class="input password" onfocus="this.value=''" value="Password" />
          <!--END PASSWORD--></p>
       
       
        <p><!--retype PASSWORD-->
          
          
          <strong style="color: #999">Re-type Password:</strong>
          <input name="retype password" type="password" required="required" class="input password" onfocus="this.value=''" value="retype Password" />
        </p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        
        <!--END PASSWORD-->
          
          <!--Major selected-->
            <p><!--Major Selected-->
          
          
          <strong style="color: #999">Valid Email ID:</strong>
          <input name="text" type="text" required="required" class="input major" id="text" onfocus="this.value=''" value="xxx@yyy.com" />
        </p>
        <p>&nbsp;</p>
        <p><!--END PASSWORD-->
        </p>
        <p><strong style="color: #999; text-align: left;"> You wanna do Masters in:
            </strong>
          <select name="select" required="required" id="select" title="subject area">
            <option value="1">Engineering &amp; Technology</option>
            <option value="2" selected="selected">Arts and Humanities</option>
            <option value="3">Life Sciences and Medicine</option>
            <option value="4">Natural Sciences</option>
            <option value="5">Social Sciences</option>
          </select>
          <label for="select">Selec<br />
            <br />
          <span style="text-align: left">t:</span></label>
          <span style="text-align: left"><strong style="color: #999; font-family: HelveticaNeue-Light, 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;">Your Current GRE score Range is :</strong>
          </span>
          <select name="select2" required="required" id="select2" tabindex="1" title="subject area">
            <option value="1">320 and above</option>
            <option value="2">311 -320</option>
            <option value="3">300-310</option>
            <option value="4">290-299</option>
            <option value="5">280-289</option>
          </select>
        </p>
      </div>
    </div>
    <div align="center"><!--END CONTENT-->
      
      <!--FOOTER-->
    </div>
    <div class="footer">
      <div align="center">
        <!--LOGIN BUTTON-->
        <input name="submit" type="submit" class="register" formaction="file:///E|/program_files/xampp1/htdocs/testprep/test_prep/home_page/index.php" value="Register" />
        <input name="cancel" type="submit" class="register" id="cancel" formaction="index.php" value="Cancel" /><!--END LOGIN BUTTON-->
        <!--REGISTER BUTTON-->
        <a href="index.php" style="color: #003399" tabindex="1">Return to Login Page</a><!--END REGISTER BUTTON-->
      </div>
    </div>
    <div align="center"><!--END FOOTER-->
      
    </div>
</form>
<!--END LOGIN FORM-->

</div>
<!--END WRAPPER-->

<!--GRADIENT--><div class="gradient">
  <canvas id="canvas"></canvas>
</div><!--END GRADIENT-->


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