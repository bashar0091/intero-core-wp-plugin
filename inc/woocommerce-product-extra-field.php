<?php

// woocommerce product extra field data added and fetch 

// Add custom field data to the cart item
function add_custom_field_data_to_cart_item($cart_item_data, $product_id) {
    if(isset($_POST['input1'])) {
        $cart_item_data['input1'] = $_POST['input1'];
    }

    if(isset($_POST['input1'])) {
        $cart_item_data['input1'] = $_POST['input1'];
    }

    if(isset($_POST['input2'])) {
        $cart_item_data['input2'] = $_POST['input2'];
    }

    if(isset($_POST['input3'])) {
        $cart_item_data['input3'] = $_POST['input3'];
    }

    if(isset($_POST['input4'])) {
        $cart_item_data['input4'] = $_POST['input4'];
    }

    if(isset($_POST['input5'])) {
        $cart_item_data['input5'] = $_POST['input5'];
    }

    if(isset($_POST['input6'])) {
        $cart_item_data['input6'] = $_POST['input6'];
    }

    if(isset($_POST['input7'])) {
        $cart_item_data['input7'] = $_POST['input7'];
    }

    if(isset($_POST['input8'])) {
        $cart_item_data['input8'] = $_POST['input8'];
    }

    if(isset($_POST['input9'])) {
        $cart_item_data['input9'] = $_POST['input9'];
    }

    if(isset($_POST['input10'])) {
        $cart_item_data['input10'] = $_POST['input10'];
    }
    return $cart_item_data;
}
add_filter('woocommerce_add_cart_item_data', 'add_custom_field_data_to_cart_item', 10, 2);

// Display custom field data in the cart and checkout pages
function display_custom_field_data_in_cart_and_checkout($item_data, $cart_item) {
    if(isset($cart_item['input1'])) {
        $item_data[] = array(
            'name' => __('Patalpų plotas m2', 'intero'),
            'value' => $cart_item['input1'],
        );
    }

    if(isset($cart_item['input2'])) {
        $item_data[] = array(
            'name' => __('Patalpų skaičius', 'intero'),
            'value' => $cart_item['input2'],
        );
    }

    if(isset($cart_item['input3'])) {
        $item_data[] = array(
            'name' => __('Esamas pagrindas', 'intero'),
            'value' => $cart_item['input3'],
        );
    }

    if(isset($cart_item['input4'])) {
        $item_data[] = array(
            'name' => __('Vardas', 'intero'),
            'value' => $cart_item['input4'],
        );
    }

    if(isset($cart_item['input5'])) {
        $item_data[] = array(
            'name' => __('Pavardė', 'intero'),
            'value' => $cart_item['input5'],
        );
    }

    if(isset($cart_item['input6'])) {
        $item_data[] = array(
            'name' => __('Adresas', 'intero'),
            'value' => $cart_item['input6'],
        );
    }

    if(isset($cart_item['input7'])) {
        $item_data[] = array(
            'name' => __('Miestas', 'intero'),
            'value' => $cart_item['input7'],
        );
    }

    if(isset($cart_item['input8'])) {
        $item_data[] = array(
            'name' => __('Telefonas', 'intero'),
            'value' => $cart_item['input8'],
        );
    }

    if(isset($cart_item['input9'])) {
        $item_data[] = array(
            'name' => __('El. Pastas', 'intero'),
            'value' => $cart_item['input9'],
        );
    }

    if(isset($cart_item['input10'])) {
        $item_data[] = array(
            'name' => __('Pastabos', 'intero'),
            'value' => $cart_item['input10'],
        );
    }
    return $item_data;
}
add_filter('woocommerce_get_item_data', 'display_custom_field_data_in_cart_and_checkout', 10, 2);

// Save custom field data to the order
function save_custom_field_data_to_order($item_id, $item, $order_id) {
    if(isset($item['input1'])) {
        wc_add_order_item_meta($item_id, __('Patalpų plotas m2', 'intero'), $item['input1']);
    }

    if(isset($item['input2'])) {
        wc_add_order_item_meta($item_id, __('Patalpų skaičius', 'intero'), $item['input2']);
    }

    if(isset($item['input3'])) {
        wc_add_order_item_meta($item_id, __('Esamas pagrindas', 'intero'), $item['input3']);
    }

    if(isset($item['input4'])) {
        wc_add_order_item_meta($item_id, __('Vardas', 'intero'), $item['input4']);
    }

    if(isset($item['input5'])) {
        wc_add_order_item_meta($item_id, __('Pavardė', 'intero'), $item['input5']);
    }

    if(isset($item['input6'])) {
        wc_add_order_item_meta($item_id, __('Adresas', 'intero'), $item['input6']);
    }

    if(isset($item['input7'])) {
        wc_add_order_item_meta($item_id, __('Miestas', 'intero'), $item['input7']);
    }

    if(isset($item['input8'])) {
        wc_add_order_item_meta($item_id, __('Telefonas', 'intero'), $item['input8']);
    }

    if(isset($item['input9'])) {
        wc_add_order_item_meta($item_id, __('El. Pastas', 'intero'), $item['input9']);
    }

    if(isset($item['input10'])) {
        wc_add_order_item_meta($item_id, __('Pastabos', 'intero'), $item['input10']);
    }
}
add_action('woocommerce_add_order_item_meta', 'save_custom_field_data_to_order', 10, 3);
