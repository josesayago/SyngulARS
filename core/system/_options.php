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
			add_action( 'admin_enqueue_scripts', array( __CLASS__, '_styles' ) );
			add_action( 'admin_enqueue_scripts', array( __CLASS__, '_scripts' ) );
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
			__('SyngulARS', 'syngulars'), 
			'SyngulARS', 
			'administrator', 
			'syngulars', 
			array( 'SyngulARS_Dashboard', '_dashboard' ),
			SYNGULARS_ASSETS . 'icons/menu.png'
		);
	}
	/**
	 * Styles
	 *
	 * Load CSS Stylesheets
	 */
    public function _styles() {
        // Register style
        wp_register_style( 
            'syngulars-style', 
            SYNGULARS_STYLES . 'syngulars.css', 
            '', 
            SYNGULARS_VERSION, 
            'all' 
        );
        wp_register_style(
        	'jqueryui-css',
        	'//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css',
        	'',
        	'1.11.4',
        	'all'
        );
        wp_enqueue_style( 'wp-color-picker' ); 
        // Enqueue style
        wp_enqueue_style( 'syngulars-style' );
        wp_enqueue_style( 'jqueryui-css' );
	}
	/**
	 * Scripts
	 *
	 * Load JavaScript files
	 */
	public function _scripts() {
		// Register script
		wp_register_script(
			'ractivejs',
			//'http://cdn.ractivejs.org/latest/ractive.js',
			SYNGULARS_ASSETS . 'scripts/_ractive.js',
			'',
			'latest',
			false
		);
		wp_register_script(
			'syngulars-dashboard',
			SYNGULARS_ASSETS . 'scripts/_dashboard.js',
			array('jquery-ui-core', 'wp-color-picker'),
			'latest',
			true
		);
		// Enqueue script
		wp_enqueue_script( 'ractivejs' );
		wp_enqueue_script( 'jquery-ui-core' );
		wp_enqueue_script( 'jquery-ui-resizable' );
		wp_enqueue_script( 'jquery-ui-draggable' );
		wp_enqueue_script( 'jquery-ui-droppable' );
		wp_localize_script( 'syngulars-dashboard', 'syngulars', array(
			'wrapper' 	=> __('Wrapper', 'syngulars'),
			'menu' 		=> __('Menu', 'syngulars'),
			'link'		=> __('Link', 'syngulars'),
			'title'		=> __('Title', 'syngulars'),
			'text'		=> __('Text', 'syngulars'),
			'media'		=> __('Media', 'syngulars'),
			'buttons'	=> __('Buttons', 'syngulars'),
			'button'	=> __('Button', 'syngulars')
		) );
		wp_enqueue_script( 'syngulars-dashboard' );
	}
}
?>