<?php get_header();?>

    <?php get_template_part( 'template-parts/content', 'encabezado' );?>

   <?php if (is_user_logged_in()) :
     ?>
     <p>Este mensaje sólo se mostrará en pantalla a los usuarios registrados e identificados. Los invitados no podrán verlo.</p>
     <?php
endif;?>
	        
    <?php the_content(); ?>
	

<div class="verifooter">
    <?php get_footer(); ?>
</div>