<?php get_header(); ?>

<?php get_template_part( 'template-parts/content', 'encabezado' );
$idcategory = get_query_var( 'idcat' );
$nameempresa = get_query_var( 'empresa' );
?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/dashboard">Panel</a></li>
    <li class="breadcrumb-item"><a href="javascript:window.history.back();">Cursos de <?php echo $nameempresa; ?></a></li>
    <li class="breadcrumb-item active" aria-current="page">Listas de <?php the_field('nombrecurso'); ?> para <?php echo $nameempresa; ?></li>
  </ol>
</nav>

<main class='container-fluid'>
    <?php       
    
    if(have_posts()){
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
                <?php the_post_thumbnail('medium', array( 'class' => 'card-img-top h-auto' )); ?>
            <!-- <img src="https://app.acredu.org/wp-content/uploads/2021/03/addCertif.jpg" class="img-fluid shadow d-block animated zoomIn wp-post-image" alt="" loading="lazy" srcset="https://app.acredu.org/wp-content/uploads/2021/03/addCertif.jpg 700w, https://app.acredu.org/wp-content/uploads/2021/03/addCertif-300x222.jpg 300w" sizes="(max-width: 180px) 100vw, 180px" data-pagespeed-url-hash="3451760859" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" width="180" height="133"> -->
        </div>
        <div class="w-50 p-5">
        <strong><p style="margin:0px;font-size:12px">Empresa:</p></strong>
            <p><?php echo $nameempresa; ?> </p>
        <strong><p style="margin:0px;font-size:12px">Código de Curso:</p></strong>
            <p><?php the_title(); ?> </p> 
        <strong><p style="margin:0px;font-size:12px">Nombre del Curso:</p></strong>
                <p><?php the_field('nombrecurso'); ?></p>
        <strong><p style="margin:10px 0px;font-size:12px">Descripción del Curso:</p> </strong>
            <?php the_content(); ?> 
        </div>
    </div>


			
			<!-- Empieza la tabla  -->
            <h3 class="my-2">Listas generadas para este curso:</h3>
    <div class="row m-5">
        <div class="table-responsive">
            <table class="table table-hover table-sm table-light border-success">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre de la lista</th>
                    <th scope="col">Fecha fin de curso</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Fecha de envío</th>
                    <th scope="col">Enlace con nombres</th>
                </tr>
            </thead>
            <tbody>
            <?php query_posts(array('post_type' => 'listagraduados' ,'cat'=>$idcategory,'orderby' => 'DESC', 'posts_per_page' => -1)); ?>
                <?php $numitem=0;
                    $namecurso= get_field('nombrecurso');
                ?>
                <?php if(have_posts()) : while(have_posts()) : the_post();?>
                <?php $numitem=$numitem+1;
                      $namecursolista = get_field('namecurso');
                    if ($namecurso == $namecursolista):
                ?>
                <tr>
                    <th scope="row"><?php echo $numitem ?></th>
                    <td><?php the_title(); ?></td>
                    <td><?php the_field('fechalista'); ?></td>
                    <td><?php the_field('cantcertemitidos'); ?></td>
                    <td><?php the_field('estado'); ?></td>
                    <td><?php the_field('fechaenvio'); ?></td>
                    <td><a target="_blank"href="<?php echo get_the_content(); ?>">Link <?php the_title(); ?></a> </td>
                </tr>

                <?php 
                endif;

                endwhile; ?>
                        <?php else:?>
                         <!-- no posts found -->
                            <tr>
                                <th scope="row">0</th>
                                <td>Sin datos</td>
                                <td>Sin datos</td>
                                <td>Sin datos</td>
                                <td>Sin datos</td>
                                <td>Sin datos</td>
                                <td>Sin datos</td>
                            </tr>
                       <?php endif; wp_reset_query(); ?>
                
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