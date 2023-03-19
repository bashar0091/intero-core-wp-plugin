// color variation choose button active/deactive and btn text changed and image changed
jQuery('.intero-color-variation a').click(function() {
    jQuery('.intero-color-variation > div').removeClass('intero_var_select');
    jQuery(this).parent().addClass('intero_var_select');

    jQuery('.intero_color_choose_text').text('Choose');
    jQuery('.intero_var_select .intero_color_choose_text').text('selected');

    var intero_var_img_get = jQuery('.intero_var_select img').attr('src');
    jQuery('.intero_product_img_thumbnail .intero_product_img').attr('src', intero_var_img_get);
    jQuery('.intero_product_zoom').attr('href', intero_var_img_get);

    jQuery('.intero-product-price').remove();
    jQuery('.intero_small_product img').remove();
    var intero_color_variation_price = jQuery('.intero_var_select .intero_product_price').val();
    var intero_color_variation_price_regular = jQuery('.intero_var_select .intero_product_price_regular').val();
    var intero_color_variation_name = jQuery('.intero_var_select .intero_var_name').text();
    jQuery('.intero_product_img_thumbnail').append(`
    <div class="intero-product-price">
        <h4>${intero_color_variation_name}</h4>
        <h2>
            <span>${intero_color_variation_price}$</span>
            <del>${intero_color_variation_price_regular}$</del></sub>
        </h2>
    </div>
    `);

    jQuery('.intero_small_product').prepend(`<img src="${intero_var_img_get}" alt="product-image">`);
    jQuery('.intero_small_product span').text(intero_color_variation_name);
});


// product image light box js 
lightbox.option({
    'resizeDuration': 200,
    'wrapAround': true
})