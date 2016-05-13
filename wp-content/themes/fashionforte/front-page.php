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
				<h1 class="exclusive-title text-center">
					<a href="">Site under construction
					</a>
				</h1>
			</div>

			<section class="promo-section">

				<?php
				global $post;
				$myposts = get_posts( 'numberposts=5&category=1' );
				foreach ( $myposts as $post ) :
					?>
					<article class="standard-article-promo">
						<div class="promo-feed-img">
							<a href="<?php the_permalink(); ?>" class="proportional" style="padding-top: 100%;">
								<div class="overlay"></div>
								<?php
								if ( has_post_thumbnail() ) {
									the_post_thumbnail();
								}
								else {
									echo '<img src="' . get_bloginfo( 'stylesheet_directory' )
									     . '/inc/images/thumbnail-default.jpg" />';
								}
								?>
							</a>
						</div>
						<div class="exclusive-title">
							<a class="tapstate" href="<?php the_permalink(); ?>">
								<div class="post-category allcaps"><?php the_title(); ?></div>
							</a>
							<h4 class="text-left"><a href="/topshop-shiny-ma1-bomber?ps=home"><?php the_time(get_option('date_format')) ?></a></h4>
						</div>
					</article>
				<?php endforeach; ?>

			</section>

			<div class="container">

				<section class="interviews-section">

					<!--<h2>Interviews</h2>-->

					<?php
					global $post;
					$myposts = get_posts( 'numberposts=2&category=1' );
					foreach ( $myposts as $post ) :
						?>
						<article class="standard-article">
							<div class="promo-feed-img">
								<a href="/topshop-shiny-ma1-bomber?ps=home" class="proportional" style="padding-top: 100%;">
									<div class="overlay"></div>
									<?php
									if ( has_post_thumbnail() ) {
										the_post_thumbnail();
									}
									else {
										echo '<img src="' . get_bloginfo( 'stylesheet_directory' )
										     . '/inc/images/thumbnail-default.jpg" />';
									}
									?>
								</a>
								<div class="exclusive-title">
									<a class="tapstate" href="<?php the_permalink(); ?>">
										<div class="post-category allcaps"><?php the_title(); ?></div>
									</a>
									<p> <?php the_time(get_option('date_format')) ?></p>
									<h4 class="text-left"><a href="<?php the_permalink(); ?>"> <?php the_excerpt(); ?></a></h4>
								</div>
							</div>

						</article>

					<?php endforeach; ?>

				</section>

				<section class="latest-section">

					<!--<h2>Lastest Articles</h2>-->

					<?php
					global $post;
					$myposts = get_posts( 'numberposts=5&category=1' );
					foreach ( $myposts as $post ) :
						?>
						<article class="standard-article">
							<div class="promo-feed-img">
								<a href="/topshop-shiny-ma1-bomber?ps=home" class="proportional" style="padding-top: 100%;">
									<div class="overlay"></div>
									<?php
									if ( has_post_thumbnail() ) {
										the_post_thumbnail();
									}
									else {
										echo '<img src="' . get_bloginfo( 'stylesheet_directory' )
										     . '/inc/images/thumbnail-default.jpg" />';
									}
									?>
								</a>
								<div class="exclusive-title">
									<a class="tapstate" href="<?php the_permalink(); ?>">
										<div class="post-category allcaps"><?php the_title(); ?></div>
									</a>
									<p> <?php the_time(get_option('date_format')) ?></p>
									<h4 class="text-left"><a href="<?php the_permalink(); ?>"><?php the_content(); ?></a></h4>
								</div>
							</div>

						</article>

					<?php endforeach; ?>


				</section>

			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
