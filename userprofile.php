<?php
include "./includes/conn.php";
include "./includes/includes.php";

session_start();

	  if ($_SESSION['loggedInTest'] != "1") redirect_to("userLogin.php");
	  $_SESSION['loggedInTest']="0";
	  $_SESSION['loggedInName']="";
	  $_SESSION['password']="";
	  $_SESSION['firstname']="";
	  $_SESSION['lastname']="";
	#  redirect_to("userLogin.php");
?>

<title>WebTester Online Testing</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="includes/style.css" rel="stylesheet"  type="text/css">
<script language="JavaScript" type="text/JavaScript">
