<?php
/**
 * relax spa Theme Customizer
 *
 * @package bootstrap_fitness
 */

require get_template_directory() . '/inc/google-fonts.php';

$panels   = array( 'header-panel', 'homepage-panel' );

if( ! empty( $panels ) ) {
	foreach( $panels as $panel ){
	    require get_template_directory() . '/inc/customizer/panels/' . $panel . '.php';
	}
}

$bootstrap_fitness_header_sections = array(  'site-identity', 'social-media', 'general-info');
if( class_exists( 'The_Bootstrap_Themes_Companion' ) ) {
    $bootstrap_fitness_homepage_sections = array(  'banner', 'classes', 'what-we-do', 'who-we-are', 'class-schedule', 'trainers', 'offer', 'price', 'testimonial', 'blogs');
} else{
    $bootstrap_fitness_homepage_sections = array(  'banner', 'classes', 'what-we-do', 'who-we-are', 'class-schedule', 'offer', 'blogs');

}

if( ! empty( $bootstrap_fitness_header_sections ) ) {
    foreach( $bootstrap_fitness_header_sections as $section ) {
        require get_template_directory() . '/inc/customizer/sections/header-panel/' . $section . '.php';
    }
}

if( ! empty( $bootstrap_fitness_homepage_sections ) ) {
    foreach( $bootstrap_fitness_homepage_sections as $section ) {
        require get_template_directory() . '/inc/customizer/sections/homepage-options/' . $section . '.php';
    }
}

require get_template_directory() . '/inc/customizer/sections/colors-fonts.php';
require get_template_directory() . '/inc/customizer/sections/sort-homepage-section.php';
require get_template_directory() . '/inc/customizer/sections/footer-section.php';



/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function bootstrap_fitness_customize_preview_js() {
	wp_enqueue_script( 'bootstrap_fitness_customizer', get_theme_file_uri( '/inc/js/customizer.js' ), array( 'customize-preview', 'customize-selective-refresh' ), BOOTSTRAP_FITNESS_VERSION, true );
}
add_action( 'customize_preview_init', 'bootstrap_fitness_customize_preview_js' );


function bootstrap_fitness_customizer_scripts() {
    wp_enqueue_script( 'bootstrap_fitness_customize', get_template_directory_uri() . '/inc/js/customize.js', array( 'jquery' ), BOOTSTRAP_FITNESS_VERSION, true );

    $array = array(
        'home' => get_home_url(),
    );
    wp_localize_script( 'bootstrap_fitness_customize', 'data', $array );
}
add_action( 'customize_controls_enqueue_scripts', 'bootstrap_fitness_customizer_scripts' );

/**
 * Render Callback Functions
*/
require get_template_directory() . '/inc/customizer/render-functions.php';

/**
 * Sanitization Functions
*/
require get_template_directory() . '/inc/customizer/sanitization-functions.php';
