<?php
/**
 * Template Name: entry store Template
 * Description: A Page Template that adds a sidebar to pages
 *
 * @package WordPress
 */

get_header(); ?>
<style>nav{display: none;}</style>
</head>
<body>
  <?php get_header('inc'); ?>
<main>
    <p class="form-text">
      <span>Webエントリーをご希望の店舗は</span><span>以下の項目を全て入力し、</span><span>送信するボタンを押してください。</span>
    </p>
    <?php 
    if (have_posts()) :
      while (have_posts()) :
        the_post();
    ?>
    <h2><?php the_title(); ?></h2>

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
