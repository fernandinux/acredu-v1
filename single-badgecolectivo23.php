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
                        <h1 >Insignia de BIM Coordinator</h1>
                        <p class="m-0" style="font-size: 15px;">Este distintivo fue expedido a 
                            <span style="font-weight: bold;">Yujun Liang</span> el 
                            <span style="font-weight: bold;">12 de abril de 2021.</span></p>
                        <p class="m-0" style="font-size: 15px;">Expira el 13 de abril de 2023</p>
                    </div>
                    

                    <div class="col-md-4 px-4 pt-5">
                        <a class="btn btn-dark">Descargar</a>
                    </div>
                    
                </div>
                <div class="shadow-5" id="bdgimage" style="width: 288px;background-color: white;margin-left: 2rem;">
                    <img class="img-fluid" src="badge.png" style="margin: 1rem auto;"/>
                    <hr>
                    <div class="m-2 d-flex align-items-center"style="height: 60px;">
                        <img src="badge.png" class="img-fluid" style="width: 50px;"/>
                        <div class="ml-2">
                            <p class="m-0 fw-bold" style="font-size: 15px;">Emitido por:</p>
                            <a href="www.google.com"><p class="m-0 fs-5">CA Studio</p> </a>
                        </div>
                    </div>
                    <hr>
                    <div style="text-align: center;">
                        <p class="m-0" style="font-size: 15px;">Compartir:</p>
                        <div class="d-flex justify-content-around align-items-center">
                            <div class="fb-share-button" 
                                data-href="https://www.your-domain.com/your-page.html" 
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
                                href="https://www.linkedin.com/profile/add?startTask=CERTIFICATION_NAME&amp;name=<?php the_field('name_event');?>&amp;organizationId=<?php the_field('id_linkedin');?>&amp;issueYear=<?php the_field('year_linkedin');?>&amp;issueMonth=<?php the_field('month_linkedin'); ?>&amp;certUrl=<?php the_permalink(); ?>&amp;certId=<?php the_field('id'); ?>">
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
                        <p>
                            Esta credencial certifica que el portador curso satisfactoriamente nuestro plan de capacitación avanzado para implementar la metodología B.I.M. en proyectos de construcción.
                        </p>
                        
                    </div>
                </div>
                <div id="bdcriterio" class="w-auto pt-5" style="width: 100%; padding: 0px 20px;">
                    <p class="px-4  fs-5 fw-bold">
                        Criterio:
                    </p>
                    <p>
                        A su vez culminó con éxito el proyecto final “HARMONY TOWERS” aplicando los conocimientos de Modelado Arquitectónico, Modelado Estructural, Documentación y Cuantificación, Coordinación entre disciplinas e interoperabilidad.

                        Durante el proceso de aprendizaje y en la entrega del proyecto final se evaluó el desempeño del participante mostrando excelentes resultados y total dominio de los siguiente temas:
                    </p>
                </div>
                <div id="bdevidencia" class="w-auto pt-5" style="width: 100%; padding: 0px 20px;">
                    <p class="px-4  fs-5 fw-bold">
                        Evidencia:
                    </p>
                    <p class="m-0">
                        Código ID de la credencial
                    </p>
                    <p>
                        3245688
                    </p>
                </div>
            </div>
        
        
</main>
<div class="verifooter">
	<?php get_footer(); ?>
</div>
