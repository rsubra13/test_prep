<?php
ob_start();
session_start();
?>
<?php
$finished=true;
$inTest=true;
$inReview=true;
include "./includes/timerhead.php";
include "./includes/conn.php";
include "./includes/includes.php";
include "./includes/nocache.php";
include "./includes/validation.php";
require("./includes/html2text.php");





?>
<html><!-- InstanceBegin template="/Templates/Test%20Layout.dwt.php" codeOutsideHTMLIsLocked="false" -->

<head>
<link href="includes/wtstyle.css" rel="stylesheet"  type="text/css">
<?
// Copyright (C) 2003 - 2007 Eppler Software.  All rights reserved.
// Any redistribution or reproduction of any materials herein is strictly prohibited.
?>
<!-- InstanceBeginEditable name="doctitle" -->
<title><?=TITLE?></title>
<!-- InstanceEndEditable --> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<!-- InstanceBeginEditable name="head" -->
<style type="text/css">
<!--
.style8 {
	color: #FF0000;
	font-weight: bold;
}
-->
</style>
<!-- InstanceEndEditable -->
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
      <td height="47" align="left" valign="middle"><img src="images/webtestertop.gif" width="<?=LOGOW?>" height="<?=LOGOH?>">
        <br>        
      </td>
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
    <tr> 
      <td colspan="2" align="left" valign="top"> <div class="hr">
        <hr />
      </div>       
        <!-- InstanceBeginEditable name="Content Area" -->
	  
	  <?php
	  if (IPSESSIONS) {
	  	$checkSQL="SELECT * FROM Sessions WHERE IP='" . $ip . "'";
	  } else {
	  	$checkSQL="SELECT * FROM Sessions WHERE ID='" . $sessID . "'";
	  }
	  $result=mysql_query($checkSQL, $conn)
	  	or redirect_to("index.php");
	  $record=mysql_fetch_array($result);
	  if (!isset($_REQUEST['TimeLimit'])) {
	  	if (($record['finished'] != 1) and (!isset($_REQUEST['Grade']))) {
	  		redirect_to("index.php");
	  		exit;
	  	}
	  }
	  if (IPSESSIONS) {
	  	$updateFin="UPDATE Sessions SET finished=1 WHERE IP='" . $ip . "'";
		$updateTest="UPDATE Sessions SET takingTest=0 WHERE IP='" . $ip . "'";
	  } else {
	    $updateFin="UPDATE Sessions SET finished=1 WHERE ID='" . $sessID . "'";
		$updateTest="UPDATE Sessions SET takingTest=0 WHERE ID='" . $sessID . "'";
	  }
	  $resultFin=mysql_query($updateFin, $conn);
	  $resultTest=mysql_query($updateTest, $conn);
	  if (IPSESSIONS) {
	  	$sessionsSQL="SELECT * FROM Sessions WHERE IP='" . $ip . "'";
	  } else {
	  	$sessionsSQL="SELECT * FROM Sessions WHERE ID='" . $sessID . "'";
	  }
	  $mySessionsRes=mysql_query($sessionsSQL, $conn);
	  $mySessions=mysql_fetch_assoc($mySessionsRes);
	  $resetID=$mySessions['ID'];
	  $answersSQL="SELECT * FROM Answers WHERE SessionID=" . $mySessions['ID'] . " ORDER BY ID";
	  $myAnswersRes=mysql_query($answersSQL, $conn);
	  $myAnswersRows=mysql_num_rows($myAnswersRes);
