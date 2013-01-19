<!doctype html>
<html>
<head>
    <title>Basic Starting point</title>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
</head>

<body>
<header>
  <a href="<?php bloginfo('url'); ?>" title="Home">
    <?php bloginfo('name'); ?>
  </a>
 </header> 

 <!-- enable navigation functionalit  -->
  
  <nav>
    <?php wp_nav_menu (); ?>
</nav>



