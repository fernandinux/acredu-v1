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
$memberID = get_current_user_id();
$memberInfo = get_userdata($memberID);
$memberFirstName = $memberInfo->first_name;
$memberemail = $memberInfo->user_email;
?>
<?php
	get_template_part( 'template-parts/content', 'encabezado' );
	$listaname = get_query_var( 'lista' );
	$idcat = get_query_var( 'idcat' );
    $nameempresa = get_query_var( 'empresa' );
    $namecurso = get_query_var( 'curso' );
	?>
	<div style="max-width:300px; margin:30px auto 10px auto">
		<p style="text-align: center;"><strong><?php echo $memberFirstName ?></strong>,recibimos la nueva lista:<strong><?php echo $listaname ?></strong> para la empresa: <strong><?php echo $nameempresa ?></strong> en el curso: <strong><?php echo $namecurso ?></strong>, se envio una copia de esta solicitud al correo: <strong><?php echo $memberemail ?></strong> y muy pronto nuestro equipo lo procesará y te copiará los correos de envío.</p></h4>
		<p style="text-align: center;"><strong>Gracias por usar aCredu.</strong></p>
		<p>&nbsp;</p>
		<?php 
		//if ( $idcat ){ ?>
			<p style="text-align: center;"><a href="https://acredu.app/dashboardb2b/?idcat=<?php echo $idcat ?>&empresa=<?php echo $nameempresa ?>">Regresar a cursos de <?php echo $nameempresa ?></a></p>
		<p>&nbsp;</p>
		<?php //};
		// else{
		?>
		<p style="text-align: center;"><a href="https://acredu.app/predashboard/">Regresar a cursos de Colectivo23</a></p>
		<p>&nbsp;</p>
		<?php // };
		// endif ?>
	</div>
	
<div class="verifooter">
	<?php
// get_sidebar();
get_footer(); ?>
</div>
