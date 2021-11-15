<?php
/**
 * Expert Section
 * 
 * @package bootstrap_fitness
 */
if( class_exists( 'The_Bootstrap_Themes_Companion' ) ) {
if( get_theme_mod( 'bf_trainers_display_option', true ) ) :
  $bf_heading_for_trainers       = get_theme_mod( 'bf_heading_for_trainers' );
?> 

<section class="home-section team" id="bootstrap_fitness_trainers_sections">
	<div class="container">
  <?php if($bf_heading_for_trainers){ ?>
    <h2 class="main-title"><?php echo esc_html($bf_heading_for_trainers); ?></h2>
  <?php } ?>
		<div class="team-wrapper owl-carousel">
    <?php
          $args = array(
            'post_type' => 'tbtc_teams',
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
                  $tbtc_designation = isset($custom['tbtc_designation']) ? $custom['tbtc_designation'][0]: '';
                  $tbtc_facebook_link = isset($custom['tbtc_facebook_link']) ? $custom['tbtc_facebook_link'][0]: '';
                  $tbtc_instagram_link = isset($custom['tbtc_instagram_link']) ? $custom['tbtc_instagram_link'][0]: '';
                  $tbtc_twitter_link = isset($custom['tbtc_twitter_link']) ? $custom['tbtc_twitter_link'][0]: '';
                  $tbtc_linkedIn_link = isset($custom['tbtc_linkedIn_link']) ? $custom['tbtc_linkedIn_link'][0]: '';
          }        
        ?>
			<div class="team-holder">
        <?php
            $team_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'medium');
            if(isset($team_image[0])){
              $finalImage = $team_image[0];
            } else {
              $finalImage = get_template_directory_uri() . '/images/no-image.png';
            }
        ?>
				<div class="img-holder">
					<img src="<?php echo esc_url($finalImage); ?>">
				</div>
				<div class="team-info">
					<h4 class="title"><?php the_title(); ?></h4>
          <?php if($tbtc_designation){ ?>
					<span class="profession"><?php echo esc_html($tbtc_designation); ?></span>
          <?php } ?>
          <div class="team-social-link"> 
            <?php if($tbtc_facebook_link){ ?> 
              <a href="<?php echo esc_url($tbtc_facebook_link); ?>" target="_blank">
                <span class="fa fa-facebook"></span>
              </a>
            <?php } ?> 
            <?php if($tbtc_instagram_link){ ?> 
              <a href="<?php echo esc_url($tbtc_instagram_link); ?>" target="_blank">
                <span class="fa fa-instagram"></span>
              </a>
            <?php } ?> 
            <?php if($tbtc_twitter_link){ ?>   
              <a href="<?php echo esc_url($tbtc_twitter_link); ?>" target="_blank">
                <span class="fa fa-twitter"></span>
              </a>
            <?php } ?> 
            <?php if($tbtc_linkedIn_link){ ?>     
              <a href="<?php echo esc_url($tbtc_linkedIn_link); ?>" target="_blank">
                <span class="fa fa-linkedin"></span>
              </a>
            <?php } ?>     
          </div>  
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
</section>


<?php endif; }