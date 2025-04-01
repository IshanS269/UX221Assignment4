</div>
<footer class="footer-area">  
	<div class="f-oly"></div> 
	<div class="image">
	
	</div>

	<div class="footer-top">
		<div class="container content"> 
			 <?php do_action('indoorsports_footer_above'); 
			  if ( is_active_sidebar( 'indoor-sports-footer-widget-area' ) ) { ?>	
				 <div class="row footer-row"> 
					 <?php  dynamic_sidebar( 'indoor-sports-footer-widget-area' ); ?>
				 </div>  
			 <?php } ?>
		 </div>
	</div>
	
	<?php 
		$footer_copyright = get_theme_mod('footer_copyright','Copyright &copy; [current_year] [site_title] | Powered by [theme_author]');

		
	?>
	<div class="copy-right"> 
		<div class="container"> 
			<?php 
			if ( ! empty( $footer_copyright ) ): ?>
			<?php 	
				$indoorsports_copyright_allowed_tags = array(
					'[current_year]' => date_i18n('Y'),
					'[site_title]'   => get_bloginfo('name'),
					'[theme_author]' => sprintf(__('<a href="https://www.buywpthemes.net/products/free-indoor-sports-academy-wordpress-theme/" target="_blank">Indoor Sports</a>', 'indoor-sports')),
				);
			?>
		</div> 
		<div class="copyright-text">
			<div class="container">                         
				<p >
					<?php
						echo apply_filters('indoorsports_footer_copyright', wp_kses_post(indoorsports_str_replace_assoc($indoorsports_copyright_allowed_tags, $footer_copyright)));
					?>
				</p>
				<?php endif; ?>
			</div>
		</div>
	</div>
</footer>
<!-- End Footer Area  -->

<button class="scroll-top">
	<i class="fa fa-arrow-up" aria-hidden="true"></i>
</button>

</div>		
<?php wp_footer(); ?>
</body>
</html>

