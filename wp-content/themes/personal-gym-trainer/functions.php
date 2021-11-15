<?php
/**
 * Theme functions and definitions
 *
 * @package personal_gym_trainer
 */ 

if ( ! function_exists( 'personal_gym_trainer_enqueue_styles' ) ) :
	/**
	 * Load assets.
	 *
	 * @since 1.0.0
	 */
	function personal_gym_trainer_enqueue_styles() {
		wp_enqueue_style( 'fitness-insight-style-parent', get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'personal-gym-trainer-style', get_stylesheet_directory_uri() . '/style.css', array( 'fitness-insight-style-parent' ), '1.0.0' );
		// Theme Customize CSS.
		require get_parent_theme_file_path( 'inc/extra_customization.php' );
		wp_add_inline_style( 'personal-gym-trainer-style',$fitness_insight_custom_style );

		if ( is_page_template( 'page-template/custom-home-page.php' ) ) {
			// Custom JS
			wp_enqueue_script( 'personal-gym-trainer-custom.js', get_theme_file_uri( '/assets/js/personal-gym-trainer-custom.js' ), array( 'jquery' ), true );
		}
	}
endif;
add_action( 'wp_enqueue_scripts', 'personal_gym_trainer_enqueue_styles', 99 );

function personal_gym_trainer_setup() {
	add_theme_support( 'align-wide' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( "responsive-embeds" );
	add_theme_support( "wp-block-styles" );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support('custom-background',array(
		'default-color' => 'ffffff',
	));
	add_image_size( 'personal-gym-trainer-featured-image', 2000, 1200, true );
	add_image_size( 'personal-gym-trainer-thumbnail-avatar', 100, 100, true );

	$GLOBALS['content_width'] = 525;
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'personal-gym-trainer' ),
	) );

	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
	) );

	/*
	* This theme styles the visual editor to resemble the theme style,
	* specifically font, colors, and column width.
	*/
	add_editor_style( array( 'assets/css/editor-style.css', fitness_insight_fonts_url() ) );
}
add_action( 'after_setup_theme', 'personal_gym_trainer_setup' );

function personal_gym_trainer_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'personal-gym-trainer' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'personal-gym-trainer' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h3 class="widget-title">',
		'after_title'   => '</h3></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'personal-gym-trainer' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your pages and posts', 'personal-gym-trainer' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h3 class="widget-title">',
		'after_title'   => '</h3></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'personal-gym-trainer' ),
		'id'            => 'footer-1',
		'description'   => __( 'Add widgets here to appear in your footer.', 'personal-gym-trainer' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'personal-gym-trainer' ),
		'id'            => 'footer-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'personal-gym-trainer' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 3', 'personal-gym-trainer' ),
		'id'            => 'footer-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'personal-gym-trainer' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 4', 'personal-gym-trainer' ),
		'id'            => 'footer-4',
		'description'   => __( 'Add widgets here to appear in your footer.', 'personal-gym-trainer' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'personal_gym_trainer_widgets_init' );

function personal_gym_trainer_remove_my_action() {
    remove_action( 'admin_menu','fitness_insight_gettingstarted' );
    remove_action( 'after_setup_theme','fitness_insight_notice' );
}
add_action( 'init', 'personal_gym_trainer_remove_my_action');

function personal_gym_trainer_customize_register() {
  	global $wp_customize;

  $wp_customize->remove_section( 'fitness_insight_pro' );	

	$wp_customize->remove_setting( '' );
	$wp_customize->remove_control( '' );

}
add_action( 'customize_register', 'personal_gym_trainer_customize_register', 11 );

