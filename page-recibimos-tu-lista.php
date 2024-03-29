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
	<div style="max-width:500px; margin:30px auto 10px auto">
		<p>
			<strong><?php echo $memberFirstName ?>,</br></strong>
			Recibimos la nueva lista <strong><?php echo $listaname ?></strong>
			para la empresa 
			<strong><?php echo $nameempresa ?></strong>
			en el curso <strong><?php echo $namecurso ?></strong></br></br>
			Se envió una copia de esta solicitud al correo 
			<strong><?php echo $memberemail ?></strong></br></br>
			Muy pronto nuestro equipo lo procesará y te copiará los envios de certificados.</p></h4>
		<p><strong>Gracias por usar aCredu.</strong></p>
		<p>&nbsp;</p>
		<?php if ( $idcat=="91" ): ?>
			<p style="text-align: center;"><a href="https://acredu.app/dashboardb2b/?idcat=<?php echo $idcat ?>&empresa=<?php echo $nameempresa ?>"><i class="fas fa-angle-double-left" style="color:#007bff;font-size:medium;"></i> Regresar a cursos de <?php echo $nameempresa ?></a></p>
			</br>
			<p style="text-align: center;"><a href="https://acredu.app/dashboardclient"><i class="fas fa-angle-double-left" style="color:#007bff;font-size:medium;"></i> Regresar a Clientes Empresas</a></p>
		<?php else:?>
		<p style="text-align: center;"><a href="https://acredu.app/predashboard/?idcat=<?php echo $idcat ?>&empresa=<?php echo $nameempresa ?>"><i class="fas fa-angle-double-left" style="color:#007bff;font-size:medium;"></i> Regresar a cursos de <?php echo $nameempresa ?></a></p>
		<?php endif; ?>
	</div>
	
<div class="verifooter">
	<?php
// get_sidebar();
get_footer(); ?>
</div>
