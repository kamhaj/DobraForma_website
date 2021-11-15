<?php
/**
 * Service Section
 * 
 * @package bootstrap_fitness
 */

if( get_theme_mod( 'bs_services_show_hide', true ) ) :
?>

<section class="home-section services" id="bootstrap_fitness_service_section">
    <div class="container">
      <div class="row">
      <?php 
      $bs_services_sections = get_theme_mod( 'bs_services_section','' );
      if ( ! empty( $bs_services_sections ) && is_array( $bs_services_sections ) ) {
        foreach ( $bs_services_sections as $bs_services_section ) {                  
      ?>
        <div class="col-lg-4 col-md-6">
          <div class="service-holder">
            <?php if( $bs_services_section['bs_service_thumbnail'] ){ 
    			    $img_url = is_numeric( $bs_services_section['bs_service_thumbnail'] ) ? wp_get_attachment_image_url( $bs_services_section['bs_service_thumbnail'], 'full' ) : $bs_services_section['bs_service_thumbnail'];
            ?> 
            <div class="img-holder">
              <img src="<?php echo esc_url( $img_url ); ?>" alt="<?php echo esc_attr( $bs_services_section['bs_service_title'] ); ?>">
            </div>
            <?php } ?>

            <?php 
            if( $bs_services_section['bs_service_title'] ) 
                echo '<h4 class="title">' . esc_html( $bs_services_section['bs_service_title'] ) . '</h4>';
            if( $bs_services_section['bs_service_desc'] )
                echo wp_kses_post( wpautop( $bs_services_section['bs_service_desc'] ) );
            if( $bs_services_section['bs_service_btnlink'] )
                echo '<a href="' . esc_url( $bs_services_section['bs_service_btnlink']) . '" class="btn-link primary">' . esc_html( $bs_services_section['bs_service_btn'] ) . '</a>';
            ?>
          </div>
        </div>
       <?php } } ?>
      </div>
    </div>
  </section>

<?php
endif;
