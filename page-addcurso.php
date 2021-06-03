<?php get_header();?>

    <?php get_template_part( 'template-parts/content', 'encabezado' );?>

   <?php if (is_user_logged_in()) :
     ?>
      <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/dashboard">Cursos</a></li>
    <li class="breadcrumb-item active" aria-current="page">Crear Curso</li>
  </ol>
</nav>
        <div class="d-flex flex-wrap" style="margin: 2px 5px 150px 5px">
        
            <!-- Jumbotron -->
             <!-- <div class="text-center m-5"> 
               <a href="https://app.acredu.org/wp-content/uploads/2021/03/Plantilla-lista-de-beneficiarios.csv" role="button">
               <img src="https://app.acredu.org/wp-content/uploads/2021/03/1200px-.csv_icon.svg_.png" alt="plantilla csv" style="width:100px" data-pagespeed-url-hash="3348433114" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" class="">
              <br>
                  <div class="btn  waves-effect waves-light" style="background-color: #1BB27C">
               <i aria-hidden="true" class="fas fa-download mr-2" style="font-size:12px; background-color:#1BB27C;"></i>Descargar plantilla csv </div></a>
               <br>
               <a  target="_blank" href="https://docs.google.com/spreadsheets/d/1lYlMDX3WLIlWx3TyGNphuzjVpccIiB-ZBDGleFr-fIA/edit?usp=sharing" role="button">
                  <div class="btn  waves-effect waves-light" style="background-color: #1BB27C">
               <i aria-hidden="true" class="fas fa-download mr-2" style="font-size:12px; background-color:#1BB27C;"></i>Plantilla en google sheet </div></a>

            </div> -->
            <div style="margin:50px auto">
               <img src="/wp-content/uploads/2021/06/creacion-de-lista.png" style="width:100%"/>
            </div>
            <div style="margin:50px auto">
            <?php the_content(); ?>
            </div>
            
            <!-- Jumbotron -->
               <?php  
               // $memberID = get_current_user_id();
               // $memberInfo = get_userdata($memberID);
               // $memberName = $memberInfo->user_email;
               // echo $memberName; 

               ?> 
        </div>

     <?php else :?>
        <h2 class="my-5 mx-auto">Para acceder a esta pagina necesita autenticarse</h2>
     <?php endif;?>
	        
    
	

<div class="verifooter">
    <?php get_footer(); ?>
</div>