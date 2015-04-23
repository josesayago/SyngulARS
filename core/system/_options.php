<?php
/**
 * Add menu if admin
 */
if ( is_admin() ) {
	add_action( 'admin_menu', 'syngulars_menu' );
}
/**
 * Create Menu
 */
function syngulars_menu() {
	// Create new top-level menu
	add_menu_page(
		__('SyngulARS','syngulars'), 
		'SyngulARS', 
		'administrator', 
		'syngulars', 
		'_dashboard',
		plugins_url( SYNGULARS_ASSETS . '/icons/menu.png', '' )
	);
	// Call register settings function
	// add_action( 'admin_init', 'syngulars_register' );
}
?>