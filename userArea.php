<?php
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
<html><!-- InstanceBegin template="/Templates/Test Layout.dwt.php" codeOutsideHTMLIsLocked="false" -->

<head>
<link href="includes/wtstyle.css" rel="stylesheet"  type="text/css">
<?
// Copyright (C) 2003 - 2007 Eppler Software.  All rights reserved.
// Any redistribution or reproduction of any materials herein is strictly prohibited.
?>
<!-- InstanceBeginEditable name="doctitle" -->
<title>Welcome to test prep</title>
<!-- InstanceEndEditable --> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
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
	<p style='background:#E9E9E9;color:#880101'><strong>Available Lectures for <?=$_SESSION['firstname']?> <?=$_SESSION['lastname']?></strong></p>
	</td>
	</tr>
	<tr style="background:#E9E9E9;align:center">
	<td><p class="style1"><strong>Presentations</strong></p></td>
	<tr>
	<tr>
	<td style="background:#E9E9E9">
		<iframe src="http://www.slideshare.net/slideshow/embed_code/27912068" width="500" height="300" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC;border-width:1px 1px 0;margin-bottom:5px" allowfullscreen> </iframe>
		</td>
	<td>
	</tr>
	<tr style="background:#E9E9E9;align:center">
	<td><br/><p class="style1"><strong>Video Lectures</strong></p></td>
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
			<td width="240"><strong>Activity Description</strong></td>
		</tr>
		<tr class="d0">
			<td>Collaboratively build a WordMap for <strong><a href="javascript:breakout_of_frame()">Abate</a></strong><br/>Activity due <strong>Dec 10</strong></td>
			<td>As a group, build a WordMap for <b>Abate</b>. <br/>One member in the group will serve as a facilitator for this activity</td>
		</tr>
		<tr class="d1">
			<td>Collaboratively build Wiki pages for the words you added in <strong><a href="javascript:breakout_of_frame1()">your WordMap</a></strong><br/>Activity due <strong>Dec 20</strong></td>
			<td>Open the WordMap from your Google Drive/Dropbox. Click on each word to edit the Wiki. <br/>If the Wiki is blank, then create one. <br/>If the Wiki has contents in it, think and add/modify the existing content to improve the Wiki's content quality</td>
		</tr>
	</tr>
		<table class="style1 style5" width="100%"  border="0" cellspacing="2" cellpadding="0" onMouseOut="javascript:highlightTableRowVersionA(0);">
		<tr bgcolor="#C8D8FF">
	<br>
	<br>
    <td>Name</td>
    <td width="240">Subject</td>
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
