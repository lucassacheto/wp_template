
<?php
include 'shorturl.php';
//echo $URL_data_shorturl;

?>

<div class="social-share">
	<div class="title-share">compartilhe:</div>
    <ul>
        <li><a href="http://twitter.com/" onclick="popUp=window.open('http://twitter.com/intent/tweet?text=<?php echo the_title(); ?> via @omundodoluks - <?php echo $URL_data_shorturl; ?>','popupwindow','scrollbars=yes,width=800,height=400');popUp.focus();return false" class="share-twitter sprite">Tweet</a></li>
        <li><a href="http://www.facebook.com/" onclick="popUp=window.open('http://www.facebook.com/sharer.php?u=<?php echo get_permalink(); ?>','popupwindow',
'scrollbars=yes,width=800,height=400');popUp.focus();return false" class="share-facebook sprite">></a></li>
		<li><a href="whatsapp://send?text=<?php echo $URL_data_shorturl; ?>" class="share-whatsapp sprite" data-action="share/whatsapp/share">Whatsapp</a></li>
    </ul>
</div>
