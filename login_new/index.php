<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>

<?php
include "../includes/timerhead.php";
include "../includes/conn.php";
include "../includes/includes.php";
include "../includes/nocache.php";
include "../includes/validation.php";

?>


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

	<?php
	  if (IPSESSIONS) {
	  	$strSQL="SELECT * FROM Sessions WHERE IP='" . $ip . "'";
	  } else {
	  	$strSQL="SELECT * FROM Sessions WHERE ID='" . $sessID . "'";
	  }

	  $result=mysql_query($strSQL, $conn)
	  	or $myVar=true;
	 
	  if (!isset($myVar)) {
		  $num_records=mysql_num_rows($result);
		  $row=mysql_fetch_array($result);
		  if ($num_records == 0) {
	  		$myVar = true;
		  } else {
		  	$myVar = false;
		  }
	  }

?>

<!--WRAPPER-->
<div id="wrapper">

	<!--SLIDE-IN ICONS--><!--END SLIDE-IN ICONS-->

<!--LOGIN FORM-->
<form name="login-form" class="login-form" action="../login_new.php" method="post">

	<!--HEADER-->
    <div class="header">    	
      <p>&nbsp;</p>
      <p><img src="images/gre_prep.jpg" width="150" height="63"  alt=""/></p>
      <p>&nbsp;</p>
    </div>
    <!--END HEADER-->
	
	<!--CONTENT-->
    <div class="content">
	<p>	<span style="text-align: justify; font-family: Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif; color: #666;">UserName :  </span>
	  <!--USERNAME-->
	  <input name="username" type="text"  class="input username" onfocus="this.value=''" value="username" maxlength="20" /><!--END USERNAME--></p>
	<p>&nbsp;</p>

	<p><span style="font-family: Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif; color: #666;">Password : </span>	  <!--PASSWORD-->
	    <input name="password" type="password" class="input password" onfocus="this.value=''" value="password" />
	  </p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>

	<p style="font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; color: #999;">(Password should be of minimum 5 digits with one number 0-9 in it)</p>
	<!--END PASSWORD-->
    </div>
    <!--END CONTENT-->
    
    <!--FOOTER-->
    <div class="footer">
    <p>
      <!--LOGIN BUTTON--> 
      </p>
    <p>
      <input type="submit" name="submit" value="Login" class="button" />
      <!--END LOGIN BUTTON-->
      <!--REGISTER BUTTON--><input name="submit" type="submit" autofocus="autofocus" class="button" formaction="register.php" formmethod="GET" value="Register" />
      <a href="register.php"></a></p>
    <!--END REGISTER BUTTON-->
    </div>
    <!--END FOOTER-->

</form>
<!--END LOGIN FORM-->

</div>
<!--END WRAPPER-->

<!--GRADIENT-->
<div class="gradient">s</div><!--END GRADIENT-->





</body>
</html>