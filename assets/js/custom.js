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
