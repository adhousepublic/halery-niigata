<?php

/*** スクリプト・CSS読み込み ***/
if (!function_exists('my_header_scripts')) {
  function my_header_scripts()
  {
    if (!is_admin()) {

//      wp_deregister_script('jquery'); // デフォルトjQueryの差し替え
      wp_enqueue_script('imagesloadedjs', 'https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js', array(), null, true);
      wp_enqueue_script('slick', get_stylesheet_directory_uri() . '/common/js/libs/slick/slick.min.js', array(), null, true);
      wp_enqueue_script('easing', get_stylesheet_directory_uri() . '/common/js/libs/easing.js', array(), null, true);
      wp_enqueue_script('commonjs', get_stylesheet_directory_uri() . '/common/js/common.js', array(), null, true);

//      wp_enqueue_style( 'googlefont', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap', array(), null );
      wp_enqueue_style( 'slick', get_stylesheet_directory_uri() . '/common/js/libs/slick/slick.css', array(), null );
      wp_enqueue_style( 'slick-theme', get_stylesheet_directory_uri() . '/common/js/libs/slick/slick-theme.css', array(), null );
      wp_enqueue_style( 'commoncss', get_stylesheet_directory_uri() . '/common/css/common.css', array(), '20091160944' );
      wp_enqueue_style( 'transition', get_stylesheet_directory_uri() . '/common/css/common-transition.css', array(), '20091160944' );
      wp_enqueue_style( 'rwd', get_stylesheet_directory_uri() . '/common/css/common-rwd.css', array(), '20091160944' );
    }
  }

  add_action( 'wp_enqueue_scripts', 'my_header_scripts' );
}


add_theme_support('post-thumbnails');

/*** アーカイブごとに表示方法を変更する ***/
if (!function_exists('my_pre_get_posts')) {
  add_action('pre_get_posts', 'my_pre_get_posts');
  function my_pre_get_posts($query) {
//    if (!is_admin()) {
//      $query->set('order', 'ASC');
//      $query->set('orderby', 'title');
//    }
  }
}





/*** カテゴリーチェックボックス移動無効化 ***/
function keep_admin_posts_category_order( $args, $post_id = null ) {
  $args['checked_ontop'] = false;
  return $args;
}
add_action( 'wp_terms_checklist_args', 'keep_admin_posts_category_order' );



function custom_excerpt_length( $length ) {
  return 100;	//表示したい文字数
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more($more) {
  return '…'; //変更後の内容
}
add_filter('excerpt_more', 'new_excerpt_more');