//	  $questionsSQL="SELECT * FROM Questions WHERE TestID='" . $mySessions['TestID'] . "' ORDER BY sortOrder ASC, ID ASC";
//	  $myRsRes=mysql_query($questionsSQL, $conn);
//	  $myRs=mysql_fetch_assoc($myRsRes);
//	  $myRsRows=mysql_num_rows($myRsRes);
//	  mysql_data_seek($myRsRes, 0);
	  $rightAnswers=0;
	  $wrongAnswers=0;
	  $totalAnswers=0;
	  if ($myAnswersRows != 0) {
	  	if (DISABLE_GRADE) {
			echo("<!-- ");
		}
	  ?>
	  	  <script language="javascript" type="text/javascript" src="includes/tableH.js"></script>
		<table class="style1 style5" width="100%"  border="0" cellspacing="2" cellpadding="0" onMouseOut="javascript:highlightTableRowVersionA(0);">
  <tr bgcolor="#C8D8FF">
    <td width="30">&nbsp;</td>
    <td>Question</td>
	<td>Your Answer</td>
	<?php if (!DISABLE_ANSWERS) { ?>
		<td>Correct Answer</td>
    <?php } ?>
	<td>&nbsp;</td>
  </tr>	  <?php
  			$emailOutput="Answers:\r\n--------\r\n";
	  		while ($myAnswers=mysql_fetch_assoc($myAnswersRes)) {
			$i++;
			$questionsSQL="SELECT * FROM Questions WHERE ID=" . $myAnswers['QuesID'];
			$myRsRes=mysql_query($questionsSQL, $conn)
				or die(mysql_error);
			$myRs=mysql_fetch_assoc($myRsRes);
			$emailOutput=$emailOutput . $i . "\t" . strip_tags($myRs['QuestionText']) . "\r\n";
			?>
			<tr class="d<?=$i & 1?>" onMouseOver="javascript:highlightTableRowVersionA(this, '#FFFF99');">
			<td align="left"><?=$i?></td>
			<td>
			<?=strip_tags($myRs['QuestionText'])?></td>
			<?php
			$expText="";
			// $answersSQL="SELECT * FROM Answers WHERE SessionID=" . $mySessions['ID'] . " AND QuesID=" . $myRs['ID'];
			// $myAnswersRes=mysql_query($answersSQL, $conn);
			// $myAnswers=mysql_fetch_assoc($myAnswersRes);
			if ($myRs['AnswerText'] != "") {
				if (strtoupper($myRs['AnswerText']) == strtoupper($myAnswers['AnswerText'])) {
					$rightAnswers=$rightAnswers+$myRs['Points'];
					if (!$mySessions['Stored']) {
						$correct=$myRs['Correct'];
						$correct++;
						$updateSQL="UPDATE Questions SET Correct='" . $correct . "' WHERE ID='" . $myRs['ID'] . "'";
						$result=mysql_query($updateSQL, $conn)
							or die("Invalid query: " . $updateSQL . " - " . mysql_error());
						$subjectSQL="SELECT * FROM Subjects WHERE ID=" . $myRs['Subject'];
						$subjectResult=mysql_query($subjectSQL, $conn)
							or die("Invalid query: " . $subjectSQL . " - " . mysql_error());
						$subjectRs=mysql_fetch_assoc($subjectResult);
						$subCorrect=$subjectRs['Correct'];
						$subCorrect++;
						$updateSub="UPDATE Subjects SET Correct='" . $subCorrect . "' WHERE ID='" . $myRs['Subject'] . "'";
						$subResult=mysql_query($updateSub, $conn)
							or die("Invalid query: " . $updateSub . " - " . mysql_error());
					}
					//$theColor="#00FF00";
					$thePic="check.gif";
					$correctText="Yes";
				} else {
					$wrongAnswers=$wrongAnswers+$myRs['Points'];
					if (!$mySessions['Stored']) {
						$incorrect=$myRs['Incorrect'];
						$incorrect++;
						$updateSQL="UPDATE Questions SET Incorrect='" . $incorrect . "' WHERE ID='" . $myRs['ID'] . "'";
						$result=mysql_query($updateSQL, $conn)
							or die("Invalid query: " . $updateSQL . " - " . mysql_error());
						$subjectSQL="SELECT * FROM Subjects WHERE ID=" . $myRs['Subject'];
						$subjectResult=mysql_query($subjectSQL, $conn)
							or die("Invalid query: " . $subjectSQL . " - " . mysql_error());
						$subjectRs=mysql_fetch_assoc($subjectResult);
						$subIncorrect=$subjectRs['Incorrect'];
						$subIncorrect++;
						$updateSub="UPDATE Subjects SET Incorrect='" . $subIncorrect . "' WHERE ID='" . $myRs['Subject'] . "'";
						$subResult=mysql_query($updateSub, $conn)
							or die("Invalid query: " . $updateSub . " - " . mysql_error());
					}
					//$theColor="#FF0000";
					$thePic="cross.gif";
					$correctText="No";
					$expText=$myRs['Explanation'];
				}
				if (EXPLAIN_ALL) {
					$expText=$myRs['Explanation'];
				}
				$emailOutput = $emailOutput . "\tAnswered:\t" . $myAnswers['AnswerText'] . "\r\n";
				$emailOutput = $emailOutput . "\tCorrect Answer:\t" . $myRs['AnswerText'] . "\r\n";
				$emailOutput = $emailOutput . "\tCorrect:\t" . $correctText . "\r\n";
				echo("<td>" . $myAnswers['AnswerText'] . "</td>");
				if (!DISABLE_ANSWERS) {
					echo("<td>" . $myRs['AnswerText'] . "</td>");
				}
				if ($expText!="") {
					echo("<td align='left'><img src='./images/" . $thePic . "'><br />" . $expText . "</td>");
				} else {
					echo("<td align='left'><img src='./images/" . $thePic . "'><br /></td>");					
				}
			} else {
				?>
				<td>
				<?php
				$emailOutput = $emailOutput . "\t\tAnswered\r\n";
				for ($j = 1;$j <= 6;$j++) {
					$record="A" . $j;
					$recordText="Answer" . $j;
					$recordClicks="A" . $j . "Clicks";
					if ($myRs[$recordText]!="") {
					$emailOutput = $emailOutput . "\t\t\t";
					?>
				<input type="checkbox" disabled
				<?php
				$prefix="( ) ";
				if ($myAnswers[$record]) {
					// $emailOutput = $emailOutput . "(x) ";
					$prefix="(x) ";
					echo(" checked");
					if (!$mySessions['Stored']) {
						$clicks=$myRs[$recordClicks];
						$clicks++;
						$updateSQL="UPDATE Questions SET " . $recordClicks . "='" . $clicks . "' WHERE ID='" . $myRs['ID'] . "'";
						$result=mysql_query($updateSQL, $conn)
							or die("Invalid query: " . $updateSQL . " - " . mysql_error());
					}
				}
				
				$emailOutput = $emailOutput . $prefix . $myRs[$recordText] . "\r\n";		
				?>
				>
				<?=$myRs[$recordText]?><br>
				<?php
					}
				}
				?>
				</td>
                <?php
				if (DISABLE_ANSWERS) {
					echo ("<!---");
				}
				?>
				<td>
				<?php
				$emailOutput = $emailOutput . "\t\tCorrect Answer:\r\n";
				for ($j = 1;$j <= 6;$j++) {
					$record="A" . $j;
					$recordText="Answer" . $j;
					if ($myRs[$recordText]!="") {
					$emailOutput = $emailOutput . "\t\t\t";
				?>
				<input type="checkbox" disabled
				<?php
				$prefix="( ) ";
				if ($myRs[$record]) {
					// $emailOutput = $emailOutput . "(x) ";
					$prefix="(x) ";
					echo(" checked");
				}
				$emailOutput = $emailOutput . $prefix . $myRs[$recordText] . "\r\n";
				?>
				>
				<?=$myRs[$recordText]?><br>
				<?php
					}
				}
				?>
				</td>
                <?php
				if (DISABLE_ANSWERS) {
                	echo ("-->");
				}
				?>
				<td align="left">
				<?php
				$a=1;
				$thePic="check.gif";
				$correctText = "Yes";
				for ($j = 1;$j <=6;$j++) {
					$record="A" . $j;
					$expText="";
					// echo "'" . $myRs[$record] . "'<br>";
					// echo "'" . $myAnswers[$record] . "'<br>";
					if ($myRs[$record]!=$myAnswers[$record]) {
						$a=0;
						$thePic="cross.gif";
						$correctText = "No";
						$expText=$myRs['Explanation'];
					}
				}
				$emailOutput = $emailOutput . "\t\tCorrect:\t" . $correctText . "\r\n";
				if (EXPLAIN_ALL) {
					$expText=$myRs['Explanation'];
				}
				?>
				<img src="./images/<?=$thePic?>"><br>
				<?=$expText?>
				</td>
				<?php
				if ($a==1) {
					$rightAnswers=$rightAnswers+$myRs['Points'];
					if (!$mySessions['Stored']) {
						$correct=$myRs['Correct'];
						$correct++;
						$updateSQL="UPDATE Questions SET Correct='" . $correct . "' WHERE ID='" . $myRs['ID'] . "'";
						$result=mysql_query($updateSQL, $conn)
							or die("Invalid query: " . $updateSQL . " - " . mysql_error());
						$subjectSQL="SELECT * FROM Subjects WHERE ID=" . $myRs['Subject'];
						$subjectResult=mysql_query($subjectSQL, $conn)
							or die("Invalid query: " . $subjectSQL . " - " . mysql_error());
						$subjectRs=mysql_fetch_assoc($subjectResult);
						$subCorrect=$subjectRs['Correct'];
						$subCorrect++;
						$updateSub="UPDATE Subjects SET Correct='" . $subCorrect . "' WHERE ID='" . $myRs['Subject'] . "'";
						$subResult=mysql_query($updateSub, $conn)
							or die("Invalid query: " . $updateSub . " - " . mysql_error());
					}
				} else {
					$wrongAnswers=$wrongAnswers+$myRs['Points'];
					if (!$mySessions['Stored']) {
						$incorrect=$myRs['Incorrect'];
						$incorrect++;
						$updateSQL="UPDATE Questions SET Incorrect='" . $incorrect . "' WHERE ID='" . $myRs['ID'] . "'";
						$result=mysql_query($updateSQL, $conn)
							or die("Invalid query: " . $updateSQL . " - " . mysql_error());
						$subjectSQL="SELECT * FROM Subjects WHERE ID=" . $myRs['Subject'];
						$subjectResult=mysql_query($subjectSQL, $conn)
							or die("Invalid query: " . $subjectSQL . " - " . mysql_error());
						$subjectRs=mysql_fetch_assoc($subjectResult);
						$subIncorrect=$subjectRs['Incorrect'];
						$subIncorrect++;
						$updateSub="UPDATE Subjects SET Incorrect='" . $subIncorrect . "' WHERE ID='" . $myRs['Subject'] . "'";
						$subResult=mysql_query($updateSub, $conn)
							or die("Invalid query: " . $updateSub . " - " . mysql_error());
					}
				}
			}
			$emailOutput = $emailOutput . "\r\n";
			?>
			</tr>
			<?php
			$totalAnswers=$totalAnswers+$myRs['Points'];
				}
			$emailOutput = $emailOutput . "\r\n";
			?>
	  </table>
	  <?php
	  if (DISABLE_GRADE) {
	  	echo (" -->");
	  }
	  $score=$rightAnswers / $totalAnswers;
	  $score=$score * 100;
	  $score=intval($score);
	  $testsSQL="SELECT * FROM Tests WHERE ID=" . $mySessions['TestID'];
	  $myRsRes=mysql_query($testsSQL, $conn);
	  $myRs=mysql_fetch_assoc($myRsRes);
	  if($myRs['AutoSession']) {
	  	$autoReset=1;
	  } else {
	  	$autoReset=0;
	  }
	  $testName=$myRs['TestName'];
	  if ($score >= $myRs['PassingScore']) {
	  	$pass = 1;
		$passText="passed";
	  } else {
	  	$pass = 0;
		$passText="failed";
	  }
	  
	  $customMessageSQL = "SELECT * FROM CustomMessages WHERE ReportID='" . $myRs['ReportTemplate'] . "' AND $rightAnswers >= MinPoints AND $rightAnswers <= MaxPoints";
	  $customMessageResult = mysql_query($customMessageSQL, $conn)
	  	or die("Invalid query: " . $customMessageSQL . mysql_error);
	  $customMessageRs = mysql_fetch_assoc($customMessageResult);
	  $customMessage = $customMessageRs['Message'];
	  
	  $templateSQL="SELECT * FROM ReportTemplates WHERE ID='" . $myRs['ReportTemplate'] . "'";
	  $templateResult=mysql_query($templateSQL, $conn)
	  	or die("Invalid query: " . $templateSQL . mysql_error);
	  $templateRs=mysql_fetch_assoc($templateResult);
	  $template=$templateRs['Text'];
	  $search=array("%GRADE_TABLE%", "%FIRST_NAME%", "%LAST_NAME%", "%TEST_NAME%", "%TEST_DATE%", "%TEST_TIME%", "%NUMBER_CORRECT%", "%NUMBER_POSSIBLE%", "%PERCENTAGE%", "%PASSFAIL%", "%NOTES%", "%TESTID%", "%EMAIL%", "%CUSTOMMESSAGE%", "%STREET%", "%STREET2%", "%CITY%", "%STATE%", "%ZIP%");
	  $replace=array("<pre>" . $emailOutput . "</pre>", $mySessions['FirstName'], $mySessions['LastName'], $myRs['TestName'], date("n/j/Y",time()), date("g:i:s A",time()), $rightAnswers, $totalAnswers, $score . "%", $passText, $mySessions['Notes'], $mySessions['TestID'], $mySessions['Email'], $customMessage, $_SESSION['street'], $_SESSION['street2'], $_SESSION['city'], $_SESSION['state'], $_SESSION['zip']);
	  $report=str_replace($search, $replace, $template);
	  echo $report;
	  }
	  ?>
	<?php
