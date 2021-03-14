<?php get_header();?>

    <?php get_template_part( 'template-parts/content', 'encabezado' );?>

   <?php if (is_user_logged_in()) :
     ?>
        <div class="m-5 d-flex flex-wrap">
            <!-- Jumbotron -->
            <?php the_content(); ?>
            <!-- Jumbotron -->
        </div>

     <?php else :?>
        
     <?php endif;?>
	        
    
	

<div class="verifooter">
    <?php get_footer(); ?>
</div>