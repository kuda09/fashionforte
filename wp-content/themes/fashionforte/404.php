<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package fashionforte
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="container">
				
				<section class="error-404 not-found">
					<header class="page-header">
						<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'fashionforte' ); ?></h1>
						<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'fashionforte' ); ?></p>
					</header><!-- .page-header -->

					<div class="page-content">


						<?php
						get_search_form();

						?>

					</div><!-- .page-content -->
				</section><!-- .error-404 -->

			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
