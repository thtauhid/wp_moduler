<?php 

function moduler_customize_register_header($wp_customize) {


	//registering section -> Header
	$wp_customize->add_section('moduler_Header', array(
		'title'	=>	__('Header', 'moduler'),
		'description'	=>	__('Header Options', 'moduler'),
		'priority'	=>	'130',
	));



	//Main Title
	$wp_customize->add_setting('moduler_main_title', array(
		'default' => __('Hello, world!', 'moduler'),
		'type' => 'theme_mod',
	));

	$wp_customize->add_control('moduler_main_title', array(
		'label' => __('Title', 'moduler'),
		'section' => 'moduler_Header',
		'priority' => '1'
	));



	//Below Title
	$wp_customize->add_setting('moduler_below_title', array(
		'default' => __('This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.', 'moduler'),
		'type' => 'theme_mod',
	));

	$wp_customize->add_control('moduler_below_title', array(
		'label' => __('Below title', 'moduler'),
		'section' => 'moduler_Header',
		'priority' => '2'
	));





	//Main Text
	$wp_customize->add_setting('moduler_main_text', array(
		'default' => __('It uses utility classes for typography and spacing to space content out within the larger container.', 'moduler'),
		'type' => 'theme_mod',
	));

	$wp_customize->add_control('moduler_main_text', array(
		'label' => __('Main Text', 'moduler'),
		'section' => 'moduler_Header',
		'priority' => '3'
	));






	//Button Text
	$wp_customize->add_setting('moduler_button_text', array(
		'default' => __('Learn more', 'moduler'),
		'type' => 'theme_mod',
	));

	$wp_customize->add_control('moduler_button_text', array(
		'label' => __('Button Text', 'moduler'),
		'section' => 'moduler_Header',
		'priority' => '4'
	));






	//Button URL
	$wp_customize->add_setting('moduler_button_url', array(
		'default' => __('#', 'moduler'),
		'type' => 'theme_mod',
	));

	$wp_customize->add_control('moduler_button_url', array(
		'label' => __('Button URL', 'moduler'),
		'section' => 'moduler_Header',
		'priority' => '5'
	));

}

add_action('customize_register', 'moduler_customize_register_header');

