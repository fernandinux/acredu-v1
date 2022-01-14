<?php get_header(); ?>

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
                    
	<div class="row">		
		<div class="col-md-12 pt-5 cloudy-knoxville-gradient">

			<img src="/wp-content/uploads/2021/<?php the_field('mespublicacion'); ?>/<?php $imageContent = get_the_content();
				$stripped = strip_tags($imageContent, '<p>'); //quitar etiquetas
				echo $stripped; ?>-pdf.jpg" 
			class="img-fluid shadow-lg mx-auto d-block animated zoomIn thumb-of-pdf wp-post-image" 
			alt="certificado de <?php the_field('empresa_emisora'); ?> para <?php the_title(); ?>" 
			loading="lazy" width="768" height="594">

        	<?php /*the_post_thumbnail( 'medium_large', array( 'class' => 'img-fluid shadow-lg mx-auto d-block animated zoomIn' )); */?>
			<div style="display: flex;flex-direction: row;justify-content: center;align-items: center;margin: 20px auto 0px auto;">
            <small>¿Algo salió mal con tu certificado?, escríbenos:</small>
            <a id="ayudabnp" target="_blank" href="https://bit.ly/2EIKmrc"><i class="fa fa-whatsapp faw"></i></a></div>			
		</div>
        
	</div>	


	<div class="row text-blue-proyetech pt-3 align-middle">
		<div class="col-md-8">			
			<div class="h2 text-center my-3"><?php the_field('name_event'); ?>
			</div>
			<div class="row d-flex justify-content-center">
				<a id="shareface" target="_blank" 
					href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>">
					<i class="fa fa-facebook"><span style="font-size:18px; margin: 0px 0px 0px 8px;font-family:Roboto; font-weight:bold">Compartir</span></i>
				</a>
				<a id="sharelink" target="_blank" 
					onClick="_gaq.push(['_trackEvent', ' bnp', ‘Click', 'databnpshare');" 
					href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>/&title=Acredu&summary=<?php the_field('name_event'); ?>">
					<i class="fa fa-linkedin"><span style="font-size:18px; margin: 0px 0px 0px 8px;font-family:Roboto; font-weight:bold">Compartir</span></i>
				</a>
				<a id="sharepdf" target="_blank" 
					href="https://app.acredu.org/wp-content/uploads/2021/<?php the_field('mespublicacion'); ?>/<?php $imageContent = get_the_content();
						$stripped = strip_tags($imageContent, '<p>'); //quitar etiquetas
						echo $stripped; ?>.pdf">
					<i class="fa fa-download"><span style="font-size:15px; margin: 0px 0px 0px 8px;font-family:Roboto; font-weight:bold">Descargar pdf</span></i>
				</a>
			</div>
			<hr style="height:1px;border-width:0;color:black;background-color:gray">
			<div class="d-md-flex justify-content-sm-center">
			
				
				<div class="d-flex flex-column my-auto ml-lg-4 ml-sm-2">
					<div>
						<a target="_blank" id="logousach" href="https://bit.ly/3nQtrDD" class="">
							<img alt="IMCE" src="https://app.acredu.org/wp-content/uploads/2021/01/IMCE-FINAL.png" class="w-sm-75 w-25 img-fluid mx-auto" data-pagespeed-url-hash="2790086286" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
						</a>
					</div>
					<div>
						<a target="_blank" href="https://bit.ly/3nQtrDD">http://imce.la/
						</a>
	
					</div>	

														
				</div>
				<div class="col-md-5 col-sm-12 text-lg-left my-4">
				<p class="my-0 text-blue-proyetech">Credencial emitida a:</p>
					<h3 class="my-2 text-center"><?php the_title(); ?></h3>
					<p class="my-0 text-center "> Programa de <b><?php the_field('perfilrol'); ?></b></p>										
				</div>
				<div class="button-linkedin-mobile col-md-2 col-sm-12 text-lg-right text-center animated jackInTheBox zoom">
				<a target="_blank" href="https://www.linkedin.com/profile/add?startTask=CERTIFICATION_NAME&amp;name=Autorregulación y Funciones Ejecutivas: en el desarrollo de habilidades para toda la vida&amp;organizationId=64519562&amp;issueYear=2020&amp;issueMonth=12&amp;certUrl=<?php the_permalink(); ?>&amp;certId=<?php $imageContent = get_the_content();
					$stripped = strip_tags($imageContent, '<p>'); echo $stripped; ?>">
					<img class="mb-2 z-depth-4" src="https://download.linkedin.com/desktop/add2profile/buttons/es_ES.png " alt="Agregar certificado LinkedIn" data-pagespeed-url-hash="3180379771" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
				</a>
				</div>
			</div>
			<hr style="height:1px;border-width:0;color:black;background-color:gray">
				<div class="col-sm-12 col-lg-10 mx-auto my-5 ">
					
					
					
					<p class="text-justify"><?php the_field('descripcion_event1'); ?></p>
					<br/>  
					
						<p class="mt-5 text-center">Conoce donde adquirir este curso:</p>
					<div class="text-center">	
						<a target="_blank" id="brochureimce" href="https://bit.ly/2XHHSiP" class="btn btn-primary" style="background-color:#69327a !important">
							Aquí
						</a>  
					</div>
					<br/>
                    <br/>
					           
                    <!-- <div class="video">
                        <iframe id="videobnp" width="100%" height="100%" 
                        src="https://bit.ly/37x16gX" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    	</iframe>
                    </div>
					<p class="text-justify"><?php the_field('descripcion_event3'); ?></p> -->
					
				</div>
				
		</div>
		<div class="col-md-4 col-sm-12 text-center">
			 
			<!-- Inicio add Linkedin profile -->
			<div class="button-linkedin-web zoom animated zoomIn slow pt-2">
				<p class=" mb-0 mx-auto">Agrégalo con solo 2 clicks</p>
				<a target="_blank" onClick="_gaq.push(['_trackEvent', ' bnp', ‘Click', 'databnp');" href="https://www.linkedin.com/profile/add?startTask=CERTIFICATION_NAME&amp;name=Autorregulación y Funciones Ejecutivas: en el desarrollo de habilidades para toda la vida&amp;organizationId=64519562&amp;issueYear=2020&amp;issueMonth=12&amp;certUrl=<?php the_permalink(); ?>&amp;certId=<?php $imageContent = get_the_content();
				$stripped = strip_tags($imageContent, '<p>'); echo $stripped; ?>">
				<img class="my-3 z-depth-4" src="https://download.linkedin.com/desktop/add2profile/buttons/es_ES.png " alt="Agregar certificado LinkedIn" data-pagespeed-url-hash="3180379771" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
			</div>
			<!-- Fin add linkedin profile -->
			
						
			<p>
				Credential ID: <?php $imageContent = get_the_content();
				$stripped = strip_tags($imageContent, '<p>'); //quitar etiquetas
				echo $stripped; ?>   
			</p>
			<div class="mb-5"><div class="text-center"><p class="mb-0">Emitido en:</p><p class="text-blue-proyetech"><?php the_field('fechainicio'); ?></p></div></div>
				
			<div class="text-center">
				<p><strong>La Asociación Educativa para el Desarrollo Humano y el Instituto Mente, Cerebro & Educación</strong></p>
				<p class="mb-5 font-italic mx-5  text-justify">
				<small>Desde el año 2000, la ASEDH - Asociación Educativa para el Desarrollo Humano, viene fomentando la neurociencia educacional en diferentes escenarios y desarrollando propuestas de formación e innovación educativa basadas en las evidencias generadas en el campo de la ciencia del aprendizaje. En el año 2018 se formalizó la creación del IMCE - Instituto Mente, Cerebro & Educación- con el objetivo de responder a la gran necesidad de crear acceso al educador a un conjunto sólido de conocimientos y evidencias que lo inspirarán a construir una nueva práctica pedagógica. 

