
<div class="adOMDL">
<?php
	$random = array();
	$random[]	=	'<a href="http://instagram.com/omundodoluks" title="Siga o Instagram - @omundodoluks" target="_blank"><img src="'.get_template_directory_uri().'/img/ad_omdl_instagram.jpg" alt="Siga o Instagram - @omundodoluks" /></a>';
	$random[]	=	'<a href="https://www.youtube.com/iTecnodia" title="Inscreva-se no canal do Youtube - OMDL - O Mundo do Luks" target="_blank"><img src="'.get_template_directory_uri().'/img/ad_omdl_youtube.jpg" alt="Inscreva-se no canal do Youtube - OMDL - O Mundo do Luks" /></a>';
  echo $random[rand(0,count($random)-1)];

?>
</div>


	<div class="ad"><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><ins class="adsbygoogle" style="display:inline-block;width:300px;height:250px" data-ad-client="ca-pub-3040568712826233" data-ad-slot="6609822492"></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script></div>

	<!-- BOX LASTEST POSTS -->


	<div class="title-lastest-posts">últimos posts</div>
	<section class="lastest-posts">

<?php
	global $post;
	$args = array( 'posts_per_page' => 2 );

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
	    <div class="item-category">
	    	<?php the_category('<a></a>'); ?>
	    </div>
	    <a href="/<?php the_permalink(); ?>"  class="item-content-wrap">
	        <div class="item-content">
						<h3><?php the_title(); ?></h3>
	            <div class="item-details">
	                <ul>
										<li class="item-author"><?php the_author(); ?></li>
										<li class="item-date"><?php echo get_the_date('') ?></li>
	                </ul>
	            </div>
	        </div>
	    </a>
	   </article>

<?php
	endforeach;
	wp_reset_postdata();
?>

	</section>

	<div class="ad"><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><ins class="adsbygoogle" style="display:inline-block;width:300px;height:600px" data-ad-client="ca-pub-3040568712826233" data-ad-slot="4993488490"></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script></div>
