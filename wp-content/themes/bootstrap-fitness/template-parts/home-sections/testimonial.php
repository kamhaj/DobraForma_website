<?php
/**
 * Expert Section
 * 
 * @package bootstrap_fitness
 */
if( class_exists( 'The_Bootstrap_Themes_Companion' ) ) {
if( get_theme_mod( 'bf_testimonial_display_option', true ) ) :
  $bf_heading_for_testimonial     = get_theme_mod( 'bf_heading_for_testimonial' );
  $bf_image_for_testimonial       = get_theme_mod( 'bf_image_for_testimonial' );
?> 

<section class="home-section testimonial" style="background-image: url(<?php echo esc_url($bf_image_for_testimonial); ?>);" id="bootstrap_fitness_testimonial_sections">
	<div class="container">
		<div class="testimonial-block">
      <?php if($bf_heading_for_testimonial){ ?>
			  <h2 class="main-title"><?php echo esc_html($bf_heading_for_testimonial); ?></h2> 
      <?php } ?>   
			<div class="testimonial-wrapper owl-carousel">
        <?php
          $args = array(
            'post_type' => 'tbtc_testimonials',
            'post_status'    => 'publish',
            'posts_per_page' => -1
            );
          $loop = new WP_Query( $args );
          global $post, $wp_query;
     
          if ( $loop->have_posts() ) {
          while ( $loop->have_posts() ) : $loop->the_post();
          $postID = get_the_ID();
          $custom = get_post_custom(get_the_ID());

          if (!empty($custom)){
              if(isset($custom['tbtc_designation'])){
                  $tbtc_designation = $custom['tbtc_designation'][0];
              }
          }        
        ?>
				<div class="testimonial-holder">
          <?php
            if (has_post_thumbnail()) {
              $testimonial_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'medium');
          ?>
					<div class="img-holder">
						<img src="<?php echo esc_url( $testimonial_image[0] ); ?>" alt="#">
					</div>
          <?php } ?>
					<div class="content-info">
						<h5 class="testimonial-title"><?php the_title(); ?></h5>
						<?php if($tbtc_designation){ ?>
              <span class="organization"><?php echo esc_html($tbtc_designation); ?></span>
            <?php } ?>
            <?php the_content(); ?>
					</div>
				</div>
        <?php
            endwhile;
          } else {
            esc_html_e('No data found','bootstrap-fitness');
          }
          wp_reset_postdata();
        ?> 
			</div>
		</div>
	</div>
</section>

<?php endif; }