<?php get_header(); ?>
<?php
// 現在表示しているページの投稿IDから投稿情報を取得します
$page = get_post( get_the_ID() );
// 投稿のスラッグを取得します
$pageslug = $page->post_name;

$replace = str_replace('-', ' ', $pageslug);
?>

  <?php
  if ( have_posts() ) :
  while ( have_posts() ) : the_post();
  ?>

  <div class="page_body">
    <?php the_content(); ?>
  </div>

  <?php
  endwhile;
  else : ?>
  <h1 class="page-title">NOT FOUND</h1>
  <p class="text-center">
    お探しのページは見つかりませんでした。<br />
    <a href="<?php echo esc_url( home_url() ); ?>">トップページに戻る</a>
  </p>

  <?php endif; ?>

<?php
get_footer();

