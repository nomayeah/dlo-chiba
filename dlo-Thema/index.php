<?php get_header(); ?>
  <main>
    <?php
      $page_id = 8; // 固定ページIDを入力
      $content = get_page($page_id);
      echo $content->post_content;
    ?>
  </main>
<?php get_footer(); ?>
