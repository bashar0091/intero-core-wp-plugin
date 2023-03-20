<?php
class intero_product_single_widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'intero_product_single_widget';
	}

	public function get_title() {
		return esc_html__( 'Intero Product Single Widget', 'intero' );
	}

	public function get_icon() {
		return 'eicon-code';
	}

	public function get_categories() {
		return [ 'basic' ];
	}

	public function get_keywords() {
		return [ 'intero', 'product', 'product single' ];
	}

	protected function register_controls() {

		// Content Tab Start1
		$this->start_controls_section(
			'text_change_wrapper',
			[
				'label' => esc_html__( 'All Text', 'intero' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'category_text',
			[
				'label' => esc_html__( 'Category', 'intero' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'PASIRINKITE KATEGORIJĄ', 'intero' ),
			]
		);
		$this->add_control(
			'collection_text',
			[
				'label' => esc_html__( 'Collection', 'intero' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'PASIRINKITE KOLEKCIJĄ', 'intero' ),
			]
		);
		$this->add_control(
			'input_top_text',
			[
				'label' => esc_html__( 'Input Top Text', 'intero' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Įveskite duomenis ir gaukite pasiūlymą', 'intero' ),
			]
		);
		$this->add_control(
			'bottom_note_text',
			[
				'label' => esc_html__( 'Note Text', 'intero' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( '*Grindų dangos įrengimas bus įvertintas įriangiant grindų dangą ant lygaus tvirto pagrindo, kurio nelygumai nevirršyja 3 mm per 2 metrus.', 'intero' ),
			]
		);
		$this->end_controls_section();
		// Content Tab End1

		// Content Tab Start2
		$this->start_controls_section(
			'multiple_input_wrapper',
			[
				'label' => esc_html__( 'Multiple Input Field', 'intero' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'multiple_input_1',
			[
				'label' => esc_html__( 'Input #1', 'intero' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Patalpų plotas m2', 'intero' ),
			]
		);
		$this->add_control(
			'multiple_input_2',
			[
				'label' => esc_html__( 'Input #2', 'intero' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Patalpų skaičius', 'intero' ),
			]
		);
		$this->add_control(
			'multiple_input_3',
			[
				'label' => esc_html__( 'Input #3', 'intero' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Esamas pagrindas', 'intero' ),
			]
		);
		$this->add_control(
			'multiple_input_4',
			[
				'label' => esc_html__( 'Input #4', 'intero' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Vardas', 'intero' ),
			]
		);
		$this->add_control(
			'multiple_input_5',
			[
				'label' => esc_html__( 'Input #5', 'intero' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Pavardė', 'intero' ),
			]
		);
		$this->add_control(
			'multiple_input_6',
			[
				'label' => esc_html__( 'Input #6', 'intero' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Spalva', 'intero' ),
			]
		);
		$this->add_control(
			'multiple_input_7',
			[
				'label' => esc_html__( 'Input #7', 'intero' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Adresas', 'intero' ),
			]
		);
		$this->add_control(
			'multiple_input_8',
			[
				'label' => esc_html__( 'Input #8', 'intero' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Miestas', 'intero' ),
			]
		);
		$this->add_control(
			'multiple_input_9',
			[
				'label' => esc_html__( 'Input #9', 'intero' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Telefonas', 'intero' ),
			]
		);
		$this->add_control(
			'multiple_input_10',
			[
				'label' => esc_html__( 'Input #10', 'intero' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'El. Pastas', 'intero' ),
			]
		);
		$this->add_control(
			'multiple_input_11',
			[
				'label' => esc_html__( 'Input #11', 'intero' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Pastabos', 'intero' ),
			]
		);

		$this->end_controls_section();

		// Content Tab End2


		// Style Tab Start

		$this->start_controls_section(
			'section_title_style',
			[
				'label' => esc_html__( 'Title', 'intero' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'title_color',
			[
				'label' => esc_html__( 'Text Color', 'intero' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .hello-world' => 'color: {{VALUE}};',
				],
			]
		);

		$this->end_controls_section();

		// Style Tab End

	}

	protected function render() {
		global $product;
		$settings = $this->get_settings_for_display();	

		$product = wc_get_product();

		$singleId = get_the_ID();
	?>

		<?php
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
						<a class="intero_product_zoom" href="<?php echo $thumImage;?>" data-lightbox="product-image">
							<img src="<?php echo plugin_dir_url( __FILE__ ) . '../assets/images/zoom.png'?>" alt="zoom">
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
							<h4>Kaina su PVM nuo</h4>
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
							Atlikitie žingsnius ir gaukite pasiūlymą
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

						<div class="intero-color-variation">
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
								<a href="javascript:void(0)" class="intero_btn1">
									<input type="radio" name="variation_id" value="<?php echo $variation_id;?>">
									<span class="intero_color_choose_text">
										<?php
											echo $variations[0]['variation_id'] == $variation_id ? 'Selected' : 'Choose';
										?>
									</span>
								</a>
							</div>
							<?php
										
									}
								}
							?>
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

						<div>
							<label for="null"><?php echo $settings['multiple_input_6']?> <a href="#intero_col_combo" class="intero_combo">Pasirinkti</a></label>
							<div class="intero_small_product">
								<img src="<?php echo $thumImage;?>" alt="product-image">
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
					<div></div>
					<div class="intero-right-btn">
						<button class="intero_popup_btn">UŽSAKYTI PAVYZDĮ</button>
						<button type="submit" value="">Gauti pasiūlymą</button>
					</div>
				</div>

				<p class="intero_note_text"><?php echo $settings['bottom_note_text']?></p>
			</div>
		</section>


		<section id="intero_popup">
			<div class="intero_popup_cross">
				<a href="javascript:void(0)">x</a>
			</div>
			
			
		</section>

		<script>
			function collectionId(product__Id) {
				var product_id = product__Id;
				jQuery.ajax({
					type: 'POST',
					url: '<?php echo esc_url(admin_url("admin-ajax.php")); ?>',
					data: {
						action: 'my_ajax_action',
						product_id: product_id,
					},
					success: function(response) {
						var data = JSON.parse(response);
						var printFirstPrice = data.printFirstPrice;
						var printFirstRegularPrice = data.printFirstRegularPrice;
						var printFirstImg = data.printFirstImg;

						jQuery('.intero_main_price').text(`${printFirstPrice}$`);
						jQuery('.intero_regular_price').text(`${printFirstRegularPrice}$`);
						jQuery('.intero_product_img').attr('src', printFirstImg);

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
									<a href="javascript:void(0)" class="intero_btn1">
										<input type="radio" name="variation_id" value="1184">
										<span class="intero_color_choose_text">${variations[0].variation_id == varProductId ? 'Selected' : 'Choose'}</span>
									</a>
								</div>
								`
							);
						}

						runCollationCode();

						jQuery('.intero_wishlist a').click(function() {
							var interWishlistGet2 = jQuery('.intero_var_select .intero_wishlist').html();
							jQuery('.intero_product_img_thumbnail .intero_wishlist').html(interWishlistGet2);
						});
					},
					error: function(xhr, status, error){
						console.log(xhr.responseText);
						console.log(status);
						console.log(error);
					}
				});
			};
		</script>
		<?php
	}
}
