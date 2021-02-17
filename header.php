<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/35d6a5945d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://app.acredu.org/wp-content/themes/acredu-v1/css/animations.css">
    <link rel="stylesheet" href="https://app.acredu.org/wp-content/themes/acredu-v1/css/styleacredu.css">
    <link rel="stylesheet" href="https://app.acredu.org/wp-content/themes/acredu-v1/css/verificador.css">
    <link rel="stylesheet"  href="https://app.acredu.org/wp-content/themes/acredu-v1/singlestyle.css" type="text/css" media="all">
   <!-- og para compartir -->
    <meta property="og:url" content="<?php the_permalink(); ?>" />
    <meta property="og:title" content="<?php the_field('name_event'); ?>" />
    <meta property="og:description" content="Certificado digital de aCredu para <?php the_field('empresa_emisora'); ?>" />
    <meta property="og:image" content="<?php the_post_thumbnail_url('full'); ?>" />
    <meta name="theme-color" content="#013155" />
<link rel="canonical" href="https://acredu.org/" />
    <!-- <title>
         <?php /* bloginfo( 'name');*/ ?>
    </title> -->
    <?php wp_head(); ?>
</head>
<body>