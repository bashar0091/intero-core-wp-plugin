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
		$settings = $this->get_settings_for_display();
		?>

		<!-- template rendering here -->
		<section>
			<div class="intero-container">

				<!-- intero image option left right grid  -->
				<div class="intero-col2">
					<div>
						<img src="http://localhost/intero-shop/wp-content/uploads/2022/08/pexels-antoni-shkraba-5493663.jpg" alt="product-image">
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
							<div>
								<img src="http://localhost/intero-shop/wp-content/uploads/2023/03/EPI-Blend_Autumn-500x500-1.webp" alt="">
								<span>[10BH2205] BH-57 2.45m</span>
								<button>Choose</button>
							</div>

							<div>
								<img src="http://localhost/intero-shop/wp-content/uploads/2023/03/EPI-Blend_Beige-Taupe-500x500-1.webp" alt="">
								<span>[10BH2205] BH-57 2.45m</span>
								<button>Choose</button>
							</div>

							<div>
								<img src="http://localhost/intero-shop/wp-content/uploads/2023/03/EPI-Blend_Cafe-au-Lait-500x500-1.webp" alt="">
								<span>[10BH2205] BH-57 2.45m</span>
								<button>Choose</button>
							</div>

							<div>
								<img src="http://localhost/intero-shop/wp-content/uploads/2023/03/EPI-Blend_Autumn-500x500-1.webp" alt="">
								<span>[10BH2205] BH-57 2.45m</span>
								<button>Choose</button>
							</div>

							<div>
								<img src="http://localhost/intero-shop/wp-content/uploads/2023/03/EPI-Blend_Beige-Taupe-500x500-1.webp" alt="">
								<span>[10BH2205] BH-57 2.45m</span>
								<button>Choose</button>
							</div>

							<div>
								<img src="http://localhost/intero-shop/wp-content/uploads/2023/03/EPI-Blend_Cafe-au-Lait-500x500-1.webp" alt="">
								<span>[10BH2205] BH-57 2.45m</span>
								<button>Choose</button>
							</div>
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
							<label for="">Product width, mm How to measure?</label>
							<input type="number" name="" id="" value="500">
						</div>

						<div>
							<label for="">Fabric width, mm How to measure?</label>
							<input type="number" name="" id="" value="465">
						</div>

						<div>
							<label for="">Product height, mm How to measure?</label>
							<input type="number" name="" id="" value="500">
						</div>
					</div>

					<div class="intero-input-col3">
						<div>
							<label for="">Fabric height, mm How to measure?</label>
							<input type="number" name="" id="" value="490">
						</div>

						<div>
							<label for="">Mechanism color</label>
							<select id="collect_list">
								<option value="">White</option>
								<option value="">Red</option>
								<option value="">Blue</option>
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
						<button>ADD TO CART</button>
					</div>
				</div>
			</div>
		</section>


		<?php
	}
}
