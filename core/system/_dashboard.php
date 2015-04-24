<?php
/**
 * SyngulARS Dashboard
 *
 * Dashboard class.
 */
Class SyngulARS_Dashboard {
	
	public function _dashboard() {
		$title 		= __('Welcome to the WordPress Theme Builder', 'syngulars');
		$title_S1 	= __('Name your Theme and Pick a Base Layout', 'syngulars');
		
		$html 	= '<div class="syngulars_dashboard">';
			$html  	.= '<h1>'.$title.'</h1>';

			$html 	.= '<div class="step-1">';

				$html 	.= '<h2>'.$title_S1.'</h2>';

			$html 	.= '</div>';

		$html  	.= '</div>';

		print $html;
	}
}
?>