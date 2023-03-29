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
    location.reload();
});


/**
 * Increment and Decrement Quantity Buttons Functionality
 */
jQuery(document).ready(function($) {
    jQuery(document).on('click', '.plus, .minus', function(e) {
        e.preventDefault();
        var $button = $(this);
        var oldValue = $button.parent().find('input[type="number"]').val();
        var newVal;
        var price = jQuery('.intero_var_select .intero_product_price').val(); 
        var price2 = jQuery('.intero_var_select .intero_product_price_regular').val();
        var $priceDisplay = $('.intero_main_price');
        var $priceDisplay2 = $('.intero_regular_price');    
    
        if ($button.hasClass('plus')) {
            newVal = parseFloat(oldValue) + 1;
        } else {
            if (oldValue > 1) {
                newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 1;
            }
        }
    
        $button.parent().find('input[type="number"]').val(newVal);
    
        // Update the price based on the new value of the input field
        var newPrice = price * newVal;
        var newPrice2 = price2 * newVal;
        
        $priceDisplay.text(`${newPrice}$`);
        $priceDisplay2.text(`${newPrice2}$`);
    });
    

    jQuery(document).ready(function($) {
        jQuery(document).on('change keyup', 'input[type="number"]', function(e) {
            var price = jQuery('.intero_var_select .intero_product_price').val(); 
            var price2 = jQuery('.intero_var_select .intero_product_price_regular').val();
            var $priceDisplay = $('.intero_main_price');
            var $priceDisplay2 = $('.intero_regular_price');   
            var $inputField = $(this);
            var oldValue = $inputField.data('old-value');
            var newVal = parseFloat($inputField.val());
    
            if (isNaN(newVal)) {
                newVal = 1;
                $inputField.val(newVal);
            } else if (newVal < 1) {
                newVal = 1;
                $inputField.val(newVal);
            }
            
            $inputField.data('old-value', newVal);
    
            // Update the price based on the new value of the input field
            var newPrice = price * newVal;
            var newPrice2 = price2 * newVal;
            $priceDisplay.text(`${newPrice}$`);
            $priceDisplay2.text(`${newPrice2}$`);
        });
        
        // Set the initial old value for each input field
        $('input[type="number"]').each(function() {
            $(this).data('old-value', parseFloat($(this).val()));
        });
    });
});