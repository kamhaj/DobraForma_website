<?php
/**
 * Site Identity Settings
 * 
 * @package bootstrap_fitness
 */

add_action( 'customize_register', 'bootstrap_fitness_change_site_identity_panel' );

function bootstrap_fitness_change_site_identity_panel( $wp_customize)  {

    $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
    $wp_customize->get_control( 'blogname' )->priority = 5;
    $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
    $wp_customize->get_control( 'blogdescription' )->priority = 7;

    $wp_customize->get_section( 'static_front_page' )->priority = 20;

    $wp_customize->add_setting('sitetitle_showhide',
        array(
            'default'           => true,
            'sanitize_callback' => 'bootstrap_fitness_sanitize_checkbox',
        )
    );
    
    $wp_customize->add_control(
		'sitetitle_showhide',
		array(
			'section'	  => 'title_tagline',
			'label'		  => __( 'Site Title Show/hide', 'bootstrap-fitness' ),
			'description' => __( 'Enable to show Site Title in header.', 'bootstrap-fitness' ),
            'type'        => 'checkbox',
            'priority'    => 4
		)		
	);

    $wp_customize->add_setting('tagline_showhide',
        array(
            'default'           => true,
            'sanitize_callback' => 'bootstrap_fitness_sanitize_checkbox',
        )
    );
    
    $wp_customize->add_control(
		'tagline_showhide',
		array(
			'section'	  => 'title_tagline',
			'label'		  => __( 'Tagline Show/hide', 'bootstrap-fitness' ),
			'description' => __( 'Enable to show Tagline in header.', 'bootstrap-fitness' ),
            'type'        => 'checkbox',
            'priority'    => '6'
		)		
	);

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'bootstrap_fitness_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'bootstrap_fitness_customize_partial_blogdescription',
			)
		);
	}

    $wp_customize->get_section( 'title_tagline' )->panel = 'bootstrap_fitness_header_panel';
    
    $wp_customize->add_setting( 'bf_site_title_color_option', array(
        'capability'  => 'edit_theme_options',
        'default'     => '#ffffff',
        'transport' => 'postMessage',
        'sanitize_callback' => 'bootstrap_fitness_sanitize_hex_color'
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bf_site_title_color_option', array(
        'label'      => esc_html__( 'Site Title Color', 'bootstrap-fitness' ),
        'section'    => 'title_tagline',
    ) ) );

    $wp_customize->add_setting( 'bf_site_title_size', array(
        'default'           => 30,
        'sanitize_callback' => 'absint',
        'transport' => 'postMessage',
    ) );

    $wp_customize->add_control( new Bootstrap_Fitness_Slider_Control( $wp_customize, 'bf_site_title_size', array(
        'section' => 'title_tagline',
        'label'   => esc_html__( 'Logo Size', 'bootstrap-fitness' ),
        'choices'     => array(
            'min'   => 15,
            'max'   => 60,
            'step'  => 1,
        )
    ) ) );

    $wp_customize->add_setting( 'bf_site_identity_font_family', array(
        'transport' => 'postMessage',
        'sanitize_callback' => 'bootstrap_fitness_sanitize_google_fonts',
        'default'     => 'Teko',
    ) );

    $wp_customize->add_control( 'bf_site_identity_font_family', array(
        'label'       =>  esc_html__( 'Site Identity Font Family', 'bootstrap-fitness' ),
        'section'     => 'title_tagline',
        'type'        => 'select',
        'choices'     => bootstrap_fitness_google_fonts(),
    ) );
}


/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function bootstrap_fitness_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function bootstrap_fitness_customize_partial_blogdescription() {
	bloginfo( 'description' );
}