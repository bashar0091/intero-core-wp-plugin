<?php
class intero_product_single_widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'intero_product_single_widget';
	}

	public function get_title() {
		return esc_html__( 'Elementor Input Fields+ for WooCommerce', 'intero' );
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

		$this->add_control(
			'multiple_input_list',
			[
				'label' => esc_html__( 'Input Field List', 'intero' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => [
					[
						'name' => 'input_field_label',
						'label' => esc_html__( 'Label', 'intero' ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'default' => esc_html__( 'Patalpų plotas m2' , 'intero' ),
						'label_block' => true,
					],
					[
						'name' => 'input_field_type',
						'label' => esc_html__( 'Type', 'intero' ),
						'type' => \Elementor\Controls_Manager::SELECT,
						'options' => [
							'text' => esc_html__( 'Text', 'intero' ),
							'number' => esc_html__( 'Number', 'intero' ),
							'email' => esc_html__( 'Email', 'intero' ),
						],
					],
					[
						'name' => 'input_field_required',
						'label' => esc_html__( 'Require', 'intero' ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Yes', 'intero' ),
						'label_off' => esc_html__( 'No', 'intero' ),
						'return_value' => 'yes',
						'default' => 'yes',
					],
					[
						'name' => 'input_field_column',
						'label' => esc_html__( 'Column', 'intero' ),
						'type' => \Elementor\Controls_Manager::SELECT,
						'default' => '',
						'options' => [
							'col3' => esc_html__( 'Col 3', 'intero' ),
							'col2' => esc_html__( 'Col 2', 'intero' ),
							'col1' => esc_html__( 'Col 1', 'intero' ),
						],
					],
					[
						'name' => 'input_field_color',
						'label' => esc_html__( 'Show Color Field', 'intero' ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', 'intero' ),
						'label_off' => esc_html__( 'Hide', 'intero' ),
						'return_value' => 'yes',
						'default' => 'no',
					],
					[
						'name' => 'input_field_textarea',
						'label' => esc_html__( 'Show TextArea', 'intero' ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', 'intero' ),
						'label_off' => esc_html__( 'Hide', 'intero' ),
						'return_value' => 'yes',
						'default' => 'no',
					],
					[
						'name' => 'input_field_select',
						'label' => esc_html__( 'Show Multiple Option Field', 'intero' ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', 'intero' ),
						'label_off' => esc_html__( 'Hide', 'intero' ),
						'return_value' => 'yes',
						'default' => 'no',
					],
					[
						'name' => 'input_field_select_value',
						'label' => esc_html__( 'Multiple Option Value', 'intero' ),
						'type' => \Elementor\Controls_Manager::TEXTAREA,
						'label_block' => true,
					],
				],
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

		<?php require_once('partials/product-single.php');?>

		
		<?php
	}
}
