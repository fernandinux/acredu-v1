
    <p class=" mb-0 mx-auto">Agrégalo con solo 2 clicks</p>
    <a target="_blank"
    href="https://www.linkedin.com/profile/add?startTask=CERTIFICATION_NAME&amp;name=<?php the_field('name_event');?>&amp;organizationId=<?php the_field('id_linkedin');?>&amp;issueYear=<?php the_field('year_linkedin');?>&amp;issueMonth=<?php the_field('month_linkedin'); ?>&amp;certUrl=<?php the_permalink(); ?>&amp;certId=<?php the_field('id'); ?>">
            <img class="my-3 z-depth-4" 
            src="https://bit.ly/2Qe6a3l" 
            alt="Agregar certificado LinkedIn"
            data-pagespeed-url-hash="3180379771" 
            onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
        >
    </a>
    <p>
        Credential ID:: <?php the_field('id'); ?>  
    </p>
    <div class="mb-5">
        <div class="text-center">
            <p class="mb-0">Emitido en:</p>
            <p class="text-blue-proyetech"><?php the_field('fechainicio'); ?></p>
        </div>
    </div>
    