<?php
include('_api.php');
$dataHelper = new NiwaDataHelper();
?>
<!DOCTYPE html>
<html lang="en" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
  <meta http-equiv="X-UA-Compatible" content="chrome=1" />
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>NIWA - <?php if ($title!='') { echo $title; } else { echo 'Nintendo Independent Wiki Alliance'; } ?></title>
  <link href="style.css" rel="stylesheet" type="text/css" />

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
  <div id="container">

  <div id="header">
    <a href="/" title="NIWA Network"><img src="/images/logo.png" width="250px" alt="NIWA Network" /></a>
  </div>

  <?php include('_menu.php'); ?>

  <div id="content">
