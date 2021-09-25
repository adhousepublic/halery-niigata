<?php get_header();
?>

  <!-- main content -->
  <main id="main-content">
    <div id="inner-first-scene">
      <div class="inner_first_scene">
        <h1 class="page_main_caption decort_text">
          <span class="page_main_caption_text d_text">お知らせ・ブログ</span>
          <img src="<?php echo get_template_directory_uri(); ?>/common/images/blog/page-caption.svg" class="d_img" alt="">
        </h1>
      </div>
    </div>

    <div class="inner_content_wrap">

      <ul class="the_breadcrumbs w_max1366">
        <li class="breadcrumbs_list">
          <a href="/" class="breadcrumbs_link mover_link cmn_link_unit">top</a>
        </li>
        <li class="breadcrumbs_list">
          <a href="../blog" class="breadcrumbs_link mover_link cmn_link_unit">お知らせ・ブログ</a>
        </li>
      </ul>

      <div class="inner_content">

        <article class="cmn_blog_content_wrap w_max1024">

          <h2 class="cmn_blog_tab_group tabs_in_blog">
            <a href="<?php echo esc_url( home_url( '/news/' ) ); ?>" class="cmn_blog_tab_caption mover_link cmn_link_unit f__16 f__wt__8 f__ln__28 f__ltr__2 f__ltr__2__center font_en_roboto">すべて</a>
            <?php
            $categories = get_categories();
            foreach($categories as $category) {
              echo '<a href="'.get_category_link($category->term_id).'" class="cmn_blog_tab_caption mover_link cmn_link_unit f__16 f__wt__8 f__ln__28 f__ltr__2 f__ltr__2__center font_en_roboto">'.$category->name.'</a>';
            }
            ?>
          </h2>


          <?php
          if ( have_posts() ) : ?>
            <div class="cmn_blog_list_group cmn_blog_ligrp_in_blog">
              <?php
              while ( have_posts() ) : the_post();
                ?>
                <?php
                if ( has_post_thumbnail() ) {
                  $attach_id = get_post_thumbnail_id($post->ID, "thumbnail");
                  $image = wp_get_attachment_image_src($attach_id);
                  $image_url = $image[0];
                }else{
                  $image_url = get_template_directory_uri() . '/common/images/blog/the_thumbs.jpg';
                }
                ?>
                <article class="cmn_blog_the_list">
                  <a href="<?php the_permalink(); ?>" class="cmn_blog_list_link mover_link">
                    <img src="<?php echo esc_url($image_url); ?>" class="cmn_blog_list_thumb" alt="">
                  </a>
                  <div class="cmn_blog_article">
                    <h2 class="cmn_blog_article_caption">
                      <span class="cmn_blog_article_caption_text f__16 f__wt__5 f__ln__28"><?php the_title(); ?></span>
                    </h2>
                    <p class="cmn_blog_tags">
                      <?php
                      $categories = get_the_category();
                      foreach( $categories as $category ) {
                        echo '<a href="'.get_category_link($category->term_id).'" class="cmn_blog_tag_link mover_link">'.$category->name.'</a>';
                      }
                      ?>
                    </p>
                  </div>
                  <time class="cmn_blog_date font_en_roboto"><?php echo get_the_date('Y.n.d'); ?></time>
                </article>
              <?php endwhile; ?>
            </div>

          <?php else: ?>
          <?php endif; ?>
        </article>

        <div class="cmn_blog_pager w_max1024 w960_in_1024">
          <a href="../blog" class="cmn_blog_pager_list cmn_blog_pager_list_prev mover_link cmn_link_unit"><</a>
          <a href="../blog" class="cmn_blog_pager_list mover_link cmn_link_unit cmn_blog_pager_current">1</a>
          <a href="../blog" class="cmn_blog_pager_list mover_link cmn_link_unit">2</a>
          <a href="../blog" class="cmn_blog_pager_list mover_link cmn_link_unit">3</a>
          <span class="cmn_blog_pager_list cmn_blog_pager_more">...</span>
          <a href="../blog" class="cmn_blog_pager_list mover_link cmn_link_unit">99</a>
          <a href="../blog" class="cmn_blog_pager_list mover_link cmn_blog_pager_list_next cmn_link_unit">></a>
        </div>
      </div>
    </div>
  </main>
  <!-- //main content -->


<?php
get_footer();

