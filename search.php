<?php


get_header();
?>
<?php
	get_template_part( 'template-parts/content', 'encabezado' );
	?>
	<main id="primary" class="">

		<?php if ( have_posts() ) : ?>


			
			<div style="padding:2rem; text-align:center">
				<p class="card-text">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Hemos ubicado en nuestros registros el <br> ID credential: %s', 'draft-acredu' ), '<span>' . get_search_query() . '</span>' );
					?>
				</p>
			</div><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php

get_footer(); ?>
