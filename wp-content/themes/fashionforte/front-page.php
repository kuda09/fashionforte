<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package fashionforte
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="container">
				<section class="articles-container clearfix">

					<?php
					global $post;
					$myposts = get_posts( 'numberposts=30' );

					foreach ( $myposts as $post ) :
						?>
						<a href="<?php the_permalink(); ?>" class="
						<?php
						$posttags = get_the_tags();
						if ($posttags) {
							foreach($posttags as $tag) {
								echo $tag->name . ' ';
							}
						}
						?>">
							<div class="hero-image-container">
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
							<div class="hero-content">
								<div class="hero-channel">
									<?php
									foreach((get_the_category()) as $category) {
										echo $category->cat_name . ' ';
									}
									?>
								</div>
								<div class="hero-title">
									<?php the_title(); ?>
								</div>
								<div class="meta">
									<span class="by"> by </span> <?php the_author_meta('display_name', 1); ?>
								</div>
							</div>
						</a>
					<?php endforeach; ?>


				</section>
			</div>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
