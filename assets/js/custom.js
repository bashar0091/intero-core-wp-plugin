// color variation choose button active/deactive and btn text changed and image changed
function runCollationCode() {
    jQuery(document).on('click', '.intero-color-variation .intero_btn1', function() {
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
        var increament_num_field2 = jQuery('.increament_num_field').val();
        var increament_num_field = jQuery('.intero_product_img_thumbnail2').attr('style');

        if(increament_num_field  == "display: none;") {
            jQuery('.intero_product_img_thumbnail').append(`
            <div class="intero-product-price">
                <h4>Kaina su PVM nuo</h4>
                <h2>
                    <span class="intero_main_price">${intero_color_variation_price}$</span>
                    <del class="intero_regular_price">${intero_color_variation_price_regular}$</del></sub>
                </h2>
            </div>
            `);
        } else {
            jQuery('.intero_product_img_thumbnail').append(`
            <div class="intero-product-price">
                <h4>Kaina su PVM nuo</h4>
                <h2>
                    <span class="intero_main_price">${intero_color_variation_price * increament_num_field2}$</span>
                    <del class="intero_regular_price">${intero_color_variation_price_regular * increament_num_field2}$</del></sub>
                </h2>
            </div>
            `);
        }
        

        jQuery('.intero_small_product .smImg').attr('src', intero_var_img_get);
        jQuery('.intero_small_product span').text(intero_color_variation_name);

        var interWishlistGet = jQuery('.intero_var_select .intero_wishlist').html();
        jQuery('.intero_product_img_thumbnail .intero_wishlist').html(interWishlistGet);

        var productId = jQuery(this).find('input').val();
        jQuery('.addCartBtn').val(productId);
    });

    jQuery(document).on('click', '.intero-color-variation1 .intero_btn1', function() {
        var interocolorvariation = jQuery('.intero-color-variation1').html();
        jQuery('.intero-color-variation2').html(interocolorvariation);

    });
    jQuery(document).on('click', '.intero-color-variation2 .intero_btn1', function() {
        jQuery('.intero-color-variation > div').removeClass('intero_var_select');
        jQuery(this).parent().addClass('intero_var_select');

        var interocolorvariation = jQuery('.intero-color-variation2').html();
        jQuery('.intero-color-variation1').html(interocolorvariation);
    });
};
runCollationCode();


// product image light box js 
lightbox.option({
    'resizeDuration': 200,
    'wrapAround': true,
    'fitImagesInViewport' : true,
})

// popup code here 
var interoPopup = jQuery('#intero_popup')
jQuery('.intero_popup_btn').click(function() {
    interoPopup.addClass('show')
    jQuery('body').css('overflow', 'hidden');
});
jQuery('.intero_popup_cross a').click(function() {
    interoPopup.removeClass('show')
    jQuery('body').css('overflow', 'inherit');
});

// product count field 
function increamentShow(select1, select2) {
    jQuery(select1).click(function () {
        var price = jQuery('.intero_var_select .intero_product_price').val(); 
        var price2 = jQuery('.intero_var_select .intero_product_price_regular').val();
        var $priceDisplay = jQuery('.intero_main_price');
        var $priceDisplay2 = jQuery('.intero_regular_price');
    
        var count = parseInt(jQuery('.increament_num_field').val()) + 1;
        jQuery('.increament_num_field').val(count);
    
        $priceDisplay.text(`${price * count}$`);
        $priceDisplay2.text(`${price2 * count}$`);
    });
    jQuery(select2).click(function () {
        var price = jQuery('.intero_var_select .intero_product_price').val(); 
        var price2 = jQuery('.intero_var_select .intero_product_price_regular').val();
        var $priceDisplay = jQuery('.intero_main_price');
        var $priceDisplay2 = jQuery('.intero_regular_price');
    
        var count = parseInt(jQuery('.increament_num_field').val()) - 1;
        if (count < 1) {
        count = 1;
        }
        jQuery('.increament_num_field').val(count);
        $priceDisplay.text(`${price * count}$`);
        $priceDisplay2.text(`${price2 * count}$`);
    });
}
increamentShow('.plus', '.minus');
increamentShow('.plus1', '.minus1');
