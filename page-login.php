<?php get_header();?>

    <?php get_template_part( 'template-parts/content', 'encabezado' );?>

   <?php if (is_user_logged_in()) :
     ?>
        <div class="m-5 d-flex flex-wrap">
            <!-- Jumbotron -->
            <!-- <div class="p-1 m-5 text-center bg-light">
                <h3 class="my-3">Perfil</h3>
                <p class="mb-3" style="max-width:200px;">Edita tu perfil de tu institución</p>
                <a class="btn p-2" style="background:green;" href="" role="button">Editar</a>
            </div> -->
            <!-- Jumbotron -->
            <!-- Jumbotron -->
            <div class="p-1 m-5 text-center bg-light">
                <h3 class="my-3">Lista de Cursos</h3>
                <p class="mb-3" style="max-width:200px;">Accede a la lista de cursos</p>
                <a class="btn p-2" style="background:green;" href="/dashboard/" role="button">Ir al Dashboard</a>
            </div>
            <!-- Jumbotron -->
            <!-- Jumbotron -->
            <!-- <div class="p-1 m-5 text-center bg-light">
                <h3 class="my-3">Ayuda</h3>
                <p class="mb-3" style="max-width:200px;">Solicita ayuda de uno de nuestros consultores</p>
                <a class="btn p-2" style="background:green;" href="" role="button">Contactar</a>
            </div> -->
            <!-- Jumbotron -->
        </div>

     <?php else :?>
        <?php the_content(); ?>
     <?php endif;?>
	        
    
	

<div class="verifooter">
    <?php get_footer(); ?>
</div>