Aprender es uno de los principales objetivos del cerebro humano y mediar este proceso es tarea fundamental del educador. Sin embargo, un número significativo de educadores no conoce cómo aprende el cerebro. Para ello, el IMCE nace para expandir la ciencia y las evidencias, eliminar los neuromitos y crear competencias en los educadores que les permitan reimaginar la educación, redirigir su práctica y reenaromarse de su profesión.

				</small></p> 
				<div style="margin:10px auto;">
				<?php the_field('descripcion_adicional'); ?> 
				</div>
				
			</div>
			<!--Carousel Wrapper-->
			<!-- <div id="carousel-example-1z" class="carousel slide carousel-fade mb-5" data-ride="carousel"> -->
				<!--Indicators-->
				<!-- <ol class="carousel-indicators">
					<li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-1z" data-slide-to="1"></li>
					<li data-target="#carousel-example-1z" data-slide-to="2"></li>
					<li data-target="#carousel-example-1z" data-slide-to="3"></li>
				
				</ol> -->
					<!--/.Indicators-->
					<!--Slides-->
				<!-- <div class="carousel-inner" role="listbox">  -->
					<!--First slide-->
					<!-- <div class="carousel-item active">
						<img class="d-block w-100" src="https://app.acredu.org/wp-content/uploads/2021/01/slider3.jpeg"
						alt="First slide">
					</div> -->
					<!--/First slide-->
					<!--Second slide-->
					<!-- <div class="carousel-item">
						<img class="d-block w-100" src="https://app.acredu.org/wp-content/uploads/2021/01/slider4.jpg"
						alt="Second slide">
					</div> -->
					<!--/Second slide-->
					<!--Third slide-->
					<!-- <div class="carousel-item">
						<img class="d-block w-100" src="https://app.acredu.org/wp-content/uploads/2021/01/slider1.jpeg"
						alt="Third slide">
					</div> -->
					<!--/Third slide-->
					<!--4 slide-->
					<!-- <div class="carousel-item">
						<img class="d-block w-100" src="https://app.acredu.org/wp-content/uploads/2021/01/slider2.jpeg"
						alt="Third slide">
					</div> -->
					<!--/4 slide-->
					
		

				<!-- </div> -->
				<!--/.Slides-->
				<!--Controls-->
				<!-- <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
				</a> -->
				<!--/.Controls-->
			<!-- </div> -->
			<!--/.Carousel Wrapper-->
			<div class="text-center mx-5 my-5"><p><small>¿Algo salió mal con tu certificado?, escribenos al Whatsapp para ayudarte:</small></p> <a id="ayudabnp" target="_blank" href="https://bit.ly/2EIKmrc"><i class="fa fa-whatsapp faw"></i></a></div>
		</div>
	</div>
	
  <!-- fin web -->
                <?php 
            }
	} ?>
	
	
</main>

<?php get_footer(); ?>
