<?php
/**
 * Counter Section
 * 
 * @package bootstrap_fitness
 */

if( get_theme_mod( 'bf_what_we_do_display_option', true ) ) :
  $bf_heading_for_what_we_do       = get_theme_mod( 'bf_heading_for_what_we_do' );
  $bf_desc_for_what_we_do       = get_theme_mod( 'bf_desc_for_what_we_do' );
  $bf_image_for_what_we_do      = get_theme_mod( 'bf_image_for_what_we_do' );
?>

<section class="home-section services" id="bootstrap_fitness_what_we_do_section">
	<div class="container">
		<div class="row">
    <?php if($bf_image_for_what_we_do){ ?>
			<div class="col-lg-6 col-md-12 img-holder">
				<img src="<?php echo esc_url($bf_image_for_what_we_do); ?>">
			</div>
      <?php } ?>
			<div class="col-lg-6 col-md-12 services-content">
      <?php if($bf_heading_for_what_we_do){ ?>
				<h2 class="main-title"><?php echo esc_html($bf_heading_for_what_we_do); ?></h2>
      <?php } ?>  
      <?php if($bf_desc_for_what_we_do){ ?>
				<p class="main-content"><?php echo esc_textarea($bf_desc_for_what_we_do)?></p>
      <?php } ?>

      <?php
                $bf_points = get_theme_mod( 'bf_points_for_what_we_do', '' ); 
                if ( ! empty( $bf_points ) && is_array( $bf_points ) ) {
      ?>
        	<div class="services-item">
          <?php  
                foreach ( $bf_points as $bf_point ) { ?>
					<div class="item-block">
          <?php if( $bf_point['bf_what_we_do_thumbnail'] ){ 
    			        $img_url = is_numeric( $bf_point['bf_what_we_do_thumbnail'] ) ? wp_get_attachment_image_url( $bf_point['bf_what_we_do_thumbnail'], 'full' ) : $bf_point['bf_what_we_do_thumbnail'];
          ?>
                <div class="icon-holder">
                  <img src="<?php echo esc_url( $img_url ); ?>" alt="<?php echo esc_attr( $bf_point['bf_what_we_do_title'] ); ?>">
                </div>
          <?php } ?>
						

						<div class="text-holder">
              <?php 
                if( $bf_point['bf_what_we_do_title'] )
                echo '<h4 class="title">' . esc_html( $bf_point['bf_what_we_do_title'] ) . '</h4>';
			
                if( $bf_point['bf_what_we_do_desc'] )
                echo wp_kses_post( wpautop( $bf_point['bf_what_we_do_desc'] ) );
              ?>
						</div>
					</div>
					<?php } ?>
          
				  </div>
          <?php } ?>
			</div>
		</div>
	</div>
</section>
<?php
endif;