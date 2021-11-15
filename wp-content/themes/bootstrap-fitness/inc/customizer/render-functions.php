<?php
/**
 * render callback function
 *
 * @package bootstrap_fitness
 */
//banner
function bootstrap_fitness_get_banner_sec_title(){
    return get_theme_mod( 'banner_section_title', __( 'BUILD YOUR BODY STRONG', 'bootstrap-fitness' ) );
}

function bootstrap_fitness_get_banner_desc(){
    return get_theme_mod( 'banner_section_description', __( 'We believe in working the body with a variety of training options to give you the best results possible. We offer a variety of equipment and programs to suit your needs.', 'bootstrap-fitness' ) );
}

function bootstrap_fitness_get_banner_cta(){
    return get_theme_mod( 'banner_section_cta_label', __( 'Learn More', 'bootstrap-fitness' ) );
}

//who we are
function bootstrap_fitness_get_whoweare_heading(){
    return get_theme_mod( 'bf_heading_for_who_we_are', __( 'Who we are', 'bootstrap-fitness' ) );
}

//testimonial
function bootstrap_fitness_get_testimonials(){
    return get_theme_mod( 'bf_heading_for_offer', __( 'Discount up to 35% for first member!', 'bootstrap-fitness' ) );
}
//offer
function bootstrap_fitness_get_offers(){
    return get_theme_mod( 'bf_heading_for_offer', __( 'Discount up to 35% for first member!', 'bootstrap-fitness' ) );
}
//price
function bootstrap_fitness_get_tickets_heading(){
    return get_theme_mod( 'bf_tickets_heading', __( 'Services Pricing', 'bootstrap-fitness' ) );
}

//copyright
function bootstrap_fitness_get_copyright(){
    return get_theme_mod( 'bf_copyright_text', __( 'Proudly powered by WordPress | Theme: bootstrap-fitness by Underscores.me', 'bootstrap-fitness' ) );
}
