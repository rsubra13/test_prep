<?php session_start(); ?>

<!-- CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/social-icons.css" type="text/css" media="screen">
<!-- THEME -->
<link rel="stylesheet" href="skins/paper-brown/style.css" type="text/css" media="screen">
<!-- JS -->
<script src="js/jquery-1.5.1.min.js"></script>
<script src="js/jqueryui.js"></script>
<script src="js/easing.js"></script>
<script src="js/jquery.scrollTo-1.4.2-min.js"></script>
<script src="js/quicksand.js"></script>
<script src="js/custom.js"></script>
<!--[if IE]><script src="js/html5.js"></script><![endif]-->
<!--[if IE 6]><script src="js/DD_belatedPNG.js"></script><![endif]-->
<!-- ENDS JS -->
<!-- superfish -->
<link rel="stylesheet" media="screen" href="css/superfish.css">
<link rel="stylesheet" media="screen" href="css/superfish-left.css">
<script src="js/superfish-1.4.8/js/hoverIntent.js"></script>
<script src="js/superfish-1.4.8/js/superfish.js"></script>
<script src="js/superfish-1.4.8/js/supersubs.js"></script>
<!-- ENDS superfish -->
<!-- poshytip -->
<link rel="stylesheet" href="js/poshytip-1.0/src/tip-twitter/tip-twitter.css" type="text/css">
<link rel="stylesheet" href="js/poshytip-1.0/src/tip-yellowsimple/tip-yellowsimple.css" type="text/css">
<script src="js/poshytip-1.0/src/jquery.poshytip.min.js"></script>
<!-- ENDS poshytip -->
<!-- Tweet -->
<link rel="stylesheet" href="css/jquery.tweet.css" media="all"  type="text/css">
<!-- ENDS Tweet -->
<!-- Fancybox -->
<link rel="stylesheet" href="js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen">
<script src="js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<!-- ENDS Fancybox -->
<!-- jflickrfeed -->
<link href="css/jflickrfeed.css" rel="stylesheet" type="text/css" media="screen">
<!-- ENDS jflickrfeed -->
<!-- prettyPhoto -->
<script src="js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
<link rel="stylesheet" href="js/prettyPhoto/css/prettyPhoto.css" type="text/css" media="screen">
<!-- ENDS prettyPhoto -->
<!-- GOOGLE FONTS -->
<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>
<!-- Nivo slider -->
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen">
<script src="js/nivo-slider/jquery.nivo.slider.js"></script>
<!-- ENDS Nivo slider -->
<!-- tabs -->
<link rel="stylesheet" href="css/tabs.css" type="text/css" media="screen">
<script src="js/tabs.js"></script>
<!-- ENDS tabs -->
<!--[if IE 7]><link rel="stylesheet" type="text/css" media="screen" href="css/ie7-hacks.css"><![endif]-->
<!--[if IE 8]><link rel="stylesheet" type="text/css" media="screen" href="css/ie8-hacks.css"><![endif]-->
<!-- ENDS CSS -->
</head>
<body>
<!-- WRAPPER -->
<div id="wrapper">
  <!-- SIDEBAR -->
  <div id="sidebar">
    <!-- logo --><a href="index.html"><img src="images/gre_prep.jpg" alt="" name="logo" height="83" id="logo"></a><!-- search -->
    <form  method="get" id="searchform" action="#">
      <div>
      </div>
    </form>
    <!-- ENDS search -->
    <!-- Navigation -->
    <ul id="nav" class="sf-menu sf-vertical">
      <li class="current-menu-item"><a href="index.html">HOME</a></li>
      <li><a href="features.html">GRE</a>
        <ul>
          <li><a href="features.html">Columns layout</a>
          <li><a href="features-typography.html">Typography</a>
          <li><a href="features-icons.html">General icons</a>
          <li><a href="features-social-icons.html">Social icons</a>
          <li><a href="features-accordion.html">Accordion boxes</a>
          <li><a href="features-toggle.html">Toggle boxes</a>
          <li><a href="features-tabs.html">Tabbed content</a>
        </ul>
      </li>
      <li><a href="skins.html">PLANS</a></li>
      <li><a href="gallery.html">PERSONAL NOTES</a>
        <ul>
          <li><a href="gallery.html">Image gallery</a>
            <ul>
              <li><a href="gallery.html">Two columns layout</a></li>
              <li><a href="gallery-fourcols.html">Four columns layout</a></li>
            </ul>
          </li>
          <li><a href="gallery-video.html">Video gallery</a></li>
        </ul>
      </li>
      <li><a href="blog.html">BLOG</a>
        <ul>
          <li><a href="blog.html">Full blog</a></li>
          <li><a href="blog-compact.html">Compact blog</a></li>
        </ul>
      </li>
      <li><a href="portfolio.html">DISCUSSION FORUM</a>
 
      </li>
      <li><a href="show_message.php">CONTACT</a></li>
    </ul>
    <!-- Navigation -->
    <!-- categories -->
    <ul class="cat-list">
      <li>
        <h6>User Statistics</h6>
      </li>
      
     
    </ul>
    <!-- categories -->
   
    <!-- Social -->
    <ul class="social">
      <li>
        <h6>Follow us</h6>
      <li><a href="www.facebook.com" class="facebook" title="Become a fan"></a></li>
      <li><a href="#" class="twitter" title="Follow our tweets"></a></li>

      <li><a href="#" class="youtube" title="View our videos"></a></li>
    </ul>
    <!-- ENDS Social -->
  </div>
  <!-- ENDS SIDEBAR -->
  <!-- MAIN -->
  <div align="center" id="main">
    <div class="home-quotes">Painless GRE Preperation... Learn, Interact, Score!</div>
   
<?php
include "./includes/conn.php";
include "./includes/includes.php";
$id=$_GET['id'];
$usersSQL="SELECT * FROM users where ID=".$id;
echo $_SESSION['ID'];
$myRsRes=mysql_query($usersSQL, $conn);
$row = mysql_fetch_array($myRsRes);
echo "<html>";
echo "<body><lable>user name:-<lable> ".$row['Username']."<br>";
echo "<lable>first name:-<lable> ".$row['FirstName']."<br>";
echo "<lable>last name:-<lable> ".$row['LastName']."<br>";


echo "<form action='add_mentor.php' method='get'><input type='hidden' name='id'value='".$row[ID]."'><textarea name='comment'>hi nice to meet you!!</textarea> <input type='submit'> </form> </body></html>";


?>
</body>