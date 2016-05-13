<?php
/*
Template Name: Generic page template
*/

get_header(); ?>


	<article class="membership">
		<section class="contentArea">
			<div class="container">
				<?php while (have_posts()) : the_post(); ?>
					<?php get_template_part( 'template-parts/content', 'page' ); ?>
				<?php endwhile; // end of the loop. ?>
			</div>
		</section>
	</article>

<?php get_footer(); ?>