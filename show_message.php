
<?php
include "./includes/conn.php";
include "./includes/includes.php";
$filename="messages/"$_SESSION['ID']"_message.txt";
$f=fopen($filename,'r')or die('Cannot open file:  '.$filename);
while ($line = fgets($f)) {
 echo $line;
}
fclose($f);
?>