<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php
error_reporting(0);
include "./includes/timerhead.php";
include "./includes/conn.php";
include "./includes/includes.php";

session_start();
if ($_SESSION['loggedInTest']!="1") {
	redirect_to("./userLogin.php?li=" . $_SESSION['loggedInTest']);
	exit;
}

$username=$_SESSION['loggedInName'];
$password=$_SESSION['password'];

?>
<!DOCTYPE html>
<html><!-- InstanceBegin template="/Templates/Test Layout.dwt.php" codeOutsideHTMLIsLocked="false" -->

<head>
<link href="./includes/wtstyle.css" rel="stylesheet"  type="text/css">
<?
// Copyright (C) 2003 - 2007 Eppler Software.  All rights reserved.
// Any redistribution or reproduction of any materials herein is strictly prohibited.
?>
<!-- InstanceBeginEditable name="doctitle" -->
<title>Welcome to test prep</title>
<!-- InstanceEndEditable --> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'> 
<!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
<style type="text/css">
input.next
{ 
  margin-top       : 1.6em;
  float            : right;
}
.t {background: url(images/dot.gif) 0 0 repeat-x; width: 20em}
.b {background: url(images/dot.gif) 0 100% repeat-x}
.l {background: url(images/dot.gif) 0 0 repeat-y}
.r {background: url(images/dot.gif) 100% 0 repeat-y}
.bl {background: url(images/bl.gif) 0 100% no-repeat}
.br {background: url(images/br.gif) 100% 100% no-repeat}
.tl {background: url(images/tl.gif) 0 0 no-repeat}
.tr {background: url(images/tr.gif) 100% 0 no-repeat; padding:10px}
p {font-family: sans-serif; text-align:left}
<?php
if (DISABLE_PRINT) {  ?>
@media print {
body {display:none}
<?php
}
?>
}

h2
{ 
        font-size: 40px;  
        margin-top: 0;  
        font-family: 'Lobster', helvetica, arial; 
		text-decoration: none;  
        color: #1D1D1D; 
		-webkit-mask-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0,0,0,1)), color-stop(50%, rgba(0,0,0,.5)), to(rgba(0,0,0,1))); 
        position:relative;
}
 h2:after {  
        color: #1D1D1D;  
        text-shadow: 0 1px 0 white;  
    }
	
h3{
  font-size: 2em;
  font-family: Georgia;
  letter-spacing: 0.1em;
  color: rgb(142,11,0);
  text-shadow: 1px 1px 1px rgba(255,255,255,0.6);
  position:relative
}

