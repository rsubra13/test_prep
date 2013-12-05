<?php

// date in the past...
header("Expires:Mon, 26 Jul 1997 05:00:00 GMT");

// always modified
header("Last-Modified:" . date("D, j M Y H:i:s T"));

// HTTP/1.1 
header("Cache-Control:no-cache, must-revalidate");

// HTTP/1.0 
header("Pragma:no-cache");


?>