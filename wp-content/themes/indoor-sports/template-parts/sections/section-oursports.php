<section id="oursports-section" class="oursportss-area home-oursportss">
	<div class="<?php if(esc_attr(get_theme_mod('indoor_sports_oursports_section_width','Box Width')) == 'Full Width'){ ?>container-fluid pd-0 <?php } elseif(esc_attr(get_theme_mod('indoor_sports_oursports_section_width','Box Width')) == 'Box Width'){ ?> container <?php }?>">
		<div class=" justify-content-center text-center ">
		<div class="h-section">
			<h3 class="section-title"><?php echo esc_html(get_theme_mod('oursports_heading')); ?>
			</h3>
			<div class="clearfix"></div>
		</div>
	</div>
		<div class="row m-0">
			<?php for($p=1; $p<7; $p++) { ?>
	        <?php if( get_theme_mod('oursports'.$p,false)) { ?>
	        <?php $querycolumns = new WP_query('page_id='.get_theme_mod('oursports'.$p,true)); ?>
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
	       
			<!-- Start Single oursports -->
			<div class="col-md-6 col-lg-4 box-space">
				<div class="threebox box<?php echo esc_attr( $p ) ?> <?php if($p % 3 == 0) { echo "last_column"; } ?>">   
					<div class="single-oursports">
						<div class="imageBox">
							<a href="<?php echo esc_url( get_permalink() ); ?>">
							<img class="serimg" src="<?php echo esc_url($img); ?>" alt="">

								<div class="conbx">
								<a class="serv-cont" href="<?php echo esc_url( get_permalink() ); ?>">
								<h3 class="title"><?php the_title_attribute(); ?></h3>
								</a>
								<!-- <div class="description"></?php the_excerpt(); ?></div> -->
								<div class="serbtn">	
									<?php if (get_theme_mod('oursports_learmorebtntext') != "")  { ?>
										<a href="<?php echo esc_url( get_permalink() ); ?>">
											<?php echo esc_html(get_theme_mod('oursports_learmorebtntext', 'Learn More')); ?>
											<i class="fa fa-angle-double-right"></i>
										</a>
									<?php } ?>
								</div>

									<div class="clearfix"></div>
								</div>
							</a>
	                	</div>  

						
						<div class="clearfix"></div>
					</div>
              	</div>
			</div>
			<!-- / End Single oursports -->
			<?php endwhile;
           wp_reset_postdata(); ?>
			<?php } } ?>
			<div class="clear"></div> 	
		</div>
	</div>
</section>
