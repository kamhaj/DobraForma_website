<?php
if( ! function_exists( 'bootstrap_fitness_register_custom_controls' ) ) :
/**
 * Register Custom Controls
*/
function bootstrap_fitness_register_custom_controls( $wp_customize ) {
    
    // Load our custom control.
    require_once get_template_directory() . '/inc/custom-controls/sortable/class-sortable-control.php';
    require_once get_template_directory() . '/inc/custom-controls/toggle/class-toggle-control.php';
    require_once get_template_directory() . '/inc/custom-controls/slider/class-slider-control.php';
    require_once get_template_directory() . '/inc/custom-controls/dropdown-taxonomies/class-dropdown-taxonomies-control.php';
    require_once get_template_directory() . '/inc/custom-controls/repeater/class-repeater-setting.php';
    require_once get_template_directory() . '/inc/custom-controls/repeater/class-control-repeater.php';
    require_once get_template_directory() . '/inc/custom-controls/select/class-select-control.php';

    require_once get_template_directory() . '/inc/custom-controls/notes.php';
    
    // Register the control type.
    $wp_customize->register_control_type( 'Bootstrap_Fitness_Control_Sortable' );
    $wp_customize->register_control_type( 'Bootstrap_Fitness_Toggle_Control' );
    $wp_customize->register_control_type( 'Bootstrap_Fitness_Slider_Control' );
    $wp_customize->register_control_type( 'Bootstrap_Fitness_Select_Control' );
 
}
endif;
add_action( 'customize_register', 'bootstrap_fitness_register_custom_controls' );