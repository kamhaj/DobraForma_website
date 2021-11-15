<?php

/**
* Class Schedule Settings
*
* @package bootstrap_fitness
*/
add_action( 'customize_register', 'bootstrap_fitness_customize_class_schedule_option' );
function bootstrap_fitness_customize_class_schedule_option( $wp_customize )
{
    $wp_customize->add_section( 'bootstrap_fitness_class_schedule_section', array(
        'title' => esc_html__( 'Class Schedule Section', 'bootstrap-fitness' ),
        'panel' => 'bootstrap_fitness_homepage_panel',
    ) );
}
