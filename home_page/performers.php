<!DOCTYPE html>
<?php

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
   
    <!-- CONTENT -->
    <div id="content">
      <!-- PAGE CONTENT -->
      <div id="page-content">
        <!-- feature blocks -->
        <h1 class="header-line"><!-- ENDS feature blocks -->
        <!-- TABS --></h1>
        <form id="form1" name="form1" method="post">
         
          <p><strong style="color: #82C">Here are some of the stellar performers, whom we have handpicked for you!   <p>&nbsp;</p>
         
        <strong style="color: #67C"> These are they stellar performers of last year(s) contest, went to their dream Universities for a one day field trip! 
          </p>  

       

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
                     

                     while($row = mysql_fetch_array($result))
                    {
                    
                    
                     $u_gre=$row['gre_range'];                   
                     $u_stream=$row['stream'];
                     
                     
                     
                   
                     } 

           echo '</table>';         


         echo '<table border="1" style="text-align:center;" cellpadding="0" cellspacing="3"><tr>
                        <th width="10%">NAME</th>
                        <th width="25%">UNIV_NAME</th>
                        <th width="25%">WEBSITE</th>
                        </tr>';

          #$strsql = "SELECT * FROM `stellar_performers` WHERE 1 LIMIT 0, 30 ";
          

           $strsql = "SELECT stellar_performers.PERSON_NAME,stellar_performers.STREAM,stellar_performers.UNIV_NAME,stellar_performers.WEBSITE,stellar_performers.GRE_RANGE
                          FROM stellar_performers 
                          left join users
                          on stellar_performers.GRE_RANGE ='".$u_gre.
                          "' group by stellar_performers.UNIV_NAME";


          $result=mysql_query($strsql, $conn);

          if($result === FALSE) 
          {
            die(mysql_error()); // TODO: better error handling
          }
          
                    while($row = mysql_fetch_array($result))
                    {
                      echo '<tr class="select">';
                      echo '<td><center><strong style="color: #02C"> '.$row['PERSON_NAME'].'</center></td>';

                      echo '<td><center><strong style="color: #02C"> '.$row['UNIV_NAME'].'</center></td>';
                      echo '<td><center> <strong style="color: #02C"> '.$row['WEBSITE'].'</center></td>';
                      echo '</tr>'; 
                   
                    } 

          echo '</table>';  
 
          ?>


          <label ><strong style="color: #02C">If you wanna know about them and their experiences, Click below.....</label> <p>
        
    <a href="blog.php"><img src="images/nivo-arrows.png"  alt="" width="77" height="70" class="blocks-gallery" id="image"/></a>
            <tr>
              <th scope="row">&nbsp;</th>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <th scope="row">&nbsp;</th>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <th scope="row">&nbsp;</th>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </table>
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

