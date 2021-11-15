<?php

/**
 * functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bootstrap_fitness
 */



if ( !defined( 'BOOTSTRAP_FITNESS_VERSION' ) ) {
    // Replace the version number of the theme on each release.
    define( 'BOOTSTRAP_FITNESS_VERSION', '1.0.1' );
}

if ( !function_exists( 'bootstrap_fitness_setup' ) ) {
    define( 'BOOTSTRAP_FITNESS_DIR', dirname( __FILE__ ) );
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function bootstrap_fitness_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on relax spa, use a find and replace
         * to change 'bootstrap-fitness' to the name of your theme in all the template files.
         */
        load_theme_textdomain( 'bootstrap-fitness', get_template_directory() . '/languages' );
        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );
        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );
        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support( 'post-thumbnails' );
        // This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
            'main-menu' => esc_html__( 'Main Menu', 'bootstrap-fitness' ),
        ) );
        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script'
        ) );
        // Set up the WordPress core custom background feature.
        add_theme_support( 'custom-background', apply_filters( 'bootstrap_fitness_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        ) ) );
        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );
        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support( 'custom-logo', array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        ) );
        add_editor_style();
        add_theme_support( 'register_block_style' );
        add_theme_support( 'register_block_pattern' );
        add_theme_support( "wp-block-styles" );
        add_theme_support( "responsive-embeds" );
        add_theme_support( "align-wide" );
        require get_template_directory() . '/inc/starter-content.php';
        $starter_content = bootstrap_fitness_starter_content();
        add_theme_support( 'starter-content', $starter_content );
    }

}

add_action( 'after_setup_theme', 'bootstrap_fitness_setup' );
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bootstrap_fitness_content_width()
{
    $GLOBALS['content_width'] = apply_filters( 'bootstrap_fitness_content_width', 640 );
}

add_action( 'after_setup_theme', 'bootstrap_fitness_content_width', 0 );
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
require get_template_directory() . '/inc/widgets/widgets.php';
/**
 * Enqueue scripts and styles.
 */
function bootstrap_fitness_scripts()
{
    $body_font_family = get_theme_mod( 'body_font_family', 'Mulish' );
    $heading_font_family = get_theme_mod( 'heading_font_family', 'Teko' );
    $site_identity_font_family = esc_attr( get_theme_mod( 'bf_site_identity_font_family', 'Teko' ) );
    wp_enqueue_style( 'bootstrap-fitness-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.css' );
    wp_enqueue_style( 'owl', get_template_directory_uri() . '/css/owl.carousel.min.css' );
    wp_enqueue_style(
        'bootstrap-fitness-style',
        get_stylesheet_uri(),
        array(),
        BOOTSTRAP_FITNESS_VERSION
    );
    wp_style_add_data( 'bootstrap-fitness-style', 'rtl', 'replace' );
    wp_enqueue_style( 'bootstrap-fitness-googlefonts', 'https://fonts.googleapis.com/css?family=' . esc_attr( $body_font_family ) . ':200,300,400,500,600,700,800,900|' . esc_attr( $heading_font_family ) . ':200,300,400,500,600,700,800,900|' . esc_attr( $site_identity_font_family ) . ':200,300,400,500,600,700,800,900|' );
    wp_dequeue_script( 'all' );
    wp_enqueue_script( 'bootstrap-fitness-bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array( 'jquery' ) );
    wp_enqueue_script( 'owl', get_template_directory_uri() . '/js/owl.carousel.min.js', array( 'jquery' ) );
    wp_enqueue_script(
        'bootstrap-fitness-navigation',
        get_template_directory_uri() . '/js/navigation.js',
        array(),
        BOOTSTRAP_FITNESS_VERSION,
        true
    );
    wp_enqueue_script(
        'bootstrap-fitness-script',
        get_template_directory_uri() . '/js/script.js',
        array( 'jquery' ),
        '',
        true
    );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

add_action( 'wp_enqueue_scripts', 'bootstrap_fitness_scripts' );
/**
 * Recommended Plugins
 */
require get_template_directory() . '/inc/tgmpa/recommended-plugins.php';
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';
/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';
/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';
/**
 * Custom contrl
 */
require get_template_directory() . '/inc/custom-controls/custom-control.php';
/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
/**
 * Shortcode hooks
 */
require get_template_directory() . '/inc/shortcode-hooks.php';
/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
    require get_template_directory() . '/inc/jetpack.php';
}
/**
 * Customizer changes css
 */
require get_template_directory() . '/inc/dynamic-css.php';
function bootstrap_fitness_excerpt( $limit )
{
    $excerpt = explode( ' ', get_the_excerpt(), $limit );
    
    if ( count( $excerpt ) >= $limit ) {
        array_pop( $excerpt );
        $excerpt = implode( " ", $excerpt ) . '...';
    } else {
        $excerpt = implode( " ", $excerpt );
    }
    
    $excerpt = preg_replace( '`[[^]]*]`', '', $excerpt );
    return $excerpt;
}
