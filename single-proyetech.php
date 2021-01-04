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
		<div class="col-md-12 py-3 cloudy-knoxville-gradient">
							
        	<?php the_post_thumbnail( 'medium_large', array( 'class' => 'img-fluid shadow mx-auto d-block animated zoomIn' )); ?>
						
		</div>
	</div>


	<div class="row text-white pt-3 align-middle">
		<div class="col-md-8">
			<div class="h2 text-center my-3"><?php the_field('name_event'); ?></div>
			
				<div class="row d-flex justify-content-center">
					<a id="shareface" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><i class="fa fa-facebook"></i></a>
					<a id="sharelink" onClick="_gaq.push(['_trackEvent', ' bnp', ‘Click', 'databnpshare');" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>/&title=Acredu&summary=PLANIFICACIÓN_Y_CONTROL_DE_PROYECTOS_CON_PRIMAVERA_P6"><i class="fa fa-linkedin"></i></a>
					<a id="sharepdf" href="https://docs.google.com/viewer?url=<?php echo get_template_directory_uri()?>/assets/pdf/<?php $imageContent = get_the_content();
						$stripped = strip_tags($imageContent, '<p>'); //quitar etiquetas
						echo $stripped; ?>.pdf"><i class="fa fa-download"></i></a>
				</div>
				
			
			<hr style="height:1px;border-width:0;color:black;background-color:gray">
			<div class="row align-middle">
			
				
				<div class="col-md-5 col-sm-12 text-lg-left text-center my-auto ml-lg-4 nameinstitution">
				
				<a id="logousach" href="https://bit.ly/2TcXngr"><img alt="Proyetech Consultores" src="https://coralify.com/wp-content/uploads/2020/12/logo.png" class="rounded-circle mt-4 mb-4 w-25 mw-50 img-fluid" ></a>
					<br>
					<div>
					<h5 class="my-0">Proyetech Consultores</h5><br>
					<a id="linkusach" href="https://bit.ly/3h37q2J" class="ml-lg-4">http://proyetech.com/</a>	
					</div>
														
				</div>
				<div class="col-md-5 col-sm-12 text-lg-left my-4">
				<p class="my-0 text-white-50">Credencial emitida a:</p>
					<h3 class="my-2 text-center"><?php the_title(); ?></h3>
					<p class="my-0 text-center text-white-50"> Programa de <b><?php the_field('perfilrol'); ?></b></p>										
				</div>
				<div class="button-linkedin-mobile col-md-2 col-sm-12 text-lg-right text-center animated jackInTheBox zoom">
				<a href="https://www.linkedin.com/profile/add?startTask=CERTIFICATION_NAME&amp;name=PLANIFICACIÓN Y CONTROL DE PROYECTOS CON PRIMAVERA P6&amp;organizationId=1270398&amp;issueYear=2020&amp;issueMonth=10&amp;certUrl=<?php the_permalink(); ?>&amp;certId=<?php $imageContent = get_the_content();
					$stripped = strip_tags($imageContent, '<p>'); echo $stripped; ?>">
					<img class="mb-2 z-depth-4" src="https://download.linkedin.com/desktop/add2profile/buttons/es_ES.png " alt="Agregar certificado LinkedIn" data-pagespeed-url-hash="3180379771" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
				</a>
				</div>
			</div>
			<hr style="height:1px;border-width:0;color:black;background-color:gray">
				<div class="col-sm-12 col-lg-10 mx-auto my-5 text-white-50">
					
					
					
					<p class="text-justify"><?php the_field('descripcion_event1'); ?></p>
					<br/>  
					
						<p class="mt-5 text-center">Conoce el Programa de Emprendimiento:</p>
					<div class="text-center">	
						<a id="brochurebnp" href="https://bit.ly/2TfJden" class="btn btn-default">
							Aquí
						</a>  
					</div>
					<br/>
                    <br/>               
                    <div class="video">
                        <iframe id="videobnp" width="100%" height="100%" 
                        src="https://bit.ly/37x16gX" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                    </div>
					<p class="text-justify"><?php the_field('descripcion_event3'); ?></p>
					
				</div>
				
		</div>
		<div class="col-md-4 col-sm-12 text-center">
			 
			<!-- Inicio add Linkedin profile -->
			<div class="button-linkedin-web zoom animated zoomIn slow pt-2">
				<p class=" mb-0 mx-auto">Agrégalo con solo 2 clicks</p>
				<a onClick="_gaq.push(['_trackEvent', ' bnp', ‘Click', 'databnp');" href="https://www.linkedin.com/profile/add?startTask=CERTIFICATION_NAME&amp;name=PLANIFICACIÓN Y CONTROL DE PROYECTOS CON PRIMAVERA P6&amp;organizationId=1270398&amp;issueYear=2020&amp;issueMonth=10&amp;certUrl=<?php the_permalink(); ?>&amp;certId=<?php $imageContent = get_the_content();
				$stripped = strip_tags($imageContent, '<p>'); echo $stripped; ?>">
				<img class="my-3 z-depth-4" src="https://download.linkedin.com/desktop/add2profile/buttons/es_ES.png " alt="Agregar certificado LinkedIn" data-pagespeed-url-hash="3180379771" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
			</div>
			<!-- Fin add linkedin profile -->
			
						
			<p>
				Credential ID: <?php $imageContent = get_the_content();
				$stripped = strip_tags($imageContent, '<p>'); //quitar etiquetas
				echo $stripped; ?>   
			</p>
			<div class="mb-5"><div class="text-center"><p class="mb-0">Emitido el:</p><p class="text-white-50"><?php the_field('fechainicio'); ?></p></div></div>
				
			<div class="text-center">
				<p><strong>El Centro de Innovación de la Facultad de Ingeniería</strong></p>
				<p class="mb-5 font-italic mx-5 text-white-50 text-justify">
				<small>Es el lugar propicio para que académicos, investigadores, estudiantes de pregrado, posgrado y egresados de la Universidad de Santiago de Chile, lleven sus proyectos de innovación y emprendimiento al siguiente paso.
				</small></p> 
				
			</div>
			<!--Carousel Wrapper-->
			<div id="carousel-example-1z" class="carousel slide carousel-fade mb-5" data-ride="carousel">
				<!--Indicators-->
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-1z" data-slide-to="1"></li>
					<li data-target="#carousel-example-1z" data-slide-to="2"></li>
					<li data-target="#carousel-example-1z" data-slide-to="3"></li>
				
				</ol>
					<!--/.Indicators-->
					<!--Slides-->
				<div class="carousel-inner" role="listbox"> 
					<!--First slide-->
					<div class="carousel-item active">
						<img class="d-block w-100" src="https://app.acredu.org/wp-content/uploads/2021/01/slider3.jpeg"
						alt="First slide">
					</div>
					<!--/First slide-->
					<!--Second slide-->
					<div class="carousel-item">
						<img class="d-block w-100" src="https://app.acredu.org/wp-content/uploads/2021/01/slider4.jpg"
						alt="Second slide">
					</div>
					<!--/Second slide-->
					<!--Third slide-->
					<div class="carousel-item">
						<img class="d-block w-100" src="https://app.acredu.org/wp-content/uploads/2021/01/slider1.jpeg"
						alt="Third slide">
					</div>
					<!--/Third slide-->
					<!--4 slide-->
					<div class="carousel-item">
						<img class="d-block w-100" src="https://app.acredu.org/wp-content/uploads/2021/01/slider2.jpeg"
						alt="Third slide">
					</div>
					<!--/4 slide-->
					
		

				</div>
				<!--/.Slides-->
				<!--Controls-->
				<a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
				</a>
				<!--/.Controls-->
			</div>
			<!--/.Carousel Wrapper-->
			<div class="text-center mx-5 my-5 text-white-50"><p><small>¿Algo salió mal con tu certificado?, escribenos al Whatsapp para ayudarte:</small></p> <a id="ayudabnp" href="https://bit.ly/2EIKmrc"><i class="fa fa-whatsapp faw"></i></a></div>
		</div>
	</div>
	
  <!-- fin web -->
                <?php 
            }
	} ?>
	
	
</main>

<?php get_footer(); ?>