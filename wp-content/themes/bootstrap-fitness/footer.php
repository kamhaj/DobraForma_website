<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package bootstrap_fitness
 */
?>
<footer class="footer">
    <div class="container">
      <div class="footer-widget-holder">
      <?php 
for ( $i = 1 ;  $i < 5 ;  $i++ ) {
    ?>
          <?php 
    dynamic_sidebar( 'footer-' . $i . '' );
    ?>
        <?php 
}
?>  
      </div>
      <div class="copyright">
      <?php 
esc_html_e( "Powered by", 'bootstrap-fitness' );
?> <a href="<?php 
echo  esc_url( __( 'https://wordpress.org', 'bootstrap-fitness' ) ) ;
?>"><?php 
esc_html_e( "WordPress", 'bootstrap-fitness' );
?></a> | <?php 
esc_html_e( 'Theme by', 'bootstrap-fitness' );
?> <a href="<?php 
echo  esc_url( 'http://thebootstrapthemes.com/' ) ;
?>"><?php 
esc_html_e( 'TheBootstrapThemes', 'bootstrap-fitness' );
?>
      </div>
    </div>
  </footer>
  <?php 
wp_footer();
?>
  </body>
</html>