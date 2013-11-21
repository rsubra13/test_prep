


<link href="jQueryAssets/jquery.ui.core.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.theme.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.button.min.css" rel="stylesheet" type="text/css">
<script src="jQueryAssets/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="jQueryAssets/jquery-ui-1.9.2.button.custom.min.js" type="text/javascript"></script>

<button id="Button1">Submit</button>

<script type="text/javascript">
$(function() {
	$( "#Button1" ).button(); 
});
</script>

<?php
$sql = mysql_query("SELECT * FROM `phptellar_performers` LIMIT 0, 30 ");
echo " The values are " ,$sql
?>