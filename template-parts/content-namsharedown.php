
<div class="h2 text-center my-3"><?php the_field('name_event'); ?>
</div>
<div class="row d-flex justify-content-center">
    <a id="shareface" target="_blank" 
        href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>">
        <i class="fa fa-facebook">Compartir</i>
    </a>
    <a id="sharelink" target="_blank" 
        onClick="_gaq.push(['_trackEvent', ' bnp', ‘Click', 'databnpshare');" 
        href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>/&title=Acredu&summary=<?php the_field('name_event'); ?>">
        <i class="fa fa-linkedin">Compartir</i>
    </a>
    <a id="sharepdf" target="_blank" 
        href="https://app.acredu.org/wp-content/uploads/2021/<?php the_field('mespublicacion'); ?>/<?php the_field('id'); ?>.pdf">
        <i class="fa fa-download"> Descargar</i>
    </a>

    
>
</div>