<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#" <?php if(is_front_page()) { ?>class="top_page"<?php } ?>>
<head>
  <?php
  if(is_front_page()) {
    $ogp_description = get_bloginfo('description');
  }else if (is_singular()) {
    setup_postdata($post);
    $ogp_title = $post->post_title;
    $ogp_description = mb_substr(get_the_excerpt(), 0, 100);
    $ogp_url = get_permalink();
    wp_reset_postdata();
  }
  ?>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?php echo trim(wp_title('', false)); if(wp_title('', false)) { echo ' - '; } bloginfo('name'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="format-detection" content="telephone=no">
  <meta name="theme-color" content="#96d2cd">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="apple-mobile-web-app-title" content="">
  <?php if(!empty($ogp_description)) { ?>
    <meta name="description" content="<?php echo esc_html($ogp_description); ?>"/>
  <?php } ?>
  <meta property="og:locale" content="ja_JP" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="<?php echo trim(wp_title('', false)); if(wp_title('', false)) { echo ' - '; } bloginfo('name'); ?>" />
  <?php if(!empty($ogp_description)) { ?>
    <meta property="og:description" content="<?php echo esc_html($ogp_description); ?>/Facebook" />
  <?php } ?>
  <?php if(!empty($ogp_url)) { ?>
    <meta property="og:url" content="<?php echo esc_html($ogp_url); ?>" />
  <?php }else{ ?>
    <meta property="og:url" content="<?php echo esc_url( home_url() ); ?>" />
  <?php } ?>
  <meta property="og:site_name" content="あたりめのハレリー" />
  <meta property="fb:app_id" content="505643407207907" />
  <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/common/images/common/og_img.jpg" />
  <meta property="og:image:secure_url" content="<?php echo get_template_directory_uri(); ?>/common/images/common/og_img.jpg" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="630" />
  <meta name="twitter:card" content="summary_large_image" />
  <?php if(!empty($ogp_description)) { ?>
    <meta name="twitter:description" content="<?php echo esc_html($ogp_description); ?>/twitter" />
  <?php } ?>
  <meta name="twitter:title" content="<?php echo trim(wp_title('', false)); if(wp_title('', false)) { echo ' - '; } bloginfo('name'); ?>" />
  <meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/common/images/common/og_img.jpg" />
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/common/images/common/favicons/favicon.ico" type="image/vnd.microsoft.icon">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/common/images/common/favicons/favicon.ico" type="image/vnd.microsoft.icon">
  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/common/images/common/favicons/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/common/images/common/favicons/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/common/images/common/favicons/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/common/images/common/favicons/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/common/images/common/favicons/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/common/images/common/favicons/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/common/images/common/favicons/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/common/images/common/favicons/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/common/images/common/favicons/apple-touch-icon-180x180.png">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/common/images/common/favicons/android-chrome-192x192.png" sizes="192x192">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/common/images/common/favicons/favicon-48x48.png" sizes="48x48">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/common/images/common/favicons/favicon-96x96.png" sizes="96x96">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/common/images/common/favicons/favicon-16x16.png" sizes="16x16">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/common/images/common/favicons/favicon-32x32.png" sizes="32x32">
  <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/common/images/common/favicons/manifest.json?ver=21091134">
  <meta name="msapplication-TileColor" content="#96d2cd">
  <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/common/images/common/favicons/mstile-144x144.png">
  <link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>">
  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <?php wp_head(); ?>
  <!--[if !IE]><!-->
  <script type="text/javascript">
    if (/*@cc_on!@*/false) {
      document.documentElement.className += ' ie' + document.documentMode;
    };
    if (/*@cc_on!@*/true) {
      document.documentElement.className += ' ie' + document.documentMode;
    }
  </script>
  <!--<![endif]-->
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/common/js/libs/modernizr-2.6.2.min.js" defer></script>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-M4PD52J');</script>
  <!-- End Google Tag Manager -->

  <!-- Global site tag (gtag.js) - Google Analytics for Adpublic -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-QWYQ1CB9Q9"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-QWYQ1CB9Q9');
  </script>
  <!-- //Global site tag (gtag.js) - Google Analytics for Adpublic -->
</head>

<body <?php if(is_front_page()) { ?>id="page-top"<?php }else{ ?>id="page-inner"<?php } ?> <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M4PD52J"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!-- wrapper -->
<div class="wrapper the_page_mover nav_is_close">
  <header id="the-header" class="">
    <div id="main-logo">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="home_back mover_link">
        <svg class="header_m_logo_element" viewbox="0 0 405 216">
          <use xlink:href="#use-logo-main" class="the_header_m_logo"></use>
        </svg>
      </a>
    </div>
  </header>
  <aside class="the_aside">
    <div class="nav_switch_open">
      <div class="switch_open_graph">
        <div class="switch_open_icon open_icon_1">
          <svg class="the_open_icon" viewbox="0 0 60 14.5">
            <use xlink:href="#use-ika-foot" class="the_open_icon_element"></use>
          </svg>
        </div>
        <div class="switch_open_icon open_icon_2">
          <svg class="the_open_icon" viewbox="0 0 60 14.5">
            <use xlink:href="#use-ika-foot" class="the_open_icon_element"></use>
          </svg>
        </div>
        <div class="switch_open_icon open_icon_2">
          <svg class="the_open_icon" viewbox="0 0 60 14.5">
            <use xlink:href="#use-ika-foot" class="the_open_icon_element"></use>
          </svg>
        </div>
      </div>
      <span class="switch_open_text cmn_tool_text font_en_roboto f__ltr__2 f__ltr__2__center f__wt__8">menu</span>
    </div>
    <div class="aside_to_online_store">
      <a href="<?php echo esc_url(get_field('onlineshop_link', 'option')); ?>" class="store_access_link" target="_blank">
        <div class="ika_of_onlinstore">
          <svg class="the_ika_icon" viewbox="0 0 100 78">
            <use xlink:href="#use-ika-for-navi" class="the_ika_icon_element"></use>
          </svg>
        </div>
        <span class="to_online_store_text cmn_tool_text font_en_roboto f__ltr__3 f__ltr__3__center f__wt__8">shop</span>
      </a>
    </div>
    <ul class="aside_sns_group">
      <li class="the_sns_list sns_list_instagram">
        <a href="<?php echo esc_url(get_field('instagram_link', 'option')); ?>" class="sns_access_link cmn_link_unit" target="_blank">
          <svg class="the_sns_icon_instagram" viewbox="0 0 25 25">
            <use xlink:href="#use-sns-icon-instagram" class="the_sns_icon_instagram_element"></use>
          </svg>
        </a>
      </li>
      <li class="the_sns_list sns_list_facebook">
        <a href="<?php echo esc_url(get_field('facebook_link', 'option')); ?>" class="sns_access_link cmn_link_unit" target="_blank">
          <svg class="the_sns_icon_facebook" viewbox="0 0 25 25">
            <use xlink:href="#use-sns-icon-facebook" class="the_sns_icon_facebook_element"></use>
          </svg>
        </a>
      </li>
    </ul>
  </aside>
  <nav id="the-nav" class="the_nav">
    <div class="m_nav_container">
      <h2 class="cmn_m_caption_element m_nav_caption">
                <span class="cmn_m_caption_dialogue m_nav_cpt_top">
                    <svg class="cmn_m_caption_dialogue_graph m_nav_cpt_top_graph" viewbox="0 0 550 70">
                        <use xlink:href="#use-logo-main-dialogue" class="cmn_m_caption_dialogue_graph_element m_nav_cpt_top_graph_element"></use>
                    </svg>
                </span>
        <span class="cmn_m_caption_type m_nav_cpt_bot">
                    <svg class="cmn_m_caption_type_graph m_nav_cpt_bot_graph" viewbox="0 0 405 216">
                        <use xlink:href="#use-logo-main" class="cmn_m_caption_type_graph_element m_nav_cpt_bot_graph_element"></use>
                    </svg>
                </span>
      </h2>
      <div class="m_nav_content">
        <?php if(have_rows('menu', 'option')): ?>
          <ul class="m_nav_link_group">
            <?php
            while(have_rows('menu', 'option')): the_row();
              $menu_link = get_sub_field('url');
              $menu_newtab = get_sub_field('newtab');
              $menu_label = get_sub_field('label');
                ?>
                <li class="m_nav_link_list">
                  <a href="<?php echo esc_url($menu_link); ?>" class="m_nav_the_link cmn_link_unit f__20 f__wt__8 cmn_link_unit <?php if(!$menu_newtab){ ?>mover_link<?php } ?>" <?php if($menu_newtab){ ?>target="_blank" rel="nofollow noopener"<?php } ?>>
                    <?php echo esc_html($menu_label); ?>
                  </a>
                </li>
              <?php
            endwhile;
            ?>
            <li class="m_nav_link_list">
              <a href="<?php echo esc_url(get_field('onlineshop_link', 'option')); ?>" class="m_nav_the_link cmn_link_unit f__20 f__wt__8 cmn_link_unit" target="_blank" rel="nofollow noopener">
                オンラインストア
              </a>
            </li>
            <li class="m_nav_link_list">
              <a href="<?php echo esc_url(get_field('contact_link', 'option')); ?>" class="m_nav_the_link cmn_link_unit f__20 f__wt__8 cmn_link_unit" target="_blank" rel="nofollow noopener">
                お問い合わせ
              </a>
            </li>
          </ul>
        <?php endif; ?>
<!--        <ul class="m_nav_link_group">-->
<!--          <li class="m_nav_link_list">-->
<!--            <a href="--><?php //echo esc_url( home_url() ); ?><!--/about" class="m_nav_the_link cmn_link_unit f__20 f__wt__8 cmn_link_unit mover_link">ハレリーについて</a>-->
<!--          </li>-->
<!--          <li class="m_nav_link_list">-->
<!--            <a href="--><?php //echo esc_url( home_url() ); ?><!--/allstars" class="m_nav_the_link cmn_link_unit f__20 f__wt__8 cmn_link_unit mover_link">全国もぐり菓子オールスター</a>-->
<!--          </li>-->
<!--          <li class="m_nav_link_list">-->
<!--            <a href="--><?php //echo esc_url( home_url() ); ?><!--/snack_journeys" class="m_nav_the_link cmn_link_unit f__20 f__wt__8 cmn_link_unit mover_link">全国もぐり菓子発掘の旅</a>-->
<!--          </li>-->
<!--          <li class="m_nav_link_list">-->
<!--            <a href="--><?php //echo esc_url( home_url() ); ?><!--/blog" class="m_nav_the_link cmn_link_unit f__20 f__wt__8 cmn_link_unit mover_link">お知らせ・ブログ</a>-->
<!--          </li>-->
<!--          <li class="m_nav_link_list">-->
<!--            <a href="<?php echo esc_url(get_field('onlineshop_link', 'option')); ?>" class="m_nav_the_link cmn_link_unit f__20 f__wt__8 cmn_link_unit" target="_blank">オンラインストア</a>-->
<!--          </li>-->
<!--          <li class="m_nav_link_list">-->
<!--            <a href="https://thebase.in/inquiry/halery-shopselect-net" class="m_nav_the_link cmn_link_unit f__20 f__wt__8 cmn_link_unit" target="_blank">お問い合わせ</a>-->
<!--          </li>-->
<!--        </ul>-->
        <div class="elmt_uruma elmt_uruma_in_nav">
          <div class="elmt_uruma_wrap">
                        <span class="elmt_uruma_lefthand">
                            <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-uruma-1_lefthand.svg" class="elmt_uruma_lefthand_img" alt="">
                        </span>
            <span class="elmt_uruma_righthand">
                            <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-uruma-1_righthand.svg" class="elmt_uruma_righthand_img" alt="">
                        </span>
            <span class="elmt_uruma_body">
                            <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-uruma-1_body.svg" class="elmt_uruma_body_img" alt="">
                        </span>
            <span class="elmt_uruma_dialog">
                            <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-uruma-1_dialogue-2.svg" class="elmt_uruma_dialog_img" alt="">
                        </span>
          </div>
        </div>
      </div>
      <div class="nav_switch_close">
        <div class="switch_close_graph">
          <div class="switch_close_icon close_icon_1">
            <svg class="the_close_icon" viewbox="0 0 60 14.5">
              <use xlink:href="#use-ika-foot" class="the_close_icon_element"></use>
            </svg>
          </div>
          <div class="switch_close_icon close_icon_2">
            <svg class="the_close_icon" viewbox="0 0 60 14.5">
              <use xlink:href="#use-ika-foot" class="the_close_icon_element"></use>
            </svg>
          </div>
        </div>
        <span class="switch_close_text cmn_tool_text font_en_roboto f__ltr__2 f__ltr__2__center f__wt__8">close</span>
      </div>
    </div>
  </nav>
