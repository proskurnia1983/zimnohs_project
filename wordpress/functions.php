<?php
function ruslans_theme_support() {
	add_theme_support('post-thumbnails');
}
add_action( 'after_setup_theme', 'ruslans_theme_support' );



function ruslans_theme_scripts() {
	wp_enqueue_style( 'style-name', get_stylesheet_uri() );

    
	/*wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );*/
}

add_action( 'wp_enqueue_scripts', 'ruslans_theme_scripts' );

function ruslans_theme_menu() {
	$locations = array(
	'primary' => "desktop menu",
	);
	register_nav_menus($locations);
}

add_action( 'init', 'ruslans_theme_menu' );
?>