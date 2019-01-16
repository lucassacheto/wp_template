
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="wrap-post-page">
    <section class="post-page">

      <div class="item-content">
          <div class="item-category">
              <?php the_category('<a></a>'); ?>
          </div>
          <h2><?php the_title(); ?></h2>
          <div class="item-details">
              <ul>
                  <li class="item-author">por <?php the_author(); ?></li>
                  <li class="item-date"><?php echo get_the_date();  ?></li>
              </ul>
          </div>
      </div>

      <!-- SOCIAL BUTTONS -->
      <?php include 'socialButtons.php'; ?>

        <article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>
          <?php the_content(); ?>

          <!-- POST TAGS -->
          <section class="post-tags">
              <ul>
                  <li><?php the_tags('Tags: ',' ','') ?></li>
              </ul>
          </section>

        </article>

      </section>

      <div class="ad"><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3040568712826233" data-ad-slot="8643947138" data-ad-format="auto"></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script></div>

      <!-- BOX INFO AUTHOR -->
      <section class="info-author"></section>

      <!-- BOX POST RELATED -->

      <section class="comments">
        <?php include("inc/comments.php"); ?>
      </section>

      <!-- BOX MOST VIEWED -->

</div>


<?php endwhile; else : ?>

  <?php get_template_part( 'template-parts/content', 'none' ); ?>

<?php endif; ?>

<aside class="right-bar">
  <?php get_sidebar('post'); ?>
</aside>

<?php get_footer(); ?>
