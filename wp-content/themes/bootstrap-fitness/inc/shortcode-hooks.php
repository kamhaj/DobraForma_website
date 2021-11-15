<?php
/**
 * Shortcode hook
 *
 * @package bootstrap_fitness
 *
 */

add_action('tbtc_testimonial_shortcode_layouts', 'bootstrap_fitness_testimonial_layout');

function bootstrap_fitness_testimonial_layout()
{

    get_template_part( 'template-parts/shortcode-layout/testimonial-layout' );

}
add_action('tbtc_team_shortcode_layouts', 'bootstrap_fitness_team_layout');

function bootstrap_fitness_team_layout()
{
    
    get_template_part( 'template-parts/shortcode-layout/team-layout' );
    
}

add_action('tbtc_price_shortcode_layouts', 'bootstrap_fitness_price_layout');

function bootstrap_fitness_price_layout()
{

    get_template_part( 'template-parts/shortcode-layout/price-layout' );
    
}