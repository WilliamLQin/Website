<!-- Google Analytics -->
<?php
  $userAgent = $_SERVER['HTTP_USER_AGENT'];
  $iphone = strpos($userAgent, "iPhone");
  $android = strpos($userAgent, "Android");
  $palmpre = strpos($userAgent,"webOS");
  $berry = strpos($userAgent,"BlackBerry");
  $ipod = strpos($userAgent,"iPod");

  if ($iphone || $android || $palmpre || $ipod || $berry == true)
  {
    require('home.php');
  }
  else
  {
    require('php/splash.php');
  }
  // else
  // {
  //   require('home.php');
  // }
?>
