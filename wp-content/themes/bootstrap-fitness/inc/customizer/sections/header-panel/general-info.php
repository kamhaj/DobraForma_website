<?php
/**
 * General Settings
    *
    * @package bootstrap_fitness
 */


add_action( 'customize_register', 'bootstrap_fitness_customize_general_option' );

function bootstrap_fitness_customize_general_option( $wp_customize ) {

    $wp_customize->add_section( 'bootstrap_fitness_general_section', array(
        'title'         => esc_html__( 'General Options', 'bootstrap-fitness' ),
        'description'   => esc_html__( 'General Options', 'bootstrap-fitness' ),
        'panel'         => 'bootstrap_fitness_header_panel',
        'priority'      => 10,
    ) );

    $wp_customize->add_setting( 'bootstrap_fitness_contact_number', array(   
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => '',
    ) );

    $wp_customize->add_control( 'bootstrap_fitness_contact_number', array(
        'label' => esc_html__( 'Contact Number', 'bootstrap-fitness' ),
        'section' => 'bootstrap_fitness_general_section',
        'settings' => 'bootstrap_fitness_contact_number',
        'type'=> 'text',
    ) );

    $wp_customize->selective_refresh->add_partial( 'bootstrap_fitness_contact_number', array(
	    'selector' => '.top-header .phone',
        
	) );

    $wp_customize->add_setting( 'bootstrap_fitness_email_address', array( 
        'transport' => 'postMessage',  
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'bootstrap_fitness_email_address', array(
        'label' => esc_html__( 'Email Address', 'bootstrap-fitness' ),
        'section' => 'bootstrap_fitness_general_section',
        'settings' => 'bootstrap_fitness_email_address',
        'type'=> 'text',
    ) );

    $wp_customize->selective_refresh->add_partial( 'bootstrap_fitness_email_address', array(
	    'selector' => '.top-header .email',
        
	) );

}