function personal_gym_trainer_customize( $wp_customize ) {

	wp_enqueue_style('customizercustom_css', esc_url( get_stylesheet_directory_uri() ). '/assets/css/customizer.css');

	$wp_customize->add_section('personal_gym_trainer_pro', array(
		'title'    => __('UPGRADE GYM TRAINER PREMIUM', 'personal-gym-trainer'),
		'priority' => 1,
	));

	$wp_customize->add_setting('personal_gym_trainer_pro', array(
		'default'           => null,
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control(new Personal_Gym_Trainer_Pro_Control($wp_customize, 'personal_gym_trainer_pro', array(
		'label'    => __('GYM TRAINER PREMIUM', 'personal-gym-trainer'),
		'section'  => 'personal_gym_trainer_pro',
		'settings' => 'personal_gym_trainer_pro',
		'priority' => 1,
	)));  

	// BMI Section
    $wp_customize->add_section('fitness_insight_bmi_section',array(
        'title' => __('BMI Settings', 'personal-gym-trainer'),
    ) );

    $wp_customize->add_setting('personal_gym_trainer_calculator_main_heading',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)); 
	$wp_customize->add_control('personal_gym_trainer_calculator_main_heading',array(
		'label' => esc_html__('Add Section Title','personal-gym-trainer'),
		'section' => 'fitness_insight_bmi_section',
		'setting' => 'personal_gym_trainer_calculator_main_heading',
		'type'    => 'text'
	));

    $wp_customize->add_setting('personal_gym_trainer_calculator_left_title',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)); 
	$wp_customize->add_control('personal_gym_trainer_calculator_left_title',array(
		'label' => esc_html__('Add Calculator Title','personal-gym-trainer'),
		'section' => 'fitness_insight_bmi_section',
		'setting' => 'personal_gym_trainer_calculator_left_title',
		'type'    => 'text'
	));

    $wp_customize->add_setting('personal_gym_trainer_calculator_left_text',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)); 
	$wp_customize->add_control('personal_gym_trainer_calculator_left_text',array(
		'label' => esc_html__('Add Calculator Text','personal-gym-trainer'),
		'section' => 'fitness_insight_bmi_section',
		'setting' => 'personal_gym_trainer_calculator_left_text',
		'type'    => 'text'
	));

    $wp_customize->add_setting('personal_gym_trainer_calculator_right_title',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)); 
	$wp_customize->add_control('personal_gym_trainer_calculator_right_title',array(
		'label' => esc_html__('Add BMI Chart Title','personal-gym-trainer'),
		'section' => 'fitness_insight_bmi_section',
		'setting' => 'personal_gym_trainer_calculator_right_title',
		'type'    => 'text'
	));

	$wp_customize->add_setting('personal_gym_trainer_calculator_left_heading',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)); 
	$wp_customize->add_control('personal_gym_trainer_calculator_left_heading',array(
		'label' => esc_html__('Add Chart heading Left','personal-gym-trainer'),
		'section' => 'fitness_insight_bmi_section',
		'setting' => 'personal_gym_trainer_calculator_left_heading',
		'type'    => 'text'
	));

	$wp_customize->add_setting('personal_gym_trainer_calculator_right_heading',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)); 
	$wp_customize->add_control('personal_gym_trainer_calculator_right_heading',array(
		'label' => esc_html__('Add Chart heading Right','personal-gym-trainer'),
		'section' => 'fitness_insight_bmi_section',
		'setting' => 'personal_gym_trainer_calculator_right_heading',
		'type'    => 'text'
	));

	$wp_customize->add_setting('personal_gym_trainer_bmi_chart_count',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)); 
	$wp_customize->add_control('personal_gym_trainer_bmi_chart_count',array(
		'label' => esc_html__('Add No of Chart Text','personal-gym-trainer'),
		'description' => esc_html__('Incarease the count and then publish the settings, then reload the page.','personal-gym-trainer'),
		'section' => 'fitness_insight_bmi_section',
		'setting' => 'personal_gym_trainer_bmi_chart_count',
		'type'    => 'number'
	));

	$chart_number = get_theme_mod('personal_gym_trainer_bmi_chart_count');

	for($i=1; $i<=$chart_number; $i++) {

		$wp_customize->add_setting('personal_gym_trainer_list_left'.$i,array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field'
		)); 
		$wp_customize->add_control('personal_gym_trainer_list_left'.$i,array(
			'label' => esc_html__('Add Chart Left Text ','personal-gym-trainer').$i,
			'section' => 'fitness_insight_bmi_section',
			'setting' => 'personal_gym_trainer_list_left'.$i,
			'type'    => 'text'
		));

		$wp_customize->add_setting('personal_gym_trainer_list_right'.$i,array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field'
		)); 
		$wp_customize->add_control('personal_gym_trainer_list_right'.$i,array(
			'label' => esc_html__('Add Chart Right Text ','personal-gym-trainer').$i,
			'section' => 'fitness_insight_bmi_section',
			'setting' => 'personal_gym_trainer_list_right'.$i,
			'type'    => 'text'
		));

	}
}
add_action( 'customize_register', 'personal_gym_trainer_customize' );

function personal_gym_trainer_enqueue_comments_reply() {
  if( is_singular() && comments_open() && ( get_option( 'thread_comments' ) == 1) ) {
    // Load comment-reply.js (into footer)
    wp_enqueue_script( 'comment-reply', '/wp-includes/js/comment-reply.min.js', array(), false, true );
  }
}
add_action(  'wp_enqueue_scripts', 'personal_gym_trainer_enqueue_comments_reply' );

