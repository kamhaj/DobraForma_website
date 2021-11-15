<?php
/**
 * Displays footer site info
 *
 * @subpackage Personal Gym Trainer
 * @since 1.0
 * @version 1.4
 */

?>
<div class="site-info">

    <?php
        echo esc_html( get_theme_mod( 'fitness_insight_footer_text' ) );
        printf(
            /* translators: %s: Gym Trainer WordPress Theme. */
            esc_html__( ' %s ','personal-gym-trainer' ),
            '<p>Gym Trainer WordPress Theme</p>'
        );
    ?>

</div>