<?php

/* elimina el menu de arriba */
add_filter( 'show_admin_bar', '__return_false' );

function init_template(){

    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );

}
add_action( 'after_setup_theme', 'init_template' );
/**
 * Include CSS files
 */
function theme_enqueue_scripts() {
        wp_enqueue_style( 'Font_Awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
        wp_enqueue_style( 'Bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
        wp_enqueue_style( 'MDB', get_template_directory_uri() . '/css/mdb.min.css' );
        wp_enqueue_style( 'Style', get_template_directory_uri() . '/style.css' );
        wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array(), '3.3.1', true );
        wp_enqueue_script( 'Tether', get_template_directory_uri() . '/js/popper.min.js', array(), '1.0.0', true );
        wp_enqueue_script( 'Bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true );
        wp_enqueue_script( 'MDB', get_template_directory_uri() . '/js/mdb.min.js', array(), '1.0.0', true );

        }
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );


function certificate_proyetech(){

    $labels = array (
        'name' => 'PROYETECH-Certs',
        'singular_name' => 'PROYETECH-Cert',
        'menu_name' => 'PROYETECH',
    );
    $args = array(
            'label' => 'PROYETECH-Certs',
            'descripcion' => 'Certificados de usuarios PROYETECH',
            'labels' => $labels,
            'supports' => array('title', 'editor', 'thumbnail', 'revisions'),
            'public' => true,
            'show_in_menu' => true,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-awards',
            'can_export' => true,
            'publicly_queryable' => true,
            'rewrite' => true,
            'show_in_rest' => true,
            'taxonomies'          => array( 'category' ),
    );
    register_post_type( 'proyetech', $args );
}




function certificate_imce(){

    $labels = array (
        'name' => 'IMCE-Certs',
        'singular_name' => 'IMCE-Certs',
        'menu_name' => 'IMCE',
    );
    $args = array(
            'label' => 'IMCE-Certs',
            'descripcion' => 'Certificados de usuarios IMCE',
            'labels' => $labels,
            'supports' => array('title', 'editor', 'thumbnail', 'revisions'),
            'public' => true,
            'show_in_menu' => true,
            'menu_position' => 6,
            'menu_icon' => 'dashicons-awards',
            'can_export' => true,
            'publicly_queryable' => true,
            'rewrite' => true,
            'show_in_rest' => true,
            'taxonomies'          => array( 'category' ),
    );
    register_post_type( 'imce', $args );
}

function certificate_miguelsierra(){

    $labels = array (
        'name' => 'MIGUELS-Certs',
        'singular_name' => 'MIGUELS-Certs',
        'menu_name' => 'MIGUELS',
    );
    $args = array(
            'label' => 'MIGUELS-Certs',
            'descripcion' => 'Certificados de usuarios MIGUELS',
            'labels' => $labels,
            'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'custom-fields'),
            'public' => true,
            'show_in_menu' => true,
            'menu_position' => 7,
            'menu_icon' => 'dashicons-awards',
            'can_export' => true,
            'publicly_queryable' => true,
            'rewrite' => true,
            'show_in_rest' => true,
            'taxonomies'          => array( 'category' ),
    );
    register_post_type( 'miguelsierra', $args );
}

function certificate_castudio(){

    $labels = array (
        'name' => 'CASTUDIO-Certs',
        'singular_name' => 'CASTUDIO-Certs',
        'menu_name' => 'CASTUDIO',
    );
    $args = array(
            'label' => 'CASTUDIO-Certs',
            'descripcion' => 'Certificados de usuarios CASTUDIO',
            'labels' => $labels,
            'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'custom-fields'),
            'public' => true,
            'show_in_menu' => true,
            'menu_position' => 8,
            'menu_icon' => 'dashicons-awards',
            'can_export' => true,
            'publicly_queryable' => true,
            'rewrite' => true,
            'show_in_rest' => true,
            'taxonomies'          => array( 'category' ),
    );
    register_post_type( 'castudio', $args );
}

function cursos_colectivo(){

    $labels = array (
        'name' => 'COLECTIVO-Cursos',
        'singular_name' => 'COLECTIVO-Cursos',
        'menu_name' => 'COLECTIVO',
    );
    $args = array(
            'label' => 'COLECTIVO-Cursos',
            'descripcion' => 'Cursos de usuarios COLECTIVO',
            'labels' => $labels,
            'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'custom-fields'),
            'public' => true,
            'show_in_menu' => true,
            'menu_position' => 9,
            'menu_icon' => 'dashicons-category',
            'can_export' => true,
            'publicly_queryable' => true,
            'rewrite' => true,
            'show_in_rest' => true,
            'taxonomies'          => array( 'category' ),
    );
    register_post_type( 'cursoscolectivo', $args );
}

function cursos_castudio(){
    $labels = array (
        'name' => 'CASTUDIO-Cursos',
        'singular_name' => 'CASTUDIO-Curso',
        'menu_name' => 'CASTUDIO',
    );
    $args = array(
            'label' => 'CASTUDIO-Cursos',
            'descripcion' => 'Cursos de usuarios CASTUDIO',
            'labels' => $labels,
            'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'custom-fields'),
            'public' => true,
            'show_in_menu' => true,
            'menu_position' => 10,
            'menu_icon' => 'dashicons-category',
            'can_export' => true,
            'publicly_queryable' => true,
            'rewrite' => true,
            'show_in_rest' => true,
            'taxonomies'          => array( 'category' ),
    );
    register_post_type( 'cursoscastudio', $args );
}
function cursos_wiad(){
    $labels = array (
        'name' => 'WIAD-Cursos',
        'singular_name' => 'WIAD-Curso',
        'menu_name' => 'WIAD',
    );
    $args = array(
            'label' => 'WIAD-Cursos',
            'descripcion' => 'Cursos de usuarios WIAD',
            'labels' => $labels,
            'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'custom-fields'),
            'public' => true,
            'show_in_menu' => true,
            'menu_position' => 11,
            'menu_icon' => 'dashicons-category',
            'can_export' => true,
            'publicly_queryable' => true,
            'rewrite' => true,
            'show_in_rest' => true,
            'taxonomies'          => array( 'category' ),
    );
    register_post_type( 'cursoswiad', $args );
}
function cursos_usach(){
    $labels = array (
        'name' => 'USACH-Cursos',
        'singular_name' => 'USACH-Curso',
        'menu_name' => 'USACH',
    );
    $args = array(
            'label' => 'USACH-Cursos',
            'descripcion' => 'Cursos de usuarios USACH',
            'labels' => $labels,
            'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'custom-fields'),
            'public' => true,
            'show_in_menu' => true,
            'menu_position' => 12,
            'menu_icon' => 'dashicons-category',
            'can_export' => true,
            'publicly_queryable' => true,
            'rewrite' => true,
            'show_in_rest' => true,
            'taxonomies'          => array( 'category' ),
    );
    register_post_type( 'cursosusach', $args );
}
function cursos_imce(){
    $labels = array (
        'name' => 'IMCE-Cursos',
        'singular_name' => 'IMCE-Curso',
        'menu_name' => 'IMCE',
    );
    $args = array(
            'label' => 'IMCE-Cursos',
            'descripcion' => 'Cursos de usuarios IMCE',
            'labels' => $labels,
            'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'custom-fields'),
            'public' => true,
            'show_in_menu' => true,
            'menu_position' => 13,
            'menu_icon' => 'dashicons-category',
            'can_export' => true,
            'publicly_queryable' => true,
            'rewrite' => true,
            'show_in_rest' => true,
            'taxonomies'          => array( 'category' ),
    );
    register_post_type( 'cursosimce', $args );
}
function cursos_miguels(){
    $labels = array (
        'name' => 'MIGUELS-Cursos',
        'singular_name' => 'MIGUELS-Curso',
        'menu_name' => 'MIGUELS',
    );
    $args = array(
            'label' => 'MIGUELS-Cursos',
            'descripcion' => 'Cursos de usuarios MIGUELS',
            'labels' => $labels,
            'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'custom-fields'),
            'public' => true,
            'show_in_menu' => true,
            'menu_position' => 14,
            'menu_icon' => 'dashicons-category',
            'can_export' => true,
            'publicly_queryable' => true,
            'rewrite' => true,
            'show_in_rest' => true,
            'taxonomies'          => array( 'category' ),
    );
    register_post_type( 'cursosmiguels', $args );
}
function cursos_proyetech(){
    $labels = array (
        'name' => 'PROYECTECH-Cursos',
        'singular_name' => 'PROYECTECH-Curso',
        'menu_name' => 'PROYECTECH',
    );
    $args = array(
            'label' => 'PROYECTECH-Cursos',
            'descripcion' => 'Cursos de usuarios PROYECTECH',
            'labels' => $labels,
            'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'custom-fields'),
            'public' => true,
            'show_in_menu' => true,
            'menu_position' => 15,
            'menu_icon' => 'dashicons-category',
            'can_export' => true,
            'publicly_queryable' => true,
            'rewrite' => true,
            'show_in_rest' => true,
            'taxonomies'          => array( 'category' ),
    );
    register_post_type( 'cursosproyetech', $args );
}

function certificate_colectivo(){

    $labels = array (
        'name' => 'COLECTIVO-Certs',
        'singular_name' => 'COLECTIVO-Certs',
        'menu_name' => 'COLECTIVO',
    );
    $args = array(
            'label' => 'COLECTIVO-Certs',
            'descripcion' => 'Certificados de usuarios COLECTIVO',
            'labels' => $labels,
            'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'custom-fields'),
            'public' => true,
            'show_in_menu' => true,
            'menu_position' => 16,
            'menu_icon' => 'dashicons-awards',
            'can_export' => true,
            'publicly_queryable' => true,
            'rewrite' => true,
            'show_in_rest' => true,
            'taxonomies'          => array( 'category' ),
    );
    register_post_type( 'colectivo23', $args );
}

function certificate_giulianahuaman(){

    $labels = array (
        'name' => 'GIULIANAH-Certs',
        'singular_name' => 'GIULIANAH-Certs',
        'menu_name' => 'GIULIANAH',
    );
    $args = array(
            'label' => 'GIULIANAH-Certs',
            'descripcion' => 'Certificados de usuarios GIULIANAH',
            'labels' => $labels,
            'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'custom-fields'),
            'public' => true,
            'show_in_menu' => true,
            'menu_position' => 17,
            'menu_icon' => 'dashicons-awards',
            'can_export' => true,
            'publicly_queryable' => true,
            'rewrite' => true,
            'show_in_rest' => true,
            'taxonomies'          => array( 'category' ),
    );
    register_post_type( 'giulianahuaman', $args );
}

function certificate_claudiapeve(){

    $labels = array (
        'name' => 'CLAUDIAPEVE-Certs',
        'singular_name' => 'CLAUDIAPEVE-Certs',
        'menu_name' => 'CLAUDIAPEVE',
    );
    $args = array(
            'label' => 'CLAUDIAPEVE-Certs',
            'descripcion' => 'Certificados de usuarios CLAUDIAPEVE',
            'labels' => $labels,
            'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'custom-fields'),
            'public' => true,
            'show_in_menu' => true,
            'menu_position' => 18,
            'menu_icon' => 'dashicons-awards',
            'can_export' => true,
            'publicly_queryable' => true,
            'rewrite' => true,
            'show_in_rest' => true,
            'taxonomies'          => array( 'category' ),
    );
    register_post_type( 'claudiapeve', $args );
}
function cursos_claudiapeve(){
    $labels = array (
        'name' => 'CLAUDIAPEVE-Cursos',
        'singular_name' => 'CLAUDIAPEVE-Curso',
        'menu_name' => 'CLAUDIAPEVE',
    );
    $args = array(
            'label' => 'CLAUDIAPEVE-Cursos',
            'descripcion' => 'Cursos de usuarios CLAUDIAPEVE',
            'labels' => $labels,
            'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'custom-fields'),
            'public' => true,
            'show_in_menu' => true,
            'menu_position' => 19,
            'menu_icon' => 'dashicons-category',
            'can_export' => true,
            'publicly_queryable' => true,
            'rewrite' => true,
            'show_in_rest' => true,
            'taxonomies'          => array( 'category' ),
    );
    register_post_type( 'cursosclaudiapeve', $args );
}
function badge_colectivo23(){
    $labels = array (
        'name' => 'colectivo23-badge',
        'singular_name' => 'colectivo23-badge',
        'menu_name' => 'colectivo23b',
    );
    $args = array(
            'label' => 'colectivo23-badge',
            'descripcion' => 'Badges colectivo23',
            'labels' => $labels,
            'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'custom-fields'),
            'public' => true,
            'show_in_menu' => true,
            'menu_position' => 20,
            'menu_icon' => 'dashicons-category',
            'can_export' => true,
            'publicly_queryable' => true,
            'rewrite' => true,
            'show_in_rest' => true,
            'taxonomies'          => array( 'category' ),
    );
    register_post_type( 'badgecolectivo23', $args );
}
function badge_castudio(){
    $labels = array (
        'name' => 'castudio-badge',
        'singular_name' => 'castudio-badge',
        'menu_name' => 'castudiob',
    );
    $args = array(
            'label' => 'castudio-badge',
            'descripcion' => 'Badges castudio',
            'labels' => $labels,
            'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'custom-fields'),
            'public' => true,
            'show_in_menu' => true,
            'menu_position' => 21,
            'menu_icon' => 'dashicons-category',
            'can_export' => true,
            'publicly_queryable' => true,
            'rewrite' => true,
            'show_in_rest' => true,
            'taxonomies'          => array( 'category' ),
    );
    register_post_type( 'badgecastudio', $args );
}
function badge_proyetech(){
    $labels = array (
        'name' => 'proyetech-badge',
        'singular_name' => 'proyetech-badge',
        'menu_name' => 'proyetechb',
    );
    $args = array(
            'label' => 'proyetech-badge',
            'descripcion' => 'Badges proyetech',
            'labels' => $labels,
            'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'custom-fields'),
            'public' => true,
            'show_in_menu' => true,
            'menu_position' => 22,
            'menu_icon' => 'dashicons-category',
            'can_export' => true,
            'publicly_queryable' => true,
            'rewrite' => true,
            'show_in_rest' => true,
            'taxonomies'          => array( 'category' ),
    );
    register_post_type( 'badgeproyetech', $args );
}

function certificate_agilewise(){

    $labels = array (
        'name' => 'AGILEWISE-Certs',
        'singular_name' => 'AGILEWISE-Cert',
        'menu_name' => 'AGILEWISE',
    );
    $args = array(
            'label' => 'AGILEWISE-Certs',
            'descripcion' => 'Certificados de usuarios AGILEWISE',
            'labels' => $labels,
            'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'custom-fields'),
            'public' => true,
            'show_in_menu' => true,
            'menu_position' => 23,
            'menu_icon' => 'dashicons-awards',
            'can_export' => true,
            'publicly_queryable' => true,
            'rewrite' => true,
            'show_in_rest' => true,
            'taxonomies'          => array( 'category' ),
    );
    register_post_type( 'agilewise', $args );
}
function cursos_agilewise(){
    $labels = array (
        'name' => 'AGILEWISE-Cursos',
        'singular_name' => 'AGILEWISE-Curso',
        'menu_name' => 'AGILEWISE',
    );
    $args = array(
            'label' => 'AGILEWISE-Cursos',
            'descripcion' => 'Cursos de usuarios AGILEWISE',
            'labels' => $labels,
            'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'custom-fields'),
            'public' => true,
            'show_in_menu' => true,
            'menu_position' => 24,
            'menu_icon' => 'dashicons-category',
            'can_export' => true,
            'publicly_queryable' => true,
            'rewrite' => true,
            'show_in_rest' => true,
            'taxonomies'          => array( 'category' ),
    );
    register_post_type( 'cursosagilewise', $args );
}

add_action( 'init', 'cursos_proyetech');
add_action( 'init', 'cursos_miguels');
add_action( 'init', 'cursos_imce');
add_action( 'init', 'cursos_usach');
add_action( 'init', 'cursos_wiad');
add_action( 'init', 'cursos_castudio');
add_action( 'init', 'cursos_colectivo');
add_action( 'init', 'cursos_claudiapeve');
add_action( 'init', 'certificate_colectivo');
add_action( 'init', 'certificate_castudio');
add_action( 'init', 'certificate_miguelsierra');
add_action( 'init', 'certificate_proyetech');
add_action( 'init', 'certificate_imce');
add_action( 'init', 'certificate_giulianahuaman');
add_action( 'init', 'certificate_claudiapeve');
add_action( 'init', 'badge_colectivo23');
add_action( 'init', 'badge_castudio');
add_action( 'init', 'badge_proyetech');
add_action( 'init', 'certificate_agilewise');
add_action( 'init', 'cursos_agilewise');

/* PRUEBAS FORM post
<?php
/**
* Función para capturar los valores enviados a través del formulario
* de Contact Form 7 y guardarlos como registros del Custom Post Type "Postulante"
*
* @param $wpcf7
* @return void
*/
function guardar_postulante_por_cf7( $wpcf7 ) {
$submission = WPCF7_Submission::get_instance();
// En caso de que no haya valores salgo de la función
if( empty( $submission ) ) return;
/*
* Para recuperar todos los valores del formulario debemos
* llamar a la función get_post_data del plugin CF7.
*/
$formulario = array();
$formulario['posted_data'] = $submission->get_posted_data();
$upload= $_FILES['file-142']; 
$upload2= $_FILES['file-lista'];
// $ini='<h2>Fecha de emisión:</h2></br>';
// $fechadeform=$formulario['posted_data']['date-emision'];
// $contentFinal=$ini.$fechadeform;


                $postulante_id = wp_insert_post( array(
                    'post_title' => $formulario['posted_data']['codigo-curso'],
                    'post_content' =>  $formulario['posted_data']['description-curso'],
                    'post_status' => 'publish', // Indicamos que el postulante está publicado
                    'post_type' =>  $formulario['posted_data']['text-validate'] //Importante especificar que este post es del tipo "Postulante"
                    ) );

                    if( ! is_wp_error( $postulante_id ) ) {
                    require_once( ABSPATH . 'wp-admin/includes/image.php' );
                    require_once( ABSPATH . 'wp-admin/includes/file.php' );
                    require_once( ABSPATH . 'wp-admin/includes/media.php' );
                    $imagen_id = media_handle_upload($upload,$postulante_id);
                    $imagen_id2 = media_handle_upload($upload2,$postulante_id);

                    }
                    /*
                    * Si no hubo ningún error guardando el postulante
                    * podemos guardar su email en un campo post_meta.
                    */
                    if( ! is_wp_error( $postulante_id ) ) {
                    update_field( 'fechaemision', $formulario['posted_data']['date-emision'], $postulante_id );
                    update_field( 'urlvideo', $formulario['posted_data']['url-video'], $postulante_id );
                    update_field( 'urlboton', $formulario['posted_data']['url-boton'], $postulante_id );
                    update_field( 'nombrecurso', $formulario['posted_data']['nombre-curso'], $postulante_id );
                                $memberID = get_current_user_id();
                                $memberInfo = get_userdata($memberID);
                                $memberName = $memberInfo->user_email;
                    add_post_meta( $postulante_id, 'mgp_email', $memberName);
                    update_post_meta( $postulante_id, '_thumbnail_id', 773 );
                    }




                
}
add_action('wpcf7_before_send_mail', 'guardar_postulante_por_cf7' ); 

 
/*reenvio de correos al crear curso o lista*/

function mp_get_member_level(){

  // Get current user's ID
  $memberID = get_current_user_id();

  if( $memberID != 0 ):

    // Get member's info
    $memberInfo = get_userdata($memberID);
    $memberName = date_i18n( __( 'l jS \o\f F Y', 'textdomain' ) );
    if(empty($memberName)):
      $memberName = 'sin fecha';
    endif;

    // web referencia .https://silicodevalley.com/como-agregar-campos-personalizados-en-el-plugin-contact-form-7/
    
    $output = array(      
      'member_level' => $memberName
    );

    return $output;

  else:
    return; // User is not logged in
  endif;
}
/*creando el shortcode para agregar campo oculto*/
add_action( 'wpcf7_init', 'mp_cf7_custom_shortcode' );

function mp_cf7_custom_shortcode(){
  wpcf7_add_form_tag( 'show_member_level*', 'cf7_get_member_level' );
}

function cf7_get_member_level(){
  $memberLevel = mp_get_member_level();
  if(empty($memberLevel)):
    $value = 0;
  else:
    $value = $memberLevel['member_level'];
  endif;
  return '<input type="hidden" name="member-level" value="'. $value .'" />';
}
/* funcion para habilitar los parametros por url */
function add_custom_query_var( $vars ){
  $vars[] = "idcat";
  $vars[] = "empresa";
  $vars[] = "curso";
  return $vars;
}
add_filter( 'query_vars', 'add_custom_query_var' );

/* funcion para ingresar lista de curso */

function redirect($url){
    $string = '<script type="text/javascript">';
    $string .= 'window.location = "' . $url . '"';
    $string .= '</script>';
    echo $string;
}
add_action( 'admin_post_add_lista', 'prefix_admin_add_lista' );
 
//this next action version allows users not logged in to submit requests
//if you want to have both logged in and not logged in users submitting, you have to add both actions!
//add_action( 'admin_post_nopriv_add_foobar', 'prefix_admin_add_foobar' );
 
function prefix_admin_add_lista() {
    //  $user = wp_get_current_user();
    //  $arg = array( 'description' => "categoria de lista", 'parent' => 0 );
    //  $cat_ID = wp_insert_term($_REQUEST['name'], "category", $arg);
    // $namelista  = sanitize_text_field( $_REQUEST['namelista'] );
    // $nameempresa  = sanitize_text_field( $_REQUEST['empresa'] );
    // $namecurso  = sanitize_text_field( $_REQUEST['curso'] );
    // $duracionlista = sanitize_text_field( $_REQUEST['duracionlista'] );
    // $idcat = $_REQUEST['idcat'];
    // $fechalista = $_REQUEST['fechalista'];
    // $uploadlista = $_REQUEST['uploadlista'];
    // $correoinstitucional = $_REQUEST['correoinstitucional'];
    // $memberemail = $_REQUEST['memberemail'];


     $lista_id = wp_insert_post( array(
                     'post_title' => $_REQUEST['namelista'],
                     'post_content' =>  $_REQUEST['idcat'],
                     'post_status' => 'publish', // Indicamos que el postulante está publicado
                     'post_type' =>  'listagraduados', //Importante especificar que este post es del tipo "Postulante"
                    // 'post_author' => $user->ID,
                     'tax_input' => array( 'category' => $_REQUEST['idcat'])
                   
                    ) );
    // if( ! is_wp_error( $lista_id ) ) {
    //                 update_field( 'fechalista', $_REQUEST['fechalista'], $lista_id );
    //                 update_field( 'duracionlista', $_REQUEST['duracionlista'], $lista_id );
    //                 update_field( 'namecurso', $_REQUEST['curso'], $lista_id );
    //                 update_field( 'nameempresa', $_REQUEST['empresa'], $lista_id );
                     
    //                 };
//     if ( $lista_id  ) {

//     $to = "$correoinstitucional,$memberemail";

//     $subject = 'Se envió con éxito la lista '$namelista'!';

//     // Build the body based on your form...
//     // $name  = sanitize_text_field( $_REQUEST['namelista'] );
//     // $email = sanitize_email( $_REQUEST['emaillista'] );
//     // $body  = sanitize_textarea( $_REQUEST['curso'] );
//     $cabeceras= array('Content-Type: text/html; charset=UTF-8');
//     $message = "<h4>Hola Colectivo23,</h4> \r\n\r\n";
//     $message.= "<p>Te confirmamos que hemos recibido tu solicitud de creación de una nueva emisión de certificados con el siguiente detalle:</p>  \r\n";
//     $message.= "<ul>
//  	<li><strong>Nombre del curso publicado en el certificado:</strong> <em>'$namecurso'</em></li>
//  	<li><strong>Nombre de la lista:</strong> <em>'$namelista'</em></li>
//  	<li><strong>Fecha emisión a publicarse en el certificado:</strong> <em>'$fechalista'</em></li>
//  	<li><strong>Correo en copia para el envío de certificados:</strong> <a  target="_blank" rel="noopener"><em>'$memberemail'</em></a></li>
//  	<li><strong>Lista de beneficiarios:</strong> <a href='"$uploadlista"' target="_blank" rel="noopener"><em>enlace aquí</em></a></li>
// </ul> \r\rn";
//     $message.= "Gracias por tu solicitud, esta es una copia auto-generada para tu conocimiento, no es necesario que respondas a la misma. \r\n";
//     $message.= "<div></div><div>Saludos,</div><div></div><h3><i>Equipo de Ayuda de aCredu</i></h3>";

//     // Send the message...
//     wp_mail( $to, $subject, $message, $cabeceras );

//     };

    redirect ('https://acredu.app/dashboard/');
}


?>

