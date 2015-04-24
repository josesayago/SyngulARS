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

				$html 	.= '<div class="content-indent">';

					$html 	.= '<input type="text" name="{{template_name}}" placeholder="'.$theme_name.'" />';

					$html 	.= '<a class="save"><span class="btn-text">'.$save_btn.'</span> <img src="'.SYNGULARS_ASSETS.'icons/save.png" /></a>';

					$html 	.= '<p class="italic">'.__('Your base layout will be','syngulars').':</p>';

					$html 	.= '<input type="radio" name="template_type" value="landing-page" /><span class="radio-label">'.__('Landing Page','syngulars').'</span>';
					
					$html 	.= '<input type="radio" name="template_type" value="post" /><span class="radio-label">'.__('Post','syngulars').'</span>';
					
					$html 	.= '<input type="radio" name="template_type" value="page" /><span class="radio-label">'.__('Page','syngulars').'</span>';

					$html 	.= '<div class="clearfix">&nbsp;</div>';

					$html 	.= '<p class="italic">'.__('TIP: These base layouts can be completely customized, this is just a quick start.','syngulars').'</p>';

					$html 	.= '<div class="clearfix">&nbsp;</div>';

				$html 	.= '</div>';

				$html 	.= '<div class="content-templates">';

					$html 	.= '<div class="template-model">';

						$html 	.= '<img src="'.SYNGULARS_ASSETS.'images/template-1.png" />';

						$html 	.= '<div class="clearfix">&nbsp;</div>';

						$html 	.= '<input type="radio" name="template_style" value="page" /><span class="radio-label">'.__('Blog','syngulars').'</span>';

					$html 	.= '</div>';

					$html 	.= '<div class="template-model">';

						$html 	.= '<img src="'.SYNGULARS_ASSETS.'images/template-2.png" />';

						$html 	.= '<div class="clearfix">&nbsp;</div>';

						$html 	.= '<input type="radio" name="template_style" value="page" /><span class="radio-label">'.__('Portfolio','syngulars').'</span>';

					$html 	.= '</div>';

					$html 	.= '<div class="template-model">';

						$html 	.= '<img src="'.SYNGULARS_ASSETS.'images/template-3.png" />';

						$html 	.= '<div class="clearfix">&nbsp;</div>';

						$html 	.= '<input type="radio" name="template_style" value="page" /><span class="radio-label">'.__('Call to Action','syngulars').'</span>';

					$html 	.= '</div>';

					$html 	.= '<div class="step-btns">';

						$html 	.= '<a class="btn-left inactive">'.__('Previous Step','syngulars').'</a>';

						$html 	.= '<a class="btn-right">'.__('Next Step', 'syngulars').'</a>';

					$html 	.= '</div>';

				$html 	.= '</div>';

			$html 	.= '</div>';
  		
  		$html 	.= '</script>';

		print $html;
	}
}
?>