function moduler_customize_register_expertise($wp_customize) {


	//registering section -> Expertise
	$wp_customize->add_section('moduler_Expertise', array(
		'title'	=>	__('Expertise', 'moduler'),
		'description'	=>	__('Expertise Options', 'moduler'),
		'priority'	=>	'131',
	));



	//Title
	$wp_customize->add_setting('moduler_expertise_main_title', array(
		'default' => __('Our Expertise', 'moduler'),
		'type' => 'theme_mod',
	));

	$wp_customize->add_control('moduler_expertise_main_title', array(
		'label' => __('Title', 'moduler'),
		'section' => 'moduler_Expertise',
		'priority' => '1'
	));


	//First Element Name:
	$wp_customize->add_setting('moduler_expertise_1st_element', array(
		'default' => __('HTML & CSS:', 'moduler'),
		'type' => 'theme_mod',
	));

	$wp_customize->add_control('moduler_expertise_1st_element', array(
		'label' => __('First Element Name:', 'moduler'),
		'section' => 'moduler_Expertise',
		'priority' => '2'
	));



	//First Element Percentage:
	$wp_customize->add_setting('moduler_expertise_1st_element_persentage', array(
		'default' => '60',
		'type' => 'theme_mod',
	));

	$wp_customize->add_control('moduler_expertise_1st_element_persentage', array(
		'label' => __('First Element Percentage:', 'moduler'),
		'section' => 'moduler_Expertise',
		'priority' => '3'
	));




	//Second Element Name:
	$wp_customize->add_setting('moduler_expertise_2nd_element', array(
		'default' => __('Bootstrap:', 'moduler'),
		'type' => 'theme_mod',
	));

	$wp_customize->add_control('moduler_expertise_2nd_element', array(
		'label' => __('Second Element Name:', 'moduler'),
		'section' => 'moduler_Expertise',
		'priority' => '4'
	));




	//Second Element Percentage:
	$wp_customize->add_setting('moduler_expertise_2nd_element_persentage', array(
		'default' => '70',
		'type' => 'theme_mod',
	));

	$wp_customize->add_control('moduler_expertise_2nd_element_persentage', array(
		'label' => __('Second Element Percentage:', 'moduler'),
		'section' => 'moduler_Expertise',
		'priority' => '5'
	));




	//Third Element Name:
	$wp_customize->add_setting('moduler_expertise_3rd_element', array(
		'default' => __('PHP:', 'moduler'),
		'type' => 'theme_mod',
	));

	$wp_customize->add_control('moduler_expertise_3rd_element', array(
		'label' => __('Third Element Name:', 'moduler'),
		'section' => 'moduler_Expertise',
		'priority' => '6'
	));



	//Third Element Percentage:
	$wp_customize->add_setting('moduler_expertise_3rd_element_persentage', array(
		'default' => '80',
		'type' => 'theme_mod',
	));

	$wp_customize->add_control('moduler_expertise_3rd_element_persentage', array(
		'label' => __('Third Element Percentage:', 'moduler'),
		'section' => 'moduler_Expertise',
		'priority' => '7'
	));



	//Fourth Element Name:
	$wp_customize->add_setting('moduler_expertise_4th_element', array(
		'default' => __('Photoshop:', 'moduler'),
		'type' => 'theme_mod',
	));

	$wp_customize->add_control('moduler_expertise_4th_element', array(
		'label' => __('Fourth Element Name:', 'moduler'),
		'section' => 'moduler_Expertise',
		'priority' => '8'
	));



	//Fourth Element Percentage:
	$wp_customize->add_setting('moduler_expertise_4th_element_persentage', array(
		'default' => '90',
		'type' => 'theme_mod',
	));

	$wp_customize->add_control('moduler_expertise_4th_element_persentage', array(
		'label' => __('Fourth Element Percentage:', 'moduler'),
		'section' => 'moduler_Expertise',
		'priority' => '9'
	));



}

add_action('customize_register', 'moduler_customize_register_expertise');


