<?php

/**
 * Register widget area.
 *
 * @package bootstrap_fitness
 */


function bootstrap_fitness_widgets_init() {
    
    for($i = 1; $i<5; $i++){
		register_sidebar(
			array(
				'name'          => esc_html__( 'Footer Widget', 'bootstrap-fitness' ) . " " . $i,
				'id'            => 'footer-'.$i.'',
				'description'   => esc_html__( 'Add widgets here.', 'bootstrap-fitness' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h4 class="widget-title">',
				'after_title'   => '</h4>',
			)
		);
	}
	register_sidebar( array(
		'name'          => esc_html__( 'Right Sidebar', 'bootstrap-fitness' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Left Sidebar', 'bootstrap-fitness' ),
		'id'            => 'left-sidebar',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

}
add_action( 'widgets_init', 'bootstrap_fitness_widgets_init' );