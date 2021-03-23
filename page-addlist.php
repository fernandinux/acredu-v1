<?php get_header();?>

    <?php get_template_part( 'template-parts/content', 'encabezado' );?>
<div style="max-width:300px; margin:10px auto">
<div class="text-center"> 
<img src="https://app.acredu.org/wp-content/uploads/2021/03/1200px-.csv_icon.svg_.png" alt="plantilla csv" style="width:100px">
<a class="btn btn-primary" style="background-color: #3b5998" href="https://app.acredu.org/wp-content/uploads/2021/03/Plantilla-lista-de-beneficiarios.csv" role="button"
  ><i class="fas fa-download"></i>Descargar plantilla csv
></a>
</div>
<?php the_content(); ?>

</div>
   
	

<div class="verifooter">
    <?php get_footer(); ?>
</div>