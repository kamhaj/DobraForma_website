<?php

// Template Name: Home
get_header();
get_template_part( 'template-parts/home-sections/banner' );

if ( class_exists( 'The_Bootstrap_Themes_Companion' ) ) {
    $default = array(
        'classes',
        'what-we-do',
        'who-we-are',
        'trainers',
        'price',
        'testimonial',
        'blogs'
    );
} else {
    $default = array(
        'classes',
        'what-we-do',
        'who-we-are',
        'blogs'
    );
}

$sections = get_theme_mod( 'bootstrap_fitness_sort_homepage', $default );
if ( !empty($sections) && is_array( $sections ) ) {
    foreach ( $sections as $section ) {
        get_template_part( 'template-parts/home-sections/' . $section, $section );
    }
}
get_footer();