<?php get_header(); ?>
<div class="content container-fluid">
        <header ><img class="header" src="./asset/img/Acredu.png" alt="Acredu Certificados Digitales Web"></header>
        <div class="slider">
            <h1 class="slider-title">Certificados Digitales</h1>
            <h2 class="slider-subtitle">Premia reconoce el logro de tus alumnos en el mundo digital</h2>
            <div class="slider-button slideRight">
                    <h3 class="slider-button-h3">¿Cómo usar un diploma digital?</h3>
                    <button id="btn-video"type="button" data-toggle="modal" data-target="#myModal">
                        <i class="fas fa-arrow-alt-circle-right"></i>
                    </button>
            </div>
            
        </div>
        
        <div class="features">
            <h2 class="feature-main-title">¿Porqué debes usar Certificados Digitales?</h2>
            <div class="feature-wrapp">
                <div id="card1" class="feature-card">
                
                    <div class="feature-image-wrapper"><img class="feature-image" src="./asset/img/vacantesagotadas.jpeg"
                            alt="Vende más tus cursos"></div>
                    <div class="feature-card-text">
                        <h3 class="feature-title">Aumento de Inscritos</h3>
                        <p class="feature-txt">Reduce el tiempo en que logras completar las vacantes de tu curso</p>
                    </div>
                
                </div>
                <div id="card2" class="feature-card">
                
                    <div class="feature-image-wrapper"><img class="feature-image" src="./asset/img/verificador.webp" alt="Verificador Web Acredu"></div>
                    <div class="feature-card-text">
                        <h3 class="feature-title">Trazabilidad</h3>
                        <p class="feature-txt">Genera confianza con los interesados con certificados verificables</p>
                    </div>
                
                </div>
                <div id="card3" class="feature-card">
                
                    <div class="feature-image-wrapper"><img class="feature-image" src="./asset/img/visibilidad.webp" alt="Visibilidad de tu Marca"></div>
                    <div class="feature-card-text">
                        <h3 class="feature-title">Visibilidad de marca</h3>
                        <p class="feature-txt">Aumenta tu exposición de marca en buscadores y en linkedin</p>
                    </div>
                
                
                </div>
            </div>
        </div>
        <div class="awards">
            <h3>Premios</h3>
            <div class="awards-grid">
                <div class="awards-grid-image">
                    <img class="awards-image" src="./asset/img/sup.jpg" alt="Startup Chile">
                </div>
                <div class="awards-grid-image">
                    <img class="awards-image" src="./asset/img/ycombinator.webp" alt="Ycombinator">
                </div>
                <div class="awards-grid-image">
                    <img class="awards-image" src="./asset/img/ibm.png" alt="IBM Startup">
                </div>
                <div class="awards-grid-image">
                    <img class="awards-image" src="./asset/img/techprendedores.jpeg" alt="Techprendedores Panama">
                </div>
            </div>
        
        </div>
        <div class="calltoaction-wrapper">
            <div id="btnwap" class="calltoaction-button pulse"><i class="fab fa-whatsapp"></i> ¡Conversemos! </div>
            <div id="winchat" class="calltoaction">
                <div class="calltoaction-user-wrapper">
                    <img class="calltoaction-user" src="./asset/img/lou.jpeg" alt="Lourdes Uzuriaga">
                    <div>
                        <p class="calltoaction-name">Lourdes Uzuriaga</p>
                        <p class="calltoaction-status">en linea</p>
                    </div>
            
                </div>
                <div id="chat" class="calltoaction-chat">
                    <div class="calltoaction-chat-link">
                        <div>
                            <img class="calltoaction-chat-img" src="./asset/img/certificate.jpg" alt="">
                        </div>
                        <div class="calltoaction-chat-txt">
                            <p class="calltoaction-chat-txt1">Certificado Digital Acredu</p>
                            <p class="calltoaction-chat-txt2">Id: 1353001</p>
                            <p class="calltoaction-chat-txt2">acredu.co</p>
                        </div>
                    </div>
                    <a href="https://coralify.com/buinessnightsperu/alberto-carpio-joyas">https://acredu.co/buinessnightsperu/</a>
                    <p>Hola! &#128075; ,soy Lourdes.</p>
                </div>
                <a href="https://bit.ly/3lzs63D"
                    class="btnwsapp">
                    <div class="calltoaction-chat-button">
                        <div class="calltoaction-chat-input">
                            <img src="./asset/img/smile.svg" alt="whastapp acredu">
                            <p class="txt-chat-input">Escribe un mensaje</p>
                            <img src="./asset/img/clip.svg" alt="whastapp acredu">
                            <img src="./asset/img/cam.svg" alt="whastapp acredu">
                        </div>
                        <div class="icon-chat-micro">
                            <img class="icon-chat-input" src="./asset/img/micro.svg" alt="whastapp acredu">
                        </div>
            
                    </div>
                </a>
            </div>
        </div>
        
        
        <footer class="footer">
            <p class="footer-txt">Copyright © <span><img class="footer-img" src="./asset/img/Acredu_logo.png" alt="acredu logo"></span></p>
        </footer>
    </div>

    


    <!-- The Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Destaca! Comparte!</h4>
                </div>
                <div class="modal-body">
                    <video controls id="video1" autoplay >
                        <source src="./asset/img/video1.mp4"
                            type="video/mp4">
                        :( tu navegador no soporta HTM5 actualizalo please.
                    </video>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Final The Modal -->
   
<script>
    $(window).scroll(function () {
        $('#btnwap').each(function () {
            var imagePos = $(this).offset().top;
            var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow + 800) {
                setTimeout(() => { $(this).addClass("calltoaction-button-display"); }, 2000);
            }
        });
        $('#winchat').each(function () {
            var imagePos = $(this).offset().top;
            var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow + 800) {
                setTimeout(() => { $(this).addClass("fadeIn"); }, 2400);
            }
        });
        $('#chat').each(function () {
            var imagePos = $(this).offset().top;
            var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow + 800) {
                setTimeout(()=> {$(this).addClass("slideUp");}, 3500);
                
            }
        });
        $('#card1').each(function () {
            var imagePos = $(this).offset().top;
            var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow + 500) {
                $(this).addClass("pullDown");
            }
        });
        $('#card2').each(function () {
            var imagePos = $(this).offset().top;
            var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow + 600) {
                $(this).addClass("pullDown");
            }
        });
        $('#card3').each(function () {
            var imagePos = $(this).offset().top;
            var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow + 700) {
                $(this).addClass("pullDown");
            }
        });
    });
</script>
<script>
   $('#myModal').on('shown.bs.modal', function () {
        $('#video1')[0].play();
    })
    $('#myModal').on('hidden.bs.modal', function () {
        $('#video1')[0].pause();
    })
</script>    
<?php get_footer(); ?>