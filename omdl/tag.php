
<?php get_header(); ?>

<div class="wrap-post-home">
  <section class="post-list-home">

<?php
  if ( have_posts() ) : while ( have_posts() ) : the_post();

    $thumb_id = get_post_thumbnail_id();
    $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
    $thumb_url = $thumb_url_array[0];
  ?>
      <article class="content-article">
          <div class="item-image">
              <a href="<?php the_permalink(); ?>"><img src="<?php echo $thumb_url; ?>" title="<?php the_title(); ?>"  /></a>
          </div>
          <div class="item-content">
               <div class="item-category">
                <?php the_category('<a></a>'); ?>
              </div>
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <p><a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a></p>
              <div class="item-details">
                  <ul>
                      <li class="item-author"><?php the_author(); ?></li>
                      <li class="item-date"><?php echo get_the_date('') ?></li>
                  </ul>
              </div>
          </div>
      </article>

<?php endwhile; ?>

</section>
  <div class="wrap-paginator">
    <?php echo paginate_links() ?>
  </div>
<?php else: ?>

  <h2><?php esc_html_e( '404 Error' ); ?></h2>
  <p><?php esc_html_e( 'Sorry, content not found.', 'phpforwp' ); ?></p>

<?php
  endif;
?>


  </section>
</div>


<aside class="right-bar">
  <?php get_sidebar('post'); ?>
</aside>

<?php get_footer(); ?>
