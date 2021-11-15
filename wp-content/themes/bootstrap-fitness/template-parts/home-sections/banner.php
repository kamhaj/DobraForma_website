<?php
/**
 * Counter Section
 * 
 * @package bootstrap_fitness
 */
    if( get_theme_mod( 'banner_section_display_option', true ) ) :
        $banner_title = get_theme_mod( 'banner_section_title' );
        $banner_desc = get_theme_mod( 'banner_section_description' );
        $banner_cta_label = get_theme_mod( 'banner_section_cta_label' );
        $banner_cta_link = get_theme_mod( 'banner_section_cta_link' );
?>

<section class="banner" id="bootstrap_fitness_banner_section">
	<div class="item"  style="background-image: url(<?php echo esc_url( get_header_image() ); ?>);">
		<div class="container">
      <?php if($banner_title OR $banner_desc OR $banner_cta_label){?>
			<div class="caption">
				<h1 class="banner-title"><?php echo esc_html( $banner_title ); ?></h1>
				<p><?php echo esc_html( $banner_desc ); ?></p>
        <?php if($banner_cta_link && $banner_cta_label ){ ?>
				<a class="btn btn-third" href="<?php echo esc_url( $banner_cta_link ); ?>">
                <?php echo esc_html( $banner_cta_label ); ?>
        </a>
        <?php } ?>
			</div>
      <?php } ?>
		</div>
	</div>
</section>

<?php 
  endif;