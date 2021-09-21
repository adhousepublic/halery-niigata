<?php get_header();
?>
<?php
if ( have_posts() ) : ?>
<?php
while ( have_posts() ) : the_post();
?>
<?php endwhile; ?>

<?php else: ?>
<?php endif; ?>

wp_loop
<?php
get_footer();

