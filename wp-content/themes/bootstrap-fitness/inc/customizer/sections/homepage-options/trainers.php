<?php
/**
 * Trainers Settings
 *
 * @package bootstrap_fitness
 */
add_action( 'customize_register', 'bootstrap_fitness_customize_trainers_section' );

function bootstrap_fitness_customize_trainers_section( $wp_customize ) {

    $wp_customize->add_section('bootstrap_fitness_trainers_sections', array(
        'title' => esc_html__('Trainers Section', 'bootstrap-fitness'),
        'description' => esc_html__('Trainers Section :', 'bootstrap-fitness'),
        'panel' => 'bootstrap_fitness_homepage_panel'
    ));

    $wp_customize->add_setting('bf_trainers_display_option', array(
        'sanitize_callback' => 'bootstrap_fitness_sanitize_checkbox',
        'default' => true
    ));

    $wp_customize->add_control(new Bootstrap_Fitness_Toggle_Control($wp_customize, 'bf_trainers_display_option', array(
        'label' => esc_html__('Hide / Show', 'bootstrap-fitness'),
        'section' => 'bootstrap_fitness_trainers_sections',
        'settings' => 'bf_trainers_display_option',
        'type'=> 'bootstrap-fitness-toggle',
    )));

    $wp_customize->add_setting('bf_heading_for_trainers', array(
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
        'default' => ''
    ));

    $wp_customize->add_control('bf_heading_for_trainers', array(
        'label' => esc_html__('Enter Heading for Trainers', 'bootstrap-fitness'),
        'section' => 'bootstrap_fitness_trainers_sections',
        'type' => 'text',
    ));

    $wp_customize->selective_refresh->add_partial( 'bf_trainers_display_option', array(
        'selector' => '.team > .container',
      ) ); 

}