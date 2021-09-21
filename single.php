<?php get_header();
?>

    <?php
    if ( have_posts() ) :
      while ( have_posts() ) : the_post();
        $post_type = get_post_type();
        ?>

        <article>
          <header>
            <h1 class="single_title"><?php the_title(); ?></h1>
            <p class="single_date"><?php echo get_the_date('Y.m.d'); ?></p>
          </header>

          <div class="single_body">
            <?php the_content(); ?>
          </div>

        </article>


      <?php
      endwhile;
    else : ?>
      <p>記事がありません</p>
    <?php endif; ?>


<?php
get_footer();

