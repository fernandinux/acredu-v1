<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/35d6a5945d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://acredu.app/wp-content/themes/acredu-v1/css/animations.css">
    <link rel="stylesheet" href="https://acredu.app/wp-content/themes/acredu-v1/css/styleacredu.css">
    <link rel="stylesheet" href="https://acredu.app/wp-content/themes/acredu-v1/css/verificador.css">
    <link rel="stylesheet" href="https://acredu.app/wp-content/themes/acredu-v1/css/pieregister.css">
    <link rel="stylesheet"  href="https://acredu.app/wp-content/themes/acredu-v1/singlestyle.css" type="text/css" media="all">
    <link rel="stylesheet"  href="https://acredu.app/wp-content/themes/acredu-v1/css/styleBadge.css" type="text/css" media="all">
   <!-- og para compartir -->
    <meta property="og:url" content="<?php the_permalink(); ?>" />
    <meta property="og:title" content="Insignia de <?php the_field('nombrecurso'); ?> • <?php the_title(); ?> • <?php the_field('empresaemisora'); ?>" />
    <meta property="og:description" content="Credencial digital de aCredu para <?php the_field('empresaemisora'); ?>"/>
    <meta property="og:image" content="<?php the_post_thumbnail_url('full'); ?>"/>
     <?php /*the_post_thumbnail_url('full'); */?> 
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta name="theme-color" content="#013155" />
    <link rel="canonical" href="https://acredu.co/" />
    <title>
         Insignia de <?php the_field('nombrecurso'); ?> • <?php the_title(); ?> • <?php the_field('empresaemisora'); ?>
    </title>
    <?php wp_head(); ?>
</head>
<body>
 
<?php get_template_part( 'template-parts/content', 'encabezado' );?>

<main class="container">
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
                         <div  class="w-100 pt-5" style="background-color: #f2f2f2;">
                            <!-- <p class="px-4  fs-5 fw-bold" id="bddescriptiontitle" style="padding: 0px 20px;">Descripción:</p> -->
                            <div style="width: 100%">
                                <?php the_content(); ?>                        
                            </div>
                        </div>
                    </div>
                    

                    <div class="col-md-4 px-4 pt-5">
                        <a href="<?php the_post_thumbnail_url('full'); ?>" class="btn btn-dark">Descargar</a>
                    </div>
                    
                </div>
				<div class="shadow-lg" id="bdgimage" style="width: 288px;background-color: white;margin: 0px auto;">
					<div class="d-flex align-items-center" style="padding: 2rem;width:240px;height:240px;margin:auto;">
            <?php the_post_thumbnail( 'medium_large', array( 'class' => 'img-fluid my-2 mx-auto d-block animated zoomIn')); ?>
                    <!-- <img class="img-fluid" src="badge.png" style="margin: 1rem auto;"/> -->
          </div>
                    <hr>
					<div class="mx-4 my-2 d-flex align-items-center"style="height: 60px;">
						
                        <img src="<?php the_field('logoinstitucion'); ?>" class="img-fluid" style="width: 50px;"/>
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
                            <script type="IN/Share" data-url="<?php the_permalink(); ?>"></script>
                            
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
               
                <div id="bdcriterio" style="padding: 0px 20px;margin-top: 4rem;">
                    <p class="px-4  fs-5">
						<strong>
							Criterio:
						</strong>                        
                    </p>
					<?php the_field('criterio'); ?>
					
					
					
                </div>
                <div id="bdevidencia" class="w-auto pt-5" style="padding: 1rem 20px;">
                    <p class="px-4  fs-5">
						<strong>
							Evidencia:
						</strong>                        
                    </p>
                    <p class="m-0">
                        Código ID de la credencial
                    </p>
                    <?php the_field('id'); ?>
				</div>
				<a href="<?php the_field('buttonlink'); ?>" id="badgebutton">
				<div class="m-5 d-flex align-items-center">
				<p style="margin: 0px 10px;font-size: 20px;">Más información sobre como conseguir esta insignia</p><i class="fas fa-external-link-alt" style="color:#237ddd;font-size: 20px;" aria-hidden="true"></i>
				</div>
				</a>
            </div>
        
        
</main>
  <div class="text-center text-md-left" style="background-color:black;padding: 20px 20px 5px 20px;">  

    <!-- Grid row -->
    <div class="row d-flex align-items-center">

      <!-- Grid column -->
      <div class="col-md-7 col-lg-8">

        <!--Copyright-->
        
          <a href="https://acredu.org" >
          <p class="text-center text-md-left" style="color:white">
          Powered by aCredu © 2021 </p></a>
        

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-5 col-lg-4 ml-lg-0">

        <!-- Social buttons -->
        <div class="text-center text-md-right">
          <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
              <a target="_blank" href="https://www.facebook.com/coralify">
			  <img alt="aCredu facebook" src="https://app.acredu.org/wp-content/uploads/2021/01/icon_facebook1.png" class="img-fluid align-middle w-50">
              </a>
            </li>
            <li class="list-inline-item">
              <a target="_blank" href="https://www.youtube.com/channel/UCa23OQNMhf81BZV7_whVfKg">
			  <img alt="aCredu youtube" src="https://app.acredu.org/wp-content/uploads/2021/01/icon_youtube1.png" class="img-fluid align-middle w-50">
              </a>
            </li>
            <li class="list-inline-item">
              <a target="_blank" href=" https://www.linkedin.com/company/coralify">
			  <img alt="aCredu linkedin" src="https://app.acredu.org/wp-content/uploads/2021/01/icon_linkedin1.png" class="img-fluid align-middle w-50">
              </a>
            </li>
          </ul>
        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
</body>
</html>

