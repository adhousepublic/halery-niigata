<?php

/*** スクリプト・CSS読み込み ***/
if (!function_exists('my_header_scripts')) {
  function my_header_scripts()
  {
    if (!is_admin()) {

      wp_deregister_script('jquery'); // デフォルトjQueryの差し替え
      wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.0/jquery.min.js', array(), null, false);
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


/*【管理画面】ACF Options Page の設定 */
if( function_exists('acf_add_options_page') ) {
  acf_add_options_page(array(
    'page_title' => '基本設定', // ページタイトル
    'menu_title' => '基本設定', // メニュータイトル
    'menu_slug' => 'theme-general-settings', // メニュースラッグ
    'capability' => 'edit_posts',
    'redirect' => false
  ));
}

register_nav_menus(array(
  'global'    => 'グローバルナビゲーション',
  'footer'    => 'フッターナビゲーション',
));

// wp_nav_menuのliにclass追加
function add_additional_class_on_li($classes, $item, $args)
{
  if (isset($args->add_li_class)) {
    $classes['class'] = $args->add_li_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

// wp_nav_menuのaにclass追加
function add_additional_class_on_a($classes, $item, $args)
{
  if (isset($args->add_li_class)) {
    $classes['class'] = $args->add_a_class;
  }
  return $classes;
}
add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);

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
