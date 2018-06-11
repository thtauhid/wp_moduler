<?php
require_once get_template_directory() . '/assets/classes/class-wp-bootstrap-navwalker.php';

register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'moduler' ),
) );

//Excerpt Length
function excerpt_length()	{
	return 20;
}

add_filter('excerpt_length', 'excerpt_length');
add_theme_support('post-thumbnails');
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'title-tag' );

if ( ! isset( $content_width ) ) {
	$content_width = 650;
}

require get_template_directory(). '/inc/customizer.php';


function moduler_add_bootstrap() {

	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.js' );
	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );

}

add_action( 'wp_enqueue_scripts', 'moduler_add_bootstrap');

function moduler_add_fontawesome() {

	wp_enqueue_style( 'fontawesome_css', get_template_directory_uri() . '/assets/fontawesome/css/fontawesome-all.min.css' );

}

add_action( 'wp_enqueue_scripts', 'moduler_add_fontawesome');