function moduler_customize_register_client_area($wp_customize) {


	//registering section -> Client Area
	$wp_customize->add_section('moduler_Client', array(
		'title'	=>	__('Client Area', 'moduler'),
		'description'	=>	__('Client Area Options', 'moduler'),
		'priority'	=>	'132',
	));



	//Title
	$wp_customize->add_setting('moduler_client_main_title', array(
		'default' => __('What Our Clients Say', 'moduler'),
		'type' => 'theme_mod',
	));

	$wp_customize->add_control('moduler_client_main_title', array(
		'label' => __('Title', 'moduler'),
		'section' => 'moduler_Client',
		'priority' => '1'
	));


	//Client 01

		//Image
		$wp_customize->add_setting('moduler_client_1_img', array(
			'default' => esc_url( get_template_directory_uri() ). '/assets/placeholder_face.png',
			'type' => 'theme_mod',
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'moduler_client_1_img', array(
			'label' => __('Client 01 Image:', 'moduler'),
			'section' => 'moduler_Client',
			'priority' => '2'
		)));



		//Name
		$wp_customize->add_setting('moduler_client_1_name', array(
			'default' => __('Tasnimul H. Tauhid', 'moduler'),
			'type' => 'theme_mod',
		));

		$wp_customize->add_control('moduler_client_1_name', array(
			'label' => __('Client 01 Name:', 'moduler'),
			'section' => 'moduler_Client',
			'priority' => '3'
		));

		//Text
		$wp_customize->add_setting('moduler_client_1_text', array(
			'default' => __('Some quick example text to build on the card title and make up the bulk of the cards content.', 'moduler'),
			'type' => 'theme_mod',
		));

		$wp_customize->add_control('moduler_client_1_text', array(
			'label' => __('Client 01 Text:', 'moduler'),
			'section' => 'moduler_Client',
			'priority' => '4'
		));



	//Client 02

		//Image
		$wp_customize->add_setting('moduler_client_2_img', array(
			'default' => esc_url( get_template_directory_uri() ). '/assets/placeholder_face.png',
			'type' => 'theme_mod',
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'moduler_client_2_img', array(
			'label' => __('Client 02 Image:', 'moduler'),
			'section' => 'moduler_Client',
			'priority' => '5'
		)));



		//Name
		$wp_customize->add_setting('moduler_client_2_name', array(
			'default' => __('Tasnimul H. Tauhid', 'moduler'),
			'type' => 'theme_mod',
		));

		$wp_customize->add_control('moduler_client_2_name', array(
			'label' => __('Client 02 Name:', 'moduler'),
			'section' => 'moduler_Client',
			'priority' => '6'
		));

		//Text
		$wp_customize->add_setting('moduler_client_2_text', array(
			'default' => __('Some quick example text to build on the card title and make up the bulk of the cards content.', 'moduler'),
			'type' => 'theme_mod',
		));

		$wp_customize->add_control('moduler_client_2_text', array(
			'label' => __('Client 02 Text:', 'moduler'),
			'section' => 'moduler_Client',
			'priority' => '7'
		));



	//Client 03

		//Image
		$wp_customize->add_setting('moduler_client_3_img', array(
			'default' => esc_url( get_template_directory_uri() ). '/assets/placeholder_face.png',
			'type' => 'theme_mod',
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'moduler_client_3_img', array(
			'label' => __('Client 03 Image:', 'moduler'),
			'section' => 'moduler_Client',
			'priority' => '8'
		)));



		//Name
		$wp_customize->add_setting('moduler_client_3_name', array(
			'default' => __('Tasnimul H. Tauhid', 'moduler'),
			'type' => 'theme_mod',
		));

		$wp_customize->add_control('moduler_client_3_name', array(
			'label' => __('Client 03 Name:', 'moduler'),
			'section' => 'moduler_Client',
			'priority' => '9'
		));

		//Text
		$wp_customize->add_setting('moduler_client_3_text', array(
			'default' => __('Some quick example text to build on the card title and make up the bulk of the cards content.', 'moduler'),
			'type' => 'theme_mod',
		));

		$wp_customize->add_control('moduler_client_3_text', array(
			'label' => __('Client 03 Text:', 'moduler'),
			'section' => 'moduler_Client',
			'priority' => '10'
		));

}

add_action('customize_register', 'moduler_customize_register_client_area');



