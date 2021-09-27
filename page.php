<?php get_header(); ?>

  <?php
  if ( have_posts() ) :
  while ( have_posts() ) : the_post();
  ?>
    <!-- main content -->
    <main id="main-content">
    <?php the_content(); ?>
    </main>
    <!-- //main content -->
  <?php
  endwhile;
  else : ?>

  <?php endif; ?>

<?php
get_footer();

