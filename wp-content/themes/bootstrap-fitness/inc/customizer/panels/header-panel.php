<?php
/**
 * Header Settings
 *
 * @package bootstrap_fitness
 */

add_action( 'customize_register', 'bootstrap_fitness_customize_register_header_panel' );

function bootstrap_fitness_customize_register_header_panel( $wp_customize ) {
	$wp_customize->add_panel( 'bootstrap_fitness_header_panel', array(
	    'title'       => esc_html__( 'Header Settings', 'bootstrap-fitness' ),
        'capability' => 'edit_theme_options',
        'priority'    => 10,
	) );
}