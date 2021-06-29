<?php get_header(); ?>

 
<?php get_template_part( 'template-parts/content', 'encabezado' );?>

<main>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v3.0";
	fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

   
        

            <div class="d-flex flex-column">
                <div class="pt-5 pb-4 mx-0 row" id="bdgtitle" style="background-color: #f2f2f2;width: 100%;">
                    <div class="col-md-8 px-4">
                        <h1><?php the_field('nombrecurso'); ?></h1>
                        <p class="m-0" style="font-size: 15px;">Este distintivo fue expedido a 
                            <span style="font-weight: bold;"><?php the_title(); ?></span> el 
                            <span style="font-weight: bold;"><?php the_field('fechaexpedicion'); ?></span></p>
                        <p class="m-0" style="font-size: 15px;">Expira el <?php the_field('fechaexpiracion'); ?></p>
                    </div>
                    

                    <div class="col-md-4 px-4 pt-5">
                        <a class="btn btn-dark">Descargar</a>
                    </div>
                    
                </div>
				<div class="shadow-lg" id="bdgimage" style="width: 288px;background-color: white;margin-left: 2rem;">
					<?php the_post_thumbnail( 'medium_large', array( 'class' => 'img-fluid my-2 mx-auto d-block animated zoomIn')); ?>
                    <!-- <img class="img-fluid" src="badge.png" style="margin: 1rem auto;"/> -->
                    <hr>
					<div class="m-2 d-flex align-items-center"style="height: 60px;">
						<?php the_field('logoinstitucion'); ?>
                        <!-- <img src="badge.png" class="img-fluid" style="width: 50px;"/> -->
                        <div class="ml-2">
                            <p class="m-0 fw-bold" style="font-size: 15px;">Emitido por:</p>
                            <a href="www.google.com"><p class="m-0 fs-5"><?php the_field('empresaemisora'); ?></p> </a>
                        </div>
                    </div>
                    <hr>
                    <div style="text-align: center;">
                        <p class="m-0" style="font-size: 15px;">Compartir:</p>
                        <div class="d-flex justify-content-around align-items-center">
                            <div class="fb-share-button" 
                                data-href="<?php the_permalink(); ?>" 
                                data-layout="button_count">
                            </div>
                            <script src="https://platform.linkedin.com/in.js" type="text/javascript">lang: es_ES</script>
                            <script type="IN/Share" data-url="https://www.linkedin.com"></script>
                            
                        </div>
                        
                    </div>
                    <hr>
                    <div style="text-align: center;">
                        <p class="m-0" style="font-size: 15px;">Agregalo a tu Linkedin:</p>
                        <a target="_blank"
                                href="https://www.linkedin.com/profile/add?startTask=CERTIFICATION_NAME&amp;name=<?php the_field('nombrecurso');?>&amp;organizationId=<?php the_field('idlinkedin');?>&amp;issueYear=<?php the_field('yearlinkedin');?>&amp;issueMonth=<?php the_field('monthlinkedin'); ?>&amp;certUrl=<?php the_permalink(); ?>&amp;certId=<?php the_field('id'); ?>">
                                <img class="my-3 z-depth-4" style="width: 100px;margin: 0px auto;"
                                src="https://bit.ly/3haPeVg" 
                                alt="Agregar certificado LinkedIn"
                                data-pagespeed-url-hash="3180379771" 
                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                            >
                        </a>
                    </div>

                </div>
                <div id="bddescription" class="w-100 pt-5" style="background-color: #f2f2f2;width: 100%;">
                    <p class="px-4  fs-5 fw-bold" id="bddescriptiontitle" style="padding: 0px 20px;">Descripción:</p>
                    <div style="width: 80%;padding: 0px 20px;">
                        <?php the_content(); ?>                        
                    </div>
                </div>
                <div id="bdcriterio" class="w-auto pt-5" style="width: 100%; padding: 0px 20px;">
                    <p class="px-4  fs-5 fw-bold">
                        Criterio:
                    </p>
                    <?php the_field('criterio'); ?>
					<a href="<?php the_field('buttonlink'); ?>"><p>Más información sobre como conseguir esta insignia</p><i class="fas fa-external-link-alt"></i></a>
                </div>
                <div id="bdevidencia" class="w-auto pt-5" style="width: 100%; padding: 0px 20px;">
                    <p class="px-4  fs-5 fw-bold">
                        Evidencia:
                    </p>
                    <p class="m-0">
                        Código ID de la credencial
                    </p>
                    <?php the_field('id'); ?>
                </div>
            </div>
        
        
</main>
</body>
</html>
	