if (!$mySessions['Stored']) {
	  //$endTime=date("n/j/Y g:i:s A");
	  $endTime=time();
	  $totalTimeSS=datediff("s", $mySessions['StartTime'], $endTime, true);
	  $totalTimeSM=$totalTimeSS / 60;
	  $totalTimeS=$totalTimeSS - (intval($totalTimeSM)*60);
	  $totalTimeM=datediff("n", $mySessions['StartTime'], $endTime, true);
	  $totalTime=$totalTimeM . "m" . $totalTimeS . "s";

	  $resultsSQL="INSERT INTO Results
	  		(TestID,
			TestName,
			NumCorrect,
			NumPossible,
			Score,
			Pass,
			IPAddress,
			StartTime,
			EndTime,
			TotalTime,
			LastName,
			FirstName,
			Notes)
			VALUES
			('" . $mySessions['TestID'] . "',
			'" . addslashes($testName) . "',
			'" . $rightAnswers . "',
			'" . $totalAnswers . "',
			'" . $score . "',
			'" . $pass . "',
			'" . $ip . "',
			'" . $mySessions['StartTime'] . "',
			'" . $endTime . "',
			'" . $totalTime . "',
			'" . addslashes($mySessions['LastName']) . "',
			'" . addslashes($mySessions['FirstName']) . "',
			'" . addslashes($mySessions['Notes']) . "')";
	
	  $result=mysql_query($resultsSQL, $conn)
	  	or die("Invalid Query: " . $resultsSQL . " - " . mysql_error());
	  
	  if (IPSESSIONS) {
	  	$sessionsSQL="UPDATE Sessions SET stored=1 WHERE IP='" . $ip . "'";
	  } else {
	  	$sessionsSQL="UPDATE Sessions SET stored=1 WHERE ID='" . $sessID . "'";
      }
	  $result=mysql_query($sessionsSQL, $conn)
	  	or die("Invalid Query: " . $sessionsSQL . " - " . mysql_error());
		
	  $emailSQL="SELECT * FROM EmailTemplates WHERE ID='" . $myRs['EmailTemplate'] . "'";
	  $emailResult=mysql_query($emailSQL, $conn)
	  	or die("Invalid Query: " . $emailSQL . " - " . mysql_error());
	  $emailRs=mysql_fetch_assoc($emailResult);
	  require("./includes/class.phpmailer.php");
	  
	  $usersSQL="SELECT * FROM Users WHERE Username='" . $myRs['Creator'] . "'";
	  $usersResult=mysql_query($usersSQL, $conn)
	  	or die("Invalid Query: " . $usersSQL . " - " . mysql_error());
	  $usersRs=mysql_fetch_assoc($usersResult);
	  
	  $subject=$emailRs['Subject'];
	  $body=$emailRs['Text'];
	  $search=array("%GRADE_TABLE%", "%FIRST_NAME%", "%LAST_NAME%", "%TEST_NAME%", "%TEST_DATE%", "%TEST_TIME%", "%NUMBER_CORRECT%", "%NUMBER_POSSIBLE%", "%PERCENTAGE%", "%PASSFAIL%", "%NOTES%", "%TESTID%", "%EMAIL%", "%CUSTOMMESSAGE%", "%STREET%", "%STREET2%", "%CITY%", "%STATE%", "%ZIP%");
	  $replace=array($emailOutput, $mySessions['FirstName'], $mySessions['LastName'], $myRs['TestName'], date("n/j/Y",time()), date("g:i:s A",time()), $rightAnswers, $totalAnswers, $score . "%", $passText, $mySessions['Notes'], $mySessions['TestID'], $mySessions['Email'], $customMessage, $_SESSION['street'], $_SESSION['street2'], $_SESSION['city'], $_SESSION['state'], $_SESSION['zip']);
	  $bodySend=str_replace($search, $replace, $body);
	  $subjectSend=str_replace($search, $replace, $subject);
	  
	  $mail = new PHPMailer();
	  
	  $mail->From = $emailRs['FromEmail'];
	  $mail->FromName = $emailRs['FromEmail'];
	  if($myRs['EmailInstructor']) {
	  	$mail->AddBCC($usersRs['Email'], $usersRs['FirstName'] . " " . $usersRs['LastName']);
		$send=true;
	  }
	  if($myRs['EmailUsers']) {
	  	$mail->AddAddress($mySessions['Email'], $mySessions['FirstName'] . " " . $mySessions['LastName']);
		$send=true;
	  }
	  if($myRs['AltEmail']) {
	  	$mail->AddBCC($mySessions['AltEmail']);
		$send=true;
	  }
	  $mail->Subject = $subjectSend;
	  $mail->Body = $bodySend;
	  $mail->AltBody = html2text($bodySend);
	  $mail->IsHTML(true);
	  
	  if($send) {
	  	if(!$mail->Send())
	  	{
	  			echo "Email Send Failed <p>";
				echo "Mailer Erorr: " . $mail->ErrorInfo;
	  	}
	  }
				  
		
} else {

}
	  ?>
	  <BR>
	  <form action="clearResults.php" method="post">
	  <?php
	  	if(!$autoReset) {
	  ?>
          <p>Username:<br>
            <input name="userName" type="text" id="userName">
            <br>
            Password:<br>
            <input name="password" type="password" id="password">
          </p>
	  <?php
	  	} else {
	  ?>
	  	<input type="hidden" name="autoReset" value="true">
		<?php
		}
		if(RETRY) {
		?>
          <p>
            <input name="Retry" type="submit" value="<?=RETRY_BUTTON?>">
            <input name="TestID" type="hidden" value="<?=$mySessions['TestID']?>">
          </p>
        <?php
		}
		if(NODONE) {
			echo ("<!-- ");
		}
		?>
          <p>
            <input name="Clear" type="submit" value="<?=DONE_BUTTON?>">
          </p>
        <?
        if(NODONE) {
        	echo (" -->");
        }
        ?>
        </form>
	  <!-- InstanceEndEditable -->	  </td>
    </tr>
    <tr>
      <td colspan="2" align="center" valign="top">
        <div align="center"> 
		<div class="hr"><hr /></div>
          <?php include "./includes/copyright.php" ?></div></td>
    </tr>
  </table>
</div>
</body>
<!-- InstanceEnd --></html>
<?php ob_end_flush() ?>