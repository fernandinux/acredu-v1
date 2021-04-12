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


	<div class="row text-blue-proyetech pt-3 align-middle">
		<div class="col-md-8">
			<?php get_template_part( 'template-parts/content', 'namsharedown' );?>  
			
			<hr style="height:1px;border-width:0;color:black;background-color:gray">
			<div class="d-md-flex justify-content-sm-center">
			
				
				<div class="d-flex flex-column my-auto ml-lg-4 ml-sm-2 text-lg-left text-center">
					<div>
						<a target="_blank" id="logousach" href="https://bit.ly/3kyDz3V" class="">
							<img alt="CAstudio" src="https://app.acredu.org/wp-content/uploads/2021/02/castudio.png" class="w-sm-75 w-25 img-fluid mx-auto" data-pagespeed-url-hash="2790086286" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
						</a>
					</div>
					<div>
						<a target="_blank" href="https://bit.ly/3kyDz3V">https://www.colectivo23.com
						</a>
	
					</div>	

														
				</div>
				<div class="col-md-5 col-sm-12 text-lg-left my-4">
				<p class="my-0 text-blue-proyetech">Credencial emitida a:</p>
					<h3 class="my-2 text-center"><?php the_title(); ?></h3>
					<p class="my-0 text-center "><b><?php the_field('perfilrol'); ?></b></p>										
				</div>
				<div class="button-linkedin-mobile col-md-2 col-sm-12 text-lg-right text-center animated jackInTheBox zoom">
                    <?php get_template_part( 'template-parts/content', 'buttonlinkedin' );?>
				</div>
			</div>
			<hr style="height:1px;border-width:0;color:black;background-color:gray">
				<div class="col-sm-12 col-lg-10 mx-auto my-5 ">
						<div style="text-align:justify;">
						<?php the_content(); ?>
						</div>								
					
					<br/>  
					
					
					<br/>
                    <br/>               
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
						<div id="carousel-example-1z" class="carousel slide carousel-fade mb-5" data-ride="carousel">
							<!--Indicators-->
							<ol class="carousel-indicators">
								<li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
								<li data-target="#carousel-example-1z" data-slide-to="1"></li>
								<li data-target="#carousel-example-1z" data-slide-to="2"></li>
								<li data-target="#carousel-example-1z" data-slide-to="3"></li>
								<li data-target="#carousel-example-1z" data-slide-to="4"></li>
								<li data-target="#carousel-example-1z" data-slide-to="5"></li>
								<li data-target="#carousel-example-1z" data-slide-to="6"></li>
							
							</ol>
								<!--/.Indicators-->
								<!--Slides-->
							<div class="carousel-inner" role="listbox"> 
								<!--First slide-->
								<div class="carousel-item active">
									<img class="d-block w-100" src="https://app.acredu.org/wp-content/uploads/2021/03/slide1.jpg"
									alt="First slide">
								</div>
								<!--/First slide-->
								<!--Second slide-->
								<div class="carousel-item">
									<img class="d-block w-100" src="https://app.acredu.org/wp-content/uploads/2021/03/slide2.jpg"
									alt="Second slide">
								</div>
								<!--/Second slide-->
								<!--Third slide-->
								<div class="carousel-item">
									<img class="d-block w-100" src="https://app.acredu.org/wp-content/uploads/2021/03/slide3.jpg"
									alt="Third slide">
								</div>
								<!--/Third slide-->
								<!--4 slide-->
								<div class="carousel-item">
									<img class="d-block w-100" src="https://app.acredu.org/wp-content/uploads/2021/03/slide4.jpg"
									alt="Third slide">
								</div>
								<!--/4 slide-->
								<!--5 slide-->
								<div class="carousel-item">
									<img class="d-block w-100" src="https://app.acredu.org/wp-content/uploads/2021/03/slide5.jpg"
									alt="Third slide">
								</div>
								<!--/5 slide-->
								<!--6 slide-->
								<div class="carousel-item">
									<img class="d-block w-100" src="https://app.acredu.org/wp-content/uploads/2021/03/slide6.jpg"
									alt="Third slide">
								</div>
								<!--/6 slide-->
								<!--7 slide-->
								<div class="carousel-item">
									<img class="d-block w-100" src="https://app.acredu.org/wp-content/uploads/2021/03/slide7.jpg"
									alt="Third slide">
								</div>
								<!--/7 slide-->
								
					

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
				<?php	endif;
				?>


                    
            <div style="text-align:justify;">
				<?php the_field('descripcion_event1'); ?>
			</div>
            
            
            	<p class="mt-5 text-center">Para conocer nuestro plan de estudio completo haz click al siguiente enlace:</p>
					<div class="text-center">	
						<a target="_blank" id="brochureproyetech" href="https://bit.ly/3bMFoWP"  class="btn btn-primary">
							Plan de Estudio Aquí
						</a>  
                    </div>
                <p class="mt-5 text-center">Conoce donde puedes adquirir este producto:</p>
                <div class="text-center">	
                    <a target="_blank" id="brochureproyetech" href="https://bit.ly/3pWWZ3y" class="btn btn-primary">
                        Aquí
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
            <a href="http://bit.ly/3dPOqVQ" style="cursor: pointer;text-decoration: none;">
                    <img src="https://app.acredu.org/wp-content/uploads/2021/02/BOTON-WHATSAPP-01.png" style="width:13rem;"/>
            </a>
                
            </div>			
			
				
			<div style="text-align:justify;"> 
				<?php the_field('descripcion_inst'); ?>
				
			</div>
			
			
		</div>
	</div>
	
  <!-- fin web -->
                <?php 
            }
	} ?>
	
	
</main>

<?php get_footer(); ?>