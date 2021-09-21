<?php get_header(); ?>

<?php
if ( have_posts() ) : ?>
<ul>
<?php  while ( have_posts() ) : the_post();
?>
<?php
if ( has_post_thumbnail() ) {
$thumb_id = get_post_thumbnail_id ();
$thumb = wp_get_attachment_image_src ($thumb_id, 'thumb169');
$thumb_url = $thumb[0];
} else {
$thumb_url = get_stylesheet_directory_uri() . '/images/dummy/thumb169.png';
}
?>

  <li>
    <a href="<?php the_permalink(); ?>">
      <div class="index-news-thumb"><img src="<?php echo esc_url($thumb_url); ?>" alt=""></div>
      <div class="index-news-text-area">
        <p class="index-news-title"><?php the_title(); ?></p>
        <p class="index-news-excerpt"><?php the_excerpt(); ?></p>
      </div>
    </a>
  </li>

<?php endwhile; ?>
</ul>
<?php else: ?>
<p class="mt100 text-center">まだ記事がありません。</p>
<?php endif; ?>
<?php
get_footer();

