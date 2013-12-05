<?php
include "./includes/conn.php";
include "./includes/includes.php";
session_start();

$strUpdateStatus = "UPDATE activity SET status='Complete' WHERE username='Ramki' AND activity_type=1";
$rs = mysql_query($strUpdateStatus, $conn);
if($rs)
echo "<script type='text/javascript'>

    window.top.location = 'http://localhost/testprep/test_prep/home_page/courses.php';

</script>";
?>