<?php
/**
 * The template for displaying the footer of the "Busy Theme" Theme
 *
 * Contains the opening of the footer of all pages and all subsequent content.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage A Busy Theme
 * @since 1.0.0
 */

?>
<script>
    jQuery(document).foundation();
</script>


<!-- FOOTER START -->
<div class="footer">
    <a href="https://www.facebook.com/busypastor"><i class="fab fa-facebook-square"></i></a>
    <a href="https://www.instagram.com/busypastor/?hl=en"><i class="fab fa-instagram"></i></a>
    <a href="https://www.youtube.com/channel/UCwljG51omo4mJoJBhBAaQuw"><i class="fab fa-youtube"></i></a>
    <p>&#169; <?php echo date("Y"); ?> Foothills Church</p>
    <p><a href="/privacy-policy">Privacy Policy</a></p>
</div>
<!-- END OF FOOTER -->





<?php wp_footer(); ?>

</body>
</html>
