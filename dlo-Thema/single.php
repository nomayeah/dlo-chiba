<?php get_header(); ?>
</head>
<body>
  <?php get_header('inc'); ?>
<main>

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
