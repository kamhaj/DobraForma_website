<?php
/**
* Why choose us Section
*
* @package bootstrap_fitness
*/
if( get_theme_mod( 'bs_why_choose_us_display_option', true ) ) : 
    $heading       = get_theme_mod( 'bs_heading_for_why_choose_us' );
    $bs_top_heading_for_why_choose_us       = get_theme_mod( 'bs_top_heading_for_why_choose_us' );
    $bs_image_for_why_choose_us      = get_theme_mod( 'bs_image_for_why_choose_us' );
?>
<section class="home-section why-choose" id="bootstrap_fitness_why_choose_us_section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="why-choose-info">
          <?php if($bs_top_heading_for_why_choose_us OR $heading ){ ?>
            <div class="main-title">
            <?php if($bs_top_heading_for_why_choose_us){ ?>
                <span class="sub-title"><?php echo esc_html($bs_top_heading_for_why_choose_us); ?></span>
            <?php } if($heading){ ?>
                <h2 class="title"><?php echo esc_html($heading); ?></h2>
            <?php } ?>
            </div>
            <?php } ?>
            
            <?php
                $bs_points = get_theme_mod( 'bs_points_for_why_choose_us', '' ); 
                if ( ! empty( $bs_points ) && is_array( $bs_points ) ) {
      ?>
            <div class="row">
                <?php  
                    foreach ( $bs_points as $bs_point ) { ?>
                    <div class="col-lg-6 col-md-6">
                        <div class="info-holder">
                        <?php if( $bs_point['bs_why_choose_us_thumbnail'] ){ 
    			                $img_url = is_numeric( $bs_point['bs_why_choose_us_thumbnail'] ) ? wp_get_attachment_image_url( $bs_point['bs_why_choose_us_thumbnail'], 'full' ) : $bs_point['bs_why_choose_us_thumbnail'];
                        ?>
                        <div class="img-holder">
                            <img src="<?php echo esc_url( $img_url ); ?>" alt="<?php echo esc_attr( $bs_point['bs_why_choose_us_title'] ); ?>">
                        </div>
                        <?php } ?>
                        <div class="content-holder">
                            <?php
                        if( $bs_point['bs_why_choose_us_title'] ) 
                            echo '<h5 class="title">' . esc_html( $bs_point['bs_why_choose_us_title'] ) . '</h5>';
                            if( $bs_point['bs_why_choose_us_desc'] )
                            echo wp_kses_post( wpautop( $bs_point['bs_why_choose_us_desc'] ) );?>
                        </div>
                
                        </div>
                    </div>
                <?php } ?>
              
            </div>
            <?php } ?>
          </div>
        </div>
        <?php if($bs_image_for_why_choose_us){ ?>
        <div class="col-lg-4">
          <div class="why-choose-img">
            <img src="<?php echo esc_url($bs_image_for_why_choose_us); ?>" >
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
</section>
<?php endif;