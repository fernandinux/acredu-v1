<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Draft-acredu
 */

get_header();
?>
<?php
	get_template_part( 'template-parts/content', 'encabezado' );
	?>
	<main  class="veriContent">
	


		<?php
		// while ( have_posts() ) :
		// 	the_post();

		// 	get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

		// endwhile; // End of the loop.
		?>
        <div class="text-center">
				<!-- <p><?php //esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'draft-acredu' ); ?></p> -->

					<?php
					get_search_form();

					// the_widget( 'WP_Widget_Recent_Posts' );
					?>

					<!-- <div class="widget widget_categories">
						<h2 class="widget-title"></h2>
						<ul> -->
							<?php
							// wp_list_categories(
							// 	array(
							// 		'orderby'    => 'count',
							// 		'order'      => 'DESC',
							// 		'show_count' => 1,
							// 		'title_li'   => '',
							// 		'number'     => 10,
							// 	)
							// );
							
							?>
						<!-- </ul>
					</div>.widget -->

					

			</div><!-- .page-content -->

	</main><!-- #main -->
	
<div class="verifooter">
	<?php
// get_sidebar();
get_footer(); ?>
</div>
