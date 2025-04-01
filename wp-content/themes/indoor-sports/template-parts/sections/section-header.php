<?php if ( get_header_image() ) : ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="custom-header" rel="home">
		<img src="<?php esc_url(header_image()); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr(get_bloginfo( 'title' )); ?>">
	</a>	
<?php endif;  ?>
<!-- Header Area -->
	<?php 
		$stickyheader = esc_attr(indoorsports_sticky_menu());
		$topheader_phonetext = esc_attr(get_theme_mod('topheader_phonetext','1-222-2333-33'));
	?>
<div class="main">
    <header class="main-header site-header <?php echo esc_attr(indoorsports_sticky_menu()); ?>">
		<!-- <div class="container-fluid"> -->
		<div class="<?php if(esc_attr(get_theme_mod('indoor_sports_header_section_width','Box Width')) == 'Full Width'){ ?>container-fluid pd-0 <?php } elseif(esc_attr(get_theme_mod('indoor_sports_header_section_width','Box Width')) == 'Box Width'){ ?> container <?php }?>">
			<div class="header-section">
				<div class="headfer-content ">
					<div class="row m-rl">
						<div class="col-lg-3 col-md-4 col-sm-6  pd-0 logo-box">
							<div class="site-logo">
								<?php
								if(has_custom_logo())
									{	
										the_custom_logo();
									}
									else { 
								?>
									<div class="headtt">
										<a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>">	
											<?php 
												echo esc_html(bloginfo('name'));
											?>
										</a>
										<div class="box-info">
											<?php
												$indoorsports_site_desc = get_bloginfo( 'description');
												if ($indoorsports_site_desc) : ?>
													<p class="site-description"><?php echo esc_html($indoorsports_site_desc); ?></p>
											<?php endif; ?>
										</div>	
									</div>
								<?php } ?>
							</div>
						</div>
						
						<div class="col-lg-9 col-md-8 col-sm-6  topheadbx pd-0">
							<div class="tophead">
								<div class="row m-0">
									<div class="address col-lg-7 col-md-7 col-sm-12">
									<?php if (get_theme_mod('topheader_addresstext')) {?>		
										<p><i class="fa fa-map-marker"></i> <?php echo esc_html(get_theme_mod('topheader_addresstext')); ?></p>
									<?php } ?>
									</div>	
									<div class="mobno col-lg-5 col-md-5 col-sm-12">
										<?php if (get_theme_mod('topheader_mobnotext')) {?>
											<div class="mb-n">
												<div class="hbtn">
													<a class="btn" href="tel:<?php echo esc_html(get_theme_mod('topheader_mobnotext')); ?>"><?php echo esc_html(get_theme_mod('topheader_mobnotext')); ?></a>
												</div>
											</div>
										<?php } ?>
									</div>	
								</div>	
							</div>	
							<div class="bottomhead">
								<div class="row m-0">
									<div class="menu">
										<button class="toggle nav-toggle mobile-nav-toggle" data-toggle-target=".menu-modal"  data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
											<span class="toggle-inner">
												<span class="toggle-icon">
													<i class="fa fa-bars"></i>
												</span>
											</span>
										</button><!-- .nav-toggle -->
										<div class="header-navigation-wrapper">

										<?php
										if ( has_nav_menu( 'primary_menu' ) || ! has_nav_menu( 'expanded' ) ) {
										?>

											<nav class="primary-menu-wrapper" aria-label="<?php echo esc_attr_x( 'Horizontal', 'menu', 'indoor-sports' ); ?>">

												<ul class="primary-menu reset-list-style">

												<?php
												if ( has_nav_menu( 'primary_menu' ) ) {

													wp_nav_menu(
														array(
															'container'  => '',
															'items_wrap' => '%3$s',
															'theme_location' => 'primary_menu',
														)
													);

												} elseif ( ! has_nav_menu( 'expanded' ) ) {

													wp_list_pages(
														array(
															'match_menu_classes' => true,
															'show_sub_menu_icons' => true,
															'title_li' => false,
															'walker'   => new IndoorSports_Walker_Page(),
														)
													);

												}
												?>
												</ul>
											</nav><!-- .primary-menu-wrapper -->

										<?php } ?>
										</div><!-- .header-navigation-wrapper -->
										<?php
										// Output the menu modal.
										get_template_part( 'template-parts/sections/modal-menu' );
										?>

									</div>
								</div>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

    </header>
	<div class="clearfix"></div>
</div>

