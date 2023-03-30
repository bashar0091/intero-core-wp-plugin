<?php
    global $product;
    $product = wc_get_product();
    $singleId = get_the_ID();
    if ($product->is_type('variable')) {
        $variations1 = $product->get_available_variations();
        $thumImage = $variations1[0]['image']['url'];
        $thumPrice = $variations1[0]['display_price'];
        $thumRegularPrice = $variations1[0]['display_regular_price'];
        $thumName = $variations1[0]['attributes']['attribute_pa_quantity'];
        $thumVarId = $variations1[0]['variation_id'];
    }
?>
<!-- template rendering here -->
<section>
    <div class="intero-container">
        <!-- intero image option left right grid  -->
        <div class="intero-col2">
            <div class="intero_product_img_thumbnail">
                <div class="loading-animation"><img src="https://i.gifer.com/ZZ5H.gif"></div>
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
                <img class="intero_product_img" src="<?php echo $thumImage;?>" alt="product-image">
            </div>

            <!-- option field  -->
            <div class="intero-select-optionR">
                <a href="#intero1" class="intero_top_arrow_text">
                    <?php echo $settings['category_top_text'];?>
                    <img src="<?php echo plugin_dir_url( __FILE__ ) . '../assets/images/bottom-arrow.png'?>" alt="">
                </a>
                <div id="intero_col_combo">
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
                
                <div style="position: relative;">
                    <div class="loading-animation"><img src="https://i.gifer.com/ZZ5H.gif"></div>
                    <div class="intero-color-variation1 intero-color-variation">
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
                                <input type="radio" name="variation_id" value="<?php echo $variation_id;?>">
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
                </div>

                <!-- <div class="intero-left-button">
                    <a href="#intero1">FIND OUT THE PRICE</a>
                </div> -->
            </div>
        </div>

        <div class="intero-option-bottom" id="intero1">
            <h2><?php echo $settings['input_top_text']?></h2>

            <div class="intero-input-col3">

                <div>
                    <label for="input1"><?php echo $settings['multiple_input_1']?></label>
                    <input type="number" name="input1" id="input1" placeholder="<?php echo $settings['multiple_input_1']?>" required>
                </div>

                <div>
                    <label for="input2"><?php echo $settings['multiple_input_2']?></label>
                    <input type="number" name="input2" id="input2" placeholder="<?php echo $settings['multiple_input_2']?>" required>
                </div>

                <div>
                    <label for="input3"><?php echo $settings['multiple_input_3']?></label>
                    <select id="input3" name="input3" required>
                        <option value="Betonas">Betonas</option>
                        <option value="Medinės grindys">Medinės grindys</option>
                        <option value="Plytelės">Plytelės</option>
                        <option value="OSB plokštė">OSB plokštė</option>
                    </select>
                </div>

                <div>
                    <label for="input4"><?php echo $settings['multiple_input_4']?></label>
                    <input type="text" name="input4" id="input4" placeholder="<?php echo $settings['multiple_input_4']?>" required>
                </div>

                <div>
                    <label for="input5"><?php echo $settings['multiple_input_5']?></label>
                    <input type="text" name="input5" id="input5" placeholder="<?php echo $settings['multiple_input_5']?>" required>
                </div>

                <div style="position: relative;">
                    <label for="null"><?php echo $settings['multiple_input_6']?> <a href="#intero_col_combo" class="intero_combo">Pasirinkti</a></label>
                    <div class="intero_small_product">
                        <div class="loading-animation loading-animation2"><img src="https://i.gifer.com/ZZ5H.gif"></div>
                        <img class="smImg" src="<?php echo $thumImage;?>" alt="product-image">
                        <span><?php echo $thumName;?></span>
                    </div>
                </div>

                <div>
                    <label for="input6"><?php echo $settings['multiple_input_7']?></label>
                    <input type="text" name="input6" id="input6" placeholder="<?php echo $settings['multiple_input_7']?>" required>
                </div>

                <div>
                    <label for="input7"><?php echo $settings['multiple_input_8']?></label>
                    <input type="text" name="input7" id="input7" placeholder="<?php echo $settings['multiple_input_8']?>" required>
                </div>

            </div>

            <div class="intero-input-col2">
                <div>
                    <label for="input8"><?php echo $settings['multiple_input_9']?></label>
                    <input type="text" name="input8" id="input8" placeholder="<?php echo $settings['multiple_input_9']?>" required>
                </div>

                <div>
                    <label for="input9"><?php echo $settings['multiple_input_10']?></label>
                    <input type="text" name="input9" id="input9" placeholder="<?php echo $settings['multiple_input_10']?>" required>
                </div>
            </div>

            <div>
                <label for="input10"><?php echo $settings['multiple_input_11']?></label>
                <textarea name="input10" id="input10" cols="10" rows="3"></textarea>
            </div>
        </div>

        <div class="intero-cart-button">
            <div>
                <div class="intero_product_img_thumbnail intero_product_img_thumbnail2" <?php echo $settings['increment_show_off'] == 'yes' ? '' : 'style="display: none;"'?>>
                    <div class="increament_price">
                        <input type="number" step="1" min="1" max="" name="quantity" value="1" class="count increament_num_field input-text qty text" size="4" pattern="[0-9]*" inputmode="numeric">
                        <button class="plus" type="button">+</button>
                        <button class="minus" type="button">-</button>
                    </div>

                    <div class="intero-product-price">
                        <h4><?php echo $settings['img_top_text'];?></h4>
                        <h2>
                            <span class="intero_main_price"><?php echo $thumPrice;?>$</span>
                            <del class="intero_regular_price"><?php echo $thumRegularPrice;?>$</del></sub>
                        </h2>
                    </div>
                </div>
            </div>
          
            <div class="intero-right-btn">
                <button class="intero_popup_btn inTeroBtn"><?php echo $settings['popup_btn_text'];?></button>
                <button class="inTeroBtn" type="submit" value=""><?php echo $settings['crm_btn_text'];?></button>
            </div>
        </div>

        <p class="intero_note_text"><?php echo $settings['bottom_note_text']?></p>
    </div>
</section>

<?php require_once('product-popup.php');?>
<?php require_once('product-ajax.php');?>