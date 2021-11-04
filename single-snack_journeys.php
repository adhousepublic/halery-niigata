<?php get_header();
?>

  <!-- main content -->
  <main id="main-content">
    <div id="inner-first-scene">
      <div class="inner_first_scene">
        <h1 class="page_main_caption decort_text">
          <span class="page_main_caption_text d_text">全国もぐり菓子発掘の旅</span>
          <img src="<?php echo get_template_directory_uri(); ?>/common/images/snack_journeys/page-caption.svg" class="d_img" alt="">
        </h1>
      </div>
    </div>

    <div class="inner_content_wrap">
      <?php output_breadcrumb(); ?>

      <div class="inner_content">


        <article class="cmn_blog_content_wrap w_max1024">
          <h2 class="cmn_blog_tab_group tabs_in_blog">
            <?php
            $args = array(
              'post_type' => 'snack_journeys',
              'posts_per_page' => -1,
            );

            $the_query = new WP_Query( $args );

            // ループ
            if ( $the_query->have_posts() ) : ?>
              <?php
              while ( $the_query->have_posts() ) : $the_query->the_post();
              ?>
                <a href="<?php the_permalink(); ?>" class="cmn_blog_tab_caption mover_link cmn_link_unit f__16 f__wt__8 f__ln__28 f__ltr__2 f__ltr__2__center font_en_roboto"><?php the_title(); ?></a>
              <?php
              endwhile;
            endif;

            // 投稿データをリセット
            wp_reset_postdata();
            ?>
          </h2>

          <?php
          if ( have_posts() ) : ?>
            <article class="cmn_blog_detail_content cmn_blog_detcnt_in_journey">
              <?php
              while ( have_posts() ) : the_post();
              $title_img = get_field('title_img');
                ?>
                <h2 class="journey_episode_caption decort_text">
                  <span class="journey_epicpt_text d_text"><?php the_title(); ?></span>
                  <img src="<?php echo esc_url($title_img); ?>" class="d_img" alt="">
                </h2>
                <div class="cmn_blog_detail_article wysiwyg_format">
                  <?php the_content(); ?>
                </div>

              <?php endwhile; ?>
            </article>

          <?php else: ?>
          <?php endif; ?>


          <div class="cmn_blog_detail_footer cmn_blog_detail_footer_in_journey">
            <p class="cmn_blog_detail_backlist cmn_btn_type_1 cmn_link_unit" id="backlist-in-journey">
              <span class="cmn_btn_type_1_text f__16 f__wt__8 f__ltr__2">他の編を読む</span>
              <span class="cmn_btn_type_1_icon f__36 f__wt__1 font_en_roboto">^</span>
            </p>
          </div>

        </article>
      </div>
    </div>
  </main>
  <!-- //main content -->


<?php
get_footer();

