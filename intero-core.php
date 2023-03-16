<?php
/**
 * Plugin Name: Intero Core
 * Description: Develop By Intero Developers
 * Version:     1.0.0
 * Author:      Awal Bashar
 * Author URI:  bashar0091.github.io/awalbasharofficial/
 * Text Domain: intero
 */


// helper function call here 
require_once('helper-function.php');



// elementor widget register here 
function register_intero_custom_widget( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/intero-product-single-widget.php' );

	$widgets_manager->register( new \intero_product_single_widget() );

}
add_action( 'elementor/widgets/register', 'register_intero_custom_widget' );