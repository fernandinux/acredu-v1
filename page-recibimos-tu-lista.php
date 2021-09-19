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
	$listaname = get_query_var( 'idcat' );
    $nameempresa = get_query_var( 'empresa' );
    $namecurso = get_query_var( 'curso' );
	?>
	<div style="max-width:300px; margin:30px auto 10px auto">
		<h4 style="text-align: center;"><strong>Recibimos la nueva lista del curso, muy pronto nuestro equipo lo procesará.</strong></h4>
		<h4 style="text-align: center;"><strong>Gracias por usar aCredu.</strong></h4>
		<p>&nbsp;</p>
		<h1 style="text-align: center;"><a href="https://app.acredu.org/dashboard">Ir al dashboard</a></h1>
		<p>&nbsp;</p>
	</div>
	
<div class="verifooter">
	<?php
// get_sidebar();
get_footer(); ?>
</div>
