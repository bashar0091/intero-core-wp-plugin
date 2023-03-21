// color variation choose button active/deactive and btn text changed and image changed
function runCollationCode() {
    jQuery('.intero-color-variation .intero_btn1').click(function() {
        jQuery('.intero-color-variation > div').removeClass('intero_var_select');
        jQuery(this).parent().addClass('intero_var_select');

        jQuery('.intero_color_choose_text').text('Choose');
        jQuery('.intero_var_select .intero_color_choose_text').text('selected');

        var intero_var_img_get = jQuery('.intero_var_select .intero_var_product_img').attr('src');
        jQuery('.intero_product_img_thumbnail .intero_product_img').attr('src', intero_var_img_get);
        jQuery('.intero_product_zoom').attr('href', intero_var_img_get);

        jQuery('.intero-product-price').remove();
        var intero_color_variation_price = jQuery('.intero_var_select .intero_product_price').val();
        var intero_color_variation_price_regular = jQuery('.intero_var_select .intero_product_price_regular').val();
        var intero_color_variation_name = jQuery('.intero_var_select .intero_var_name').text();
        jQuery('.intero_product_img_thumbnail').append(`
        <div class="intero-product-price">
            <h4>Kaina su PVM nuo</h4>
            <h2>
                <span class="intero_main_price">${intero_color_variation_price}$</span>
                <del class="intero_regular_price">${intero_color_variation_price_regular}$</del></sub>
            </h2>
        </div>
        `);

        jQuery('.intero_small_product .smImg').attr('src', intero_var_img_get);
        jQuery('.intero_small_product span').text(intero_color_variation_name);

        var interWishlistGet = jQuery('.intero_var_select .intero_wishlist').html();
        jQuery('.intero_product_img_thumbnail .intero_wishlist').html(interWishlistGet);

        var productId = jQuery(this).find('input').val();
        jQuery('.addCartBtn').val(productId);
    });
};
runCollationCode();


// product image light box js 
lightbox.option({
    'resizeDuration': 200,
    'wrapAround': true
})

// popup code here 
var interoPopup = jQuery('#intero_popup')
jQuery('.intero_popup_btn').click(function() {
    interoPopup.addClass('show')
    jQuery('body').css('overflow', 'hidden');
});
jQuery('.intero_popup_cross a').click(function() {
    location.reload();
});


