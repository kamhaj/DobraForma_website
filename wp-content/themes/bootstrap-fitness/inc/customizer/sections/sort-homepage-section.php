<?php

/**
 * Rearrange Sections
 *
 * @package bootstrap_fitness
 */
add_action( 'customize_register', 'bootstrap_fitness_sort_homepage_sections' );
function bootstrap_fitness_sort_homepage_sections( $wp_customize )
{
    $wp_customize->add_section( 'bootstrap_fitness_sort_homepage_sections', array(
        'title'       => esc_html__( 'Rearrange Home Sections', 'bootstrap-fitness' ),
        'description' => esc_html__( 'Rearrange Home Sections', 'bootstrap-fitness' ),
        'panel'       => '',
        'priority'    => 13,
    ) );
    
    if ( class_exists( 'The_Bootstrap_Themes_Companion' ) ) {
        $default = array(
            'classes',
            'what-we-do',
            'who-we-are',
            'trainers',
            'price',
            'testimonial',
            'blogs'
        );
        $choices = array(
            'classes'     => esc_html__( 'Classes Section', 'bootstrap-fitness' ),
            'what-we-do'  => esc_html__( 'What we do Sections', 'bootstrap-fitness' ),
            'who-we-are'  => esc_html__( 'Who we are Sections', 'bootstrap-fitness' ),
            'trainers'    => esc_html__( 'Trainers Section', 'bootstrap-fitness' ),
            'price'       => esc_html__( 'Price Section', 'bootstrap-fitness' ),
            'testimonial' => esc_html__( 'Testimonial Section', 'bootstrap-fitness' ),
            'blogs'       => esc_html__( 'Blogs Section', 'bootstrap-fitness' ),
        );
    } else {
        $default = array(
            'classes',
            'what-we-do',
            'who-we-are',
            'blogs'
        );
        $choices = array(
            'classes'    => esc_html__( 'Classes Section', 'bootstrap-fitness' ),
            'what-we-do' => esc_html__( 'What we do Sections', 'bootstrap-fitness' ),
            'who-we-are' => esc_html__( 'Who we are Sections', 'bootstrap-fitness' ),
            'blogs'      => esc_html__( 'Blogs Section', 'bootstrap-fitness' ),
        );
    }
    
    $wp_customize->add_setting( 'bootstrap_fitness_sort_homepage', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'bootstrap_fitness_sanitize_array',
        'default'           => $default,
    ) );
    $wp_customize->add_control( new Bootstrap_Fitness_Control_Sortable( $wp_customize, 'bootstrap_fitness_sort_homepage', array(
        'label'   => esc_html__( 'Drag and Drop Sections to rearrange.', 'bootstrap-fitness' ),
        'section' => 'bootstrap_fitness_sort_homepage_sections',
        'choices' => $choices,
    ) ) );
}
