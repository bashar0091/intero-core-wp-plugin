<?php
add_action('wp_ajax_my_ajax_action', 'my_ajax_function');
add_action('wp_ajax_nopriv_my_ajax_action', 'my_ajax_function');

function my_ajax_function(){
    $product_id = $_POST['product_id'];

    // Get the product object
    $product = wc_get_product($product_id);

    if( $product->is_type( 'variable' ) ){
        // Get the product variations
        $variations = $product->get_available_variations();
        
        $showFirstPrice = $variations[0]['display_price'];
		$showFirstRegularPrice = $variations[0]['display_regular_price'];
        $showFirstImg = $variations[0]['image']['url']; 
        $showFirstName = $variations[0]['attributes']['attribute_pa_quantity']; 

        echo json_encode(
            array(
                'printFirstPrice' => $showFirstPrice,
                'printFirstRegularPrice' => $showFirstRegularPrice,
                'printFirstImg' => $showFirstImg,
                'printFirstName' => $showFirstName,
                'product_variation' => $variations,
            ),
        );
    }

    wp_die();
}