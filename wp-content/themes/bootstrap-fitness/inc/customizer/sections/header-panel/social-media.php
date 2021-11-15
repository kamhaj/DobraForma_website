<?php
/**
 *
 * @package bootstrap_fitness
 */


add_action( 'customize_register', 'bootstrap_fitness_customize_social_media' );

function bootstrap_fitness_customize_social_media( $wp_customize ) {

    $wp_customize->add_section( 'bootstrap_fitness_social_media', array(
        'title'         => esc_html__( 'Social Media', 'bootstrap-fitness' ),
        'panel'         => 'bootstrap_fitness_header_panel',
        'priority'      => 9,
    ) );
    
    $wp_customize->add_setting( 'bootstrap_fitness_facebook_link', array(
        'sanitize_callback'     =>  'esc_url_raw',
        'default'               =>  ''
    ) );

    $wp_customize->add_control( 'bootstrap_fitness_facebook_link', array(
        'label' => esc_html__( 'Facebook Link', 'bootstrap-fitness' ),
        'section' => 'bootstrap_fitness_social_media',
        'settings'    => 'bootstrap_fitness_facebook_link',
        'type'=> 'text',
    ) );

    $wp_customize->add_setting( 'bootstrap_fitness_twitter_link', array(
        'sanitize_callback'     =>  'esc_url_raw',
        'default'               =>  ''
    ) );

    $wp_customize->add_control( 'bootstrap_fitness_twitter_link', array(
        'label' => esc_html__( 'Twitter Link', 'bootstrap-fitness' ),
        'section' => 'bootstrap_fitness_social_media',
        'settings'    => 'bootstrap_fitness_twitter_link',
        'type'=> 'text',
    ) );

    $wp_customize->add_setting( 'bootstrap_fitness_pinterest_link', array(
        'sanitize_callback'     =>  'esc_url_raw',
        'default'               =>  ''
    ) );

    $wp_customize->add_control( 'bootstrap_fitness_pinterest_link', array(
        'label' => esc_html__( 'Pinterest Link', 'bootstrap-fitness' ),
        'section' => 'bootstrap_fitness_social_media',
        'settings'    => 'bootstrap_fitness_pinterest_link',
        'type'=> 'text',
    ) );

    $wp_customize->add_setting( 'bootstrap_fitness_instagram_link', array(
        'sanitize_callback'     =>  'esc_url_raw',
        'default'               =>  ''
    ) );

    $wp_customize->add_control( 'bootstrap_fitness_instagram_link', array(
        'label' => esc_html__( 'Instagram Link', 'bootstrap-fitness' ),
        'section' => 'bootstrap_fitness_social_media',
        'settings'    => 'bootstrap_fitness_instagram_link',
        'type'=> 'text',
    ) );

    $wp_customize->add_setting( 'bootstrap_fitness_linkedin_link', array(
        'sanitize_callback'     =>  'esc_url_raw',
        'default'               =>  ''
    ) );

    $wp_customize->add_control( 'bootstrap_fitness_linkedin_link', array(
        'label' => esc_html__( 'Linkedin Link', 'bootstrap-fitness' ),
        'section' => 'bootstrap_fitness_social_media',
        'settings'    => 'bootstrap_fitness_linkedin_link',
        'type'=> 'text',
    ) );

    $wp_customize->add_setting( 'bootstrap_fitness_youtube_link', array(
        'sanitize_callback'     =>  'esc_url_raw',
        'default'               =>  ''
    ) );

    $wp_customize->add_control( 'bootstrap_fitness_youtube_link', array(
        'label' => esc_html__( 'Youtube Link', 'bootstrap-fitness' ),
        'section' => 'bootstrap_fitness_social_media',
        'settings'    => 'bootstrap_fitness_youtube_link',
        'type'=> 'text',
    ) );

    $wp_customize->add_setting( 'bootstrap_fitness_tripadvisor_link', array(
        'sanitize_callback'     =>  'esc_url_raw',
        'default'               =>  ''
    ) );

    $wp_customize->add_control( 'bootstrap_fitness_tripadvisor_link', array(
        'label' => esc_html__( 'Trip Advisor Link', 'bootstrap-fitness' ),
        'section' => 'bootstrap_fitness_social_media',
        'settings'    => 'bootstrap_fitness_tripadvisor_link',
        'type'=> 'text',
    ) );

    $wp_customize->selective_refresh->add_partial( 'bootstrap_fitness_social_media', array(
        'selector'        => '.social-icons',
        'render_callback' => '',
    ) );
}