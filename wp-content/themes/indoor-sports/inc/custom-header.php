<?php
function indoorsports_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'indoorsports_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '646464',
		'width'                  => 2000, 
		'height'                 => 200,
		'flex-height'            => true,
		'wp-head-callback'       => 'indoorsports_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'indoorsports_custom_header_setup' );

if ( ! function_exists( 'indoorsports_header_style' ) ) :

function indoorsports_header_style() {
	$header_text_color = get_header_textcolor();

	$aboutus_disable_section = esc_attr(get_theme_mod('aboutus_disable_section','YES'));
  	$oursports_disable_section = esc_attr(get_theme_mod('oursports_disable_section','YES'));
  	$blog_disable_section = esc_attr(get_theme_mod('blog_disable_section','YES'));


	?>
	<style type="text/css">


		<?php 
		
		?>


		header.site-header .site-title {
			color: <?php echo esc_attr(get_theme_mod('topheader_sitetitlecol')); ?>;

		}

		header.site-header .site-logo a {
			text-decoration-color: <?php echo esc_attr(get_theme_mod('topheader_sitetitlecol')); ?> !important;
		}

		p.site-description {
			color: <?php echo esc_attr(get_theme_mod('topheader_taglinecol')); ?>;
		}
		



		.tophead .address p i {
			color: <?php echo esc_attr(get_theme_mod('header_addressiconcolor')); ?> !important;
		}

		.tophead .address p {
			color: <?php echo esc_attr(get_theme_mod('header_addresstextcolor')); ?> !important;
		}

		header .hbtn a {
			color: <?php echo esc_attr(get_theme_mod('header_mobnotextcolor')); ?> !important;
		}

		header .hbtn a {
			background: <?php echo esc_attr(get_theme_mod('header_mobnobgcolor1')); ?> !important;
		}

		header .hbtn a:hover {
			color: <?php echo esc_attr(get_theme_mod('header_mobtxthovercolor')); ?> !important;
		}

		header .hbtn a:hover {
			background: <?php echo esc_attr(get_theme_mod('header_mobbghovercolor')); ?> !important;
		}

		.primary-menu a {
			color: <?php echo esc_attr(get_theme_mod('header_menuscolor')); ?>;
		}

		.primary-menu > li > .icon {
			color: <?php echo esc_attr(get_theme_mod('header_menuiconcolor')); ?>;
		}

		.primary-menu li ul li a {
			color: <?php echo esc_attr(get_theme_mod('header_submenutextcolor')); ?>;
		}

		.primary-menu ul {
			background: <?php echo esc_attr(get_theme_mod('header_submenusbgcolor')); ?>;
		}

		.primary-menu ul::after {
			border-bottom-color: <?php echo esc_attr(get_theme_mod('header_submenusbgcolor')); ?>;
		}

		.primary-menu a:hover, .primary-menu a:focus, .primary-menu .current_page_ancestor {
			color: <?php echo esc_attr(get_theme_mod('header_submenustxthovercolor')); ?>;
		}

		header .bottomhead {
			background: transparent linear-gradient(180deg, <?php echo esc_attr(get_theme_mod('header_menubg1color')); ?> 0%, <?php echo esc_attr(get_theme_mod('header_menubg2color')); ?> 100%) 0% 0% no-repeat padding-box;
		}

		.primary-menu > li {
			border-left-color: <?php echo esc_attr(get_theme_mod('header_menubrdcolor')); ?>;
		}

		
	
	



		.hero-style .slide-title h2 {
			color: <?php echo esc_attr(get_theme_mod('slider_titlecolor')); ?> !important;
		}


		.hero-style .slide-text p {
			color: <?php echo esc_attr(get_theme_mod('slider_descriptioncolor')); ?>;
		}

		.hero-style a.ReadMore {
			color: <?php echo esc_attr(get_theme_mod('slider_btntxt1color')); ?> !important;
		}

		.hero-style a.ReadMore {
			background: transparent linear-gradient(0deg, <?php echo esc_attr(get_theme_mod('slider_btnbg1color')); ?> 0%, <?php echo esc_attr(get_theme_mod('slider_btnbg2color')); ?> 100%) 0% 0% no-repeat padding-box;
		}

		.hero-style a.ReadMore:hover {
			color: <?php echo esc_attr(get_theme_mod('slider_btntxthovercolor')); ?> !important;
		}

		.hero-style .slide-btns a.LearnMore {
			color: <?php echo esc_attr(get_theme_mod('slider_learnmorecolor')); ?> !important;
		}

		.hero-style .slide-btns a.LearnMore:hover {
			color: <?php echo esc_attr(get_theme_mod('slider_learnmorehrvcolor')); ?> !important;
		}

	


		#oursports-section h3.section-title {
			color: <?php echo esc_attr(get_theme_mod('oursports_headingcolor')); ?>;
		}

		#oursports-section .single-oursports h3 {
			color: <?php echo esc_attr(get_theme_mod('oursports_boxtitlecolorcolor')); ?>;
		}


		#oursports-section .serbtn a {
			color: <?php echo esc_attr(get_theme_mod('oursports_btntextcolor')); ?>;
		}

		#oursports-section .serbtn a:hover {
			color: <?php echo esc_attr(get_theme_mod('oursports_btntexthrvcolor')); ?> !important;
		}






		#oursports-section {
			padding-top: <?php echo esc_attr(get_theme_mod('indoor_sports_oursports_top_padding')); ?>em !important;
		}

		#oursports-section {
			padding-bottom: <?php echo esc_attr(get_theme_mod('indoor_sports_oursports_bottom_padding')); ?>em !important;
		}

		#slider-section {
			padding-top: <?php echo esc_attr(get_theme_mod('indoor_sports_slider_top_padding')); ?>em !important;
		}

		#slider-section {
			padding-bottom: <?php echo esc_attr(get_theme_mod('indoor_sports_slider_bottom_padding')); ?>em !important;
		}




		#blog-section h3.section-title {
			color: <?php echo esc_attr(get_theme_mod('blog_headingcolor')); ?>;
		}

		.blogbx .blog-content h6.post-title, .blogbx .blog-content h6.post-title a, .blogbx .blog-content .heding {
			color: <?php echo esc_attr(get_theme_mod('blog_titlecolor')); ?>;
		}

		.blogbx .box-admin {
			color: <?php echo esc_attr(get_theme_mod('blog_datetextcolor')); ?>;
		}

		.blog-area .btnblogsm a {
			color: <?php echo esc_attr(get_theme_mod('blog_topbtntextcolor')); ?>;
			background: <?php echo esc_attr(get_theme_mod('blog_topbtnBGcolor')); ?>;
		}

		#blog-section {
			padding-top: <?php echo esc_attr(get_theme_mod('indoor_sports_blog_top_padding')); ?>em !important;
		}

		#blog-section {
			padding-bottom: <?php echo esc_attr(get_theme_mod('indoor_sports_blog_bottom_padding')); ?>em !important;
		}
		


		.copy-right p,.copy-right p a {
			color: <?php echo esc_attr(get_theme_mod('footer_copyrightcolor')); ?>;
		}

		.copy-right {
			background: <?php echo esc_attr(get_theme_mod('footer_copyrightbgcolor')); ?>;
		}

		.footer-area .widget_text, .footer-area .widget_text p, .wp-block-latest-comments__comment-excerpt p, .wp-block-latest-comments__comment-date, .has-avatars .wp-block-latest-comments__comment .wp-block-latest-comments__comment-excerpt, .has-avatars .wp-block-latest-comments__comment .wp-block-latest-comments__comment-meta,.footer-area .widget_block h1, .footer-area .widget_block h2, .footer-area .widget_block h3, .footer-area .widget_block h4, .footer-area .widget_block h5, .footer-area .widget_block h6,.footer-area .footer-widget .widget:not(.widget_social_widget):not(.widget_tag_cloud) li a,
		.footer-area .footer-widget .widget:not(.widget_social_widget):not(.widget_tag_cloud) li,
		.footer-area .footer-widget .w-title {
			color: <?php echo esc_attr(get_theme_mod('footer_textcolor')); ?>;
		}

		.footer-area .footer-widget .widget:not(.widget_social_widget):not(.widget_tag_cloud) li a:hover {
			color: <?php echo esc_attr(get_theme_mod('footer_texthrvcolor')); ?> !important;
		}

		.footer-area li:before, .page-template-home-template .footer-area li:before, .page .footer-area li:before, .single .footer-area li:before {
			color: <?php echo esc_attr(get_theme_mod('footer_iconcolor')); ?> !important;
		}

		.footer-area .footer-widget .widget:not(.widget_social_widget):not(.widget_tag_cloud) li a:hover {
			color: <?php echo esc_attr(get_theme_mod('footer_listhovercolor')); ?>;
		}

		.scroll-top i{
			color: <?php echo esc_attr(get_theme_mod('footer_backtotopiconcolor')); ?>;
		}

		.scroll-top{
			background: <?php echo esc_attr(get_theme_mod('footer_backtotopbgcolor')); ?>;
		}

		.scroll-top:hover, .scroll-top:focus{
			background: <?php echo esc_attr(get_theme_mod('footer_backtotopbghrvcolor')); ?>;
		}

		
	<?php  ?>


	<?php
		if ( ! display_header_text() ) :
	?>
		.site-title,
		.site-description {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		else :
	?>
		h4.site-title{
			color: #<?php echo esc_attr( $header_text_color ); ?>;
		}
	<?php endif; ?>


	<?php
        if ($aboutus_disable_section == 1):
	?>
		#aboutus-section {
			display: none;
		}
	<?php
		else :
	?>
		#aboutus-section {
			display: block;
		}
	<?php endif; ?>


	<?php
        if ($oursports_disable_section == 1):
	?>
		#oursports-section {
			display: none;
		}
	<?php
		else :
	?>
		#oursports-section {
			display: block;
		}
	<?php endif; ?>


	<?php
        if ($blog_disable_section == 1):
	?>
		#blog-section {
			display: none;
		}
	<?php
		else :
	?>
		#blog-section {
			display: block;
		}
	<?php endif; ?>



	</style>
	<?php
}
endif;
