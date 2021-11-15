<?php
/**
 * Classes Section
 * 
 * @package bootstrap_fitness
 */

if( get_theme_mod( 'bf_classes_show_hide', true ) ) :
?>
<section class="home-section classes" id="bootstrap_fitness_classes_section">
	<div class="container">
    <?php if( get_theme_mod( 'bf_classes_heading') ) {
            echo '<h2 class="main-title">' . esc_html( get_theme_mod( 'bf_classes_heading')  ) . '</h2>'; } ?>
		<div class="classes-holder">
        <?php 
        $bf_classes_sections = get_theme_mod( 'bf_classes_sections','' );

        if ( ! empty( $bf_classes_sections ) && is_array( $bf_classes_sections ) ) {
            foreach ( $bf_classes_sections as $bf_classes_section ) {                  
        ?>
			<div class="classes-block">
            <?php if( $bf_classes_section['bf_classes_thumbnail'] ){ 
    			    $img_url = is_numeric( $bf_classes_section['bf_classes_thumbnail'] ) ? wp_get_attachment_image_url( $bf_classes_section['bf_classes_thumbnail'], 'full' ) : $bf_classes_section['bf_classes_thumbnail'];
            ?> 
                <img src="<?php echo esc_url( $img_url ); ?>" alt="<?php echo esc_attr( $bf_classes_section['bf_classes_title'] ); ?>">
            <?php } ?>
				<div class="classes-info">
                <?php 
                    if( $bf_classes_section['bf_classes_title'] ) 
                    echo '<h3 class="title">' . esc_html( $bf_classes_section['bf_classes_title'] ) . '</h3>';                                                                                  
                    if( $bf_classes_section['bf_classes_btn'] && $bf_classes_section['bf_classes_btnlink'] )
                    echo '<a href="' . esc_url( $bf_classes_section['bf_classes_btnlink']) . '" class="btn btn-third">' . esc_html( $bf_classes_section['bf_classes_btn'] ) . '</a>';
                ?>    
				</div>
			</div>
        <?php } } ?>
			
		</div>
	</div>
</section>

<?php
endif;