<?php
// helper function file that include all the common code 

// ajax handler include 
require_once('inc/woocommerce-product-ajax-handler.php');

// dashboard Menu
require_once('inc/admin/admin-options.php');

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


// required plugin admin notice
add_action( 'admin_notices', 'inter_required_notice' );
function inter_required_notice() {
    if ( ! function_exists( 'elementor_load_plugin_textdomain' ) ) {
        ?>
        <div class="notice notice-error">
            <p><?php esc_html_e( ' "Elementor Input Fields+ for WooCommerce" Plugin requires Elementor to be installed and activated. Please install and activate Elementor.', 'intero' ); ?></p>
            <p><a href="<?php echo esc_url( wp_nonce_url( self_admin_url( 'update.php?action=install-plugin&plugin=elementor' ), 'install-plugin_elementor' ) ); ?>" class="button button-primary"><?php esc_html_e( 'Install Elementor', 'intero' ); ?></a></p>
        </div>
        <?php
    }
}
