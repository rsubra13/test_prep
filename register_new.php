<?php
include "./includes/conn.php";
include "./includes/includes.php";

if ($_REQUEST['password'] != $_REQUEST['confirm']) 
{
	die("Password doesn't match");
}


$registerCheckSQL="SELECT * FROM Users WHERE Username='" . $_REQUEST['username'] . "'";

$checkResult=mysql_query($registerCheckSQL, $conn);

if (mysql_num_rows($checkResult) > 0) {
	exit("User already exists...");
	
}

$registerSQL="INSERT INTO Users
			(Username,
			Password,
			FirstName,
			LastName,
			stream,
			gre_range,
			Email
			)
			VALUES
			('" .  mysql_real_escape_string($_REQUEST['username']) . "',
			'" . md5( mysql_real_escape_string($_REQUEST['password'])) . "',
			'" .  mysql_real_escape_string($_REQUEST['firstname']) . "',
			'" .  mysql_real_escape_string($_REQUEST['lastname']) . "',
			'" .  mysql_real_escape_string($_REQUEST['select']) . "',
			'" .  mysql_real_escape_string($_REQUEST['select2']) . "',
			'" .  mysql_real_escape_string($_REQUEST['email']) . "')";
						
$result=mysql_query($registerSQL, $conn)
	or die("Invalid Query: " . $registerSQL . " - " . mysql_error());
	
redirect_to("./login_new/index.php")



?>