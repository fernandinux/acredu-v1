<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Draft-acredu
 */

get_header();
?>
	<?php get_template_part( 'template-parts/content', 'encabezado' );?>
	<main>
		<div style="width:300px;margin:8rem auto">
			<img src="https://app.acredu.org/wp-content/uploads/2021/02/diploam-fallado2.png" />
		</div>
		<div style="text-align:center;width:300px;margin:8rem auto">
			<h3>Algo salio mal <i class="far fa-frown" style="font-size:15px"></i>, por favor, verifica el enlace al que quieres acceder</h3>
		</div>

	</main><!-- #main -->

<?php
get_footer();
