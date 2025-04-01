<?php  
	$indoorsports_hs_blog 			= esc_attr(get_theme_mod('hs_blog','1'));
	$indoorsports_blog_title 		= esc_attr(get_theme_mod('blog_title'));
	$indoorsports_blog_subtitle		= esc_attr(get_theme_mod('blog_subtitle')); 
	$indoorsports_blog_description	= esc_attr(get_theme_mod('blog_description'));
	$indoorsports_blog_num			= esc_attr(get_theme_mod('blog_display_num','3'));
	if($indoorsports_hs_blog=='1'):
?>

<section id="blog-section" class="blog-area home-blog">

	<div class="<?php if(esc_attr(get_theme_mod('indoor_sports_blog_section_width','Box Width')) == 'Full Width'){ ?>container-fluid pd-0 <?php } elseif(esc_attr(get_theme_mod('indoor_sports_blog_section_width','Box Width')) == 'Box Width'){ ?> container <?php }?>">
		<div class="row">
			<div class="h-section row">
				<div class="col-md-9 col-lg-9">
					<h3 class="section-title"><?php echo esc_html(get_theme_mod('blog_heading')); ?>
					</h3>	
				</div>	
				<div class="col-md-3 col-lg-3">
					<div class="btnblogsm">
						<a href="<?php echo esc_html(get_theme_mod('blog_learmorebtnlink')); ?>"><?php esc_html_e('Show More','indoor-sports'); ?></a>
					</div>
				</div>	
			</div>
		 </div> 
		<?php if(!empty($indoorsports_blog_title) || !empty($indoorsports_blog_subtitle) || !empty($indoorsports_blog_description)): ?>
			<div class="title">
				<?php if(!empty($indoorsports_blog_title)): ?>
					<h6><?php echo wp_kses_post($indoorsports_blog_title); ?></h6>
				<?php endif; ?>
				
				<?php if(!empty($indoorsports_blog_subtitle)): ?>
					<h2><?php echo wp_kses_post($indoorsports_blog_subtitle); ?></h2>
					<span class="shap"></span>
				<?php endif; ?>
				
				<?php if(!empty($indoorsports_blog_description)): ?>
					<p><?php echo wp_kses_post($indoorsports_blog_description); ?></p>
				<?php endif; ?>
			</div>
		<?php endif; ?> 

			<div class="row m-0">
			<?php 	
				$indoorsports_blogs_args = array( 'post_type' => 'post', 'posts_per_page' => $indoorsports_blog_num,'post__not_in'=>get_option("sticky_posts")) ; 	
				$indoorsports_blog_wp_query = new WP_Query($indoorsports_blogs_args);
				if($indoorsports_blog_wp_query)
				{	
				while($indoorsports_blog_wp_query->have_posts()):$indoorsports_blog_wp_query->the_post(); ?>
				<div class="col-lg-4 col-md-6 col-sm-12 ">
					<div class="blogbx">
							<?php if (has_post_thumbnail( $post->ID ) ): ?>
							<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
							<a href="<?php echo esc_url( get_permalink() ); ?>">	
								<div class="blog-image" >
									<!-- <img class="blog-img" src="</?php echo $img; ?>"> -->
									<img class="blog-img" src="<?php echo esc_url($image[0]); ?>" alt="">
								</div>
							</a>
							
							<?php else: 
								$img = get_template_directory_uri().'/assets/images/default.png';
								?>
							<?php endif; ?>

						<div class="clearfix"></div>
						<div class="blog-content">		
							<div class="box-admin">
								<div class="row m-0">
									<div class="auth pd-0">
										<!-- <i class="fa fa-calendar" aria-hidden="true"></i> -->
										<?php echo get_the_date( 'j' ); ?>
										<?php echo get_the_date( 'M' ); ?>
										<?php echo get_the_date( 'Y' ); ?>
									</div> 
								</div>
							</div>
							<?php 
								if ( is_single() ) :
									
								the_title('<h6 class="post-title">', '</h6>' );
								
								else:
								
								the_title( sprintf( '<h6 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h6>' );
								
								endif; 
							?> 
							
						</div>
						<div class="clearfix"></div>
					</div>
				</div>

			<?php endwhile; 
				}
				wp_reset_postdata();
			?>
			</div>

	</div>

</section>
<?php endif; ?>