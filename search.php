2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
31
	
<!--llamada a la cabecera; logo, menú...-->
<?php
get_header();
?>
<!--contenido principal-->
<div id="main-content">
 <div class="container">
 <div id="content-area" class="clearfix">
 <div id="left-area">
                        <!--el loop-->
 <?php while ( have_posts() ) : the_post(); ?>
                               <!-- recopilando info de cada post -->
 <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                        <!-- título del post -->
 <h1 class="entry-title main_title"><?php the_title(); ?></h1>
 <!-- contenido del post -->
                                        <div class="entry-content">
 <?php
 the_content();
 ?>
 </div> <!-- fin contenido post -->
 </article> <!-- fin info de cada post -->
 <?php endwhile; ?><!-- fin del loop -->
 </div> <!-- termina contenido derecha -->
 
 <?php get_sidebar(); ?><!-- barra lateral -->
 </div> <!-- fin de div contentarea -->
 </div> <!-- fin de div container -->
</div> <!-- fin de div contenido principal -->
 
<?php get_footer(); ?><!-- llamada al pie de página -->