<?php get_header();?>

    <?php get_template_part( 'template-parts/content', 'encabezado' );?>

   <?php if (is_user_logged_in()) :
     ?>
        <div class="m-5 d-flex flex-wrap">
            <!-- Jumbotron -->
            <?php the_content(); ?>
            <!-- Jumbotron -->
               <?php  
               $memberID = get_current_user_id();
               $memberInfo = get_userdata($memberID);
               echo $memberInfo;
               ?> 
        </div>

     <?php else :?>
        <h2 class="my-5 mx-auto">Para acceder a esta pagina necesita autenticarse</h2>
     <?php endif;?>
	        
    
	

<div class="verifooter">
    <?php get_footer(); ?>
</div>