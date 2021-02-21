<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Draft-acredu
 */

?>

<article  class="card" style="max-width:300px; margin:1rem auto">

		<div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
							
        	
			<a href="<?php the_permalink(); ?>">
			<div class="mask" style="background-color: rgba(251, 251, 251, 0.15)">
				<?php the_post_thumbnail( 'medium', array( 'class' => 'img-fluid' )); ?>
			</div>
    		</a>	
		</div>
		<div class="card-body">
			<p>Beneficiario del certificado:</p>
			<?php the_title( sprintf( '<h2 class="card-title"><a href="%s" rel="bookmark"><i class="fas fa-graduation-cap" style="color:#007bff;font-size:29px;margin-right:5px" aria-hidden="true"></i>', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			
			<p>Información del certificado:</p>
			<p class="card-text mb-0">
				<i class="fas fa-check-circle" style="font-size:18px;color:#32c132;"></i>
			  Institución verificada por aCredu:<br>
			</p>
			<div style="width:100%;text-align:center;width:100%;text-align:center;margin: 0px auto 1rem auto;"><?php the_field('empresa_emisora'); ?></div>
			<p class="card-text mb-0">
				<i class="fas fa-check-circle" style="font-size:18px;color:#32c132;"></i>
			El curso registrado es:<br>
			</p>
			<div style="width:100%;text-align:center;width:100%;text-align:center;margin: 0px auto 1rem auto;"><?php the_field('name_event'); ?></div>
			<p class="card-text mb-0">
				<i class="fas fa-check-circle" style="font-size:18px;color:#32c132;"></i>
			Este certificado se emitió:<br>
			</p>
			<div style="width:100%;text-align:center;width:100%;text-align:center;margin: 0px auto 1rem auto;"><?php the_field('fechainicio'); ?></div>
			
			<a href="htpps://acredu.org" class="btn mt-5" style="background:#03AA99"><i class="far fa-comment" style="font-size:18px;margin-right:5px"></i>Contactar al emisor</a>
		</div><!-- .entry-header -->
</article><!-- #post-<?php the_ID(); ?> -->
