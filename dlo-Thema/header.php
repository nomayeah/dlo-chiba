<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
	<script src="js/jquery3.0.0.js"></script>
</head>
<body>
  <header>
    <h1><img src="https://placehold.jp/1920x1080.png" alt=""></h1>
    <nav>
      <?php wp_nav_menu(); ?>
    </nav>
  </header>

  <?php wp_head(); ?>