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
<form name="login-form" class="login-form" action="../register_new.php" method="post" height="400">

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
          <input name="username" type="text" required="required" class="input username" onfocus="this.value=''" value="Username" />
        </p>

        <p> 

          <strong style="color: #999; text-align: left;">Any Password: </strong>
          <input name="password" type="password" required="required" class="input password" onfocus="this.value=''" value="Password" />
          <!--END PASSWORD--></p>
       
       
        <p>
          
          <strong style="color: #999">Confirm Password::</strong>
          <input name="confirm" type="password" required="required" class="input password" onfocus="this.value=''" value="retype Password" />
        </p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        
        <p><!--Major Selected-->
     
          <strong style="color: #999">Valid Email ID:</strong>
          <input name="email" type="text" required="required" class="input major" id="text" onfocus="this.value=''" value="xxx@yyy.com" />
        </p>
        <p>&nbsp;</p>


        <p><strong style="color: #999; text-align: left;"> Your Masters Breadth Area:
            </strong>
          <select name="select" required="required" id="select" title="subject area">
            <option value="Engineering">Engineering &amp; Technology</option>
            <option value="Arts">Arts and Humanities</option>
            <option value="Life Sciences">Life Sciences and Medicine</option>
            <option value="Natural Sciences">Natural Sciences</option>
            <option value="Social Sciences">Social Sciences</option>
          </select>

          <label for="select">Select <br />
            <br />
          <span style="text-align: left">t:</span></label>
          <span style="text-align: left">
            <strong style="color: #999; font-family: HelveticaNeue-Light, 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;">
            Your Current GRE score Range is :</strong>
          </span>
          <select name="select2" required="required" id="select2" tabindex="1" title="subject area">
            <option value="320 and above">320 and above</option>
            <option value="311 -320">311 -320</option>
            <option value="300-310">300-310</option>
            <option value="290-299">290-299</option>
            <option value="280-289">280-289</option>
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
        <input name="submit" type="submit" class="register" formaction="../register_new.php" value="Register" />
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




</body>
</html>

