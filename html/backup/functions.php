<?php

add_theme_support('menus');

register_sidebar(
  array(
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_widget' => '<h3>',
    'after_widget' => '</h3>',
  )
);
