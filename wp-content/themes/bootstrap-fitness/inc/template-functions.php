<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package bootstrap_fitness
 */



if( ! function_exists( 'bootstrap_fitness_doctype' ) ) :
	/**
	 * Doctype Declaration
	*/
	function bootstrap_fitness_doctype(){
		?>
		<!DOCTYPE html>
		<html <?php language_attributes(); ?>>
		<?php
	}
endif;
add_action( 'bootstrap_fitness_doctype', 'bootstrap_fitness_doctype' );


if( ! function_exists( 'bootstrap_fitness_head' ) ) :
	/**
	 * Before wp_head 
	*/
	function bootstrap_fitness_head(){
		?>
		<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
   		<meta name="viewport" content="width=device-width, initial-scale=1">
   		<link rel="profile" href="https://gmpg.org/xfn/11">
		<?php wp_head(); ?>
		</head>
		<?php
	}
	endif;
	add_action( 'bootstrap_fitness_head_section', 'bootstrap_fitness_head' );
