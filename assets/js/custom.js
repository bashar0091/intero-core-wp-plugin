// color variation choose button active/deactive and btn text changed and image changed
jQuery('.intero-color-variation a').click(function() {
    jQuery('.intero-color-variation > div').removeClass('intero_var_select');
    jQuery(this).parent().addClass('intero_var_select');

    jQuery('.intero_color_choose_text').text('Choose');
    jQuery('.intero_var_select .intero_color_choose_text').text('selected');

    var intero_var_img_get = jQuery('.intero_var_select img').attr('src');
    jQuery('.intero_product_img_thumbnail img').attr('src', intero_var_img_get);
});