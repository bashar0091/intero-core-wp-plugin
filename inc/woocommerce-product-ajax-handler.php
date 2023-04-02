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
        $showFirstName = $variations[0]['attributes'];
        $showFirstName1 = ''; 
        foreach ($showFirstName as $key => $value) {
			$taxonomy = str_replace('attribute_', '', $key);
			$term = get_term_by('slug', $value, $taxonomy);
			$showFirstName1 =  $term->name;
		}
        $showFirstID = $variations[0]['variation_id']; 

        echo json_encode(
            array(
                'printFirstPrice' => $showFirstPrice,
                'printFirstRegularPrice' => $showFirstRegularPrice,
                'printFirstImg' => $showFirstImg,
                'printFirstName' => $showFirstName1,
                'product_variation' => $variations,
                'printFirstID' => $showFirstID,
            ),
        );
    }

    wp_die();
}