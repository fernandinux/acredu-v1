<?php get_header();?>

    <?php get_template_part( 'template-parts/content', 'encabezado' );?>

	<main class="w-50">
        
        <?php the_content(); ?>

	</main><!-- #main -->

<div class="verifooter">
    <?php get_footer(); ?>
</div>