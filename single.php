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
                    
	<div class="row">		
		<div class="col-md-12 py-3 cloudy-knoxville-gradient">
							
        	<?php the_post_thumbnail( 'thumbnail', array( 'class' => 'img-fluid shadow mx-auto d-block animated zoomIn' )); ?>
						
		</div>
	</div>


	<div class="row bg-dark text-white pt-3 align-middle">
		<div class="col-md-8">
			<div class="h2 text-center my-3"><?php the_content(); ?></div>
			
			<!-- Empieza la tabla  -->
                <div class="table-responsive">
                    <table class="table table-hover table-sm table-light border-success">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Lorem</th>
                                    <th scope="col">Ipsum</th>
                                    <th scope="col">Dolor</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Sit</td>
                                    <td>Amet</td>
                                    <td>Consectetur</td>
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
                            </tbody>

                    </table>
                </div>


    <!-- Termina la tabla -->	
				
			
			
				
		</div>
		
	</div>
	
  <!-- fin web -->
                <?php 
            }
	} ?>
	
	
</main>

<?php get_footer(); ?>