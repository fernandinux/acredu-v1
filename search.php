<?php


get_header();
?>
<?php
	get_template_part( 'template-parts/content', 'encabezado' );
	?>
	<main class="">

		<?php if ( have_posts() ) : ?>


			
			<div style="padding:1rem; text-align:center">
				<p class="card-text"> <i class="fas fa-shield-alt" style="font-size:20px;color:#32c132;" aria-hidden="true"></i>
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Hemos verificado la existencia del certificado con ID credential: %s', 'draft-acredu' ), '<span>' . get_search_query() . '</span>' );
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
			navigation
			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php get_footer(); ?>
