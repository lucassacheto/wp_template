

<?php
  $i = 0;

  if ( have_posts() ) : while ( $i < 6 ) : the_post();

    $i+=1;

    if ( $i == 1):
?>
<section class="featured-posts mod-1">
<?php
    elseif ($i == 4):
?>
<section class="featured-posts mod-2">

<?php
endif;
?>

  <article id="<?php the_ID(); ?>" class="content-article nm<?php echo "$i" ?>">

<?php
  $thumb_id = get_post_thumbnail_id();
  $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
  $thumb_url = $thumb_url_array[0];
?>

   <div class="item-image">
     <a href="<?php echo get_permalink(); ?>"><img src="<?php echo $thumb_url ?>" title="" /></a>
   </div>
   <div class="item-category">
     <?php the_category('<a></a>'); ?>
   </div>
   <a href="<?php echo get_permalink(); ?>" class="item-content-wrap">
     <div class="item-content">
       <h3><?php the_title(); ?></h3>
     </div>
   </a>

  </article>

<?php if ( $i == 3): ?>

</section>

<?php elseif ($i == 6): ?>

</section>

<?php endif; ?>

<?php
   endwhile;
?>


<?php else: ?>

  <h2><?php esc_html_e( '404 Error' ); ?></h2>
  <p><?php esc_html_e( 'Sorry, content not found.', 'phpforwp' ); ?></p>

<?php endif; ?>
