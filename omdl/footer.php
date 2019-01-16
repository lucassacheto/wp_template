
</div>

<footer>
<!--
    <ul>
        <li><a href="#">sobre</a></li>
        <li>|</li>
        <li><a href="#">contato</a></li>
    </ul>
-->
</footer>

<?php wp_footer(); ?>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-56087422-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-56087422-1');
</script>

<?php if (is_single()){ ?>
  <script id="dsq-count-scr" src="//omdl.disqus.com/count.js" async></script>
<?php } ?>

</body>
</html>
