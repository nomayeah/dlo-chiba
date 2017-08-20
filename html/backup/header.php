<!DOCTYPE html>
<html lang="ja" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://ogp.me/ns/fb#">
<head>
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>;charset=<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/jquery3.0.0.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/main.js"></script>

  <?php get_template_part('ogp');?>

</head>
<body>
  <header>
    <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="https://placehold.jp/1920x1080.png" alt=""></a></h1>
    <nav>
      <?php wp_nav_menu(); ?>
    </nav>
  </header>

  <?php wp_head(); ?>