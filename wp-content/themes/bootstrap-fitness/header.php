<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bootstrap_fitness
 */

     /**
     * Doctype Hook
     * 
     * @hooked bootstrap_fitness_doctype
    */
    do_action( 'bootstrap_fitness_doctype' );

?>
<?php     
    /**
     * Before wp_head
     * 
     * @hooked bootstrap_fitness_head
    */
    do_action( 'bootstrap_fitness_head_section' );
    
?>
 

 <body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'bootstrap-fitness' ); ?></a>
  <header class="header">
    <?php 
    $general_section_display_option = get_theme_mod( 'general_section_display_option', true ); 
    if($general_section_display_option){
      ?>
      <div class="top-header">
        <div class="container">
          <div class="t-header-holder">
            <div class="phone-email">
              <?php 
              $bootstrap_fitness_contact_number = get_theme_mod( 'bootstrap_fitness_contact_number' ); 
              if($bootstrap_fitness_contact_number){
                ?>
                <a href="tel:<?php echo esc_attr($bootstrap_fitness_contact_number); ?>" class="phone">
                  <span class="fa fa-phone"></span> <?php echo esc_html($bootstrap_fitness_contact_number); ?></a>
                <?php } ?>  
                <?php 
                $bootstrap_fitness_email_address = get_theme_mod( 'bootstrap_fitness_email_address', '' ); 
                if($bootstrap_fitness_email_address){
                  ?>
                  <a class="email" href="mailto:<?php echo esc_attr($bootstrap_fitness_email_address); ?>">
                    <span class="fa fa-envelope-o" aria-hidden="true"></span>
                    <?php echo esc_html($bootstrap_fitness_email_address); ?>
                  </a>
                <?php } ?> 
              </div>
              <div class="social-navigation">
                <?php $social_media_array = get_theme_mod( 'bootstrap_fitness_social_media', 'facebook' ); ?>

                <?php if ( ! empty( $social_media_array ) && is_array( $social_media_array ) ) : ?>

                <div class="social-icons">
                  <ul class="list-inline">
                    <?php
                    foreach ( $social_media_array as $value ) {
                      $key_classes = $value['social_media_repeater_class'];
                      $class = str_replace( " ", "-", strtolower( $key_classes ) );
                      $i_tag_class = 'fa fa-' . $class;
                      ?>
                      <li class="<?php echo esc_attr( strtolower( $class ) ); ?>">
                        <a href="<?php echo esc_url( $value['social_media_link'] ); ?>" target="_blank">
                          <i class="<?php echo esc_attr( $i_tag_class ); ?>"></i>
                        </a>
                      </li>
                    <?php } ?>
                  </ul>
                </div>

              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>  

    <div class="main-header">
      <div class="container">

        <div class="header-wrapper">


          <div class="site-title-description">
            <?php
            if( function_exists( 'has_custom_logo' ) && has_custom_logo() ){
              the_custom_logo();
            } 
            $siteTitleShow = get_theme_mod('sitetitle_showhide', 'true');
            if($siteTitleShow){ 
              ?>
              <div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
            <?php } ?>
            <?php 
            $siteDescShow = get_theme_mod('tagline_showhide', 'true');
            if($siteDescShow){
              $bootstrap_fitness_description = get_bloginfo( 'description', 'display' );
              if ( $bootstrap_fitness_description || is_customize_preview() ) :
                ?>
                <p class="site-description"><?php echo $bootstrap_fitness_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
              <?php endif;
            }
            ?>
          </div>


          <nav id="site-navigation" class="main-navigation">
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><!-- <?php esc_html_e( 'Primary Menu', 'bootstrap-fitness' ); ?> -->
              <div id="nav-icon">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </button>
            <?php
            wp_nav_menu(
              array(
                'theme_location' => 'main-menu',
                'menu_id'        => 'primary-menu',
              )
            );
            ?>
          </nav><!-- #site-navigation -->

        </div>
      </div>
    </div>
  </header>


  <?php if ( class_exists( 'Breadcrumb_Trail' ) && ! is_home() && ! is_front_page() ) : ?>               
  <div class="breadcrumb-holder">
   <div class="container"><?php breadcrumb_trail(); ?></div> 
 </div>
</div>
<?php endif; ?>
