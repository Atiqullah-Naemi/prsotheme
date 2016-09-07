<?php

/*
        =====================
          THEME CUSTOMIZER   
        =====================
*/
function prso_customizer($wp_customize)
{
	$wp_customize->add_section('about', array(
			'title'                => __('Customize About Area', 'prsotheme'),
			'priority'             => 100,
		));

	//About Us Control (Enable/Disable)
	$wp_customize->add_setting('about_control', array(
			'default'           => '1',
			'sanitize_callback' => 'esc_url_raw',
			'type'              => 'theme_mod',
		));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
		'about_control', array(
				'label'             => __('Enable/Disable About Section', 'prsotheme'),
				'section'           => 'about',
				'settings'          => 'about_control',
				'type'              => 'checkbox',
			)));

	//About Us Background Control (Enable/Disable)
	$wp_customize->add_setting('about_bgcontrol', array(
			'default'           => '1',
			'sanitize_callback' => 'esc_url_raw',
			'type'              => 'theme_mod',
		));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
		'about_bgcontrol', array(
				'label'             => __('Enable/Disable About Background', 'prsotheme'),
				'section'           => 'about',
				'settings'          => 'about_bgcontrol',
				'type'              => 'checkbox',
			)));


	//About Us Title
	$wp_customize->add_setting('about_title', array(
			'default'                   => _x('About Us', '', 'prsotheme'),
			'sanitize_callback' 		=> 'sanitize_text_field',
			'type'                      => 'theme_mod',
		));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
		'about_title', array(
				'label'              => __('Enter Title: ', 'prsotheme'),
				'section'            => 'about',
				'settings'           => 'about_title',
			)));

	//About Us Content
	$wp_customize->add_setting('about_text', array(
			'default'                   => _x('We are a team of developers', '', 'prsotheme'),
			'sanitize_callback'         => 'esc_textarea',
			'type'                      => 'theme_mod',
		));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
		'about_text', array(
				'label'              => __('Enter Content: ', 'prsotheme'),
				'section'            => 'about',
				'settings'           => 'about_text',
				'type'               => 'textarea',
			)));

	//About Us Background
	$wp_customize->add_setting('about_bg', array(
			'default'          => get_template_directory_uri().'/images/bg.jpg',
			'sanitize_callback' => 'esc_url_raw',
			'type'             => 'theme_mod',
		));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,
		'about_bg', array(
				'label'             => __('Select Background Image', 'prsotheme'),
				'section'           => 'about',
				'settings'          => 'about_bg',
			)));

	//About Us Button
	$wp_customize->add_setting('about_btn', array(
			'default'           => _x('Call Now', '', 'prsotheme'),
			'sanitize_callback' => 'sanitize_text_field',
			'type'              => 'theme_mod',
		));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
		'about_btn', array(
				'label'             => __('Button Text', 'prsotheme'),
				'section'           => 'about',
				'settings'          => 'about_btn',
			)));

	//About Us Button URL
	$wp_customize->add_setting('about_btnurl', array(
			'default'           => _x('https://au.linkedin.com/in/atiqullah-naemi-2a4b6a99', '', 'prsotheme'),
			'sanitize_callback' => 'esc_url_raw',
			'type'              => 'theme_mod',
		));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
		'about_btnurl', array(
				'label'             => __('Button URL', 'prsotheme'),
				'section'           => 'about',
				'settings'          => 'about_btnurl',
			)));

	/* more news section */
	$wp_customize->add_section('morenews', array(
			'title'         => __('Customize More News Section', 'prsotheme'),
			'priority'      => 110
		));

	//More News Content
	$wp_customize->add_setting('more_text', array(
			'default'                   => _x('Read more news', '', 'prsotheme'),
			'sanitize_callback'         => 'esc_textarea',
			'type'                      => 'theme_mod',
		));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
		'more_text', array(
				'label'              => __('Enter Content: ', 'prsotheme'),
				'section'            => 'morenews',
				'settings'           => 'more_text',
				'type'               => 'textarea',
			)));

	//Morenews Button
	$wp_customize->add_setting('more_btn', array(
			'default'           => _x('Read More', '', 'prsotheme'),
			'sanitize_callback' => 'sanitize_text_field',
			'type'              => 'theme_mod',
		));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
		'more_btn', array(
				'label'             => __('Button Text', 'prsotheme'),
				'section'           => 'morenews',
				'settings'          => 'more_btn',
			)));

	//Morenews Button URL
	$wp_customize->add_setting('more_btnurl', array(
			'default'           => _x('https://au.linkedin.com/in/atiqullah-naemi-2a4b6a99', '', 'prsotheme'),
			'sanitize_callback' => 'esc_url_raw',
			'type'              => 'theme_mod',
		));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize,
		'more_btnurl', array(
				'label'             => __('Button URL', 'prsotheme'),
				'section'           => 'morenews',
				'settings'          => 'more_btnurl',
			)));

}
add_action('customize_register', 'prso_customizer');

