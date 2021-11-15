<?php
/**
 * Who we are Section
 * 
 * @package bootstrap_fitness
 */

if( get_theme_mod( 'bf_who_we_are_display_option', true ) ) :
    $who_we_are_title = get_theme_mod( 'bf_heading_for_who_we_are' );
    $whoPage = get_page_by_path(get_theme_mod('bf_who_we_are_pages'));
      
      $post = get_post($whoPage);
      setup_postdata( $post );

      if($who_we_are_title OR !empty($whoPage)){
      $img_url = has_post_thumbnail() ? get_the_post_thumbnail_url() : get_template_directory_uri().'/images/about.jpg';
      }
?>   

<section class="home-section about" id="bootstrap_fitness_who_we_are_section">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="about-content">
					<h2 class="main-title"><?php echo esc_html( $who_we_are_title ); ?></h2>
					<?php the_excerpt(); ?>
          <a href="<?php the_permalink(); ?>" class="btn btn-third"><?php esc_html_e( "Learn More", 'bootstrap-fitness' ); ?></a>
				</div>
			</div>
			<div class="col-md-6">
				<div class="img-holder">
					<img src="<?php echo esc_url($img_url); ?>">
				</div>
			</div>
		</div>
	</div>
</section>

<?php   

wp_reset_postdata();
endif;
   