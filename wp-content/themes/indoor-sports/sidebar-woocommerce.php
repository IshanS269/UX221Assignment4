<?php
/**
 * side bar template
 *
 * @package Indoor Sports
 */
?>
<?php if ( ! is_active_sidebar( 'indoor-sports-woocommerce-sidebar' ) ) {	return; } ?>
<div class="col-lg-4 pl-lg-4 my-5 order-0">
	<div class="sidebar">
		<?php dynamic_sidebar('indoor-sports-woocommerce-sidebar'); ?>
	</div>
</div>