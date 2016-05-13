<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fashionforte
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">

	<div class="container">
		<div class="site-info">
			<ul class="footer-links">
				<li><a href="">about</a></li>
				<li><a href="">privacy policy</a></li>
				<li><a href="">jobs</a></li>
				<li><a href="">press</a></li>
				<li><a href="">advertising</a></li>
			</ul>
			<p class="text-center"> &copy; <?php bloginfo( 'name' ); ?> <?php echo date('Y'); ?>  All Rights Reserved </p>
		</div><!-- .site-info -->
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
