<?php
/**
 * Template Name: entry store Template
 * Description: A Page Template that adds a sidebar to pages
 *
 * @package WordPress
 */

get_header(); ?>

  <main>


    <?php
      $data = "https://spreadsheets.google.com/feeds/list/1SyZy2noA721izyHxvCUR266g34YwSFsek1Oeik3ZpbI/od6/public/values?alt=json";
      $json = file_get_contents($data);
      $json_decode = json_decode($json);
      $posts = $json_decode->feed->entry;

      foreach ($posts as $post) {
        echo $post->{'gsx$flg'}->{'$t'};
      }
    ?>

    <h2><?php the_title(); ?></h2>

    <div>

      <?php
        $page_id = 14;
        $content = get_page($page_id);
        echo $content->post_content;
      ?>

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
          <li>決勝トーナメント</li>
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
          <li>決勝トーナメント</li>
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
          <li>決勝トーナメント</li>
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
          <li>決勝トーナメント</li>
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
          <li>決勝トーナメント</li>
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
          <li>決勝トーナメント</li>
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
          <li>決勝トーナメント</li>
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
