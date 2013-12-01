<!DOCTYPE html>

<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

include "../includes/conn.php";
include "../includes/includes.php";


?>

<html>
<head>
<title>GRE PREP</title>
<meta charset="utf-8">
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
      <li class="current-menu-item"><a href="template.php">HOME</a></li>
      <li><a href="template.php">FREE EDUCATIONAL TRIP</a>
        <ul>
          <li><a href="features.html">Columns layout</a>
          <li><a href="features-tabs.html">Tabbed content</a>
        </ul>
      </li>
      <li><a href="skins.html">MIND MAPS</a></li>
      <li><a href="statistics.php">USER STATISTICS</a>
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
      <li><a href="../phpBB/ucp.php?mode=login">DISCUSSION FORUM</a>
 
      </li>
      <li><a href="contact.html">CONTACT</a></li>
    </ul>
    <!-- Navigation -->
    <!-- categories -->
    <ul class="cat-list">
      <li>
        <h6>User Statistics</h6>
      </li>
      
     
    </ul>
    <!-- categories -->
   
  </div>
  <!-- ENDS SIDEBAR -->
  <!-- MAIN -->
  <div align="center" id="main">
    <div class="home-quotes">Painless GRE Preperation... Learn, Interact, Score!</div>
   
    <!-- CONTENT -->
    <div id="content">
      <!-- PAGE CONTENT -->
      <div id="page-content">
        <!-- feature blocks -->
        <h1 class="header-line"><!-- ENDS feature blocks -->
        <!-- TABS --></h1>
        <form id="form1" name="form1" method="post">
         <!--  <p>Welcome User ! </p>
          <p><strong style="color: #09C"> Your Subject area is :
            </strong>
            <input type="text" name="textfield" id="textfield">
          </p>
                  <p><strong><span style="font-family: Tahoma, Arial, Helvetica, sans-serif; font-style: oblique; color: #03C;">Your current GRE Score Range: </span> </strong>
                    <input type="text" name="textfield" id="textfield">
          </p> -->

          <?php

          $uid=$_SESSION['userID'];
          $uname=$_SESSION['username'];
          #echo "uname " , $uname;
          #echo "uid " , $uid;
          

           $sessionsql = "SELECT users.Username,users.stream,users.gre_range
                          FROM users 
                          inner join sessions
                          on users.ID = $uid
                          group by users.ID";
          
          $result=mysql_query($sessionsql, $conn);
          #echo "result:",$result;
          


          if($result === FALSE) 
          {
            die(mysql_error()); // TODO: better error handling
          }
          
            echo '<table border="1" style="text-align:center;" cellpadding="0" cellspacing="3"><tr>
                <th width="25%">Your Name </th>
                <th width="25%">Current GRE Score Range</th>
                <th width="25%">Desired Masters Stream</th>
                </tr>';
          
           while($row = mysql_fetch_array($result))
                    {
                      echo '<p><strong style="color: #07C"> WELCOME '.$row['Username'].'       ! </p>';
echo '<p><strong style="color: #02C"> As per our records,  </p>'; 

                      echo '<tr class="select">';
                      echo '<td><center><strong style="color: #02C"> '.$row['Username'].'</center></td>';
                      echo '<td><center><strong style="color: #02C"> '.$row['gre_range'].'</center></td>';
                      echo '<td><center><strong style="color: #02C"> '.$row['stream'].'</center></td>';
                      echo '</tr>'; 
                     
                   
                     } 

           echo '</table>';                
         
         ?>





    <label ><strong style="color: #09C">Rules to WIN the Free Educational Trip Contest       
            <p>&nbsp;</p>

      <style>
  ul 
  {
  list-style-image:url('./images/bullet_small.jpg');
  list-style-position:inside;
  }
    </style>  
              <ul>
              <li > <strong style="color: #09C"><h>Consistency</h> <p>&nbsp;</p></li>
              <strong style="color: #80C"> 
              Show a substantial 30% increase in 2 continuous practice tests and maintain the mark-range consistently for 5 or more tests.
              This is a check for your consistency.  

              <p>&nbsp;</p>
              
              <li > <strong style="color: #09C"><h></h>Motivating the peers</li> <p>&nbsp;</p>
               <strong style="color: #80C"> 
              Create a new post every day in the discussion forum with valid/challenging GRE sample Question(s). 
              The amount of question(s) complexity and the number of viewers who try answering it will fetch maximum points. 
              <p>&nbsp;</p>
              
              <li > <strong style="color: #09C"><h>Interaction </h></li> <p>&nbsp;</p>
               <strong style="color: #80C"> 
              Contribute to the discussion forum by replying properly to the posts and thereby increasing self-knowledge and interactions as well in the community. 
              The number of posts which you contribute consistently will fetch max points.
              </ul>

           

            <p>&nbsp;</p>





    </label> <p>

    <label ><strong style="color: #02C">If you are ready to accept the Challenge , Click below.....</label> <p>
        
    <a href="Universities.php"><img src="images/chose1.jpg"  alt="" width="277" height="123" class="blocks-gallery" id="image"/></a>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          
        </form>
          
      </div>
        <!-- ENDS TABS -->
      </div>
      <!-- ENDS PAGE-CONTENT -->
    </div>
    <!-- ENDS CONTENT -->
  </div>
  <!-- ENDS MAIN -->
</div>
<!-- ENDS WRAPPER -->
<!-- FOOTER -->
<div id="footer">
  <!-- FOOTER-WRAPPER -->
  <div id="footer-wrapper">
    <!-- footer-cols -->
    <ul id="footer-cols">
      <li class="col clear-col">
        <h6>About EasyGRE</h6>
       need to write something here. </li>
      <li class="col">
        <h6>Categories</h6>
        <ul>
          <li><a href="#">GRE Math</a></li>
          <li><a href="#">GRE Verbal</a></li>
          <li>GRE Analytical</li>
          <li><a href="#">Math Refreshers</a></li>
          <li>Vocabulary Refreshers</li>
        </ul>
      </li>
      <!-- Flickr --><!-- ENDS Flickr -->
    </ul>
    <!-- ENDS footer-cols -->
    <!-- footer-bottom -->
    <div id="footer-bottom">
      <div id="bottom-left">&copy; Copyright 2013 GRE PREP Pvt Ltd.<a target="_blank" href="http://www.luiszuno.com"></a></div>
      <div id="bottom-right">To top</div>
    </div>
    <!-- ENDS footer-bottom -->
  </div>
  <!-- ENDS FOOTER-WRAPPER -->
</div>
<!-- ENDS FOOTER -->
</body>
</html>
