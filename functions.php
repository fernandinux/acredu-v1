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
    );
    register_post_type( 'castudio', $args );
}

add_action( 'init', 'certificate_castudio');
add_action( 'init', 'certificate_miguelsierra');
add_action( 'init', 'certificate_proyetech');
add_action( 'init', 'certificate_imce');



 

// TEST PORTUGUES 

function cpt_save_cf7( $wpcf7 ) {
  $submission = WPCF7_Submission::get_instance();
  // Caso não haja valores deixo a função
  if( empty( $submission ) ) return;
  /*
    * Para recuperar todos os valores de formulário, devemos
    * chame a função get_post_data do plugin CF7.
   */
  $formulario = array();
  $formulario['posted_data'] = $submission->get_posted_data();
  // String do content, ele tem o estilo do visual composer.
  $text = "[vc_row][vc_column width='4/12']<img src='http://localhost/wordpress/wp-content/uploads/wpcf7-submissions/".$formulario['posted_data']['your-photo']."' >[/vc_column][vc_column width='8/12'][vc_custom_heading text='".$formulario['posted_data']['your-name']."'][vc_custom_heading text='CRM ".$formulario['posted_data']['your-crm']."'][vc_column_text]".$formulario['posted_data']['your-message']."[/vc_column_text][/vc_column][/vc_row]";
  $postulante_id = wp_insert_post( array(
    'post_title'    => $formulario['posted_data']['your-name'],
    'post_content'  => $text,
    'post_status'   => 'pending',   // Nós indicamos que o o status do post, neste caso ele esta PENDENTE
    'post_type'     => 'proyetech'     // Importante especificar o nome do POST_TYPE, por exemplo perfil
  ) );
  /*
    * Se não houve erro em manter o POST_TYPE
    * Podemos salvar seu email em um campo post_meta.
   */
  if( ! is_wp_error( $postulante_id ) ) {
    add_post_meta( $postulante_id, 'mgp_email', $formulario['posted_data']['your-email'] );
  }
}
add_action('wpcf7_before_send_mail', 'cpt_save_cf7' );

// END TEST PORTUGUES 
?>