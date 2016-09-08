<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Everypony_new
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
	<aside id="secondary" class="col-lg-3 widget-area" role="complementary">

		<?php everypony_new_social_menu(); ?>
	
		<?php dynamic_sidebar( 'sidebar-1' ); ?>

	</aside>
