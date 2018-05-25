<?php
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

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
if ( ! isset( $content_width ) ) $content_width = 900;

require get_template_directory(). '/inc/customizer.php';