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
                    
	<?php get_template_part( 'template-parts/content', 'certificate' );?>


	<div class="row pt-3 align-middle">
		<div class="col-md-8">
			<?php get_template_part( 'template-parts/content', 'namsharedown' );?>  
			
			<hr style="height:1px;border-width:0;color:black;background-color:gray">
			<div class="d-md-flex justify-content-sm-between">
			
				
				<div class="d-flex flex-column my-auto ml-lg-4 ml-sm-2 text-lg-left text-center">
					<div class="text-center">
						<a target="_blank" id="logousach" href="https://bit.ly/3dMJ2Sn" class="">
							<img alt="Colectivo23" src="https://acredu.app/wp-content/uploads/2021/07/LogoColorTrans.png" class="w-sm-75 w-25 img-fluid mx-auto" data-pagespeed-url-hash="2790086286" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
						</a>
					</div>
					<div class="text-center">
						<a target="_blank" href="https://bit.ly/3dMJ2Sn">https://agilewisecorp.com/
						</a>
	
					</div>	

														
				</div>
				<div class="col-md-5 col-sm-12 text-lg-left my-4">
				<p class="my-0 text-center">Credencial emitida a:</p>
					<h3 class="my-2 text-center"><?php the_title(); ?></h3>
					<p class="my-0 text-center "><b><?php the_field('perfilrol'); ?></b></p>										
				</div>
				<div class="button-linkedin-mobile col-md-2 col-sm-12 text-lg-right text-center animated jackInTheBox zoom">
                    <?php get_template_part( 'template-parts/content', 'buttonlinkedin' );?>
				</div>
			</div>
			<hr style="height:1px;border-width:0;color:black;background-color:gray">
				<div class="col-sm-12 col-lg-10 mx-auto my-5 ">
						<div style="text-align:justify;font-size:20px !important;">
						<?php the_content(); ?>
						</div>				
					             
                     <!-- <div class="video">
                        <iframe id="videoacstudio" width="100%" height="100%" 
                        src="http://bit.ly/3kJdJdL" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    	</iframe>
                    </div> -->
				
					<?php
						if(get_field('name_event') == "Certificado de Participación"):  ?>
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
										<img class="d-block w-100" src="https://app.acredu.org/wp-content/uploads/2021/02/castudio2-scaled.jpg"
										alt="First slide">
									</div>
									<!--/First slide-->
									<!--Second slide-->
									<div class="carousel-item">
										<img class="d-block w-100" src="https://app.acredu.org/wp-content/uploads/2021/02/castudio3.png"
										alt="Second slide">
									</div>
									<!--/Second slide-->
									<!--Third slide-->
									<div class="carousel-item">
										<img class="d-block w-100" src="https://app.acredu.org/wp-content/uploads/2021/02/castudio1-scaled.jpg"
										alt="Third slide">
									</div>
									<!--/Third slide-->
									<!--4 slide-->
									<div class="carousel-item">
										<img class="d-block w-100" src="https://app.acredu.org/wp-content/uploads/2021/02/castudio4.jpg"
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
					<?php	else:  ?>
							<!--Carousel Wrapper-->
							
							<!--/.Carousel Wrapper-->
					<?php	endif;
					?>


                    
					<div style="text-align:justify">
						<?php the_field('descripcion_event1'); ?>
					</div>   
					<!-- <p class="mt-5 text-center">Conoce donde puedes adquirir este producto:</p> -->
						<div class="text-center">	
							<a target="_blank" id="brochureproyetech" href="<?php the_field('button_link'); ?>" class="btn btn-primary">
								¡Conversemos!
							</a>  
						</div>
					
				</div>
				
		</div>
		<div class="col-md-4 col-sm-12 text-center">
			 
			<!-- Inicio add Linkedin profile -->
            <div class="button-linkedin-web zoom animated zoomIn slow pt-2">
			    <?php get_template_part( 'template-parts/content', 'buttonlinkedin' );?>
                </div> 
			<!-- Fin add linkedin profile -->
			
            <div style="margin: 20px auto;">
				<h4 class="my-0 text-center mb-4"><b><?php the_field('empresa_emisora'); ?></b></h4>
				<a target="_blank" href="https://bit.ly/3hBURMu" style="cursor: pointer;text-decoration: none;">
						<img src="https://app.acredu.org/wp-content/uploads/2021/02/BOTON-WHATSAPP-01.png" style="width:13rem;"/>
				</a>
                
            </div>			
			
				
			<div style="text-align:justify;">
				
				<?php the_field('descripcion_inst'); ?>
			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingTwo">
						<h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							Temas formativos
							</a>
						</h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
						<div class="panel-body">
							<ul>
								<li aria-level="1">Mindset Digital</li>
								<li aria-level="1">Transformación Digital</li>
								<li aria-level="1">Transformación Ágil</li>
								<li aria-level="1">Liderazgo ágil</li>
								<li aria-level="1">Innovación</li>
								<li aria-level="1">Gestión de Productos y Servicios</li>
								<li aria-level="1">Educación ágil y metodologías de enseñanza</li>
							</ul>
						</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingTwo">
						<h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							Entrenamientos y formación in-house
							</a>
						</h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
						<div class="panel-body">
							Diseñamos programas formativos enfocados en la necesidad u oportunidad que se deseas trabajar, con ejemplos del sector y el mercado en el que te encuentras, aterrizando los términos y conceptos a un lenguaje práctico y sencillo.
						</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingTwo">
						<h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							¿Cómo hacemos nuestros entrenamientos?
							</a>
						</h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
						<div class="panel-body">
							<ol>
								<li aria-level="1"><b>Alineamiento</b> (why &amp; where): Entendemos la necesidad de las capacitaciones, conociendo de cerca el contexto de a quiénes están dirigidas y qué se espera de ellas. Además, ayudamos a despejar dudas de los temas propuestos y entender cómo se va a medir el impacto.</li>
								<li aria-level="1"><b>Estrategia</b> (what): Diseñamos la mejor estrategia de cómo se van a desarrollar las capacitaciones para la empresa. Cada tema, clase y mentor son seleccionados y preparados centrándonos en las necesidades y creando espacios para poner en práctica el conocimiento.</li>
								<li aria-level="1"><b>Ejecución</b> (how): Cada taller cuenta con una Líder de Experiencia quien acompaña de inicio a fin el taller y el mentor se encarga de brindar la experiencia durante la clase. Además, cada participante tiene acceso a nuestra plataforma donde se dispone de material complementario.</li>
							</ol>
						</div>
						</div>
					</div>
					</div>
				
			</div>
			
			
		</div>
	</div>
	
  <!-- fin web -->
                <?php 
            }
	} ?>
	
	
</main>

<?php get_footer(); ?>