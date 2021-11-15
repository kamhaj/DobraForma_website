<?php

/**
 * Footer Settings
 *
 * @package bootstrap_fitness
 */
add_action( 'customize_register', 'bootstrap_fitness_customize_register_footer_section' );
function bootstrap_fitness_customize_register_footer_section( $wp_customize )
{
    $wp_customize->add_section( 'bootstrap_fitness_footer_section', array(
        'title'    => esc_html__( 'Footer Section', 'bootstrap-fitness' ),
        'priority' => 14,
    ) );
}
