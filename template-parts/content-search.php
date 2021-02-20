<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Draft-acredu
 */

?>

<article  class="card" style="width:70%; margin:5rem auto">

		<div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
							
        	<?php the_post_thumbnail( 'medium_large', array( 'class' => 'img-fluid' )); ?>
			<a href="<?php the_permalink(); ?>">
			<div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
    		</a>	
		</div>
	<div class="card-body">
		<?php the_title( sprintf( '<h2 class="card-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<?php printf( __( 'The post type is: %s', 'textdomain' ), get_post_type( get_the_ID() ) );?>
		<p class="card-text">
		<?php printf( __( 'The post type is: %s', 'textdomain' ), get_post_type( get_the_ID() ) );?>
		Institución verificada por aCredu: Proyectech
		</p>
		<a href="htpps://acredu.org" class="btn btn-primary">Contactar al emisor</a>
	</div><!-- .entry-header -->

	




</article><!-- #post-<?php the_ID(); ?> -->
