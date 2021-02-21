<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Draft-acredu
 */

?>

<section class="no-results not-found">
	<div style="padding:1rem; text-align:center">
				<p class="card-text"> <i class="fas fa-exclamation-circle" style="font-size:20px;color:red;" aria-hidden="true"></i>
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'No hemos podido verificar la existencia del certificado con ID credential: %s', 'draft-acredu' ), '<span>' . get_search_query() . '</span>' );
					?>
				</p>
	</div><!-- .page-header -->

	<article  class="card" style="max-width:300px; margin:1rem auto 13rem auto">

		<div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
							
			<div class="mask" style="background-color: rgba(251, 251, 251, 0.15)">
				<img src="https://app.acredu.org/wp-content/uploads/2021/02/oopsCertificate.jpg" class="img-fluid"/>
			</div>
    		</a>	
		</div>
		<div class="card-body">
			
			<div style="width:100%;text-align:center;width:100%;text-align:center;margin:  2rem auto;">Por favor, revisa el ID que deseas consultar y vuelve a intentarlo</div>
			
			
			
			<a href="htpps://acredu.org" class="btn mt-5" style="background:#03AA99"><i class="fas fa-search" style="font-size:18px;margin-right:5px"></i>Nueva verificación</a>
		</div><!-- .entry-header -->
</article>
</section><!-- .no-results -->
