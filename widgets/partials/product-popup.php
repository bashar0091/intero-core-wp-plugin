<section id="intero_popup">
    <div class="intero_popup_cross">
        <a href="javascript:void(0)">
            <span></span>
            <span></span>
        </a>
    </div>
    
    <div class="intero-container intero-container2">
        <form method="post" enctype='multipart/form-data'>
            <!-- intero image option left right grid  -->
            <div class="intero-col2">
                <div class="intero_product_img_thumbnail">
                    <a class="intero_product_zoom" href="<?php echo $thumImage;?>" data-lightbox="product-image">
                        <img src="<?php echo plugin_dir_url( __FILE__ ) . '../../assets/images/zoom.png'?>" alt="zoom">
                    </a>
                    <div class="intero_wishlist">
                        <?php 
                        $product_id = $thumVarId; 
                        $wishtList = do_shortcode('[yith_wcwl_add_to_wishlist product_id="' . $product_id . '"]');
                        if($wishtList) {
                            echo $wishtList;
                        }
                        ?>
                    </div>
                    <div class="intero-product-price">
                        <h4><?php echo $settings['img_top_text'];?></h4>
                        <h2>
                            <span class="intero_main_price"><?php echo $thumPrice;?>$</span>
                            <del class="intero_regular_price"><?php echo $thumRegularPrice;?>$</del></sub>
                        </h2>
                    </div>
                    <img class="intero_product_img intero_product_img2" src="<?php echo $thumImage;?>" alt="product-image">
                </div>

                <!-- option field  -->
                <div class="intero-select-optionR intero-select-optionR2">
                    <div id="intero_col_combo"  class="intero_col_combo1">
                        <div class="intero_num_field">
                            <div>
                                <span>1</span>
                            </div>
                            <div>
                                <label for="category"><?php echo $settings['category_text']?></label>
                                <input type="text" value="<?php
                                    $categories = get_the_terms( get_the_ID(), 'product_cat' );
                                    $category_slug = '';

                                    if ( $categories && ! is_wp_error( $categories ) ) {
                                    // Loop through each category
                                    foreach ( $categories as $category ) {
                                        // Get the category name and link
                                        $category_name = $category->name;
                                        $category_slug = $category->slug;
                                        
                                        // Display the category name and link
                                        echo esc_html( $category_name );
                                    }
                                    }
                                ?>" disabled>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="intero_num_field">
                            <div>
                                <span>2</span>
                            </div>
                            
                            <div>
                                <label for="collect_list"><?php echo $settings['collection_text'];?></label>
                                <select id="collect_list" onchange="collectionId(this.value)">
                                <?php 
                                    $product_slugOut = $product->get_slug();

                                    $args = array(
                                        'post_type' => 'product',
                                        'tax_query' => array(
                                            array(
                                                'taxonomy' => 'product_cat',
                                                'field' => 'slug',
                                                'terms' => $category_slug,
                                            )
                                        ),
                                        'posts_per_page' => -1,
                                    );
                                    
                                    $query = new WP_Query( $args );
                                    
                                    if ( $query->have_posts() ) {
                                        while ( $query->have_posts() ) {
                                        $query->the_post();
                                        
                                        $product_slugIn = get_post_field( 'post_name', get_the_ID() );
                                ?>
                                    <option value="<?php echo get_the_ID();?>" <?php echo $singleId == get_the_ID() ? 'selected' : ''?> ><?php echo get_the_title();?></option>
                                <?php 
                                        }
                                    }
                                ?>
                                </select>

                            </div>
                        </div>
                    </div>

                    <div class="intero-color-variation intero-color-variation2">
                        <?php 
                            if ($product->is_type('variable')) {

                                $variations = $product->get_available_variations();

                                foreach ($variations as $variation) {
                                    $variation_id = $variation['variation_id'];
                                    $variation_data = $variation['attributes'];
                                    $variation_image = wp_get_attachment_image_src($variation['image_id'], 'full');
                                    $variation_price = $variation['display_price'];
                                    $variation_price_regular = $variation['display_regular_price'];
                                    $variation_name = '';
                                    foreach ($variation_data as $key => $value) {
                                        $taxonomy = str_replace('attribute_', '', $key);
                                        $term = get_term_by('slug', $value, $taxonomy);
                                        $variation_name =  $term->name;
                                    }
                        ?>
                        <div class="<?php echo $variations[0]['variation_id'] == $variation_id ? 'intero_var_select' : '';?>">
                            <input type="hidden" value="<?php echo $variation_id;?>" class="intero_product_id">
                            <input type="hidden" value="<?php echo $variation_price;?>" class="intero_product_price">
                            <input type="hidden" value="<?php echo $variation_price_regular;?>" class="intero_product_price_regular">
                            <div class="intero_wishlist">
                                <?php 
                                $product_id = $variation_id; 
                                $wishtList = do_shortcode('[yith_wcwl_add_to_wishlist product_id="' . $product_id . '"]');
                                if($wishtList) {
                                    echo $wishtList;
                                }
                                ?>
                            </div>
                            <img class="intero_var_product_img" src="<?php echo $variation_image[0];?>" alt="">
                            <span class="intero_var_name"><?php echo $variation_name;?></span>
                            <a href="javascript:void(0)" class="intero_btn1 inTeroBtn">
                                <input type="radio" name="variation_id" value="<?php echo $variation_id;?>" <?php echo $variations[0]['variation_id'] == $variation_id ? 'Checked' : '';?>>
                                <span class="intero_color_choose_text">
                                    <?php
                                        echo $variations[0]['variation_id'] == $variation_id ? $settings['selected_btn_text'] : $settings['choose_btn_text'];
                                    ?>
                                </span>
                            </a>
                        </div>
                        <?php
                                    
                                }
                            }
                        ?>
                    </div>

                    <div>
                        <button class="inTeroBtn" type="submit" class="addCartBtn" name="add-to-cart" value="<?php echo $thumVarId; ?>"><?php echo $settings['cart_btn_text'];?></button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
