<?php get_header(); ?>

<?php get_template_part( 'template-parts/content', 'encabezado' );?>
<main class='container-fluid'>
    <?php if(have_posts()){
            while(have_posts()){
                the_post();
                ?>
                    <!-- ejemplo que funciona 
                    <div class='row'>
                        <div class='col-12 text-center'>   
                        <?php /*the_post_thumbnail( 'large', array( 'class' => 'img-fluid' )); */?> 
                        </div>
                            <div class='col-12'>
                                <?php /*the_content();*/ ?>
                            </div>
                    </div> -->
                    <!-- Inicio single -->
                    
	<div class="row d-flex justify-content-center">
        <div class="py-5 cloudy-knoxville-gradient">
                <?php the_post_thumbnail('medium', array( 'class' => 'card-img-top h-100' )); ?>
            <!-- <img src="https://app.acredu.org/wp-content/uploads/2021/03/addCertif.jpg" class="img-fluid shadow d-block animated zoomIn wp-post-image" alt="" loading="lazy" srcset="https://app.acredu.org/wp-content/uploads/2021/03/addCertif.jpg 700w, https://app.acredu.org/wp-content/uploads/2021/03/addCertif-300x222.jpg 300w" sizes="(max-width: 180px) 100vw, 180px" data-pagespeed-url-hash="3451760859" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" width="180" height="133"> -->
        </div>
        <div class="w-50 p-5">
            <strong><?php the_title(); ?> </strong>  
            <?php the_content(); ?> 
        </div>
    </div>


			
			<!-- Empieza la tabla  -->
    <div class="row m-5">
        <div class="table-responsive">
            <table class="table table-hover table-sm table-light border-success">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre de la lista</th>
                    <th scope="col">fecha publicación</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Estado</th>
                    <th scope="col">forma de entrega</th>
                    <th scope="col">Enlace</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Nueva lista</td>
                    <td>24/03/2021</td>
                    <td>emitido</td>
                    <td>excel</td>
                    <td>https://www.google.com</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Adipisicing</td>
                    <td>Elit</td>
                    <td>Sint</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Hic</td>
                    <td>Fugiat</td>
                    <td>Temporibus</td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td></td>
                    <td></td><td></td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td></td>
                    <td></td><td></td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td></td>
                    <td></td><td></td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td></td>
                    <td></td><td></td>
                </tr>
            </tbody>
            </table>
        </div>

    </div>  

    		<!-- Termina la tabla -->
			
			
				
		
		

	
  <!-- fin web -->
                <?php 
            }
	} ?>
	
	
</main>

<?php get_footer(); ?>