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
            'supports' => array('title', 'editor', 'thumbnail', 'revisions'),
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


add_action( 'init', 'certificate_miguelsierra');
add_action( 'init', 'certificate_proyetech');
add_action( 'init', 'certificate_imce');

?>

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


	$postulante_id = wp_insert_post( array(

		'post_title'    => $formulario['posted_data']['nombre-postulante'],
        'post_content'  => $formulario['posted_data']['cv-postulante'],
        'perfilrol'  => $formulario['posted_data']['cv-postulante'],
		'post_status'   => 'publish',       // Indicamos que el postulante está publicado
		'post_type'     => 'miguelsierra'     // Importante especificar que este post es del tipo "Postulante"

	) );

	/*
	 * Si no hubo ningún error guardando el postulante
	 * podemos guardar su email en un campo post_meta.
	 */
	if( ! is_wp_error( $postulante_id ) ) {

		add_post_meta( $postulante_id, 'mgp_email', $formulario['posted_data']['email-postulante'] );

	}

}
add_action('wpcf7_before_send_mail', 'guardar_postulante_por_cf7' );