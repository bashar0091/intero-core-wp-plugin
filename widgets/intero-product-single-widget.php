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
	?>

		<!-- template rendering here -->
		<section>
			<form method="post" enctype='multipart/form-data'>
				<div class="intero-container">

					<!-- intero image option left right grid  -->
					<div class="intero-col2">
						<div class="intero_product_img_thumbnail">
							<a class="intero_product_zoom" href="http://localhost/intero-shop/wp-content/uploads/2022/08/product-10-a.jpg" data-lightbox="product-image">
								<img src="<?php echo plugin_dir_url( __FILE__ ) . '../assets/images/zoom.png'?>" alt="zoom">
							</a>
							<img class="intero_product_img" src="<?php echo get_the_post_thumbnail_url();?>" alt="product-image">
						</div>

						<!-- option field  -->
						<div class="intero-select-optionR">
							<div>
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
										<label for="collect_list"><?php echo $settings['collection_text']?></label>
										<select id="collect_list" onchange="window.location.href=this.value;">
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
											<option value='<?php echo get_the_permalink();?>' <?php echo $product_slugOut == $product_slugIn ? 'selected' : ''; ?>><?php echo get_the_title();?></option>
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
								<div>
									<input type="hidden" value="<?php echo $variation_price;?>" class="intero_product_price">
									<input type="hidden" value="<?php echo $variation_price_regular;?>" class="intero_product_price_regular">
									<img src="<?php echo $variation_image[0];?>" alt="">
									<span class="intero_var_name"><?php echo $variation_name;?></span>
									<a href="javascript:void(0)">
										<input type="radio" name="variation_id" value="<?php echo $variation_id;?>">
										<span class="intero_color_choose_text">Choose</span>
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
								<label for="null"><?php echo $settings['multiple_input_6']?></label>
								<div class="intero_small_product">
									<span></span>
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
							<button>ORDER A FABRIC SAMPLE</button>
							<button type="submit" name="add-to-cart" value="<?php echo $product->get_id(); ?>">ADD TO CART</button>
						</div>
					</div>

					<p class="intero_note_text"><?php echo $settings['bottom_note_text']?></p>
				</div>
			</form>
		</section>

		<?php
	}
}
