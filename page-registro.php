<?php get_header();?>

    <?php get_template_part( 'template-parts/content', 'encabezado' );?>

	        
    <?php the_content(); ?>
	
<div style="width:300px;margin:2rem auto">
    <a href="https://app.acredu.org">Regresar al Login</a>
</div>
    <?php get_footer(); ?>