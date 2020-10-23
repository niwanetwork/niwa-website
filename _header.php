<?php 
include('_api.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
  <meta http-equiv="X-UA-Compatible" content="chrome=1" />
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>NIWA - <?php if ($title!='') { echo $title; } else { echo 'Nintendo Independent Wiki Alliance'; } ?></title>
  <link href="../style.css" rel="stylesheet" type="text/css" />
  <!--[if (IE)]>
  <link href="../fix.css" rel="stylesheet" type="text/css" />
  <![endif]-->

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-98371516-1', 'auto');
    ga('send', 'pageview');

  </script>
</head>

<body>
  <?php if ($topbar=='on') include('_topbar.php'); ?>
  <div id="container">

  <div id="header">
  <a href="http://niwanetwork.org" title="NIWA Network"><img src="../images/logo.png" width="250px" alt="NIWA Network" /></a>
  </div>

  <?php include('_menu.php'); ?>

  <div id="content">
  <!--[if lt IE 8]>
  <div id="hey-listen">
  Hey, you seem to be using an outdated web browser, update your browser for better compatability. <span style="font-size: 12px;"><a href="compatability.php">Click here for more information...</a></span>
  </div>
  <![endif]-->
