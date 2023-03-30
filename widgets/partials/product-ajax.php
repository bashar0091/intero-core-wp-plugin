<script>
    jQuery('.loading-animation').hide();
    function collectionId(product__Id) {
        var product_id = product__Id;

        jQuery.ajax({
            type: 'POST',
            url: '<?php echo esc_url(admin_url("admin-ajax.php")); ?>',
            data: {
                action: 'my_ajax_action',
                product_id: product_id,
            },
            beforeSend: function() {
                jQuery('.loading-animation').show();
            },
            success: function(response) {
                jQuery('.loading-animation').hide();
                var data = JSON.parse(response);
                var printFirstPrice = data.printFirstPrice;
                var printFirstRegularPrice = data.printFirstRegularPrice;
                var printFirstImg = data.printFirstImg;
                var printFirstName = data.printFirstName;
                var printFirstID = data.printFirstID;

                jQuery('.intero_main_price').text(`${printFirstPrice}$`);
                jQuery('.intero_regular_price').text(`${printFirstRegularPrice}$`);
                jQuery('.intero_product_img').attr('src', printFirstImg);
                jQuery('.intero_small_product .smImg').attr('src', printFirstImg);
                jQuery('.intero_small_product span').text(printFirstName);
                jQuery('.addCartBtn').val(printFirstID);

                var variations = data.product_variation;
                jQuery('.intero-color-variation > div').remove();

                for (var i = 0; i < variations.length; i++) {
                    var variation = variations[i];
                    
                    var varProductId = variation.variation_id;
                    var varprice = variation.display_price;
                    var varregular_price = variation.display_regular_price;
                    var image_url = variation.image.url;
                    var varName = variation.attributes.attribute_pa_quantity;

                    // Display the variation data
                    jQuery('.intero-color-variation').append(
                        `
                        <div class="${variations[0].variation_id == varProductId ? 'intero_var_select' : ''}">
                            <input type="hidden" value="${varprice}" class="intero_product_price">
                            <input type="hidden" value="${varregular_price}" class="intero_product_price_regular">
                            <div class="intero_wishlist">
                                <?php 
                                    $product_id = '${varProductId}'; 
                                    $wishtList = do_shortcode('[yith_wcwl_add_to_wishlist product_id="' . $product_id . '"]');
                                    if($wishtList) {
                                        echo $wishtList;
                                    }
                                ?>
                            </div>
                            <img class="intero_var_product_img" src="${image_url}"
                                alt="">
                            <span class="intero_var_name">${varName}</span>
                            <a href="javascript:void(0)" class="intero_btn1 inTeroBtn">
                                <input type="radio" name="variation_id" value="${varProductId}" ${variations[0].variation_id == varProductId ? 'Checked' : ''}>
                                <span class="intero_color_choose_text">${variations[0].variation_id == varProductId ? '<?php echo $settings['selected_btn_text']?>' : '<?php echo $settings['choose_btn_text']?>'}</span>
                            </a>
                        </div>
                        `
                    );
                }

                runCollationCode();

                var interWishlistGet2 = jQuery('.intero_var_select .intero_wishlist').html();
                jQuery('.intero_product_img_thumbnail .intero_wishlist').html(interWishlistGet2);

                jQuery(window).load();

                jQuery('.count').val(1);
            },
        });

    };


    function collectionId2(product__Id) {
        var product_id = product__Id;

        jQuery.ajax({
            type: 'POST',
            url: '<?php echo esc_url(admin_url("admin-ajax.php")); ?>',
            data: {
                action: 'my_ajax_action',
                product_id: product_id,
            },
            beforeSend: function() {
                jQuery('.loading-animation').show();
            },
            success: function(response) {
                jQuery('.loading-animation').hide();
                var data = JSON.parse(response);
                var printFirstPrice = data.printFirstPrice;
                var printFirstRegularPrice = data.printFirstRegularPrice;
                var printFirstImg = data.printFirstImg;
                var printFirstName = data.printFirstName;
                var printFirstID = data.printFirstID;

                jQuery('.intero_main_price').text(`${printFirstPrice}$`);
                jQuery('.intero_regular_price').text(`${printFirstRegularPrice}$`);
                jQuery('.intero_product_img').attr('src', printFirstImg);
                jQuery('.intero_small_product .smImg').attr('src', printFirstImg);
                jQuery('.intero_small_product span').text(printFirstName);
                jQuery('.addCartBtn').val(printFirstID);

                var variations = data.product_variation;
                jQuery('.intero-color-variation > div').remove();

                for (var i = 0; i < variations.length; i++) {
                    var variation = variations[i];
                    
                    var varProductId = variation.variation_id;
                    var varprice = variation.display_price;
                    var varregular_price = variation.display_regular_price;
                    var image_url = variation.image.url;
                    var varName = variation.attributes.attribute_pa_quantity;

                    // Display the variation data
                    jQuery('.intero-color-variation').append(
                        `
                        <div class="${variations[0].variation_id == varProductId ? 'intero_var_select' : ''}">
                            <input type="hidden" value="${varprice}" class="intero_product_price">
                            <input type="hidden" value="${varregular_price}" class="intero_product_price_regular">
                            <div class="intero_wishlist">
                                <?php 
                                    $product_id = '${varProductId}'; 
                                    $wishtList = do_shortcode('[yith_wcwl_add_to_wishlist product_id="' . $product_id . '"]');
                                    if($wishtList) {
                                        echo $wishtList;
                                    }
                                ?>
                            </div>
                            <img class="intero_var_product_img" src="${image_url}"
                                alt="">
                            <span class="intero_var_name">${varName}</span>
                            <a href="javascript:void(0)" class="intero_btn1 inTeroBtn">
                                <input type="radio" name="variation_id" value="${varProductId}" ${variations[0].variation_id == varProductId ? 'Checked' : ''}>
                                <span class="intero_color_choose_text">${variations[0].variation_id == varProductId ? '<?php echo $settings['selected_btn_text']?>' : '<?php echo $settings['choose_btn_text']?>'}</span>
                            </a>
                        </div>
                        `
                    );
                }

                runCollationCode();

                var interWishlistGet2 = jQuery('.intero_var_select .intero_wishlist').html();
                jQuery('.intero_product_img_thumbnail .intero_wishlist').html(interWishlistGet2);

                jQuery(window).load();

                jQuery('.count').val(1);
            },
        });

    };
    
</script>