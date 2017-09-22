<?php 
function forta_master_customizer( $wp_customize ) {

	// Customizer Sections
	// Company Information
	$wp_customize->add_section( 'forta_master_companyinfo_section' , array(
	    'title'       => __( 'Company Information', 'forta_master' ),
	    'priority'    => 10,
	    'description' => 'Enter company information',
	) );
	// Accent Color
	$wp_customize->add_section( 'forta_master_color_section' , array(
	    'title'       => __( 'Site Accent Color', 'forta_master' ),
	    'priority'    => 30,
	    'description' => 'Here you can adjust the site accent color',
	) );
	// Social Media
	$wp_customize->add_section( 'forta_master_social_section' , array(
	    'title'       => __( 'Social Media', 'forta_master' ),
	    'priority'    => 30,
	    'description' => 'Add your social media links and icons',
	) );
	// Privacy Policy
	$wp_customize->add_section( 'forta_master_privacy_section' , array(
	    'title'       => __( 'Privacy Policy', 'forta_master' ),
	    'priority'    => 30,
	    'description' => 'Add your Privacy Policy link here',
	) );
	// Product Pages
	$wp_customize->add_section( 'forta_master_product_section' , array(
	    'title'       => __( 'Product Pages', 'forta_master' ),
	    'priority'    => 30,
	    'description' => 'Product Page common elements',
	) );

	// Remove default sections
	$wp_customize->remove_section( 'colors' );
	$wp_customize->remove_section( 'header_image' );
	$wp_customize->remove_section( 'background_image' );
	$wp_customize->remove_section( 'static_front_page' );
	$wp_customize->remove_panel( 'widgets' );


	// Customizer Settings
	// Company Information
	$wp_customize->add_setting( 'forta_master_companyinfo_section', array( 'default' => __( '' ), 'forta_master' ) );
	$wp_customize->add_setting( 'forta_master_company_street', array( 'default' => __( '' ), 'forta_master' ) );
	$wp_customize->add_setting( 'forta_master_company_city', array( 'default' => __( '' ), 'forta_master' ) );
	$wp_customize->add_setting( 'forta_master_company_state', array( 'default' => __( '' ), 'forta_master' ) );
	$wp_customize->add_setting( 'forta_master_company_zip', array( 'default' => __( '' ), 'forta_master' ) );
	$wp_customize->add_setting( 'forta_master_company_country', array( 'default' => __( '' ), 'forta_master' ) );
	$wp_customize->add_setting( 'forta_master_company_phone', array( 'default' => __( '' ), 'forta_master' ) );
	$wp_customize->add_setting( 'forta_master_company_tollfree', array( 'default' => __( '' ), 'forta_master' ) );
	$wp_customize->add_setting( 'forta_master_company_fax', array( 'default' => __( '' ), 'forta_master' ) );
	$wp_customize->add_setting( 'forta_master_company_email', array( 'default' => __( '' ), 'forta_master' ) );
	$wp_customize->add_setting( 'forta_master_company_snippet', array( 'default' => __( '' ), 'forta_master' ) );
	//  Accent Color
	$wp_customize->add_setting( 'forta_master_accent_color', array( 'default' => '' ));
	// Social Media
	$wp_customize->add_setting( 'forta_master_social' );
	$wp_customize->add_setting( 'forta_master_social_facebook_link', array( 'default' => __( '' ), 'forta_master' ) );
	$wp_customize->add_setting( 'forta_master_social_twitter_link', array( 'default' => __( '' ), 'forta_master' ) );
	$wp_customize->add_setting( 'forta_master_social_gplus_link', array( 'default' => __( '' ), 'forta_master' ) );
	$wp_customize->add_setting( 'forta_master_social_linkedin_link', array( 'default' => __( '' ), 'forta_master' ) );
	$wp_customize->add_setting( 'forta_master_social_youtube_link', array( 'default' => __( '' ), 'forta_master' ) );
	$wp_customize->add_setting( 'forta_master_social_vimeo_link', array( 'default' => __( '' ), 'forta_master' ) );
	$wp_customize->add_setting( 'forta_master_social_pinterest_link', array( 'default' => __( '' ), 'forta_master' ) );
	// Privacy Policy
	$wp_customize->add_setting( 'forta_privacy_policy' );

	// Product Pages
	$wp_customize->add_setting( 'forta_master_products' );
	$wp_customize->add_setting( 'forta_master_products_image', array( 'default' => __( '' ), 'forta_master' ) );
	$wp_customize->add_setting( 'forta_master_small_text', array( 'default' => __( '' ), 'forta_master' ) );
	$wp_customize->add_setting( 'forta_master_large_top_text', array( 'default' => __( '' ), 'forta_master' ) );
	$wp_customize->add_setting( 'forta_master_large_bottom_text', array( 'default' => __( '' ), 'forta_master' ) );
	$wp_customize->add_setting( 'forta_master_button_text', array( 'default' => __( '' ), 'forta_master' ) );
	$wp_customize->add_setting( 'forta_master_button_link', array( 'default' => __( '' ), 'forta_master' ) );

	// Customizer Controls
	// Company Information
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_master_company_street', array(
	    'label'    => __( 'Street Address', 'forta_master' ),
	    'section'  => 'forta_master_companyinfo_section',
	    'settings' => 'forta_master_company_street',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_master_company_city', array(
	    'label'    => __( 'City', 'forta_master' ),
	    'section'  => 'forta_master_companyinfo_section',
	    'settings' => 'forta_master_company_city',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_master_company_state', array(
	    'label'    => __( 'State', 'forta_master' ),
	    'section'  => 'forta_master_companyinfo_section',
	    'settings' => 'forta_master_company_state',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_master_company_zip', array(
	    'label'    => __( 'Zip Code', 'forta_master' ),
	    'section'  => 'forta_master_companyinfo_section',
	    'settings' => 'forta_master_company_zip',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_master_company_country', array(
	    'label'    => __( 'Country', 'forta_master' ),
	    'section'  => 'forta_master_companyinfo_section',
	    'settings' => 'forta_master_company_country',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_master_company_phone', array(
	    'label'    => __( 'Local Phone', 'forta_master' ),
	    'section'  => 'forta_master_companyinfo_section',
	    'settings' => 'forta_master_company_phone',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_master_company_tollfree', array(
	    'label'    => __( 'Toll Free Phone', 'forta_master' ),
	    'section'  => 'forta_master_companyinfo_section',
	    'settings' => 'forta_master_company_tollfree',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_master_company_fax', array(
	    'label'    => __( 'Fax', 'forta_master' ),
	    'section'  => 'forta_master_companyinfo_section',
	    'settings' => 'forta_master_company_fax',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_master_company_email', array(
	    'label'    => __( 'Email', 'forta_master' ),
	    'section'  => 'forta_master_companyinfo_section',
	    'settings' => 'forta_master_company_email',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_master_company_snippet', array(
	    'label'    => __( 'Snippet', 'forta_master' ),
	    'section'  => 'forta_master_companyinfo_section',
	    'settings' => 'forta_master_company_snippet',
	    'type'	   => 'textarea',
	) ) );

	// Social Media
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_master_social_facebook_link', array(
	    'label'    => __( 'Facebook Link', 'forta_master' ),
	    'section'  => 'forta_master_social_section',
	    'settings' => 'forta_master_social_facebook_link',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_master_social_twitter_link', array(
	    'label'    => __( 'Twitter Link', 'forta_master' ),
	    'section'  => 'forta_master_social_section',
	    'settings' => 'forta_master_social_twitter_link',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_master_social_gplus_link', array(
	    'label'    => __( 'Google Plus Link', 'forta_master' ),
	    'section'  => 'forta_master_social_section',
	    'settings' => 'forta_master_social_gplus_link',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_master_social_linkedin_link', array(
	    'label'    => __( 'LinkedIn Link', 'forta_master' ),
	    'section'  => 'forta_master_social_section',
	    'settings' => 'forta_master_social_linkedin_link',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_master_social_youtube_link', array(
	    'label'    => __( 'YouTube Link', 'forta_master' ),
	    'section'  => 'forta_master_social_section',
	    'settings' => 'forta_master_social_youtube_link',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_master_social_vimeo_link', array(
	    'label'    => __( 'Vimeo Link', 'forta_master' ),
	    'section'  => 'forta_master_social_section',
	    'settings' => 'forta_master_social_vimeo_link',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_master_social_pinterest_link', array(
	    'label'    => __( 'Pinterest Link', 'forta_master' ),
	    'section'  => 'forta_master_social_section',
	    'settings' => 'forta_master_social_pinterest_link',
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'forta_master_accent_color', array(
	'label'      => __( 'Accent Color', 'forta_master' ),
	'section'    => 'forta_master_color_section',
	'settings'   => 'forta_master_accent_color',
	) ) );

	// Privacy Policy
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_privacy_policy', array(
	    'label'    => __( 'Privacy Policy Link', 'forta_master' ),
	    'section'  => 'forta_master_privacy_section',
	    'settings' => 'forta_privacy_policy',
	) ) );

	// Product Pages
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'forta_master_products_image', array(
		'description' => __( 'Upload the image that will be used as the background' ),
	    'label'    => __( 'Call To Action Image', 'forta_master' ),
	    'section'  => 'forta_master_product_section',
	    'settings' => 'forta_master_products_image',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_master_small_text', array(
	    'label'    => __( 'Call To Action Small Text', 'forta_master' ),
	    'section'  => 'forta_master_product_section',
	    'settings' => 'forta_master_small_text',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_master_large_top_text', array(
	    'label'    => __( 'Call To Action Large Text 1st Line', 'forta_master' ),
	    'section'  => 'forta_master_product_section',
	    'settings' => 'forta_master_large_top_text',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_master_large_bottom_text', array(
	    'label'    => __( 'Call To Action Large Text 2nd Line', 'forta_master' ),
	    'section'  => 'forta_master_product_section',
	    'settings' => 'forta_master_large_bottom_text',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_master_button_text', array(
	    'label'    => __( 'Call To Action Button Text', 'forta_master' ),
	    'section'  => 'forta_master_product_section',
	    'settings' => 'forta_master_button_text',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_master_button_link', array(
	    'label'    => __( 'Call To Action Button Link', 'forta_master' ),
	    'section'  => 'forta_master_product_section',
	    'settings' => 'forta_master_button_link',
	) ) );
}

add_action( 'customize_register', 'forta_master_customizer' );