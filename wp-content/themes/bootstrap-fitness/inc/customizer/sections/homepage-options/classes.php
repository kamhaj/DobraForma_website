<?php
/**
* Classes Settings
*
* @package bootstrap_fitness
*/


add_action( 'customize_register', 'bootstrap_fitness_customize_classes_option' );

function bootstrap_fitness_customize_classes_option( $wp_customize ) {

    $wp_customize->add_section( 'bootstrap_fitness_classes_section', array(
        'title'         => esc_html__( 'Classes Section', 'bootstrap-fitness' ),
        'panel'         => 'bootstrap_fitness_homepage_panel'
    ) );

    $wp_customize->add_setting( 'bf_classes_show_hide', array(
        'sanitize_callback'     =>  'bootstrap_fitness_sanitize_checkbox',
        'default'               =>  true
    ) );

    $wp_customize->add_control( new Bootstrap_Fitness_Toggle_Control( $wp_customize, 'bf_classes_show_hide', array(
        'label' => esc_html__( 'Hide / Show Classes Blocks','bootstrap-fitness' ),
        'section' => 'bootstrap_fitness_classes_section',
        'settings' => 'bf_classes_show_hide',
        'type'=> 'bootstrap-fitness-toggle',
    ) ) );

    $wp_customize->add_setting( 'bf_classes_heading', array(
        'transport' => 'postMessage',
        'sanitize_callback'     =>  'sanitize_text_field',
        'default'               =>  ''
    ) );

    $wp_customize->add_control( 'bf_classes_heading', array(
        'label' => esc_html__( 'Title', 'bootstrap-fitness' ),
        'section' => 'bootstrap_fitness_classes_section',
        'type'=> 'text',
    ) );

    $wp_customize->add_setting( 'bf_classes_label', array(  
      'sanitize_callback' => 'sanitize_text_field',
      'default'     => '',
    ) );

    $wp_customize->add_control( new Bootstrap_Fitness_Custom_Text( $wp_customize, 'bf_classes_label', array(
      'label' => esc_html__( 'Classes','bootstrap-fitness' ),
      'section' => 'bootstrap_fitness_classes_section',
      'settings' => 'bf_classes_label',
      'type'=> 'customtext',
    ) ) );

    $wp_customize->add_setting( new Bootstrap_Fitness_Repeater_Setting( $wp_customize, 'bf_classes_sections_1', array(
        'sanitize_callback' => array( 'Bootstrap_Fitness_Repeater_Setting', 'sanitize_repeater_setting' ),
    ) ) );


    $wp_customize->add_control( new Bootstrap_Fitness_Control_Repeater( $wp_customize, 'bf_classes_sections_1', array(
        'section' => 'bootstrap_fitness_classes_section',
        'row_label' => array(
            'type'  => 'field',
            'value' => esc_html__( 'Class 1', 'bootstrap-fitness' ),
            'field' => 'bf_classes_title',
        ),
        'fields'     => array(
            'bf_classes_thumbnail'     => array(
                'type'   => 'image',
                'label'  => __( 'Thumbnail', 'bootstrap-fitness' ),
            ),
            'bf_classes_title'     => array(
                'type'  => 'text',
                'label' => __( 'Title', 'bootstrap-fitness' ),
            ),
            'bf_classes_btn'     => array(
                'type'   => 'text',
                'label'  => __( 'Button Label', 'bootstrap-fitness' ),
            ),
            'bf_classes_btnlink'     => array(
                'type'   => 'url',
                'label'  => __( 'Button Link', 'bootstrap-fitness' ),
            ),
        ),                   
    ) ) );

    $wp_customize->add_setting( new Bootstrap_Fitness_Repeater_Setting( $wp_customize, 'bf_classes_sections_2', array(
        'sanitize_callback' => array( 'Bootstrap_Fitness_Repeater_Setting', 'sanitize_repeater_setting' ),
    ) ) );


    $wp_customize->add_control( new Bootstrap_Fitness_Control_Repeater( $wp_customize, 'bf_classes_sections_2', array(
        'section' => 'bootstrap_fitness_classes_section',
        'row_label' => array(
            'type'  => 'field',
            'value' => esc_html__( 'Class 2', 'bootstrap-fitness' ),
            'field' => 'bf_classes_title',
        ),
        'fields'     => array(
            'bf_classes_thumbnail'     => array(
                'type'   => 'image',
                'label'  => __( 'Thumbnail', 'bootstrap-fitness' ),
            ),
            'bf_classes_title'     => array(
                'type'  => 'text',
                'label' => __( 'Title', 'bootstrap-fitness' ),
            ),
            'bf_classes_btn'     => array(
                'type'   => 'text',
                'label'  => __( 'Button Label', 'bootstrap-fitness' ),
            ),
            'bf_classes_btnlink'     => array(
                'type'   => 'url',
                'label'  => __( 'Button Link', 'bootstrap-fitness' ),
            ),
        ),                   
    ) ) );


    $wp_customize->add_setting( new Bootstrap_Fitness_Repeater_Setting( $wp_customize, 'bf_classes_sections_3', array(
        'sanitize_callback' => array( 'Bootstrap_Fitness_Repeater_Setting', 'sanitize_repeater_setting' ),
    ) ) );


    $wp_customize->add_control( new Bootstrap_Fitness_Control_Repeater( $wp_customize, 'bf_classes_sections_3', array(
        'section' => 'bootstrap_fitness_classes_section',
        'row_label' => array(
            'type'  => 'field',
            'value' => esc_html__( 'Class 3', 'bootstrap-fitness' ),
            'field' => 'bf_classes_title',
        ),
        'fields'     => array(
            'bf_classes_thumbnail'     => array(
                'type'   => 'image',
                'label'  => __( 'Thumbnail', 'bootstrap-fitness' ),
            ),
            'bf_classes_title'     => array(
                'type'  => 'text',
                'label' => __( 'Title', 'bootstrap-fitness' ),
            ),
            'bf_classes_btn'     => array(
                'type'   => 'text',
                'label'  => __( 'Button Label', 'bootstrap-fitness' ),
            ),
            'bf_classes_btnlink'     => array(
                'type'   => 'url',
                'label'  => __( 'Button Link', 'bootstrap-fitness' ),
            ),
        ),                   
    ) ) );


    $wp_customize->selective_refresh->add_partial( 'bf_classes_show_hide', array(
        'selector' => '.classes > .container',
    ) ); 
}