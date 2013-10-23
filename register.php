<?php
include "./includes/conn.php";
include "./includes/includes.php";



$registerCheckSQL="SELECT * FROM Users WHERE Username='" . $_REQUEST['username'] . "'";

$checkResult=mysql_query($registerCheckSQL, $conn);

if (mysql_num_rows($checkResult) > 0) {
	die("User already exists...");
}

$registerSQL="INSERT INTO Users
			(Username,
			Password,
			FirstName,
			LastName,
			Email
			)
			VALUES
			('" .  mysql_real_escape_string($_REQUEST['username']) . "',
			'" . md5( mysql_real_escape_string($_REQUEST['password'])) . "',
			'" .  mysql_real_escape_string($_REQUEST['firstname']) . "',
			'" .  mysql_real_escape_string($_REQUEST['lastname']) . "',
			'" .  mysql_real_escape_string($_REQUEST['email']) . "')";
						
$result=mysql_query($registerSQL, $conn)
	or die("Invalid Query: " . $registerSQL . " - " . mysql_error());
	
redirect_to("userLogin.php");



?>