function moduler_customize_register_our_team($wp_customize) {


	//registering section -> Our Team
	$wp_customize->add_section('moduler_Team', array(
		'title'	=>	__('Our Team', 'moduler'),
		'description'	=>	__('Our Team Options', 'moduler'),
		'priority'	=>	'133',
	));



	//Title
	$wp_customize->add_setting('moduler_our_team_main_title', array(
		'default' => __('Our Awesome Team', 'moduler'),
		'type' => 'theme_mod',
	));

	$wp_customize->add_control('moduler_our_team_main_title', array(
		'label' => __('Title', 'moduler'),
		'section' => 'moduler_Team',
		'priority' => '1'
	));


	//Team member 01

		//Image
		$wp_customize->add_setting('moduler_team_member_1_img', array(
			'default' => esc_url( get_template_directory_uri() ). '/assets/placeholder_face.png',
			'type' => 'theme_mod',
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'moduler_team_member_1_img', array(
			'label' => __('Team Memmber 01 Image:', 'moduler'),
			'section' => 'moduler_Team',
			'priority' => '2'
		)));



		//Name
		$wp_customize->add_setting('moduler_team_member_1_name', array(
			'default' => __('Tasnimul H. Tauhid', 'moduler'),
			'type' => 'theme_mod',
		));

		$wp_customize->add_control('moduler_team_member_1_name', array(
			'label' => __('Team Member 01 Name:', 'moduler'),
			'section' => 'moduler_Team',
			'priority' => '3'
		));



		//Designation
		$wp_customize->add_setting('moduler_team_member_1_designation', array(
			'default' => __('Web Developer', 'moduler'),
			'type' => 'theme_mod',
		));

		$wp_customize->add_control('moduler_team_member_1_designation', array(
			'label' => __('Team Member 01 Designation:', 'moduler'),
			'section' => 'moduler_Team',
			'priority' => '4'
		));



		//Text
		$wp_customize->add_setting('moduler_team_member_1_text', array(
			'default' => __('Some quick example text to build on the card title and make up the bulk of the cards content.', 'moduler'),
			'type' => 'theme_mod',
		));

		$wp_customize->add_control('moduler_team_member_1_text', array(
			'label' => __('Team Member 01 Text:', 'moduler'),
			'section' => 'Team',
			'priority' => '5'
		));


		//FB
		$wp_customize->add_setting('moduler_team_member_1_facebook', array(
			'default' => __('', 'moduler'),
			'type' => 'theme_mod',
		));

		$wp_customize->add_control('moduler_team_member_1_facebook', array(
			'label' => __('Team Member 01 FB ID:', 'moduler'),
			'section' => 'moduler_Team',
			'priority' => '6'
		));




		//Twitter
		$wp_customize->add_setting('moduler_team_member_1_twitter', array(
			'default' => __('', 'moduler'),
			'type' => 'theme_mod',
		));

		$wp_customize->add_control('moduler_team_member_1_twitter', array(
			'label' => __('Team Member 01 Twitter ID:', 'moduler'),
			'section' => 'moduler_Team',
			'priority' => '7'
		));




		//Email
		$wp_customize->add_setting('moduler_team_member_1_email', array(
			'default' => __('', 'moduler'),
			'type' => 'theme_mod',
		));

		$wp_customize->add_control('moduler_team_member_1_email', array(
			'label' => __('Team Member 01 Email ID:', 'moduler'),
			'section' => 'moduler_Team',
			'priority' => '8'
		));



		//Team member 02

		//Image
		$wp_customize->add_setting('moduler_team_member_2_img', array(
			'default' => esc_url( get_template_directory_uri() ). '/assets/placeholder_face.png',
			'type' => 'theme_mod',
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'moduler_team_member_2_img', array(
			'label' => __('Team Memmber 02 Image:', 'moduler'),
			'section' => 'moduler_Team',
			'priority' => '9'
		)));



		//Name
		$wp_customize->add_setting('moduler_team_member_2_name', array(
			'default' => __('Tasnimul H. Tauhid', 'moduler'),
			'type' => 'theme_mod',
		));

		$wp_customize->add_control('moduler_team_member_2_name', array(
			'label' => __('Team Member 02 Name:', 'moduler'),
			'section' => 'moduler_Team',
			'priority' => '10'
		));



		//Designation
		$wp_customize->add_setting('moduler_team_member_2_designation', array(
			'default' => __('Web Developer', 'moduler'),
			'type' => 'theme_mod',
		));

		$wp_customize->add_control('moduler_team_member_2_designation', array(
			'label' => __('Team Member 02 Designation:', 'moduler'),
			'section' => 'moduler_Team',
			'priority' => '11'
		));



		//Text
		$wp_customize->add_setting('moduler_team_member_2_text', array(
			'default' => __('Some quick example text to build on the card title and make up the bulk of the cards content.', 'moduler'),
			'type' => 'theme_mod',
		));

		$wp_customize->add_control('moduler_team_member_2_text', array(
			'label' => __('Team Member 02 Text:', 'moduler'),
			'section' => 'moduler_Team',
			'priority' => '12'
		));


		//FB
		$wp_customize->add_setting('moduler_team_member_2_facebook', array(
			'default' => __('', 'moduler'),
			'type' => 'theme_mod',
		));

		$wp_customize->add_control('moduler_team_member_2_facebook', array(
			'label' => __('Team Member 02 FB ID:', 'moduler'),
			'section' => 'moduler_Team',
			'priority' => '13'
		));


		//Twitter
		$wp_customize->add_setting('moduler_team_member_2_twitter', array(
			'default' => __('', 'moduler'),
			'type' => 'theme_mod',
		));

		$wp_customize->add_control('moduler_team_member_2_twitter', array(
			'label' => __('Team Member 02 Twitter ID:', 'moduler'),
			'section' => 'moduler_Team',
			'priority' => '14'
		));




		//Email
		$wp_customize->add_setting('moduler_team_member_2_email', array(
			'default' => __('', 'moduler'),
			'type' => 'theme_mod',
		));

		$wp_customize->add_control('moduler_team_member_2_email', array(
			'label' => __('Team Member 02 Email ID:', 'moduler'),
			'section' => 'moduler_Team',
			'priority' => '15'
		));


		//Team member 03

		//Image
		$wp_customize->add_setting('moduler_team_member_3_img', array(
			'default' => esc_url( get_template_directory_uri() ). '/assets/placeholder_face.png',
			'type' => 'theme_mod',
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'moduler_team_member_3_img', array(
			'label' => __('Team Memmber 03 Image:', 'moduler'),
			'section' => 'moduler_Team',
			'priority' => '16'
		)));



		//Name
		$wp_customize->add_setting('moduler_team_member_3_name', array(
			'default' => __('Tasnimul H. Tauhid', 'moduler'),
			'type' => 'theme_mod',
		));

		$wp_customize->add_control('moduler_team_member_3_name', array(
			'label' => __('Team Member 03 Name:', 'moduler'),
			'section' => 'moduler_Team',
			'priority' => '17'
		));



		//Designation
		$wp_customize->add_setting('moduler_team_member_3_designation', array(
			'default' => __('Web Developer', 'moduler'),
			'type' => 'theme_mod',
		));

		$wp_customize->add_control('moduler_team_member_3_designation', array(
			'label' => __('Team Member 03 Designation:', 'moduler'),
			'section' => 'moduler_Team',
			'priority' => '18'
		));



		//Text
		$wp_customize->add_setting('moduler_team_member_3_text', array(
			'default' => __('Some quick example text to build on the card title and make up the bulk of the cards content.', 'moduler'),
			'type' => 'theme_mod',
		));

		$wp_customize->add_control('moduler_team_member_3_text', array(
			'label' => __('Team Member 03 Text:', 'moduler'),
			'section' => 'moduler_Team',
			'priority' => '19'
		));


		//FB
		$wp_customize->add_setting('moduler_team_member_3_facebook', array(
			'default' => __('', 'moduler'),
			'type' => 'theme_mod',
		));

		$wp_customize->add_control('moduler_team_member_3_facebook', array(
			'label' => __('Team Member 03 FB ID:', 'moduler'),
			'section' => 'moduler_Team',
			'priority' => '20'
		));


		//Twitter
		$wp_customize->add_setting('moduler_team_member_3_twitter', array(
			'default' => __('', 'moduler'),
			'type' => 'theme_mod',
		));

		$wp_customize->add_control('moduler_team_member_3_twitter', array(
			'label' => __('Team Member 03 Twitter ID:', 'moduler'),
			'section' => 'moduler_Team',
			'priority' => '21'
		));




		//Email
		$wp_customize->add_setting('moduler_team_member_3_email', array(
			'default' => __('', 'moduler'),
			'type' => 'theme_mod',
		));

		$wp_customize->add_control('moduler_team_member_3_email', array(
			'label' => __('Team Member 03 Email ID:', 'moduler'),
			'section' => 'moduler_Team',
			'priority' => '22'
		));
}

