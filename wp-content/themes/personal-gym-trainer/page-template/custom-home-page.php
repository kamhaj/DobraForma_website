<?php
/**
 * Template Name: Custom Home Page
 */
get_header(); ?>

<main id="content">
  <?php if( get_theme_mod('fitness_insight_slider_arrows') != ''){ ?>
    <section id="slider">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> 
        <?php
          for ( $i = 1; $i <= 4; $i++ ) {
            $mod =  get_theme_mod( 'fitness_insight_post_setting' . $i );
            if ( 'page-none-selected' != $mod ) {
              $fitness_insight_slide_post[] = $mod;
            }
          }
           if( !empty($fitness_insight_slide_post) ) :
          $args = array(
            'post_type' =>array('post','page'),
            'post__in' => $fitness_insight_slide_post
          );
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            $i = 1;
        ?>
        <div class="carousel-inner" role="listbox">
          <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
          <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
            <img src="<?php esc_url(the_post_thumbnail_url('full')); ?>"/>
            <div class="carousel-caption">
              <h2><?php the_title();?></h2>
              <div class="home-btn">
                <a href="<?php the_permalink(); ?>"><?php echo esc_html('GET STARTED','personal-gym-trainer'); ?></a>
              </div>
            </div>
          </div>
          <?php $i++; endwhile;
          wp_reset_postdata();?>
        </div>
        <?php else : ?>
        <div class="no-postfound"></div>
          <?php endif;
        endif;?>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-angle-double-left"></i><?php echo esc_html('PREV','personal-gym-trainer'); ?></span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"><?php echo esc_html('NEXT','personal-gym-trainer'); ?><i class="fas fa-angle-double-right"></i></span>
          </a>
      </div>
      <div class="clearfix"></div>
    </section>
  <?php }?>

  <?php if( get_theme_mod('fitness_insight_middle_sec_settigs1') != ''){ ?>
    <section id="middle-sec">
      <div class="row m-0">
        <?php
          for ( $mid_sec = 1; $mid_sec <= 4; $mid_sec++ ) {
            $mod =  get_theme_mod( 'fitness_insight_middle_sec_settigs'.$mid_sec );
            if ( 'page-none-selected' != $mod ) {
              $fitness_insight_post[] = $mod;
            }
          }
           if( !empty($fitness_insight_post) ) :
          $args = array(
            'post_type' =>array('post','page'),
            'post__in' => $fitness_insight_post
          );
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            $mid_sec = 1;
        ?>
        <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
          <div class="col-lg-3 col-md-6 col-sm-6 p-0">
            <div class="box">
              <img src="<?php esc_url(the_post_thumbnail_url('full')); ?>"/>
              <div class="outer-box">
                <h4><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
              </div>
              <div class="box-content">
                <i class="<?php echo esc_html(get_theme_mod('fitness_insight_mid_section_icon'. $s)); ?>"></i>
                <h4><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
                <p><?php $excerpt = get_the_excerpt(); echo esc_html( fitness_insight_string_limit_words( $excerpt, 8 )); ?></p>
              </div>
            </div>
          </div>
        <?php $s++; endwhile;
        wp_reset_postdata();?>
        <?php else : ?>
        <div class="no-postfound"></div>
          <?php endif;
        endif;?>
      </div>
    </section>
  <?php }?>

  <?php if(get_theme_mod('personal_gym_trainer_calculator_main_heading')!='' || get_theme_mod('personal_gym_trainer_calculator_left_title')!='' || get_theme_mod('personal_gym_trainer_calculator_left_text')!='' ){ ?>
    <section id="calculator" class="py-5">
      <div class="container">
        <div class="calculator-head mb-5">
          <?php if(get_theme_mod('personal_gym_trainer_calculator_main_heading')!=''){ ?>
            <h3 class="pb-0 m-0 text-center"><?php echo esc_html(get_theme_mod('personal_gym_trainer_calculator_main_heading')); ?></h3>
            <hr>
          <?php } ?>
        </div>
        <div class="row mt-4">
          <div class="col-lg-7 col-md-7 col-12">
            <?php if(get_theme_mod('personal_gym_trainer_calculator_left_title')!=''){ ?>
              <h5 class=""><?php echo esc_html(get_theme_mod('personal_gym_trainer_calculator_left_title')); ?></h5>
            <?php } ?>
            <?php if(get_theme_mod('personal_gym_trainer_calculator_left_text')!=''){ ?>
              <p class=""><?php echo esc_html(get_theme_mod('personal_gym_trainer_calculator_left_text')); ?></p>
            <?php }?>
            <div class="form-horizontal" id="form">
              <div class="row">
                <div class="col-lg-6 col-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="height" placeholder="Height / Centimetre">
                  </div>
                </div>
                <div class="col-lg-6 col-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="weight" placeholder="Weight / Kilogram ">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4 col-12">
                  <div class="form-group">
                    <input type="number" class="form-control" id="age" placeholder="Age">
                  </div>
                </div>
                <div class="col-lg-4 col-12">
                  <div class="form-group">
                    <select name="gender" id="gender" class="form-control">
                      <option value="Male" id="male"><?php esc_html_e('Male','personal-gym-trainer'); ?></option>
                      <option value="female" id="female"><?php esc_html_e('Female','personal-gym-trainer'); ?></option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-4 col-12">
                  <div class="form-group">
                    <button type="submit" id="submit"><?php esc_html_e('Calculate','personal-gym-trainer'); ?></button>
                  </div>
                </div>
              </div>
            </div>
            <div class="bmi_btn">
              <a href=""><?php esc_html_e('Your BMI','personal-gym-trainer'); ?>: <span id="calculate"></span></a>
            </div>
          </div>
          <div class="col-lg-5 col-md-5 col-12 text-center">
            <?php if(get_theme_mod('personal_gym_trainer_calculator_right_title')!=''){ ?>
              <h5 class="list_title"><?php echo esc_html(get_theme_mod('personal_gym_trainer_calculator_right_title')); ?></h5>
            <?php } ?>
            <div class="chart-box">
              <div class="row">
                <div class="col-lg-6 col-6 list_box pr-0">
                  <?php if(get_theme_mod('personal_gym_trainer_calculator_left_heading')!=''){ ?>
                    <h6 class="head"><?php echo esc_html(get_theme_mod('personal_gym_trainer_calculator_left_heading')); ?></h6>
                  <?php } ?>
                  <?php for($i=1; $i<=10; $i++) { ?>
                    <?php if(get_theme_mod('personal_gym_trainer_list_left'.$i)!=''){ ?>
                      <p><?php echo esc_html(get_theme_mod('personal_gym_trainer_list_left'.$i)); ?></p>
                    <?php } ?>
                  <?php } ?>
                </div>
                <div class="col-lg-6 col-6 pl-0">
                  <?php if(get_theme_mod('personal_gym_trainer_calculator_right_heading')!=''){ ?>
                    <h6 class="head"><?php echo esc_html(get_theme_mod('personal_gym_trainer_calculator_right_heading')); ?></h6>
                  <?php } ?>
                  <?php for($i=1; $i<=10; $i++) { ?>
                    <?php if(get_theme_mod('personal_gym_trainer_list_right'.$i)!=''){ ?>
                      <p><?php echo esc_html(get_theme_mod('personal_gym_trainer_list_right'.$i)); ?></p>
                    <?php } ?>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php }?>
</main>

<?php get_footer(); ?>