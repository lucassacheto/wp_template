

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>
  <?php
    $cat = get_category( get_query_var( 'cat' ) );
    $cat_slug = $cat->name;
    if ( is_category() ){
      echo mb_strtoupper($cat_slug)." - "; bloginfo('title');
    }elseif ( is_single() ){
      echo the_title()." - "; bloginfo('title');
    }else{
      echo bloginfo('title')." - "; bloginfo('description');
    }
  ?>
</title>

<?php
  if ( is_home() || is_category() ){

?>
    <!-- header home and category -->
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="keywords" content="omdl, o mundo do luks, luks, tecnologia, geek, vídeos, videos, canadá, canada, toronto, brasileiros no canada, brasileiros em toronto, youtube">

    <meta property="og:title" content="<?php if ( is_category() ){echo strtoupper($cat_slug)." - "; bloginfo('title'); }else{echo bloginfo('title'); }  ?>">
    <meta property="og:image" content="<?php echo site_url() ?>/wp-content/themes/omdl/img/face_image_share.png">
    <meta property="og:url" content="<?php echo site_url(); ?>" />
    <meta property="og:type" content="article" />
    <meta property="og:description" content="<?php bloginfo('description'); ?>" />
    <meta property="article:author" content="http://facebook.com/omundodoluks" />

    <meta property="fb:app_id" content="2007876546161171" />
    <meta property="fb:pages" content="427146724089693" />

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:creator" content="@omundodoluks">
    <meta name="twitter:title" content="<?php echo bloginfo('title');  ?>">
    <meta name="twitter:image" content="<?php echo site_url() ?>/wp-content/themes/omdl/img/twt_image_share.png">

    <meta name="lomadee-verification" content="22739870" />

<?php
  }else{

    // header post
    if ( have_posts() ) : while ( have_posts() ) : the_post();

      $thumb_id = get_post_thumbnail_id();
      $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
      $thumb_url = $thumb_url_array[0];

      $post_tags = get_the_tags();

?>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="keywords" content="omdl, o mundo do luks, luks, tecnologia, geek, vídeos, videos, canadá, canada, toronto, brasileiros no canada, brasileiros em toronto, youtube, <?php if ( $post_tags ){foreach( $post_tags as $tag ) {$tes = $tag->name . ', '; echo $tes; }} ?>">
    <meta property="og:title" content="<?php echo the_title(); ?>">
    <meta property="og:image" content="<?php echo $thumb_url ?>">
    <meta property="og:url" content="<?php echo get_permalink(); ?>" />
    <meta property="og:type" content="article" />
    <meta property="og:description" content="<?php bloginfo('description'); ?>" />
    <meta property="article:author" content="http://facebook.com/omundodoluks" />

    <meta property="fb:app_id" content="2007876546161171" />

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:creator" content="@omundodoluks">
    <meta name="twitter:title" content="<?php echo the_title(); ?>">
    <meta name="twitter:image" content="<?php echo $thumb_url ?>">

<?php
    endwhile;
  endif;
}
?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="google-site-verification" content="0QU-kbPX6Is0Qgh2b4ZYZORDzvPJ6L9dnfFEjkZ8csk" />

<meta http-equiv="cleartype" content="on" />
<meta name="HandheldFriendly" content="True" />
<meta name="MobileOptimized" content="320" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="apple-mobile-web-app-capable" content="no" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<link rel="apple-touch-icon" href="<?php echo site_url() ?>/wp-content/themes/omdl/img/image_share.jpg" />

<link rel="shortcut icon" type="image/png" href="/favicon.png"/>

<?php wp_head(); ?>

</head>
<body <?php body_class();?>>
<header>
	<div class="header-content">
       <h1 title="OMDL - O Mundo do Luks"><a href="<?php echo esc_url(home_url('/')) ?>" rel="home" class="omdl sprite">OMDL - O Mundo do Luks</a></h1>

        <button class="mobile-menu fa fa-bars fa-2x"></button>
        <nav role="navigation">
            <?php
              $args = [
                'theme_location'  => 'main-menu',
                'container_class' => 'ss'
              ];
              wp_nav_menu($args);
            ?>
        </nav>

        <div class="social">
            <ul>
                <li><a href="http://www.youtube.com/iTecnodia" title="youtube" target="_blank"><i class="fa fa-youtube-play fa-lg"></i><span class="sr-only">youtube</span></a></li>
                <li><a href="http://www.instagram.com/lucassacheto" title="instagram" target="_blank"><i class="fa fa-instagram fa-lg"></i><span class="sr-only">instagram</span></a></li>
                <li><a href="http://www.twitter.com/lucassacheto_" title="twitter" target="_blank"><i class="fa fa-twitter fa-lg"></i><span class="sr-only">twitter</span></a></li>
                <li><a href="http://www.facebook.com/lucassacheto" title="facebook" target="_blank"><i class="fa fa-facebook fa-lg"></i><span class="sr-only">facebook</span></a></li>
            </ul>
        </div>

        <div class="search">
            <a href="javascript:void(0);"><i class="fa fa-search fa-lg"></i><span class="sr-only">buscar</span></a>
            <span class="mask-input-search"><input type="text" id="searchPost" title="buscar" placeholder="Buscar..."  /></span>
        </div>
    </div>
</header>

<div class="ad"><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3040568712826233" data-ad-slot="8643947138" data-ad-format="auto"></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script></div>

<div class="mainContent">
