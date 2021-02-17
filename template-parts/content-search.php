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
content search
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<?php printf( __( 'The post type is: %s', 'textdomain' ), get_post_type( get_the_ID() ) );?>
		<?php if ( 'proyetech' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php
			
			posted_on();
			draft_acredu_posted_by();
			?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="w-25 py-5 cloudy-knoxville-gradient">
							
        	<?php the_post_thumbnail( 'medium_large', array( 'class' => 'img-fluid shadow-lg mx-auto d-block animated zoomIn' )); ?>
						
		</div>




</article><!-- #post-<?php the_ID(); ?> -->
<?php get_footer(); ?>