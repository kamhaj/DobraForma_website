<?php
/**
 * Homepage Settings
 *
 * @package bootstrap_fitness
 */

add_action( 'customize_register', 'bootstrap_fitness_customize_register_homepage_panel' );

function bootstrap_fitness_customize_register_homepage_panel( $wp_customize ) {
	$wp_customize->add_panel( 'bootstrap_fitness_homepage_panel', array(
	    'title'       => esc_html__( 'Home page Options', 'bootstrap-fitness' ),
        'capability' => 'edit_theme_options',
        'priority'    => 11,
	) );
}