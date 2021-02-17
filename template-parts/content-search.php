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

	<?php post_thumbnail(); ?>

	<div class="entry-summary">
		
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
		footer
		<?php get_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