define('PERSONAL_GYM_TRAINER_PRO_LINK',__('https://www.ovationthemes.com/wordpress/personal-gym-trainer-wordpress-theme/','personal-gym-trainer'));

/* Pro control */
if (class_exists('WP_Customize_Control') && !class_exists('Personal_Gym_Trainer_Pro_Control')):
    class Personal_Gym_Trainer_Pro_Control extends WP_Customize_Control{

    public function render_content(){?>
        <label style="overflow: hidden; zoom: 1;">
            <div class="col-md upsell-btn">
                <a href="<?php echo esc_url( PERSONAL_GYM_TRAINER_PRO_LINK ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('UPGRADE GYM TRAINER PREMIUM','personal-gym-trainer');?> </a>
            </div>
            <div class="col-md">
                <img class="personal_gym_trainer_img_responsive " src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/screenshot.png">
            </div>
            <div class="col-md">
                <h3 style="margin-top:10px; margin-left: 20px; text-decoration:underline; color:#333;"><?php esc_html_e('GYM TRAINER PREMIUM - Features', 'personal-gym-trainer'); ?></h3>
                <ul style="padding-top:10px">
                    <li class="upsell-personal_gym_trainer"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Responsive Design', 'personal-gym-trainer');?> </li>
                    <li class="upsell-personal_gym_trainer"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Boxed or fullwidth layout', 'personal-gym-trainer');?> </li>
                    <li class="upsell-personal_gym_trainer"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Shortcode Support', 'personal-gym-trainer');?> </li>
                    <li class="upsell-personal_gym_trainer"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Demo Importer', 'personal-gym-trainer');?> </li>
                    <li class="upsell-personal_gym_trainer"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Section Reordering', 'personal-gym-trainer');?> </li>
                    <li class="upsell-personal_gym_trainer"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Contact Page Template', 'personal-gym-trainer');?> </li>
                    <li class="upsell-personal_gym_trainer"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Multiple Blog Layouts', 'personal-gym-trainer');?> </li>
                    <li class="upsell-personal_gym_trainer"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Unlimited Color Options', 'personal-gym-trainer');?> </li>
                    <li class="upsell-personal_gym_trainer"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Designed with HTML5 and CSS3', 'personal-gym-trainer');?> </li>
                    <li class="upsell-personal_gym_trainer"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Customizable Design & Code', 'personal-gym-trainer');?> </li>
                    <li class="upsell-personal_gym_trainer"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Cross Browser Support', 'personal-gym-trainer');?> </li>
                    <li class="upsell-personal_gym_trainer"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Detailed Documentation Included', 'personal-gym-trainer');?> </li>
                    <li class="upsell-personal_gym_trainer"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Stylish Custom Widgets', 'personal-gym-trainer');?> </li>
                    <li class="upsell-personal_gym_trainer"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Patterns Background', 'personal-gym-trainer');?> </li>
                    <li class="upsell-personal_gym_trainer"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('WPML Compatible (Translation Ready)', 'personal-gym-trainer');?> </li>
                    <li class="upsell-personal_gym_trainer"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Woo-commerce Compatible', 'personal-gym-trainer');?> </li>
                    <li class="upsell-personal_gym_trainer"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Full Support', 'personal-gym-trainer');?> </li>
                    <li class="upsell-personal_gym_trainer"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('10+ Sections', 'personal-gym-trainer');?> </li>
                    <li class="upsell-personal_gym_trainer"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Live Customizer', 'personal-gym-trainer');?> </li>
                    <li class="upsell-personal_gym_trainer"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('AMP Ready', 'personal-gym-trainer');?> </li>
                    <li class="upsell-personal_gym_trainer"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Clean Code', 'personal-gym-trainer');?> </li>
                    <li class="upsell-personal_gym_trainer"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('SEO Friendly', 'personal-gym-trainer');?> </li>
                    <li class="upsell-personal_gym_trainer"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Supper Fast', 'personal-gym-trainer');?> </li>                    
                </ul>
            </div>
            <div class="col-md upsell-btn upsell-btn-bottom">
                <a href="<?php echo esc_url( PERSONAL_GYM_TRAINER_PRO_LINK ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('UPGRADE GYM TRAINER PREMIUM','personal-gym-trainer');?> </a>
            </div>
        </label>
    <?php } }
endif;