<?php

//custom background
function true_custom_background_support(){
	add_theme_support( 'custom-background' );
}
add_action('after_setup_theme', 'true_custom_background_support');

//custom logo
function 	alfresco_custom_logo_setup() {
    $defaults = array(
        'height'      => 63,
        'width'       => 63,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'alfresco_custom_logo_setup' );

//custom menu
function wpb_custom_new_menu() {
  register_nav_menu('custom-menu',__( 'custom-menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );

//custom mobile menu 
function extra_setup() {
	register_nav_menu ('primary mobile', __( 'Navigation Mobile' ));
}
add_action( 'after_setup_theme', 'extra_setup' );

//custom side-menu
function wpb_custom_new_side_menu() {
  register_nav_menu('custom-side-menu',__( 'custom-side-menu' ));
}
add_action( 'init', 'wpb_custom_new_side_menu' );

?>