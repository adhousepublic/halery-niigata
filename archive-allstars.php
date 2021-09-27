<?php get_header();
?>

  <!-- main content -->
  <main id="main-content">
    <div id="inner-first-scene">
      <div class="inner_first_scene">
        <h1 class="page_main_caption decort_text">
          <span class="page_main_caption_text d_text">全国もぐり菓子オールスターズ</span>
          <img src="<?php echo get_template_directory_uri(); ?>/common/images/allstars/page-caption.svg" class="d_img" alt="">
        </h1>
      </div>
    </div>
    <div class="inner_content_wrap">
      <?php output_breadcrumb(); ?>

      <div class="inner_content">
        <div class="snack_allstars w_max1366">
          <ul class="salts_thumb_group w1024_in_1366">
            <?php
            $args = array(
              'post_type' => 'allstars',
              'posts_per_page' => -1,
              'order' => 'ASC',
            );

            $the_query = new WP_Query( $args );

            // ループ
            if ( $the_query->have_posts() ) : ?>
              <?php
              while ( $the_query->have_posts() ) : $the_query->the_post();
                $item_slug = get_post_field('post_name', get_the_ID());
                $acf_rows = get_field('item_img');
                $acf_first_row = $acf_rows[0];
                $item_thumb = $acf_first_row['img'];
                $title_img = get_field('item_name');
              ?>
                <li class="salts_thumb_list">
                  <a href="#" class="salts_call" data-call="<?php echo esc_attr($item_slug); ?>"><!--target set id name-->
                    <span class="salts_thumb_img" data-href="<?php echo esc_url($item_thumb); ?>"></span>
                  </a>
                  <p class="salts_thumb_title decort_text">
                    <span class="salts_thumb_ttl_text d_text"><?php the_title(); ?></span>
                    <img src="<?php echo esc_url($title_img); ?>" class="d_img" alt="">
                  </p>
                </li>
              <?php
              endwhile;
            endif;

            // 投稿データをリセット
            wp_reset_postdata();
            ?>
          </ul>

          <div class="salts_item_group"><!--is__pandding-->
           <?php
          if ( have_posts() ) : ?>
            <?php
            $item_num = 1;
            while ( have_posts() ) : the_post();
              $item_slug = get_post_field('post_name', get_the_ID());
              $catchcopy = get_field('catchcopy');
              $catchcopy_text = get_field('catchcopy_text');
              $acf_rows = get_field('item_img');
              $acf_first_row = $acf_rows[0];
              $item_thumb = $acf_first_row['img'];
              $title_img = get_field('item_name');
              $store_url = get_field('store_url');
              if(!$store_url) {
                $store_url = get_field('onlineshop_link', 'option');
              }
              ?>
            <div id="<?php echo esc_attr($item_slug); ?>" class="salts_item_list"><!--is__pandding-->
              <section class="salts_item_info">
                <h2 class="salts_item_caption">
                  <span class="salts_item_cpt_num">
                      <img src="<?php echo get_template_directory_uri(); ?>/common/images/allstars/item-num-0.png" alt="">
                  </span>
                  <span class="salts_item_cpt_tagline decort_text">
                      <span class="salts_item_cpt_tgln_text d_text"><?php echo esc_html($catchcopy_text); ?></span>
                      <img src="<?php echo esc_url($catchcopy); ?>" class="d_img" alt="">
                  </span>
                  <span class="salts_item_cpt_name decort_text">
                      <span class="salts_item_cpt_name_text d_text"><?php the_title(); ?></span>
                      <img src="<?php echo esc_url($title_img); ?>" class="d_img" alt="">
                  </span>
                </h2>
                <div class="salts_item_desc f__ln__30">
                  <?php the_content(); ?>
                </div>
                <div class="salts_item_link">
                  <a href="<?php echo esc_url($store_url); ?>" class="salts_item_to_store cmn_btn_type_1 cmn_link_unit" target="_blank">
                    <span class="cmn_btn_type_1_text f__16 f__wt__8">オンラインショップへ</span>
                    <span class="cmn_btn_type_1_icon">
                        <svg class="cmn_btn_arrow_tp_1" viewbox="0 0 38 9">
                            <use xlink:href="#use-cmn-arrow-1" class="cmn_btn_the_arrow_tp_1"></use>
                        </svg>
                    </span>
                  </a>
                </div>
              </section>
              <div class="salts_item_images">
                <?php if(have_rows('item_img')): ?>
                  <ul class="salts_item_img_show">
                    <?php
                    $slide_num = 1;
                    while(have_rows('item_img')): the_row(); ?>
                      <li class="salts_item_img_list <?php if($slide_num == 1) { echo 'salts_item_img_default'; } ?>" id="salts-itmimg-<?php echo esc_attr($item_num); ?>-<?php echo esc_attr($slide_num); ?>">
                        <img src="<?php echo esc_url(get_sub_field('img')) ?>" alt="">
                      </li>
                    <?php
                    $slide_num++;
                    endwhile; ?>
                  </ul>
                  <ol class="salts_itemimg_thumbs">
                    <?php
                    $thumb_num = 1;
                    while(have_rows('item_img')): the_row(); ?>
                      <li class="salts_itemimg_tmb_list salts_itemimg_tmb_list_1 cmn_link_unit" data-itemname="salts-itmimg-<?php echo esc_attr($item_num); ?>-<?php echo esc_attr($thumb_num); ?>">
                        <img src="<?php echo esc_url(get_sub_field('img')) ?>" alt="">
                      </li>
                      <?php
                      $thumb_num++;
                    endwhile; ?>
                  </ol>
                <?php endif; ?>
              </div>
            </div>
            <?php
            $item_num++;
            endwhile;
            ?>
          <?php endif; ?>

            <span class="salts_item_close">
                <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-close-1.svg" alt="">
            </span>
          </div>
          <div class="salts_footer">
            <a href="<?php echo esc_url(get_field('onlineshop_link', 'option')); ?>" class="salts_go_to_store cmn_btn_type_1 cmn_link_unit" target="_blank">
              <span class="cmn_btn_type_1_text f__16 f__wt__8 f__ltr__2">全商品一覧</span>
              <span class="cmn_btn_type_1_icon">
                  <svg class="cmn_btn_arrow_tp_1" viewbox="0 0 38 9">
                      <use xlink:href="#use-cmn-arrow-1" class="cmn_btn_the_arrow_tp_1"></use>
                  </svg>
              </span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- //main content -->

<?php
get_footer();

