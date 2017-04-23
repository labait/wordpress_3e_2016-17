<?php
function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();

  wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );

  wp_enqueue_style( 'freelancer-styles', get_stylesheet_directory_uri() . '/css/freelancer.css', array(), $the_theme->get( 'Version' ) );
  wp_enqueue_style( 'custom-styles', get_stylesheet_directory_uri() . '/css/custom.css', array(), $the_theme->get( 'Version' ) );

  wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );

  wp_enqueue_script( 'freelancer-scripts', get_stylesheet_directory_uri() . '/js/freelancer.js', array(), $the_theme->get( 'Version' ), true );
  wp_enqueue_script( 'jqBootstrapValidation-scripts', get_stylesheet_directory_uri() . '/js/jqBootstrapValidation.js', array(), $the_theme->get( 'Version' ), true );


}
