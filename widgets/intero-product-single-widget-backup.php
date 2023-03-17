<?php
class intero_product_single_widget2 extends \Elementor\Widget_Base {

	public function get_name() {
		return 'intero_product_single_widget2';
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

		// Content Tab Start

		$this->start_controls_section(
			'section_title',
			[
				'label' => esc_html__( 'Title', 'intero' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'title',
			[
				'label' => esc_html__( 'Title', 'intero' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Hello world', 'intero' ),
			]
		);

		$this->end_controls_section();

		// Content Tab End


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
							<img src="<?php echo get_the_post_thumbnail_url();?>" alt="product-image">
						</div>

						<!-- option field  -->
						<div class="intero-select-optionR">

							<div>
								<label for="category">SELECT A CATEGORY</label>
								<select id="category">
									<option value="">Category Sample 1</option>
									<option value="">Category Sample 2</option>
									<option value="">Category Sample 3</option>
									<option value="">Category Sample 4</option>
									<option value="">Category Sample 5</option>
									<option value="">Category Sample 6</option>
									<option value="">Category Sample 7</option>
								</select>
							</div>

							<div>
								<label for="collect_list">Collection List</label>
								<select id="collect_list">
									<option value="">Category Sample 1</option>
									<option value="">Category Sample 2</option>
									<option value="">Category Sample 3</option>
									<option value="">Category Sample 4</option>
									<option value="">Category Sample 5</option>
									<option value="">Category Sample 6</option>
									<option value="">Category Sample 7</option>
								</select>
							</div>

							<div class="intero-color-variation">
								<?php 
									if ($product->is_type('variable')) {

										$variations = $product->get_available_variations();
									
										foreach ($variations as $variation) {
											$variation_id = $variation['variation_id'];
											$variation_data = $variation['attributes'];
											$variation_image = wp_get_attachment_image_src($variation['image_id'], 'full');
											$variation_name = '';
											foreach ($variation_data as $key => $value) {
												$taxonomy = str_replace('attribute_', '', $key);
												$term = get_term_by('slug', $value, $taxonomy);
												$variation_name =  $term->name;
											}
								?>
								<div>
									<img src="<?php echo $variation_image[0];?>" alt="">
									<span><?php echo $variation_name;?></span>
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

							<div class="intero-left-button">
								<button>FIND OUT THE PRICE</button>
							</div>
						</div>
					</div>

					<div class="intero-option-bottom">
						<h2>Enter the measurements and find out the price</h2>

						<div class="intero-input-col3">
							<div>
								<label for="intero_product_width">Product width, mm How to measure?</label>
								<input type="number" name="intero_product_width" id="intero_product_width" value="500">
							</div>

							<div>
								<label for="intero_fabric_width">Fabric width, mm How to measure?</label>
								<input type="number" name="intero_fabric_width" id="intero_fabric_width" value="465">
							</div>

							<div>
								<label for="intero_product_height">Product height, mm How to measure?</label>
								<input type="number" name="intero_product_height" id="intero_product_height" value="500">
							</div>
						</div>

						<div class="intero-input-col3">
							<div>
								<label for="intero_fabric_height">Fabric height, mm How to measure?</label>
								<input type="number" name="intero_fabric_height" id="intero_fabric_height" value="490">
							</div>

							<div>
								<label for="intero_mechanism_color">Mechanism color</label>
								<select id="intero_mechanism_color" name="intero_mechanism_color">
									<option value="" disabled>White</option>
									<option value="White">White</option>
									<option value="Red">Red</option>
									<option value="Blue">Blue</option>
								</select>
							</div>

							<div>
								<label for="">Referrer </label>
								<select id="collect_list">
									<option value="">Type A</option>
									<option value="">Type B</option>
									<option value="">Type C</option>
								</select>	
							</div>
						</div>

						<div class="intero-input-col3">
							<div>
								<label for="">Control mechanism</label>
								<select id="collect_list">
									<option value="">Manual</option>
									<option value="">Automatic</option>	
								</select>
							</div>

							<div>
								<label for="">Management side </label>
								<select id="collect_list">
									<option value="">Left</option>
									<option value="">Right</option>
									<option value="">Blue</option>
								</select>
							</div>
						</div>

						<div class="intero-input-col2">
							<div>
								<label for="">Production term. Delivery only from 5 eur.</label>
								<input type="number" name="" id="" value="490">
							</div>

							<div>
								<label for="">Color</label>
								<input type="number" name="" id="" value="490">
							</div>
						</div>

						<div>
							<label for="">Notes</label>
							<textarea name="" id="" cols="10" rows="5"></textarea>
						</div>
					</div>

					<div class="intero-cart-button">
						<div></div>
						<div class="intero-right-btn">
							<button>ORDER A FABRIC SAMPLE</button>
							<button type="submit" name="add-to-cart" value="<?php echo $product->get_id(); ?>">ADD TO CART</button>
						</div>
					</div>
				</div>
			</form>
		</section>

		<?php
	}
}
