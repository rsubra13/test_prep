<?php
include "./includes/conn.php";
include "./includes/includes.php";
$id = $_GET['id']."_".$_SESSION['ID'];
echo $id;
$mentor_file=$id."mentor.txt";
$user_file=$id."user.txt";
#$usersSQL="INSERT into user_mentor values ('".$id."')" ;
#$myRsRes=mysql_query($usersSQL, $conn);
#$sql="DELETE from mentor where ID =".$_GET['id'];
#$myres=mysql_query($sql, $conn);
$sql2="select * from users where ID=".$_SESSION['ID'];
$myres2=mysql_query($sql2,$conn);
$row = mysql_fetch_array($myres2);

$mentor_file="messages/".$_GET['id']."_message.txt";
$user_file="messages/".$_SESSION['ID']."_message.txt";
$f=fopen($mentor_file,'w')or die('Cannot open file:  '.$mentor_file);

$date = new DateTime();
$message2="you have signed up for peer-mentorship time=".$date->format('M-d-y H:i:s');
$default="you have one new student ".$row['Username']."!! message from user = ".$_GET['comment']."time=".$date->format('M-d-y H:i:s');
fwrite($f,$default);
$f1=fopen($user_file,'w')or die('Cannot open file:  '.$user_file);
fwrite($f1,$message2);
$sql3 = "update users set notification =1 where ID=".$_GET['id'];
$sql4="update users set notification = 1 where ID= ".$_SESSION['ID'];
$myres2=mysql_query($sql3,$conn);
$myres2=mysql_query($sql4,$conn);
header('Location: show_message.php');
           exit();

?>