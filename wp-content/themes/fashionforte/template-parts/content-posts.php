<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package fashionforte
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="blog--img-section">

		<div class="imageContainer">
			<?php
			if ( has_post_thumbnail() ) {
				the_post_thumbnail();
			}
			else {
				echo '<img src="' . get_bloginfo( 'stylesheet_directory' )
				     . '/inc/images/thumbnail-default.jpg" />';
			}
			?>
		</div>

	</div>

	<div class="blog--info-section">

		<header class="entry-header">
			<?php
			if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">
					<?php fashionforte_posted_on(); ?>
				</div><!-- .entry-meta -->
				<?php
			endif;

			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}

			?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php
			the_content( sprintf(
			/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'fashionforte' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'fashionforte' ),
				'after'  => '</div>',
			) );
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php fashionforte_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</div>

</article><!-- #post-## -->
