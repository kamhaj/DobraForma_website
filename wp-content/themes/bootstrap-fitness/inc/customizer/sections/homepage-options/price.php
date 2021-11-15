<?php
/**
 * Counter Settings
 *
 * @package bootstrap_fitness
 */
add_action( 'customize_register', 'bootstrap_fitness_customize_price_section' );

function bootstrap_fitness_customize_price_section( $wp_customize ) {

    $wp_customize->add_section( 'bootstrap_fitness_pricing_table', array(
        'title' => esc_html__( 'Pricing Section', 'bootstrap-fitness'),
        'panel' => 'bootstrap_fitness_homepage_panel'
    ) );

    $wp_customize->add_setting( 'bf_tickets_display_option', array(
        'sanitize_callback' => 'bootstrap_fitness_sanitize_checkbox',
        'default' => true
    ) );

    $wp_customize->add_control( new Bootstrap_Fitness_Toggle_Control( $wp_customize, 'bf_tickets_display_option', array(
        'label' => esc_html__('Hide / Show', 'bootstrap-fitness'),
        'section' => 'bootstrap_fitness_pricing_table',
        'settings' => 'bf_tickets_display_option',
        'type'=> 'bootstrap-fitness-toggle',
    ) ) );

    $wp_customize->add_setting('bf_tickets_heading', array(
        'sanitize_callback' => 'sanitize_text_field',
        'default' => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control('bf_tickets_heading', array(
        'label' => esc_html__('Enter Heading for Price Table', 'bootstrap-fitness'),
        'section' => 'bootstrap_fitness_pricing_table',
        'settings' => 'bf_tickets_heading',
        'type' => 'text',
    ));

    $wp_customize->selective_refresh->add_partial('bf_tickets_display_option', array(
        'selector' => '.pricing > .container', // You can also select a css class
    ));
    
}