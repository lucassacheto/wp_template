<?php
  get_header();
  $cat = get_category( get_query_var( 'cat' ) );
  $cat_slug = $cat->slug;
?>

<section class="headerCategory <?php echo $cat_slug; ?> ">
	<h2><?php single_cat_title(''); ?></h2>
</section>



<?php
if ( have_posts()){
?>
<span class="title-last-posts">últimos posts</span>
<?php
}?>

<section class="post-list mod-1">

  <!--<div class="ad" style="clear:both;"><?php// echo"$adPostList"; ?></div>-->

<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();

  $thumb_id = get_post_thumbnail_id();
  $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
  $thumb_url = $thumb_url_array[0];
?>

   <article class="content-article">
      <div class="item-image">
          <a href="<?php the_permalink(); ?>"><img src="<?php echo $thumb_url; ?>" title="<?php the_title(); ?>" /></a>
      </div>
      <div class="item-category">
         <?php the_category('<a></a>'); ?>
      </div>
      <a href="<?php the_permalink(); ?>"  class="item-content-wrap">
          <div class="item-content">
              <h3><?php the_title(); ?></h3>
              <div class="item-details">
                  <ul>
                      <li class="item-author">por: <?php the_author(); ?></li>
                      <li class="item-date"><?php echo get_the_date(); ?></li>
                  </ul>
              </div>
          </div>
      </a>

  </article>

<?php endwhile; ?>

</section>

<div class="wrap-paginator">
  <?php echo paginate_links() ?>
</div>
<?php else : ?>

  <span class="title-last-posts">Ainda não existem posts.</span>

<?php endif; ?>

<div class="ad"><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3040568712826233" data-ad-slot="8643947138" data-ad-format="auto"></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script></div>

<?php get_footer(); ?>
