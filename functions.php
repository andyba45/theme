<?php
require_once('wp_bootstrap_navwalker.php');


function wpbootstrap_scripts_with_jquery() {
    
    // Register the script like this for a theme:

    wp_register_script('custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array('jquery'));
    wp_register_script('carousel-script', get_template_directory_uri() . '/bootstrap/js/bootstrap-carousel.js', array('jquery'));
    wp_register_script('dropdown-script', get_template_directory_uri() . '/bootstrap/js/bootstrap-dropdown.js', array('jquery'));
    // For either a plugin or a theme, you can then enqueue the script:

    wp_enqueue_script('custom-script');
    wp_enqueue_script('carousel-script');
    wp_enqueue_script('dropdown-script');
}

add_action('wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery');


if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

//Modify the length of the_excerpt
function new_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'new_excerpt_length');

?>
