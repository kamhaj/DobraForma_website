<?php
/**
 * Testimonial Settings
 *
 * @package bootstrap_fitness
 */
add_action( 'customize_register', 'bootstrap_fitness_customize_testimonials_section' );

function bootstrap_fitness_customize_testimonials_section( $wp_customize )
{
    $wp_customize->add_section('bootstrap_fitness_testimonial_sections', array(
        'title' => esc_html__('Testimonial Section', 'bootstrap-fitness'),
        'description' => esc_html__('Testimonial Section :', 'bootstrap-fitness'),
        'panel' => 'bootstrap_fitness_homepage_panel'
    ));

    $wp_customize->add_setting('bf_testimonial_display_option', array(
        'sanitize_callback' => 'bootstrap_fitness_sanitize_checkbox',
        'default' => true
    ));

    $wp_customize->add_control(new Bootstrap_Fitness_Toggle_Control($wp_customize, 'bf_testimonial_display_option', array(
        'label' => esc_html__('Hide / Show', 'bootstrap-fitness'),
        'section' => 'bootstrap_fitness_testimonial_sections',
        'type'=> 'bootstrap-fitness-toggle',
    )));

    $wp_customize->add_setting('bf_heading_for_testimonial', array(
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
        'default' => ''
    ));

    $wp_customize->add_control('bf_heading_for_testimonial', array(
        'label' => esc_html__('Enter Heading for Testimonial', 'bootstrap-fitness'),
        'section' => 'bootstrap_fitness_testimonial_sections',
        'type' => 'text',
    ));

    $wp_customize->add_setting( 'bf_image_for_testimonial', array(
        'sanitize_callback'     =>  'bootstrap_fitness_sanitize_image',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'bf_image_for_testimonial', array(
        'label'      => esc_html__( 'Image', 'bootstrap-fitness' ),
        'section'    => 'bootstrap_fitness_testimonial_sections',
        'settings'   => 'bf_image_for_testimonial',
    ) ) );

    $wp_customize->selective_refresh->add_partial( 'bf_testimonial_display_option', array(
        'selector' => '.testimonial > .container',
      ) ); 

}