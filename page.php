<?php get_header();?>

    <?php get_template_part( 'template-parts/content', 'encabezado' );?>

    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/dashboard">Cursos</a></li>
    <li class="breadcrumb-item active" aria-current="page">Soporte</li>
  </ol>
</nav>
<div style="max-width:300px; margin:0px auto 10px auto">
        
    <?php the_content(); ?>

</div>
   
	

<div class="verifooter">
    <?php get_footer(); ?>
</div>