<!DOCTYPE html>
<html>
<head>
  <?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

include "../includes/conn.php";
include "../includes/includes.php";

define('IN_PHPBB', true);
$phpbb_root_path = '../phpBB/';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
require($phpbb_root_path . 'common.' . $phpEx);
require($phpbb_root_path . 'includes/functions_user.' . $phpEx);
require($phpbb_root_path . 'includes/functions_module.' . $phpEx);

// Basic parameter data
$id   = request_var('i', '');
$mode = request_var('mode', '');

if (in_array($mode, array('login', 'logout', 'confirm', 'sendpassword', 'activate')))
{
  define('IN_LOGIN', true);
}

// Start session management
$u = $user->session_begin();
echo $u;
$a=$auth->acl($user->data);
$user->setup('ucp');  
// Setting a variable to let the style designer know where he is...
$template->assign_var('S_IN_UCP', true);

?>

<title>Free Educational Trip</title>
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
    
    <li>
      <ul class="cat-list">
        <li> 
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

       <label ><strong style="color: #09C">User Statistics</label> <p>


          <?php
          echo '<table border="1" style="text-align:center;" cellpadding="0" cellspacing="3"><tr>
                <th width="20%">User Name</th>
                <th width="10%">Posts Contributed </th>
                <th width="10%">Marks increase %</th>
                <th width="15%">User Rank </th>
                </tr>';

          #$sql = "SELECT * FROM `phpbb_users` WHERE `phpbb_users`.`username` = 'ramki' LIMIT 1";
          
          $sql = "SELECT * FROM `phpbb_users` WHERE 1 LIMIT 0, 30 ";   
          $result=mysql_query($sql, $conn);
          $user->data['user_id'];
                    
                    while($row = mysql_fetch_array($result))
                    {

                      echo '<td><center><strong style="color: #02C">'.$row['username'].'</center></td>';
                      echo '<td><center><strong style="color: #02C">'.$row['user_posts'].'</center></td>'; 
                      echo '<td><center><strong style="color: #02C">'.$row['user_jabber'].'</center></td>';
                      echo '<td><center><strong style="color: #02C">'.$row['user_rank'].'</center></td>';
                
                      echo '</tr>'; 
                   
                    } 

          echo '</table>'; 
          $uname = "SELECT * FROM `phpbb_users` WHERE `phpbb_users`.`user_id` = 'ramki' LIMIT 1";
          $posts = "SELECT * FROM `phpbb_posts` where `poster_id`= 48 LIMIT 0, 30 ";  



          ?>


    <label ><strong style="color: #07C">Keep trying   !! "Arise, Awake and stop not till the Goal is reached"</label> <p>
        
    <a href="index.php"><img src="images/mission.jpg"  alt="" width="77" height="70" class="blocks-gallery" id="image"/></a>       
    <!-- CONTENT --><!-- ENDS CONTENT -->
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
