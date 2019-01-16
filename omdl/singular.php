
<?php get_header(); ?>

<section class="featured-posts mod-1">

<?php
  $i = 0;
  if($i <= 3):

    if ( have_posts() ) : while ( have_posts() ) : the_post();
    $i+=1;
?>
singular
    <?php get_template_part('template-parts/content') ?>

<?php endwhile; ?>

</section>

<?php else: ?>

  <h2><?php esc_html_e( '404 Error' ); ?></h2>
  <p><?php esc_html_e( 'Sorry, content not found.', 'phpforwp' ); ?></p>

<?php
    endif;
  endif;
?>

<section class="featured-posts mod-2">

</section>

<?php get_sidebar('post'); ?>

<?php get_footer(); ?>
