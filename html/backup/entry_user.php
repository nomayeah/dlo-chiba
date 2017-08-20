<?php
/**
 * Template Name: entry user Template
 * Description: A Page Template that adds a sidebar to pages
 *
 * @package WordPress
 */

get_header(); ?>

  <main>

    <?php 
    if (have_posts()) :
      while (have_posts()) :
        the_post();
    ?>

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
