<?php

$age = array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";

include "../includes/conn.php";
include "../includes/includes.php";

echo $conn;
$strSQL="SELECT * FROM `stellar_performers` ";
$result=mysql_query($strsql, $conn);
mysql_fetch_*($result);
echo $result;
echo $strSQL;
echo $GLOBALS;
echo $_SESSION;

?>