add_action('customize_register', 'moduler_customize_register_our_team');






function moduler_customize_register_cta($wp_customize) {


	//registering section -> CTA
	$wp_customize->add_section('CTA', array(
		'title'	=>	__('CTA', 'moduler'),
		'description'	=>	__('CTA Options', 'moduler'),
		'priority'	=>	'134',
	));



	//Title
	$wp_customize->add_setting('cta_title', array(
		'default' => __('The Call To Action Button', 'moduler'),
		'type' => 'theme_mod',
	));

	$wp_customize->add_control('moduler_cta_title', array(
		'label' => __('Title', 'moduler'),
		'section' => 'moduler_CTA',
		'priority' => '1'
	));



	//Sub Title
	$wp_customize->add_setting('cta_sub_title', array(
		'default' => __('This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.', 'moduler'),
		'type' => 'theme_mod',
	));

	$wp_customize->add_control('moduler_cta_sub_title', array(
		'label' => __('CTA Sub Title', 'moduler'),
		'section' => 'moduler_CTA',
		'priority' => '2'
	));





	//Main Text
	$wp_customize->add_setting('cta_main_text', array(
		'default' => __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>   <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>', 'moduler'),
		'type' => 'theme_mod',
	));

	$wp_customize->add_control('moduler_cta_main_text', array(
		'label' => __('Main Text', 'moduler'),
		'section' => 'moduler_CTA',
		'priority' => '3'
	));






	//Button Text
	$wp_customize->add_setting('cta_button_text', array(
		'default' => __('Check out', 'moduler'),
		'type' => 'theme_mod',
	));

	$wp_customize->add_control('moduler_cta_button_text', array(
		'label' => __('Button Text', 'moduler'),
		'section' => 'moduler_CTA',
		'priority' => '4'
	));






	//Button URL
	$wp_customize->add_setting('cta_button_url', array(
		'default' => __('#', 'moduler'),
		'type' => 'theme_mod',
	));

	$wp_customize->add_control('moduler_cta_button_url', array(
		'label' => __('Button URL', 'moduler'),
		'section' => 'moduler_CTA',
		'priority' => '5'
	));

}

