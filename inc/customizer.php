<?php 

function moduler_customize_register_header($wp_customize) {


	//registering section -> Header
	$wp_customize->add_section('Header', array(
		'title'	=>	__('Header', 'moduler'),
		'description'	=>	__('Header Options', 'moduler'),
		'priority'	=>	'130',
	));



	//Main Title
	$wp_customize->add_setting('main_title', array(
		'default' => __('Hello, world!', 'moduler'),
		'type' => 'theme_mod',
	));

	$wp_customize->add_control('main_title', array(
		'label' => __('Title', 'moduler'),
		'section' => 'Header',
		'priority' => '1'
	));



	//Below Title
	$wp_customize->add_setting('below_title', array(
		'default' => __('This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.', 'moduler'),
		'type' => 'theme_mod',
	));

	$wp_customize->add_control('below_title', array(
		'label' => __('Below title', 'moduler'),
		'section' => 'Header',
		'priority' => '2'
	));





	//Main Text
	$wp_customize->add_setting('main_text', array(
		'default' => __('It uses utility classes for typography and spacing to space content out within the larger container.', 'moduler'),
		'type' => 'theme_mod',
	));

	$wp_customize->add_control('main_text', array(
		'label' => __('Main Text', 'moduler'),
		'section' => 'Header',
		'priority' => '3'
	));






	//Button Text
	$wp_customize->add_setting('button_text', array(
		'default' => __('learn more', 'moduler'),
		'type' => 'theme_mod',
	));

	$wp_customize->add_control('button_text', array(
		'label' => __('Button Text', 'moduler'),
		'section' => 'Header',
		'priority' => '4'
	));






	//Button URL
	$wp_customize->add_setting('button_url', array(
		'default' => __('#', 'moduler'),
		'type' => 'theme_mod',
	));

	$wp_customize->add_control('button_url', array(
		'label' => __('Button URL', 'moduler'),
		'section' => 'Header',
		'priority' => '5'
	));

}

add_action('customize_register', 'moduler_customize_register_header');









function moduler_customize_register_expertise($wp_customize) {


	//registering section -> Expertise
	$wp_customize->add_section('Expertise', array(
		'title'	=>	__('Expertise', 'moduler'),
		'description'	=>	__('Expertise Options', 'moduler'),
		'priority'	=>	'140',
	));



	//Title
	$wp_customize->add_setting('expertise_main_title', array(
		'default' => __('Our Expertise', 'moduler'),
		'type' => 'theme_mod',
	));

	$wp_customize->add_control('expertise_main_title', array(
		'label' => __('Title', 'moduler'),
		'section' => 'Expertise',
		'priority' => '1'
	));


	//First Element Name:
	$wp_customize->add_setting('expertise_1st_element', array(
		'default' => __('HTML & CSS:', 'moduler'),
		'type' => 'theme_mod',
	));

	$wp_customize->add_control('expertise_1st_element', array(
		'label' => __('First Element Name:', 'moduler'),
		'section' => 'Expertise',
		'priority' => '2'
	));




	//Second Element Name:
	$wp_customize->add_setting('expertise_2nd_element', array(
		'default' => __('Bootstrap:', 'moduler'),
		'type' => 'theme_mod',
	));

	$wp_customize->add_control('expertise_2nd_element', array(
		'label' => __('Second Element Name:', 'moduler'),
		'section' => 'Expertise',
		'priority' => '3'
	));




	//Third Element Name:
	$wp_customize->add_setting('expertise_3rd_element', array(
		'default' => __('PHP:', 'moduler'),
		'type' => 'theme_mod',
	));

	$wp_customize->add_control('expertise_3rd_element', array(
		'label' => __('Third Element Name:', 'moduler'),
		'section' => 'Expertise',
		'priority' => '4'
	));


	//Fourth Element Name:
	$wp_customize->add_setting('expertise_4th_element', array(
		'default' => __('Photoshop:', 'moduler'),
		'type' => 'theme_mod',
	));

	$wp_customize->add_control('expertise_4th_element', array(
		'label' => __('Fourth Element Name:', 'moduler'),
		'section' => 'Expertise',
		'priority' => '5'
	));


}

add_action('customize_register', 'moduler_customize_register_expertise');