<?php
class intero_product_single_widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'intero_product_single_widget';
	}

	public function get_title() {
		return esc_html__( 'WooCommerce Input Fields+ ', 'intero' );
	}

	public function get_icon() {
		return 'eicon-code';
	}

	public function get_categories() {
		return [ 'basic' ];
	}

	public function get_keywords() {
		return [ 'intero', 'WooCommerce', 'product', 'product single' ];
	}

	protected function register_controls() {

		$this->start_controls_section(
			'general_setting_wrapper',
			[
				'label' => esc_html__( 'General Setting', 'intero' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'increment_show_off',
			[
				'label' => esc_html__( 'Price Countdown On/Off', 'intero' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'intero' ),
				'label_off' => esc_html__( 'Hide', 'intero' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->end_controls_section();

		// Content Tab Start1
		$this->start_controls_section(
			'text_change_wrapper',
			[
				'label' => esc_html__( 'All Text', 'intero' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'img_top_text',
			[
				'label' => esc_html__( 'Image top Text', 'intero' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Kaina su PVM nuo', 'intero' ),
			]
		);
		$this->add_control(
			'category_top_text',
			[
				'label' => esc_html__( 'Category top Text', 'intero' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Atlikitie žingsnius ir gaukite pasiūlymą ', 'intero' ),
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

		$repeater = new \Elementor\Repeater();
		$repeater->add_control(
			'input_field_label',
			[
				'label' => esc_html__( 'Label', 'intero' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Patalpų plotas m2' , 'intero' ),
				'label_block' => true,
			],
		);
		$repeater->add_control(
			'input_field_type',
			[
				'label' => esc_html__( 'Type', 'intero' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'options' => [
					'text' => esc_html__( 'Text', 'intero' ),
					'email' => esc_html__( 'Email', 'intero' ),
					'number' => esc_html__( 'Number', 'intero' ),
					'url' => esc_html__( 'Url', 'intero' ),
					'number' => esc_html__( 'Number', 'intero' ),
					'date' => esc_html__( 'Date', 'intero' ),
					'hidden' => esc_html__( 'Hidden', 'intero' ),
					'password' => esc_html__( 'Password', 'intero' ),
					'file' => esc_html__( 'File Upload', 'intero' ),
					'tel' => esc_html__( 'Phone', 'intero' ),
					'step' => esc_html__( 'Step', 'intero' ),
					'step' => esc_html__( 'Step', 'intero' ),
					'checkbox' => esc_html__( 'Checkbox', 'intero' ),
					'radio' => esc_html__( 'Radio', 'intero' ),
				],
			],
		);
		$repeater->add_control(
			'input_field_required',
			[
				'label' => esc_html__( 'Require', 'intero' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', 'intero' ),
				'label_off' => esc_html__( 'No', 'intero' ),
				'return_value' => 'yes',
				'default' => 'yes',
			],
		);
		$repeater->add_control(
			'input_field_column',
			[
				'label' => esc_html__( 'Column', 'intero' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '',
				'options' => [
					'col3' => esc_html__( 'Col 3', 'intero' ),
					'col2' => esc_html__( 'Col 2', 'intero' ),
					'col1' => esc_html__( 'Col 1', 'intero' ),
				],
			],
		);
		$repeater->add_control(
			'input_field_color',
			[
				'label' => esc_html__( 'Show Color Field', 'intero' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'intero' ),
				'label_off' => esc_html__( 'Hide', 'intero' ),
				'return_value' => 'yes',
				'default' => 'no',
			],
		);
		$repeater->add_control(
			'input_field_textarea',
			[
				'label' => esc_html__( 'Show TextArea', 'intero' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'intero' ),
				'label_off' => esc_html__( 'Hide', 'intero' ),
				'return_value' => 'yes',
				'default' => 'no',
			],
		);
		$repeater->add_control(
			'input_field_select',
			[
				'label' => esc_html__( 'Show Multiple Option Field', 'intero' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'intero' ),
				'label_off' => esc_html__( 'Hide', 'intero' ),
				'return_value' => 'yes',
				'default' => 'no',
			],
		);
		$repeater->add_control(
			'input_field_select_value',
			[	
				'label' => esc_html__( 'Multiple Option Value', 'intero' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'label_block' => true,
			],
		);

		$this->add_control(
			'multiple_input_list',
			[
				'label' => esc_html__( 'Input Field List', 'intero' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'input_field_label' => 'Patalpų plotas m2',
						'input_field_type' => 'number',
						'input_field_required' => 'yes',
						'input_field_column' => 'col3',
						'input_field_color' => '',
						'input_field_textarea' => '',
						'input_field_select' => '',
						'input_field_select_value' => '',
					],
					[
						'input_field_label' => 'Patalpų skaičius',
						'input_field_type' => 'number',
						'input_field_required' => 'yes',
						'input_field_column' => 'col3',
						'input_field_color' => '',
						'input_field_textarea' => '',
						'input_field_select' => '',
						'input_field_select_value' => '',
					],
					[
						'input_field_label' => 'Esamas pagrindas',
						'input_field_type' => '',
						'input_field_required' => 'yes',
						'input_field_column' => 'col3',
						'input_field_color' => '',
						'input_field_textarea' => '',
						'input_field_select' => 'yes',
						'input_field_select_value' => 'Betonas, Medinės grindys, Plytelės, OSB plokštė',
					],
					[
						'input_field_label' => 'Vardas',
						'input_field_type' => 'text',
						'input_field_required' => 'yes',
						'input_field_column' => 'col3',
						'input_field_color' => '',
						'input_field_textarea' => '',
						'input_field_select' => '',
						'input_field_select_value' => '',
					],
					[
						'input_field_label' => 'Pavardė',
						'input_field_type' => 'text',
						'input_field_required' => 'yes',
						'input_field_column' => 'col3',
						'input_field_color' => '',
						'input_field_textarea' => '',
						'input_field_select' => '',
						'input_field_select_value' => '',
					],
					[
						'input_field_label' => 'Spalva',
						'input_field_type' => '',
						'input_field_required' => '',
						'input_field_column' => 'col3',
						'input_field_color' => 'yes',
						'input_field_textarea' => '',
						'input_field_select' => '',
						'input_field_select_value' => '',
					],
					[
						'input_field_label' => 'Adresas',
						'input_field_type' => 'text',
						'input_field_required' => 'yes',
						'input_field_column' => 'col2',
						'input_field_color' => '',
						'input_field_textarea' => '',
						'input_field_select' => '',
						'input_field_select_value' => '',
					],
					[
						'input_field_label' => 'Miestas',
						'input_field_type' => 'text',
						'input_field_required' => 'yes',
						'input_field_column' => 'col2',
						'input_field_color' => '',
						'input_field_textarea' => '',
						'input_field_select' => '',
						'input_field_select_value' => '',
					],
					[
						'input_field_label' => 'Telefonas',
						'input_field_type' => 'text',
						'input_field_required' => 'yes',
						'input_field_column' => 'col2',
						'input_field_color' => '',
						'input_field_textarea' => '',
						'input_field_select' => '',
						'input_field_select_value' => '',
					],
					[
						'input_field_label' => 'El. Pastas',
						'input_field_type' => 'text',
						'input_field_required' => 'yes',
						'input_field_column' => 'col2',
						'input_field_color' => '',
						'input_field_textarea' => '',
						'input_field_select' => '',
						'input_field_select_value' => '',
					],
					[
						'input_field_label' => 'Pastabos',
						'input_field_type' => '',
						'input_field_required' => '',
						'input_field_column' => 'col1',
						'input_field_color' => '',
						'input_field_textarea' => 'yes',
						'input_field_select' => '',
						'input_field_select_value' => '',
					],
				],
				'title_field' => '{{{ input_field_label }}}',
			]
		);

		$this->end_controls_section();

		// Content Tab End2

		$this->start_controls_section(
			'button_texts-wrapper',
			[
				'label' => esc_html__( 'Button Text', 'intero' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'popup_btn_text',
			[
				'label' => esc_html__( 'Popup Button Text', 'intero' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'UŽSAKYTI PAVYZDĮ', 'intero' ),
			]
		);
		$this->add_control(
			'crm_btn_text',
			[
				'label' => esc_html__( 'CRM Button Text', 'intero' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Gauti pasiūlymą', 'intero' ),
			]
		);
		$this->add_control(
			'choose_btn_text',
			[
				'label' => esc_html__( 'Choose Button Text', 'intero' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Choose', 'intero' ),
			]
		);
		$this->add_control(
			'selected_btn_text',
			[
				'label' => esc_html__( 'Selected Button Text', 'intero' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Selected', 'intero' ),
			]
		);
		$this->add_control(
			'cart_btn_text',
			[
				'label' => esc_html__( 'Cart Button Text', 'intero' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Add To Cart', 'intero' ),
			]
		);
		$this->end_controls_section();


		// Style Tab Start

		$this->start_controls_section(
			'label_style_wrapper',
			[
				'label' => esc_html__( 'Label', 'intero' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'label_style_color',
			[
				'label' => esc_html__( 'Color', 'intero' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .intero-container label' => 'color: {{VALUE}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'label_style_typo',
				'selector' => '{{WRAPPER}} .intero-container label',
			]
		);

		$this->end_controls_section();

		// Style Tab End
		
		// Style Tab Start

		$this->start_controls_section(
			'button_style_wrapper',
			[
				'label' => esc_html__( 'Button', 'intero' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'button_style_bgColor',
			[
				'label' => esc_html__( 'Background Color', 'intero' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .intero-container button' => 'background-color: {{VALUE}};',
					'{{WRAPPER}} .intero-container .intero_btn1' => 'background-color: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'button_style_bgHoverColor',
			[
				'label' => esc_html__( 'Background Hover Color', 'intero' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .intero-container button:hover' => 'background-color: {{VALUE}};',
					'{{WRAPPER}} .intero-container .intero_btn1:hover' => 'background-color: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'collectionBtnSelected_bgColor',
			[
				'label' => esc_html__( 'Collection Button Selected Color', 'intero' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .intero_var_select .intero_btn1 ' => 'background-color: {{VALUE}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'button_style_typo',
				'selector' => '{{WRAPPER}} .intero-container .inTeroBtn',
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'price_wrapper',
			[
				'label' => esc_html__( 'Price', 'intero' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'main_price_wrapper',
			[
				'label' => esc_html__( 'Main Price Color', 'intero' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .intero-container .intero_main_price' => 'color: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'regular_price_wrapper',
			[
				'label' => esc_html__( 'Regular Price Color', 'intero' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .intero-container .intero_regular_price' => 'color: {{VALUE}};',
				],
			]
		);
		$this->end_controls_section();


		$this->start_controls_section(
			'other_text_wrapper',
			[
				'label' => esc_html__( 'Other Text', 'intero' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'img_top_text_style_color',
			[
				'label' => esc_html__( 'Image top text Color', 'intero' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .intero-container .intero-product-price h4' => 'color: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'cat_top_text_style_color',
			[
				'label' => esc_html__( 'Category top text Color', 'intero' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .intero-container .intero_top_arrow_text' => 'color: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'input_top_text_style_color',
			[
				'label' => esc_html__( 'Input top text Color', 'intero' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .intero-container .intero-option-bottom h2' => 'color: {{VALUE}};',
				],
			]
		);
		$this->end_controls_section();
	}

	protected function render() {
		
		$settings = $this->get_settings_for_display();	
		
	?>

<?php
    global $product;

    // Get the current product
    if ( ! $product ) {
        $product = wc_get_product();
    }
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
					<?php 
						$multiple_input_list = $settings['multiple_input_list'];
						$i = 1;
						foreach($multiple_input_list as $item) {
						$i++;

						if($item['input_field_color'] == 'yes') {
					?>

					<div style="position: relative;" class="<?php echo $item['input_field_column'];?>">
						<label for="null"><?php echo $item['input_field_label']?> <a href="#intero_col_combo" class="intero_combo">Pasirinkti</a></label>
						<div class="intero_small_product">
							<div class="loading-animation loading-animation2"><img src="https://i.gifer.com/ZZ5H.gif"></div>
							<img class="smImg" src="<?php echo $thumImage;?>" alt="product-image">
							<span><?php echo $thumName;?></span>
						</div>
					</div>

					<?php } else if($item['input_field_textarea'] == 'yes'){
					?>
					<div class="<?php echo $item['input_field_column'];?>">
						<label for="input10"><?php echo $item['input_field_label']?></label>
						<textarea name="input10" id="input10" cols="10" rows="3" <?php echo $item['input_field_required']=='yes' ? 'required' : '' ?> ></textarea>
					</div>
					<?php
					} else if($item['input_field_select'] == 'yes') {
					?>
					<div class="<?php echo $item['input_field_column'];?>">
						<label for="input3"><?php echo $item['input_field_label']?></label>
						<textarea class="interExtraTextarea" id="interTextarea<?php echo $i;?>"><?php echo $item['input_field_select_value']?></textarea>
						<select id="interSelectarea<?php echo $i;?>" name="input3" <?php echo $item['input_field_required']=='yes' ? 'required' : '' ?> ></select>
					</div>
					<script>
						// textarea as a select option parameter
						function createOptions(textareaId, selectFieldId) {
							var textarea1 = jQuery('#' + textareaId);
							var selectField1 = jQuery('#' + selectFieldId);
							var values = jQuery(textarea1).text().split(',');
							selectField1.empty();
							for (var i = 0; i < values.length; i++) {
								var value = values[i].trim();
								var option = jQuery('<option>', {value: value, text: value});
								selectField1.append(option);
							}
						}

						createOptions('<?php echo "interTextarea".$i?>', '<?php echo "interSelectarea".$i?>');
					</script>
					<?php
					} else{ ?>

					<div class="<?php echo $item['input_field_column'];?>">
						<label for="input<?php echo $i?>"><?php echo $item['input_field_label']?></label>
						<input type="<?php echo $item['input_field_type'];?>" name="input<?php echo $i?>" id="input<?php echo $i?>" placeholder="<?php echo $item['input_field_label']?>" <?php echo $item['input_field_required']=='yes' ? 'required' : '' ?> >
					</div>
					
					<?php
						} }
					?>
					

					
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

	<section id="intero_popup">
		<div class="loading-animation"><img src="https://i.gifer.com/ZZ5H.gif"></div>
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
									<select id="collect_list" onchange="collectionId2(this.value)">
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

						<div class="popup_increament">
							<div class="increament_price">
								<input type="number" step="1" min="1" max="" name="quantity" value="1" class="count increament_num_field input-text qty text" size="4" pattern="[0-9]*" inputmode="numeric">
								<button class="plus1" type="button">+</button>
								<button class="minus1" type="button">-</button>
							</div>
							<button type="submit" class="addCartBtn" name="add-to-cart" value="<?php echo $thumVarId; ?>"><?php echo $settings['cart_btn_text'];?></button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</section>

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

		
		<?php
	}
}
