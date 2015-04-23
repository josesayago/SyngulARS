<?php
/**
 * SyngulARS
 *
 * Options class.
 */
Class SyngulARS_Options {
	/**
	 * Set Option Menu
	 */
	public function _set() {
		/**
		 * Add menu if admin
		 */
		if ( is_admin() ) {
			add_action( 'admin_menu', array( __CLASS__, '_menu' ) );
		}
	}
	/**
	 * Menu
	 * 
	 * Sets the WordPress dashboard menu to access
	 * SyngulARS.
	 */
	public function _menu() {
		/**
		 * Create new top-level menu
		 */
		add_menu_page(
			__('SyngulARS','syngulars'), 
			'SyngulARS', 
			'administrator', 
			'syngulars', 
			array( 'SyngulARS_Dashboard', '_dashboard' ),
			plugins_url( SYNGULARS_ASSETS . '/icons/menu.png', '' )
		);
	}
}
?>