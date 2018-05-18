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