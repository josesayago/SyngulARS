<?php
/**
 * SyngulARS Dashboard
 *
 * Dashboard class.
 */
Class SyngulARS_Dashboard {
	
	public function _dashboard() {
		$title 	= __('Welcome to the WordPress Theme Builder', 'syngulars');
		$html 	= '<div class="syngulars_dashboard">';
		$html  .= '<h1>'.$title.'</h1>';
		$html  .= '</div>';

		print $html;
	}
}
?>