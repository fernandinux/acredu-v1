<?php get_header();?>

    <?php get_template_part( 'template-parts/content', 'encabezado' );?>

    <?php if (is_user_logged_in() )?>
    Hola
    <?php endif?>
	        
    <?php the_content(); ?>
	

<div class="verifooter">
    <?php get_footer(); ?>
</div>