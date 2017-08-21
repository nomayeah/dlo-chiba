<?php
/**
 * Template Name: top Template
 * Description: A Page Template that adds a sidebar to pages
 *
 * @package WordPress
 */

get_header(); ?>
</head>
<body>
  <?php get_header('inc'); ?>
<main class="top">

    <?php 
    if (have_posts()) :
      while (have_posts()) :
        the_post();
    ?>
    <h2 class="top-caution"><?php the_title(); ?></h2>

    <div>
      <?php the_content(); ?>
    </div>
    <?php
      endwhile;
    else:
    ?>
    <?php
    endif;
    ?>

  </main>
<?php get_footer(); ?>
