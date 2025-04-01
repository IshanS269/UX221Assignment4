<section id="slider-section" class="slider-area home-slider">
<div class="<?php if(esc_attr(get_theme_mod('indoor_sports_slider_section_width','Full Width')) == 'Full Width'){ ?>container-fluid pd-0 <?php } elseif(esc_attr(get_theme_mod('indoor_sports_slider_section_width','Full Width')) == 'Box Width'){ ?> container <?php }?>">
<!-- <div class="slideinning"></div> -->
  <!-- start of hero --> 
    <section class="hero-slider hero-style">
        <div class="bgshape">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1459.047" height="621.893" viewBox="0 0 1459.047 621.893">
  <defs>
    <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox">
      <stop offset="0" stop-color="#fff"/>
      <stop offset="1" stop-color="gray" stop-opacity="0"/>
    </linearGradient>
    <linearGradient id="linear-gradient-2" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox">
      <stop offset="0" stop-color="#fff"/>
      <stop offset="1" stop-opacity="0"/>
    </linearGradient>
    <linearGradient id="linear-gradient-3" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox">
      <stop offset="0" stop-color="#fff" stop-opacity="0"/>
      <stop offset="1" stop-color="gray"/>
    </linearGradient>
    <linearGradient id="linear-gradient-6" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox">
      <stop offset="0" stop-color="red"/>
      <stop offset="1" stop-opacity="0"/>
    </linearGradient>
    <linearGradient id="linear-gradient-7" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox">
      <stop offset="0" stop-color="#0077dc"/>
      <stop offset="1" stop-color="#242424"/>
    </linearGradient>
    <linearGradient id="linear-gradient-8" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox">
      <stop offset="0" stop-color="#008aff"/>
      <stop offset="1" stop-color="#242424"/>
    </linearGradient>
  </defs>
  <path id="Path_69" data-name="Path 69" d="M493.7,0h3.531L64.531,621.893H61Z" transform="translate(453.311)" fill="url(#linear-gradient)"/>
  <path id="Path_76" data-name="Path 76" d="M443.7,0h96.177l-432.7,621.893H11Z" transform="translate(401.401)" opacity="0.05" fill="url(#linear-gradient-2)"/>
  <path id="Path_73" data-name="Path 73" d="M274.907,0h1.746L62.746,333.314H61Z" transform="translate(-61 216.316)" opacity="0.2" fill="url(#linear-gradient-3)"/>
  <path id="Path_74" data-name="Path 74" d="M272.907,0h4.131L63.131,333.314H59Z" transform="translate(69.809 216.316)" opacity="0.3" fill="url(#linear-gradient-3)"/>
  <path id="Path_72" data-name="Path 72" d="M493.7,0h22.061L83.061,621.893H61Z" transform="translate(932.164)" opacity="0.1" fill="url(#linear-gradient)"/>
  <path id="Path_68" data-name="Path 68" d="M116.559,0H0L432.7,621.893H549.264Z" transform="translate(909.783)" fill="none" opacity="0.2"/>
  <path id="Path_70" data-name="Path 70" d="M432.7,0H582.616l-432.7,621.893H0Z" transform="translate(523.576)" fill="url(#linear-gradient-6)"/>
  <path id="Path_77" data-name="Path 77" d="M502.7,0h174L244,621.893H70Z" transform="translate(740.778)" fill="url(#linear-gradient-7)"/>
  <path id="Path_78" data-name="Path 78" d="M526.7,0H658.087l-432.7,621.893H94Z" transform="translate(587.074)" fill="url(#linear-gradient-8)"/>
</svg>
                        </div>
        <!-- <div class="s-tp"></div>
        <div class="s-tp2"></div>
        <div class="sl-l1"></div>
        <div class="sl-l2"></div> -->
        <div class="indoor_sportsswiper-container">
            <div class="swiper-wrapper">
              <?php for($p=1; $p<6; $p++) { ?>
              <?php if( get_theme_mod('slider'.$p,false)) { ?>
              <?php $querycolumns = new WP_query('page_id='.get_theme_mod('slider'.$p,true)); ?>
              <?php while( $querycolumns->have_posts() ) : $querycolumns->the_post(); 
                $image = wp_get_attachment_image_src(get_post_thumbnail_id() , true); ?>
              <?php 
                if(has_post_thumbnail()){
                  $img = esc_url($image[0]);
                }
                if(empty($image)){
                  $img = get_template_directory_uri().'/assets/images/default.png';
                }

              ?>
                <div class="indoor_sportsswiper-slide">
                    <div class="indoor_sportsslide-inner slide-bg-image">
                        
                        <div class="sl-r-img">
                            <img class="slide-mainimg slidershape1" src="<?php echo esc_url($img); ?>" alt="<?php the_title_attribute(); ?>">   
                            <div class="slidersvg2"> </div>
                        </div> 
                        <div class="slidercontent">
                            <div class="slide-title">
                                <h2><?php the_title_attribute(); ?></h2>   
                            </div>    
                            <div class="slide-text" >
                                <?php the_excerpt(); ?>
                            </div>
                            <div class="slide-btns">
                              <?php if (get_theme_mod('slider_bookappbtntext') != "")  { ?>
                                <a class="ReadMore" href="<?php echo esc_html(get_theme_mod('slider_bookappbtnlink')); ?>">
                                  <?php echo esc_html(get_theme_mod('slider_bookappbtntext', 'Book Appointment')); ?>
                                  <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                </a>
                              <?php } ?>
                              <?php if (get_theme_mod('slider_learmorebtntext') != "")  { ?>
                                <a class="LearnMore" href="<?php echo esc_html(get_theme_mod('slider_learmorebtnlink')); ?>">
                                  <?php echo esc_html(get_theme_mod('slider_learmorebtntext', 'Learn More')); ?>
                                  <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                </a>
                              <?php } ?>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        <!-- </div> -->
                    </div>
                </div>
              <?php endwhile;
                 wp_reset_postdata(); ?>
              <?php } } ?>
                <div class="clear"></div> 

            </div>
           <!-- swipper controls -->
            <!-- <div class="indoor_sportsswiper-pagination"></div> -->
            <!-- <div class="indoor_sportsswiper-button-next"><i class="fa fa-angle-right"></i></div>
            <div class="indoor_sportsswiper-button-prev"><i class="fa fa-angle-left"></i></div> -->
        </div>
    </section>
  <!-- end of hero slider -->
  </div>
</section>
