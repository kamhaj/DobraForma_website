<?php
/**
* Who we are Settings
*
* @package bootstrap_fitness
*/

add_action( 'customize_register', 'bootstrap_fitness_customize_who_we_are_option' );

function bootstrap_fitness_customize_who_we_are_option( $wp_customize ) {

    $wp_customize->add_section( 'bootstrap_fitness_who_we_are_section', array(
        'title'         => esc_html__( 'Who we are Section', 'bootstrap-fitness' ),
        'panel'         => 'bootstrap_fitness_homepage_panel'
    ) );

    $wp_customize->add_setting('bf_who_we_are_display_option', array(
        'sanitize_callback' => 'bootstrap_fitness_sanitize_checkbox',
        'default' => true
    ));

    $wp_customize->add_control(new Bootstrap_Fitness_Toggle_Control($wp_customize, 'bf_who_we_are_display_option', array(
        'label' => esc_html__('Hide / Show', 'bootstrap-fitness'),
        'section' => 'bootstrap_fitness_who_we_are_section',
        'type'=> 'bootstrap-fitness-toggle',
    )));

    $wp_customize->selective_refresh->add_partial('bf_who_we_are_display_option', array(
        'selector' => '#about .main-title .title', // You can also select a css class
    ));

    $wp_customize->add_setting('bf_heading_for_who_we_are', array(
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
        'default' => ''
    ));

    $wp_customize->add_control('bf_heading_for_who_we_are', array(
        'label' => esc_html__('Enter Heading', 'bootstrap-fitness'),
        'section' => 'bootstrap_fitness_who_we_are_section',
        'type' => 'text',
    ));


    $wp_customize->add_setting('bf_who_we_are_pages', array(
        'sanitize_callback' => 'bootstrap_fitness_sanitize_select',
        'default' => ''
    ));
    $page_query = get_pages();
    $pages = array();
    $pages[''] = esc_attr__("-- Select --", 'bootstrap-fitness');
    foreach ($page_query as $page) {
        $pages[ $page->post_name ] = $page->post_title;
    }

    $wp_customize->add_control(new Bootstrap_Fitness_Select_Control($wp_customize, 'bf_who_we_are_pages', array(
        'label' => esc_html__('Select Page For Who we are Section :', 'bootstrap-fitness'),
        'section' => 'bootstrap_fitness_who_we_are_section',
        'settings' => 'bf_who_we_are_pages',
        'type' => 'bootstrap-fitness-select',
        'choices' => $pages,
    )));

    $wp_customize->selective_refresh->add_partial( 'bf_who_we_are_display_option', array(
        'selector' => '.about > .container',
      ) ); 
}