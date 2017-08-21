<?php

// add_theme_support('menus');

register_sidebar(
  array(
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_widget' => '<h3>',
    'after_widget' => '</h3>',
  )
);

function blog_favicon() {
echo '<link rel="shortcut icon" type="image/x-icon" href="'.get_bloginfo('template_url').'/images/favicon.ico" />'."\n";
}
add_action('wp_head', 'blog_favicon');

function register_my_menu() {
  register_nav_menu('nav', 'nav Menu');
  register_nav_menu('footer', 'Footer Menu');
}
add_action('after_setup_theme', 'register_my_menu');

// cssverstion管理　日付
wp_enqueue_style(
  'dlo-chiba', // 使用テーマ
  get_template_directory_uri() . '/style.css',
  array(),
  date('Ymd', filemtime(get_template_directory() . '/style.css'))
);

//ここから自作jQueryファイル読み込みコード
function my_scripts() {
  wp_deregister_script('jquery');
  wp_enqueue_script( 'jquery', get_stylesheet_directory_uri().'/jquery3.0.0.js', "", "1.0", false );
  wp_enqueue_script( 'jquery-custom', get_stylesheet_directory_uri().'/main.js', array(), false, true );
}
add_action( 'wp_enqueue_scripts', 'my_scripts');

add_filter( 'wpcf7_validate_email', 'wpcf7_text_validation_filter_extend', 11, 2 );
add_filter( 'wpcf7_validate_email*', 'wpcf7_text_validation_filter_extend', 11, 2 );
function wpcf7_text_validation_filter_extend( $result, $tag ) {
  global $my_email_confirm;
  $tag = new WPCF7_Shortcode( $tag );
  $name = $tag->name;
  $value = isset( $_POST[$name] )
    ? trim( wp_unslash( strtr( (string) $_POST[$name], "\n", " " ) ) )
    : '';

  if ($name == "your-email"){
    $my_email_confirm=$value;
  }
  if ($name == "your-email_confirm" && $my_email_confirm != $value){
    $result->invalidate( $tag,"確認用のメールアドレスが一致していません");
  }
  if ($name == "store-email"){
    $my_email_confirm=$value;
  }
  if ($name == "store-email_confirm" && $my_email_confirm != $value){
    $result->invalidate( $tag,"確認用のメールアドレスが一致していません");
  }

  return $result;
}
/**
 * contact-form-7プラグインにて姓、名のフリガナが正しいかどうかを確認
 */

add_filter('wpcf7_validate_text',  'wpcf7_validate_kana', 11, 2);
add_filter('wpcf7_validate_text*', 'wpcf7_validate_kana', 11, 2);
function wpcf7_validate_kana($result,$tag){

  $tag = new WPCF7_Shortcode($tag);
  $name = $tag->name;

  $value = isset($_POST[$name]) ? trim(wp_unslash(strtr((string) $_POST[$name], "\n", " "))) : "";

  // furiganaはフォーム側のnameです
  if ($name == "store-name-phonetic") {

    // カタカナの場合
    if(!preg_match("/^[a-zA-Zァ-ヾ]+$/u", $value)) {

      $result->invalidate($tag, "全角カタカナで入力してください。");
    }
  }
  return $result;
}

/**
 * contact-form-7プラグインにて電話番号チェック
 */
add_filter('wpcf7_validate_tel',  'wpcf7_validate_tel', 11, 2);
add_filter('wpcf7_validate_tel*', 'wpcf7_validate_tel', 11, 2);
function wpcf7_validate_tel($result,$tag){
  $tag = new WPCF7_Shortcode($tag);
  $name = $tag->name;
  $value = isset($_POST[$name]) ? trim(wp_unslash(strtr((string) $_POST[$name], "\n", " "))) : "";
  // フォーム側のnameです
  if ($name == "store-tel") {
    // 半角数字のみ許可
    if(!preg_match("/^[0-9]{10,11}$/", $value)) {
      $result->invalidate($tag, "半角数字10文字以上11文字以下で入力してください。");
    }
  }
  return $result;
}
