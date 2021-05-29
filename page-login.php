<?php get_header();?>

    <?php get_template_part( 'template-parts/content', 'encabezado' );?>

   <?php if (is_user_logged_in()) :
     ?>
        <div class="m-5 text-center">
            <br>
            <h3 class="my-3">Lista de Cursos</h3><br>
            <a class="btn p-2 waves-effect waves-light" href="/dashboard/" role="button" style="background:green;">Ir al Dashboard</a>
        </div>

     <?php else :?>
        <?php the_content(); ?>
     <?php endif;?>
	        
    
	

<div class="verifooter">
    <?php get_footer(); ?>
</div>