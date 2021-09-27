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
      wp_enqueue_style( 'wordpresscss', get_stylesheet_directory_uri() . '/common/css/wordpress.css', array(), '20091160944' );
    }
  }

  add_action( 'wp_enqueue_scripts', 'my_header_scripts' );
}


add_theme_support('post-thumbnails');

add_action( 'pre_get_posts', 'my_pre_get_posts' );
function my_pre_get_posts( $query ) {
  if ( $query->is_main_query() && ! is_admin() && ( is_post_type_archive( 'snack_journeys' ) ) ) {
    $query->set( 'posts_per_page', 1 );
  }
  if ( $query->is_main_query() && ! is_admin() && ( is_post_type_archive( 'allstars' ) ) ) {
    $query->set( 'posts_per_page', -1 );
  }
}

/*【管理画面】ACF Options Page の設定 */
if( function_exists('acf_add_options_page') ) {
  acf_add_options_page(array(
    'page_title' => '基本設定', // ページタイトル
    'menu_title' => '基本設定', // メニュータイトル
    'menu_slug' => 'theme-general-settings', // メニュースラッグ
    'capability' => 'edit_posts',
    'position' => 3,
    'update_button' => __('更新', 'acf'),
    'updated_message' => __("設定を更新しました", 'acf'),
    'redirect' => false
  ));
}


/*** カテゴリーチェックボックス移動無効化 ***/
function keep_admin_posts_category_order( $args, $post_id = null ) {
  $args['checked_ontop'] = false;
  return $args;
}
add_action( 'wp_terms_checklist_args', 'keep_admin_posts_category_order' );

/* the_archive_title 余計な文字を削除 */
add_filter( 'get_the_archive_title', function ($title) {
  if (is_category()) {
    $title = single_cat_title('',false);
  } elseif (is_tag()) {
    $title = single_tag_title('',false);
  } elseif (is_tax()) {
    $title = single_term_title('',false);
  } elseif (is_post_type_archive() ){
    $title = post_type_archive_title('',false);
  } elseif (is_date()) {
    $title = get_the_time('Y年n月');
  } elseif (is_search()) {
    $title = '検索結果：'.esc_html( get_search_query(false) );
  } elseif (is_404()) {
    $title = '「404」ページが見つかりません';
  } else {

  }
  return $title;
});

function custom_excerpt_length( $length ) {
  return 100;	//表示したい文字数
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more($more) {
  return '…'; //変更後の内容
}
add_filter('excerpt_more', 'new_excerpt_more');

function output_breadcrumb(){
  $home = '<li class="breadcrumbs_list"><a class="breadcrumbs_link mover_link cmn_link_unit" href="'.get_bloginfo('url').'">top</a></li>';
  echo '<ul class="the_breadcrumbs w_max1366">';

  // トップページの場合
  if ( is_home() ) {
    echo $home;
    echo '<li class="breadcrumbs_list">お知らせ・ブログ</li>';

    // カテゴリーページの場合
  } else if ( is_category() ) {
    $cat = get_queried_object();
    $cat_id = $cat->parent;
    $cat_list = array();
    while($cat_id != 0) {
      $cat = get_category( $cat_id );
      $cat_link = get_category_link( $cat_id );
      array_unshift( $cat_list, '<li class="breadcrumbs_list"><a class="breadcrumbs_link mover_link cmn_link_unit" href="'.$cat_link.'">'.$cat->name.'</a></li>' );
      $cat_id = $cat->parent;
    }
    echo $home;
    echo '<li class="breadcrumbs_list"><a href="'.get_bloginfo('url').'/articles/">お知らせ・ブログ</a></li>';
    foreach ($cat_list as $value) {
      echo $value;
    }
    the_archive_title('<li class="breadcrumbs_list">', '</li>');

    // アーカイブページの場合
  } else if ( is_archive() ) {
    echo $home;
    the_archive_title('<li class="breadcrumbs_list">', '</li>');

    // 投稿ページの場合
  } else if ( is_single() ) {
    $cat = get_the_category();
    if( isset( $cat[0]->cat_ID ) ) $cat_id = $cat[0]->cat_ID;
    $cat_list = array();
    while( $cat_id != 0 ) {
      $cat = get_category( $cat_id );
      $cat_link = get_category_link( $cat_id );
      array_unshift( $cat_list, '<li class="breadcrumbs_list"><a class="breadcrumbs_link mover_link cmn_link_unit" href="'.$cat_link.'">'.$cat->name.'</a></li>' );
      $cat_id = $cat->parent;
    }
    echo $home;
    if((get_post_type() == 'snack_journeys')) {
      echo '<li class="breadcrumbs_list"><a href="'.get_bloginfo('url').'/snack_journeys/">全国もぐり菓子発掘の旅</a></li>';
    }elseif((get_post_type() == 'allstars')) {
      echo '<li class="breadcrumbs_list"><a href="'.get_bloginfo('url').'/allstars/">全国もぐり菓子オールスター</a></li>';
    }else{
      echo '<li class="breadcrumbs_list"><a href="'.get_bloginfo('url').'/articles/">お知らせ・ブログ</a></li>';
      foreach($cat_list as $value) {
        echo $value;
      }
    }
//    the_title('<li class="breadcrumbs_list">', '</li>');

    // 固定ページの場合
  } else if ( is_page() ) {
    echo $home;
    the_title('<li class="breadcrumbs_list">', '</li>');

    // 検索結果の場合
  } else if ( is_search() ) {
    echo $home;
    echo '<li class="breadcrumbs_list">「'.get_search_query().'」の検索結果</li>';

    // 404ページの場合
  } else if ( is_404() ) {
    echo $home;
    echo '<li class="breadcrumbs_list">ページが見つかりません</li>';
  }
  echo '</ul>';
}

// ページネーションのHTMLカスタマイズ
function custom_pagination_html( $template ) {
  $template = '
    <nav class="cmn_blog_pager_custom w_max1024 w960_in_1024" role="navigation">
        %3$s
    </nav>';
  return $template;
}
add_filter('navigation_markup_template','custom_pagination_html');

function add_class_page_slug($classes) {
  if( is_page() ) {
    $page = get_post( get_the_ID() );
    $classes[] = 'inner_'. $page->post_name;
  }elseif(is_home() || is_singular('post') || is_category()) {
    $classes[] = 'inner_blog';
  }elseif(is_post_type_archive('snack_journeys') || is_singular('snack_journeys')) {
    $classes[] = 'inner_journey';
  }
  return $classes;
}
add_filter('body_class', 'add_class_page_slug');
