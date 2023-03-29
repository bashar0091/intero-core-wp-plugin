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
				'default' => '',
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

		<?php require_once('partials/product-single.php');?>

		
		<?php
	}
}
