<?php

// woocommerce product extra field data added and fetch 

// Add custom field data to the cart item
function add_custom_field_data_to_cart_item($cart_item_data, $product_id) {
    // product width
    if(isset($_POST['intero_product_width'])) {
        $cart_item_data['intero_product_width'] = $_POST['intero_product_width'];
    }

    // fabric width
    if(isset($_POST['intero_fabric_width'])) {
        $cart_item_data['intero_fabric_width'] = $_POST['intero_fabric_width'];
    }

    // product height
    if(isset($_POST['intero_product_height'])) {
        $cart_item_data['intero_product_height'] = $_POST['intero_product_height'];
    }

    // fabric height
    if(isset($_POST['intero_fabric_height'])) {
        $cart_item_data['intero_fabric_height'] = $_POST['intero_fabric_height'];
    }

    // mechanism color
    if(isset($_POST['intero_mechanism_color'])) {
        $cart_item_data['intero_mechanism_color'] = $_POST['intero_mechanism_color'];
    }
    return $cart_item_data;
}
add_filter('woocommerce_add_cart_item_data', 'add_custom_field_data_to_cart_item', 10, 2);

// Display custom field data in the cart and checkout pages
function display_custom_field_data_in_cart_and_checkout($item_data, $cart_item) {
    // product width
    if(isset($cart_item['intero_product_width'])) {
        $item_data[] = array(
            'name' => __('Product Width', 'intero'),
            'value' => $cart_item['intero_product_width'],
        );
    }

    // fabric width
    if(isset($cart_item['intero_fabric_width'])) {
        $item_data[] = array(
            'name' => __('Fabric Width', 'intero'),
            'value' => $cart_item['intero_fabric_width'],
        );
    }

    // product height
    if(isset($cart_item['intero_product_height'])) {
        $item_data[] = array(
            'name' => __('Product Height', 'intero'),
            'value' => $cart_item['intero_product_height'],
        );
    }

    // fabric height
    if(isset($cart_item['intero_fabric_height'])) {
        $item_data[] = array(
            'name' => __('Fabric Height', 'intero'),
            'value' => $cart_item['intero_fabric_height'],
        );
    }

    // mechanism color
    if(isset($cart_item['intero_mechanism_color'])) {
        $item_data[] = array(
            'name' => __('Mechanism Color', 'intero'),
            'value' => $cart_item['intero_mechanism_color'],
        );
    }
    return $item_data;
}
add_filter('woocommerce_get_item_data', 'display_custom_field_data_in_cart_and_checkout', 10, 2);

// Save custom field data to the order
function save_custom_field_data_to_order($item_id, $item, $order_id) {
    // product width
    if(isset($item['intero_product_width'])) {
        wc_add_order_item_meta($item_id, __('Product Width', 'intero'), $item['intero_product_width']);
    }

    // fabric width
    if(isset($item['intero_fabric_width'])) {
        wc_add_order_item_meta($item_id, __('Fabric Width', 'intero'), $item['intero_fabric_width']);
    }

    // product height
    if(isset($item['intero_product_height'])) {
        wc_add_order_item_meta($item_id, __('Product Height', 'intero'), $item['intero_product_height']);
    }

    // fabric height
    if(isset($item['intero_fabric_height'])) {
        wc_add_order_item_meta($item_id, __('Fabric Height', 'intero'), $item['intero_fabric_height']);
    }

    // mechanism color
    if(isset($item['intero_mechanism_color'])) {
        wc_add_order_item_meta($item_id, __('Mechanism Color', 'intero'), $item['intero_mechanism_color']);
    }
}
add_action('woocommerce_add_order_item_meta', 'save_custom_field_data_to_order', 10, 3);
