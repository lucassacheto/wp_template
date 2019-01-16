
<?php get_header(); ?>

<div class="ad"><?php echo $adHeader; ?></div>

<section class="featured-posts mod-1">

<?php
  if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

<?php endwhile; ?>

</section>

<?php else: ?>

  <h2><?php esc_html_e( '404 Error' ); ?></h2>
  <p><?php esc_html_e( 'Sorry, content not found.', 'phpforwp' ); ?></p>

<?php
  endif;
?>

<section class="featured-posts mod-2">

</section>

<?php get_sidebar('ad'); ?>

<?php get_footer(); ?>
