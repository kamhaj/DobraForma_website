<?php
/**
 * Blog Settings
 *
 * @package bootstrap_fitness
 */

add_action( 'customize_register', 'bootstrap_fitness_customize_register_blog_post' );

function bootstrap_fitness_customize_register_blog_post( $wp_customize ) {
	$wp_customize->add_section( 'bootstrap_fitness_blog_post_section', array(
	    'title'          => esc_html__( 'Blog Posts', 'bootstrap-fitness' ),
	    'description'    => esc_html__( 'Blog Posts :', 'bootstrap-fitness' ),
	    'panel'          => 'bootstrap_fitness_homepage_panel',
	    'priority'       => 160,
	) );

    $wp_customize->add_setting( 'blog_post_display_option', array(
      'sanitize_callback'     =>  'bootstrap_fitness_sanitize_checkbox',
      'default'               =>  true
    ) );

    $wp_customize->add_control( new Bootstrap_Fitness_Toggle_Control( $wp_customize, 'blog_post_display_option', array(
      'label' => esc_html__( 'Hide / Show','bootstrap-fitness' ),
      'section' => 'bootstrap_fitness_blog_post_section',
      'type'=> 'bootstrap-fitness-toggle',
    ) ) );

    $wp_customize->add_setting( 'blog_post_section_title', array(
        'transport' => 'postMessage',
        'sanitize_callback'     =>  'sanitize_text_field',
        'default'               =>  ''
    ) );

    $wp_customize->add_control( 'blog_post_section_title', array(
        'label' => esc_html__( 'Title', 'bootstrap-fitness' ),
        'section' => 'bootstrap_fitness_blog_post_section',
        'type'=> 'text',
    ) );
    
    $wp_customize->add_setting( 'blog_post_category', array(
        'capability'  => 'edit_theme_options',        
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => '',
    ) );

    $wp_customize->add_control( new Bootstrap_Fitness_Customize_Dropdown_Taxonomies_Control( $wp_customize, 'blog_post_category', array(
        'label' => esc_html__( 'Choose Category', 'bootstrap-fitness' ),
        'section' => 'bootstrap_fitness_blog_post_section',
        'settings' => 'blog_post_category',
        'type'=> 'dropdown-taxonomies',
        'taxonomy'  =>  'category'
    ) ) );

    $wp_customize->selective_refresh->add_partial( 'blog_post_display_option', array(
	    'selector' => '.blogs > .container',
	) );

}