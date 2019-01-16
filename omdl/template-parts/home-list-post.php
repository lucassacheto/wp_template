

<div class="wrap-post-home">

  <span class="title-last-posts">mais posts</span>

  <section class="post-list-home">

  <?php
    global $post;
    $args = array( 'posts_per_page' => 4, 'offset'=> 6,'' );

    $myposts = get_posts( $args );
    foreach ( $myposts as $post ) : setup_postdata( $post );

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

  <?php
    endforeach;
    wp_reset_postdata();
  ?>

  </section>

  <span class="all-post-list"><a href="?s=" class="vertodos">ver todos</a></span>

</div>
