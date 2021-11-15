<?php
/**
* Why choose us Settings
*
* @package bootstrap_fitness
*/

add_action( 'customize_register', 'bootstrap_fitness_customize_what_we_do_option' );

function bootstrap_fitness_customize_what_we_do_option( $wp_customize ) {

    $wp_customize->add_section( 'bootstrap_fitness_what_we_do_section', array(
        'title'         => esc_html__( 'What we do Section', 'bootstrap-fitness' ),
        'panel'         => 'bootstrap_fitness_homepage_panel'
    ) );

    $wp_customize->add_setting('bf_what_we_do_display_option', array(
        'sanitize_callback' => 'bootstrap_fitness_sanitize_checkbox',
        'default' => true
    ));

    $wp_customize->add_control(new Bootstrap_Fitness_Toggle_Control($wp_customize, 'bf_what_we_do_display_option', array(
        'label' => esc_html__('Hide / Show', 'bootstrap-fitness'),
        'section' => 'bootstrap_fitness_what_we_do_section',
        'type'=> 'bootstrap-fitness-toggle',
    )));

    $wp_customize->add_setting('bf_heading_for_what_we_do', array(
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
        'default' => ''
    ));

    $wp_customize->add_control('bf_heading_for_what_we_do', array(
        'label' => esc_html__('Enter Heading', 'bootstrap-fitness'),
        'section' => 'bootstrap_fitness_what_we_do_section',
        'type' => 'text',
    ));


    $wp_customize->add_setting('bf_desc_for_what_we_do', array(
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'postMessage',
        'default' => ''
    ));

    $wp_customize->add_control('bf_desc_for_what_we_do', array(
        'label' => esc_html__('Enter Description', 'bootstrap-fitness'),
        'section' => 'bootstrap_fitness_what_we_do_section',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting( 'bf_image_for_what_we_do', array(
        'sanitize_callback'     =>  'bootstrap_fitness_sanitize_image',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'bf_image_for_what_we_do', array(
        'label'      => esc_html__( 'Image', 'bootstrap-fitness' ),
        'section'    => 'bootstrap_fitness_what_we_do_section',
        'settings'   => 'bf_image_for_what_we_do',
    ) ) );

    $wp_customize->add_setting( 'bf_what_we_do_points_label', array(  
      'sanitize_callback' => 'sanitize_text_field',
      'default'     => '',
    ) );


    $wp_customize->add_control( new Bootstrap_Fitness_Custom_Text( $wp_customize, 'bf_what_we_do_points_label', array(
      'label' => esc_html__( 'Points','bootstrap-fitness' ),
      'section' => 'bootstrap_fitness_what_we_do_section',
      'settings' => 'bf_what_we_do_points_label',
      'type'=> 'customtext',
    ) ) );



    $wp_customize->add_setting( new Bootstrap_Fitness_Repeater_Setting( $wp_customize, 'bf_points_for_what_we_do_1', array(
        'sanitize_callback' => array( 'Bootstrap_Fitness_Repeater_Setting', 'sanitize_repeater_setting' ),
    ) ) );

    $wp_customize->add_control( new Bootstrap_Fitness_Control_Repeater( $wp_customize, 'bf_points_for_what_we_do_1', array(
        'section' => 'bootstrap_fitness_what_we_do_section',
        'settings'    => 'bf_points_for_what_we_do_1',
        'row_label' => array(
            'type'  => 'field',
            'value' => esc_html__( 'Point 1', 'bootstrap-fitness' ),
            'field' => 'bf_what_we_do_title',
        ), 
        'fields'     => array(
            'bf_what_we_do_thumbnail'     => array(
                'type'   => 'image',
                'label'  => __( 'Thumbnail', 'bootstrap-fitness' ),
            ),
            'bf_what_we_do_title'     => array(
                'type'  => 'text',
                'label' => __( 'Title', 'bootstrap-fitness' ),
            ),
            'bf_what_we_do_desc'     => array(
                'type'  => 'textarea',
                'label' => __( 'Description', 'bootstrap-fitness' ),
            ),
        ),                   
    ) ) );

    $wp_customize->add_setting( new Bootstrap_Fitness_Repeater_Setting( $wp_customize, 'bf_points_for_what_we_do_2', array(
        'sanitize_callback' => array( 'Bootstrap_Fitness_Repeater_Setting', 'sanitize_repeater_setting' ),
    ) ) );

    $wp_customize->add_control( new Bootstrap_Fitness_Control_Repeater( $wp_customize, 'bf_points_for_what_we_do_2', array(
        'section' => 'bootstrap_fitness_what_we_do_section',
        'settings'    => 'bf_points_for_what_we_do_2',
        'row_label' => array(
            'type'  => 'field',
            'value' => esc_html__( 'Point 2', 'bootstrap-fitness' ),
            'field' => 'bf_what_we_do_title',
        ), 
        'fields'     => array(
            'bf_what_we_do_thumbnail'     => array(
                'type'   => 'image',
                'label'  => __( 'Thumbnail', 'bootstrap-fitness' ),
            ),
            'bf_what_we_do_title'     => array(
                'type'  => 'text',
                'label' => __( 'Title', 'bootstrap-fitness' ),
            ),
            'bf_what_we_do_desc'     => array(
                'type'  => 'textarea',
                'label' => __( 'Description', 'bootstrap-fitness' ),
            ),
        ),                   
    ) ) );

    $wp_customize->add_setting( new Bootstrap_Fitness_Repeater_Setting( $wp_customize, 'bf_points_for_what_we_do_3', array(
        'sanitize_callback' => array( 'Bootstrap_Fitness_Repeater_Setting', 'sanitize_repeater_setting' ),
    ) ) );

    $wp_customize->add_control( new Bootstrap_Fitness_Control_Repeater( $wp_customize, 'bf_points_for_what_we_do_3', array(
        'section' => 'bootstrap_fitness_what_we_do_section',
        'settings'    => 'bf_points_for_what_we_do_3',
        'row_label' => array(
            'type'  => 'field',
            'value' => esc_html__( 'Point 3', 'bootstrap-fitness' ),
            'field' => 'bf_what_we_do_title',
        ), 
        'fields'     => array(
            'bf_what_we_do_thumbnail'     => array(
                'type'   => 'image',
                'label'  => __( 'Thumbnail', 'bootstrap-fitness' ),
            ),
            'bf_what_we_do_title'     => array(
                'type'  => 'text',
                'label' => __( 'Title', 'bootstrap-fitness' ),
            ),
            'bf_what_we_do_desc'     => array(
                'type'  => 'textarea',
                'label' => __( 'Description', 'bootstrap-fitness' ),
            ),
        ),                   
    ) ) );

    $wp_customize->selective_refresh->add_partial('bf_what_we_do_display_option', array(
        'selector' => '.services > .container', // You can also select a css class
    ));

}