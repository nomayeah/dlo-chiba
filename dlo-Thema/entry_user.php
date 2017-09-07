<?php
/**
 * Template Name: entry user Template
 * Description: A Page Template that adds a sidebar to pages
 *
 * @package WordPress
 */

get_header(); ?>
</head>
<body>
  <?php get_header('inc'); ?>
<main>
  <script>
    $(function(){
      $.ajax({
        type: 'GET',
        url: 'https://spreadsheets.google.com/feeds/list/1--b-gskGUJjNiZ3FEcp6gR7pLE0toXZXgGt8nyHTesY/oqgciix/public/values?alt=json',
      }).then(function(data) {
        var list_01 = document.getElementById('store-name-01'),
            store_list = '';
        for (var i = 0; i < data.feed.entry.length; i++ ) {
          store_list += '<option value="' + data.feed.entry[i].title.$t + '">' + data.feed.entry[i].title.$t + '</option>';
        }
        data.feed.entry.forEach(function(a, b, c) {
          var option = document.createElement('option');
          option.value = a.title.$t;
          option.textContent = a.title.$t;
          list_01.append(option);
        });
      });
    });
  </script>

  <p class="form-text"><span>ユーザーエントリーをご希望の方は</span><span>以下の項目を全て入力し、送信するボタンを押してください。</span></p>

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
