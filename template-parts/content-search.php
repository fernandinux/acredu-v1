<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Draft-acredu
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="col-md-12 py-5 cloudy-knoxville-gradient">
							
        	<?php the_post_thumbnail( 'thumbnail', array( 'class' => 'img-fluid shadow-lg mx-auto d-block animated zoomIn' )); ?>
						
		</div>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<?php printf( __( 'The post type is: %s', 'textdomain' ), get_post_type( get_the_ID() ) );?>
		<?php if ( 'proyetech' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php
			
			variables
			?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	




</article><!-- #post-<?php the_ID(); ?> -->
