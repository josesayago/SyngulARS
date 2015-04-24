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
		$theme_name = __('Theme name', 'syngulars');
		$save_btn 	= __('Save', 'syngulars');
		
		$html 	= '<div class="syngulars_dashboard"></div>';

		$html 	.= '<script id="syngulars_template" type="text/ractive">';

			$html  	.= '<h1>'.$title.'</h1>';

			$html 	.= '<div class="step-1">';

				$html 	.= '<h2>'.$title_S1.'</h2>';

				$html 	.= '<input type="text" name="{{template_name}}" placeholder="'.$theme_name.'" />';

				$html 	.= '<a class="save"><span class="btn-text">'.$save_btn.'</span> <img src="'.SYNGULARS_ASSETS.'icons/save.png" /></a>';

			$html 	.= '</div>';
  		
  		$html 	.= '</script>';

		print $html;
	}
}
?>