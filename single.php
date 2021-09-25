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
    <?php
    if ( have_posts() ) :
      while ( have_posts() ) : the_post();
        $post_type = get_post_type();
        ?>

        <article class="cmn_blog_content_wrap w_max1024">
          <h2 class="cmn_blog_detail_caption f__34 f__wt__8 f__ln__46"><?php the_title(); ?></h2>
          <div class="cmn_blog_detail_info">
            <p class="cmn_blog_tags">
              <?php
              $categories = get_the_category();
              foreach( $categories as $category ) {
                echo '<a href="'.get_category_link($category->term_id).'" class="cmn_blog_tag_link mover_link">'.$category->name.'</a>';
              }
              ?>
            </p>
            <time class="cmn_blog_date font_en_roboto"><?php echo get_the_date('Y.m.d'); ?></time>
          </div>
          <article class="cmn_blog_detail_content cmn_blog_detcnt_in_blog">
            <div class="cmn_blog_detail_article wysiwyg_format">
              <?php the_content(); ?>
            </div>
          </article>
          <div class="cmn_blog_detail_footer">
            <a href="<?php echo esc_url( home_url( '/news/' ) ); ?>" class="cmn_blog_detail_backlist mover_link cmn_link_unit">
              <span class="cmn_blog_detbklst_text f__16 f__wt__8 f__ltr__2">一覧へ戻る</span>
              <span class="cmn_blog_detbklst_icon font_en_roboto f__36 f__wt__1 font_en_roboto">></span>
            </a>
          </div>
        </article>

      <?php
      endwhile;
    else : ?>
      <p>記事がありません</p>
    <?php endif; ?>
    </div>
  </div>
</main>
  <!-- //main content -->


<?php
get_footer();