</style>
<script type="text/javascript">
function breakout_of_frame()
{
  if (top.location != location) {
    top.location.href = './wordmap.html?word=Abate';
	}
}
function breakout_of_frame1()
{
  if (top.location != location) {
    top.location.href = './wordmap.html?word=';
	}
}
</script>
</head>
<?php
	  if (IPSESSIONS) {
	  	$strSQL="SELECT * FROM Sessions WHERE IP='" . $ip . "'";
	  } else {
	  	$strSQL="SELECT * FROM Sessions WHERE ID='" . $sessID . "'";
	  }
	  // $strSQL="SELECT * From Sessions WHERE IP='" . $ip . "'";
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
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" bgcolor="<?=BGCOLOR?>">
<?php
include "./includes/top.php";
?>
<div align="center"> 
  <table width="100%" border="0" cellpadding="2" cellspacing="0">
    <tr> 
      <!-- <td height="47" align="left" valign="middle"><img src="./images/learning-words.jpg" width="<?=LOGOW?>" height="<?=LOGOH?>">
        <br>        
      </td>  -->
      <td align="center" valign="middle">
	            <?php if (!$myVar) { ?>
	      
        <div class="t"><div class="b"><div class="l"><div class="r"><div class="bl"><div class="br"><div class="tl">
		  <div class="tr"><font face="Arial, Helvetica, sans-serif"><?php echo($row['FirstName'] . $myVar . " " . $row['LastName']) ?><br>
		    <?php } ?>
        <?php
 if ($myVar != 1) {
 	if ($row['TestName'] != "") {
 ?>
        <?=$row['TestName']?><br>
		<div id="countdowncontainer"></div>
		<?
		if ($row['AllowQuit']) {
			if (!$row['review'] and !$quit) {
		?>
		<div id="quit"><a href="./quitTest.php">Quit</a></div>
		<? 		} 
			}?>
		</font> 
		</div></div></div></div></div></div></div></div>
        <?php
 }
}
?> 
</td>
    </tr>
	<div style="background:#E9E9E9">
	<tr style="background:#E9E9E9">
	<td>
	<h3 style='background:#E9E9E9'><strong>Available Lectures for <?=$_SESSION['firstname']?> <?=$_SESSION['lastname']?></strong></h3>
	</td>
	</tr>
	<tr style="background:#E9E9E9;align:center">
	<td><h2>Presentations</h2></td>
	<td><?=$id?></td>
	<tr>
	<tr>
	<td style="background:#E9E9E9">
		<iframe src="http://www.slideshare.net/slideshow/embed_code/27912068" width="500" height="300" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC;border-width:1px 1px 0;margin-bottom:5px" allowfullscreen> </iframe>
		</td>
	<td>
	</tr>
	<tr style="background:#E9E9E9;align:center">
	<td><br/><h2>Video Lectures</h2></td>
	</tr>
	<tr>
	<td style="background:#E9E9E9">
	<iframe width="560" height="315" src="//www.youtube.com/embed/hNgMRvRUQLU" frameborder="0" allowfullscreen></iframe>
	</td>
	</tr>
	</div>
    <tr> 
      <td colspan="2" align="left" valign="top"> <div class="hr">
        <hr />
      </div>       
        <!-- InstanceBeginEditable name="Content Area" -->
        
        <?php
		$limitedsubjects=explode(",",$_SESSION['limitedsubjects']);
		$subjectsfilter=implode(" OR ",$limitedsubjects);
	  if($_SESSION['limited']) {
	  	$strSQL="SELECT * FROM Tests WHERE Enabled=1 AND Subject=" . $subjectsfilter . " ORDER by TestName";
	  } else {
	  	$strSQL="SELECT * FROM Tests WHERE Enabled=1 ORDER by TestName";
	  }
	  $result=mysql_query($strSQL, $conn);
	  if($result) {
	  	$num_rows=mysql_num_rows($result);
	  } else {
	  	$num_rows=0;
	  }
	  
	  
	  $strActivitySQL = "SELECT * FROM activity WHERE username='".$_SESSION['firstname']."'";
	  $activityResult=mysql_query($strActivitySQL, $conn);
	  if($activityResult)
	  {
		 $act_rows = mysql_num_rows($activityResult);
	  }
	  else
	  {
		die('Unable to retrieve data');
	  }
	 ?>
	  <script language="javascript" type="text/javascript" src="includes/tableH.js"></script>
        <!-- <table width="100%"  border="0" cellspacing="2" cellpadding="0">
          <tr bgcolor="#EBEBEB">
            <td class="style1 style5"><?=$num_rows?> Tests/Quizzes</td>
          </tr>
        </table>
		-->
		
		<table class="style1 style5" width="100%"  border="0" cellspacing="2" cellpadding="0" onMouseOut="javascript:highlightTableRowVersionA(0);">
		<tr bgcolor="#C8D8FF">
			<td><strong>Activity</strong></td>
			<td><strong>Activity Description</strong></td>
			<td width="200px"><strong>Status</strong></td>
		</tr>
		<?php
		 if ($act_rows != 0) {
				while($a_row = mysql_fetch_assoc($activityResult)) {
				$i++;

	  ?>
		<tr class="d0">
			<td><?=$a_row['activity_name']?></td>
			<td><?=$a_row['activity_desc']?></td>
			<td><?=$a_row['status']?></td>
		</tr>
	</tr>
	 <?php
		}
	}
  ?>
		<table class="style1 style5" width="100%"  border="0" cellspacing="2" cellpadding="0" onMouseOut="javascript:highlightTableRowVersionA(0);">
		<tr bgcolor="#C8D8FF">
	<br>
	<br>
    <td><strong>Name</strong></td>
    <td width="240"><strong>Subject</strong></td>
  </tr>
  <?php
			if ($num_rows != 0) {
				while($row = mysql_fetch_assoc($result)) {
				$i++;
			?>
              <tr class="d<?=$i & 1?>" onMouseOver="javascript:highlightTableRowVersionA(this, '#FFFF99');">
			  <td class="pointer" onClick="document.location.href='go.php?testID=<?=$row['ID']?>';"><a class="pointer" href="go.php?testID=<?=$row['ID']?>"><?=$row['TestName']?></a></td>
			  <?php
			  $subjectSQL="SELECT Name FROM Subjects WHERE ID=" . $row['Subject'];
			  $subjectResult=mysql_query($subjectSQL, $conn);
			  $subject=mysql_fetch_assoc($subjectResult);
			  ?>
			  <td><?=$subject['Name']?></td></tr>
			 <?php
			 }
			}
			?>
</table>
<!-- InstanceEndEditable -->	 
 </td>
    </tr>
    <!--<tr>
      <td colspan="2" align="center" valign="top">
        <div align="center"> 
		<div class="hr"><hr /></div>
          <?php include "./includes/copyright.php" ?></div></td>
    </tr>-->
  </table>
</div>
</body>
<!-- InstanceEnd --></html>
