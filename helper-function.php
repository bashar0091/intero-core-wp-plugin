<?php
// helper function file that include all the common code 


// extra field include 
require_once('inc/woocommerce-product-extra-field.php');

// css and js file include 
function my_plugin_enqueue_styles() {

    // css file include here 
    wp_enqueue_style( 'lightbox-style', plugin_dir_url( __FILE__ ) . 'assets/css/lightbox.min.css' );
    wp_enqueue_style( 'intero-custom', plugin_dir_url( __FILE__ ) . 'assets/css/custom.css' );

    //js file include here
    wp_enqueue_script( 'lightbox-script', plugin_dir_url( __FILE__ ) . 'assets/js/lightbox.min.js',  array('jquery'), '', true );
    wp_enqueue_script( 'intero-custom-js', plugin_dir_url( __FILE__ ) . 'assets/js/custom.js',  array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts', 'my_plugin_enqueue_styles' );
