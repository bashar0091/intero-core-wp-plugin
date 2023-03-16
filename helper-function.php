<?php
// helper function file that include all the common code 


// css and js file include 
function my_plugin_enqueue_styles() {

    // css file include here 
    wp_enqueue_style( 'intero-custom', plugin_dir_url( __FILE__ ) . 'assets/css/custom.css' );
}
add_action( 'wp_enqueue_scripts', 'my_plugin_enqueue_styles' );