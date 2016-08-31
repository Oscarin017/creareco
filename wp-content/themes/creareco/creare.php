<?php
/**
* Template Name: Creare
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php 
				$args = array(
					'post_type' => 'page',
					'order' => 'ASC'
				);
				
				$the_query = new WP_Query( $args );

				while ( $the_query->have_posts() ) : $the_query->the_post();

					get_template_part( 'template-parts/content', 'page' );

				endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();