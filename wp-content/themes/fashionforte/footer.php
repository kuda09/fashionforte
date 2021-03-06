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
			<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_id' => 'secondary-menu' ) ); ?>

			<p class="text-center"> &copy; <?php bloginfo( 'name' ); ?> <?php echo date('Y'); ?>  All Rights Reserved </p>
		</div><!-- .site-info -->
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
