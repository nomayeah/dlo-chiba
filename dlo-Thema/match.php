<?php
/**
 * Template Name: match Template
 * Description: A Page Template that adds a sidebar to pages
 *
 * @package WordPress
 */

get_header(); ?>
</head>
<body>
  <?php get_header('inc'); ?>
<main>

    <h2><?php the_title(); ?></h2>

    <style>#select-area {display: none;}</style>
    <section id="select-area">
      <form id="range_select" action="range">
        <select id="range_select_list" name="ranges">
          <option value="1">LEVEL - １</option>
          <option value="2">LEVEL - ２</option>
          <option value="3">LEVEL - ３</option>
          <option value="4">LEVEL - ４</option>
          <option value="5">LEVEL - ５</option>
          <option value="6">LEVEL - ６</option>
          <option value="7">LEVEL - ７</option>
          <option value="8">LEVEL - ８</option>
          <option value="9">LEVEL - MAX</option>
        </select>
      </form>
    </section>
    <section id="range_content">
      <div class="active">
        <ul>
          <li class="active">ロビン</li>
          <li></li>
        </ul>
        <ul>
          <?php
            $page_id = 35;
            $content = get_page($page_id);
            echo $content->post_content;
          ?>
        </ul>
      </div>
      <div>
        <ul>
          <li>ロビン</li>
          <li></li>
        </ul>
        <ul>
          <?php
            $page_id = 39;
            $content = get_page($page_id);
            echo $content->post_content;
          ?>
        </ul>
      </div>
      <div>
        <ul>
          <li>ロビン</li>
          <li></li>
        </ul>
        <ul>
          <?php
            $page_id = 41;
            $content = get_page($page_id);
            echo $content->post_content;
          ?>
        </ul>
      </div>
      <div>
        <ul>
          <li>ロビン</li>
          <li></li>
        </ul>
        <ul>
          <?php
            $page_id = 43;
            $content = get_page($page_id);
            echo $content->post_content;
          ?>
        </ul>
      </div>
      <div>
        <ul>
          <li>ロビン</li>
          <li></li>
        </ul>
        <ul>
          <?php
            $page_id = 45;
            $content = get_page($page_id);
            echo $content->post_content;
          ?>
        </ul>
      </div>
      <div>
        <ul>
          <li>ロビン</li>
          <li></li>
        </ul>
        <ul>
          <?php
            $page_id = 49;
            $content = get_page($page_id);
            echo $content->post_content;
          ?>
        </ul>
      </div>
      <div>
        <ul>
          <li>ロビン</li>
          <li></li>
        </ul>
        <ul>
          <?php
            $page_id = 52;
            $content = get_page($page_id);
            echo $content->post_content;
          ?>
        </ul>
      </div>
      <div>
        <ul>
          <li>ロビン</li>
          <li></li>
        </ul>
        <ul>
          <?php
            $page_id = 54;
            $content = get_page($page_id);
            echo $content->post_content;
          ?>
        </ul>
      </div>
      <div>
        <ul>
          <li>ロビン</li>
          <li></li>
        </ul>
        <ul>
          <?php
            $page_id = 56;
            $content = get_page($page_id);
            echo $content->post_content;
          ?>
        </ul>
      </li>
      </div>
    </section>

  </main>
<?php get_footer(); ?>
