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
		'default' => __('Learn more', 'moduler'),
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



	//First Element Percentage:
	$wp_customize->add_setting('expertise_1st_element_persentage', array(
		'default' => __('60', 'moduler'),
		'type' => 'theme_mod',
	));

	$wp_customize->add_control('expertise_1st_element_persentage', array(
		'label' => __('First Element Percentage:', 'moduler'),
		'section' => 'Expertise',
		'priority' => '3'
	));




	//Second Element Name:
	$wp_customize->add_setting('expertise_2nd_element', array(
		'default' => __('Bootstrap:', 'moduler'),
		'type' => 'theme_mod',
	));

	$wp_customize->add_control('expertise_2nd_element', array(
		'label' => __('Second Element Name:', 'moduler'),
		'section' => 'Expertise',
		'priority' => '4'
	));




	//Second Element Percentage:
	$wp_customize->add_setting('expertise_2nd_element_persentage', array(
		'default' => __('70', 'moduler'),
		'type' => 'theme_mod',
	));

	$wp_customize->add_control('expertise_2nd_element_persentage', array(
		'label' => __('Second Element Percentage:', 'moduler'),
		'section' => 'Expertise',
		'priority' => '5'
	));




	//Third Element Name:
	$wp_customize->add_setting('expertise_3rd_element', array(
		'default' => __('PHP:', 'moduler'),
		'type' => 'theme_mod',
	));

	$wp_customize->add_control('expertise_3rd_element', array(
		'label' => __('Third Element Name:', 'moduler'),
		'section' => 'Expertise',
		'priority' => '6'
	));



	//Third Element Percentage:
	$wp_customize->add_setting('expertise_3rd_element_persentage', array(
		'default' => __('80', 'moduler'),
		'type' => 'theme_mod',
	));

	$wp_customize->add_control('expertise_3rd_element_persentage', array(
		'label' => __('Third Element Percentage:', 'moduler'),
		'section' => 'Expertise',
		'priority' => '7'
	));



	//Fourth Element Name:
	$wp_customize->add_setting('expertise_4th_element', array(
		'default' => __('Photoshop:', 'moduler'),
		'type' => 'theme_mod',
	));

	$wp_customize->add_control('expertise_4th_element', array(
		'label' => __('Fourth Element Name:', 'moduler'),
		'section' => 'Expertise',
		'priority' => '8'
	));



	//Fourth Element Percentage:
	$wp_customize->add_setting('expertise_4th_element_persentage', array(
		'default' => __('90', 'moduler'),
		'type' => 'theme_mod',
	));

	$wp_customize->add_control('expertise_4th_element_persentage', array(
		'label' => __('Fourth Element Percentage:', 'moduler'),
		'section' => 'Expertise',
		'priority' => '9'
	));



}

add_action('customize_register', 'moduler_customize_register_expertise');
















function moduler_customize_register_client_area($wp_customize) {


	//registering section -> Client Area
	$wp_customize->add_section('Client', array(
		'title'	=>	__('Client Area', 'moduler'),
		'description'	=>	__('Client Area Options', 'moduler'),
		'priority'	=>	'150',
	));



	//Title
	$wp_customize->add_setting('client_main_title', array(
		'default' => __('What Our Clients Say', 'moduler'),
		'type' => 'theme_mod',
	));

	$wp_customize->add_control('client_main_title', array(
		'label' => __('Title', 'moduler'),
		'section' => 'Client',
		'priority' => '1'
	));


	//Client 01

		//Image
		$wp_customize->add_setting('client_1_img', array(
			'default' => get_bloginfo('template_directory'). '/assets/placeholder_face.png',
			'type' => 'theme_mod',
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'client_1_img', array(
			'label' => __('Client 01 Image:', 'moduler'),
			'section' => 'Client',
			'priority' => '2'
		)));



		//Name
		$wp_customize->add_setting('client_1_name', array(
			'default' => __('Tasnimul H. Tauhid', 'moduler'),
			'type' => 'theme_mod',
		));

		$wp_customize->add_control('client_1_name', array(
			'label' => __('Client 01 Name:', 'moduler'),
			'section' => 'Client',
			'priority' => '3'
		));

		//Text
		$wp_customize->add_setting('client_1_text', array(
			'default' => __('Some quick example text to build on the card title and make up the bulk of the cards content.', 'moduler'),
			'type' => 'theme_mod',
		));

		$wp_customize->add_control('client_1_text', array(
			'label' => __('Client 01 Text:', 'moduler'),
			'section' => 'Client',
			'priority' => '4'
		));



	//Client 02

		//Image
		$wp_customize->add_setting('client_2_img', array(
			'default' => get_bloginfo('template_directory'). '/assets/placeholder_face.png',
			'type' => 'theme_mod',
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'client_2_img', array(
			'label' => __('Client 02 Image:', 'moduler'),
			'section' => 'Client',
			'priority' => '5'
		)));



		//Name
		$wp_customize->add_setting('client_2_name', array(
			'default' => __('Tasnimul H. Tauhid', 'moduler'),
			'type' => 'theme_mod',
		));

		$wp_customize->add_control('client_2_name', array(
			'label' => __('Client 02 Name:', 'moduler'),
			'section' => 'Client',
			'priority' => '6'
		));

		//Text
		$wp_customize->add_setting('client_2_text', array(
			'default' => __('Some quick example text to build on the card title and make up the bulk of the cards content.', 'moduler'),
			'type' => 'theme_mod',
		));

		$wp_customize->add_control('client_2_text', array(
			'label' => __('Client 02 Text:', 'moduler'),
			'section' => 'Client',
			'priority' => '7'
		));



	//Client 03

		//Image
		$wp_customize->add_setting('client_3_img', array(
			'default' => get_bloginfo('template_directory'). '/assets/placeholder_face.png',
			'type' => 'theme_mod',
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'client_3_img', array(
			'label' => __('Client 03 Image:', 'moduler'),
			'section' => 'Client',
			'priority' => '8'
		)));



		//Name
		$wp_customize->add_setting('client_3_name', array(
			'default' => __('Tasnimul H. Tauhid', 'moduler'),
			'type' => 'theme_mod',
		));

		$wp_customize->add_control('client_3_name', array(
			'label' => __('Client 03 Name:', 'moduler'),
			'section' => 'Client',
			'priority' => '9'
		));

		//Text
		$wp_customize->add_setting('client_3_text', array(
			'default' => __('Some quick example text to build on the card title and make up the bulk of the cards content.', 'moduler'),
			'type' => 'theme_mod',
		));

		$wp_customize->add_control('client_3_text', array(
			'label' => __('Client 03 Text:', 'moduler'),
			'section' => 'Client',
			'priority' => '10'
		));





}

add_action('customize_register', 'moduler_customize_register_client_area');