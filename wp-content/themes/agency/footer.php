<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package agency
 */
?>
<footer>
    <div class="footer-content">
            <?php dynamic_sidebar( 'footer_text' ); ?>
    </div>
    <div class="copyright">© 2014 <span>SmartAd.vn</span>, Inc. All Rights Reserved</div>
</footer>
<?php wp_footer(); ?>

</body>
</html>