add_action('customize_register', 'moduler_customize_register_cta');



function moduler_customize_register_contact($wp_customize) {


	//registering section -> Contact
	$wp_customize->add_section('Contact', array(
		'title'	=>	__('Contact', 'moduler'),
		'description'	=>	__('Contact Options:', 'moduler'),
		'priority'	=>	'137',
	));


	//Title
	$wp_customize->add_setting('contact_title', array(
		'default' => __('Contact', 'moduler'),
		'type' => 'theme_mod',
	));
 
 	$wp_customize->add_control('moduler_contact_title', array(
		'label' => __('Title:', 'moduler'),
		'section' => 'moduler_Contact',
		'priority' => '0'
	));


 		//FB
	$wp_customize->add_setting('social_media_fb', array(
		'default' => __('', 'moduler'),
		'type' => 'theme_mod',
	));

	$wp_customize->add_control('moduler_social_media_fb', array(
		'label' => __('FB Page Link:', 'moduler'),
		'section' => 'moduler_Contact',
		'priority' => '1'
	));


	//Google+
	$wp_customize->add_setting('social_media_google_plus', array(
		'default' => __('', 'moduler'),
		'type' => 'theme_mod',
	));

	$wp_customize->add_control('moduler_social_media_google_plus', array(
		'label' => __('G+ Page Link:', 'moduler'),
		'section' => 'moduler_Contact',
		'priority' => '2'
	));




	//Twitter
	$wp_customize->add_setting('social_media_twitter', array(
		'default' => __('', 'moduler'),
		'type' => 'theme_mod',
	));

	$wp_customize->add_control('moduler_social_media_twitter', array(
		'label' => __('Twitter ID Link:', 'moduler'),
		'section' => 'moduler_Contact',
		'priority' => '3'
	));


	//Linkedin
	$wp_customize->add_setting('social_media_linkedin', array(
		'default' => __('', 'moduler'),
		'type' => 'theme_mod',
	));

	$wp_customize->add_control('moduler_social_media_linkedin', array(
		'label' => __('Linkedin Link:', 'moduler'),
		'section' => 'moduler_Contact',
		'priority' => '4'
	));



	//Email : To address
	$wp_customize->add_setting('contact_email_to_address', array(
		'default' => __('', 'moduler'),
		'type' => 'theme_mod',
	));

	$wp_customize->add_control('moduler_contact_email_to_address', array(
		'label' => __('To email address:', 'moduler'),
		'section' => 'moduler_Contact',
		'priority' => '5'
	));



}

add_action('customize_register', 'moduler_customize_register_contact');