<?php

/**
* Offer Settings
*
* @package bootstrap_fitness
*/
add_action( 'customize_register', 'bootstrap_fitness_customize_offer_option' );
function bootstrap_fitness_customize_offer_option( $wp_customize )
{
    $wp_customize->add_section( 'bootstrap_fitness_offer_section', array(
        'title' => esc_html__( 'Offer Section', 'bootstrap-fitness' ),
        'panel' => 'bootstrap_fitness_homepage_panel',
    ) );
}
