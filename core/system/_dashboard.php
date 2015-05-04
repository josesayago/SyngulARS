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
		$title_S2	= __('Edit layout', 'syngulars');
		$title_S3	= __('Activate your theme and add content', 'syngulars');
		$theme_name = __('Theme name', 'syngulars');
		$save_btn 	= __('Save', 'syngulars');
		
		$html 	= '<div class="syngulars_dashboard"></div>';

		$html 	.= '<script id="syngulars_template" type="text/ractive">';

			$html  	.= '<h1>'.$title.'</h1>';

			$html 	.= '<div class="step-1 step-active">';

				$html 	.= '<h2>'.$title_S1.'</h2>';

				$html 	.= '<div class="content-indent">';

					$html 	.= '<input type="text" name="template_name" placeholder="'.$theme_name.'" value="{{templateName}}" />';

					$html 	.= '<button class="save" on-click="save_template"><span class="btn-text">'.$save_btn.'</span></button>';

					$html 	.= '<p class="italic">'.__('Your base layout will be','syngulars').':</p>';

					$html 	.= '<input type="radio" name="{{templateType}}" value="'.__('Landing Page','syngulars').'" /><span class="radio-label">'.__('Landing Page','syngulars').'</span>';
					
					$html 	.= '<input type="radio" name="{{templateType}}" value="'.__('Post','syngulars').'" /><span class="radio-label">'.__('Post','syngulars').'</span>';
					
					$html 	.= '<input type="radio" name="{{templateType}}" value="'.__('Page','syngulars').'" /><span class="radio-label">'.__('Page','syngulars').'</span>';

					$html 	.= '<div class="clearfix">&nbsp;</div>';

					$html 	.= '<p class="italic">'.__('TIP: These base layouts can be completely customized, this is just a quick start.','syngulars').'</p>';

					$html 	.= '<div class="clearfix">&nbsp;</div>';

				$html 	.= '</div>';

				$html 	.= '<div class="content-templates">';

					$html 	.= '<div class="template-model">';

						$html 	.= '<img src="'.SYNGULARS_ASSETS.'images/template-1.png" />';

						$html 	.= '<div class="clearfix">&nbsp;</div>';

						$html 	.= '<input type="radio" name="{{templateStyle}}" value="'.__('Blog','syngulars').'" /><span class="radio-label">'.__('Blog','syngulars').'</span>';

					$html 	.= '</div>';

					$html 	.= '<div class="template-model">';

						$html 	.= '<img src="'.SYNGULARS_ASSETS.'images/template-2.png" />';

						$html 	.= '<div class="clearfix">&nbsp;</div>';

						$html 	.= '<input type="radio" name="{{templateStyle}}" value="'.__('Portfolio','syngulars').'" /><span class="radio-label">'.__('Portfolio','syngulars').'</span>';

					$html 	.= '</div>';

					$html 	.= '<div class="template-model">';

						$html 	.= '<img src="'.SYNGULARS_ASSETS.'images/template-3.png" />';

						$html 	.= '<div class="clearfix">&nbsp;</div>';

						$html 	.= '<input type="radio" name="{{templateStyle}}" value="'.__('Call to Action','syngulars').'" /><span class="radio-label">'.__('Call to Action','syngulars').'</span>';

					$html 	.= '</div>';

				$html 	.= '</div>';

				$html 	.= '<div class="step-btns">';

						$html 	.= '<a class="btn-left inactive">'.__('Previous Step','syngulars').'</a>';

						$html 	.= '<a class="btn-right" id="step-2">'.__('Next Step', 'syngulars').'</a>';

					$html 	.= '</div>';

			$html 	.= '</div>';

			$html 	.= '<div class="step-2 step-inactive">';

				$html 	.= '<h2>'.$title_S2.'</h2>';

				$html 	.= '<div class="theme-data">';

					$html 	.= '<ul>';

						$html 	.= '<li><span class="label">'.__('Theme', 'syngulars').':</span> {{templateName}}</li>';
						
						$html 	.= '<li><span class="label">'.__('Type', 'syngulars').':</span> {{templateType}}</li>';

						$html 	.= '<li><span class="label">'.__('Style', 'syngulars').':</span> {{templateStyle}}</li>';

					$html 	.= '</ul>';

				$html 	.= '</div>';

				$html 	.= '<div class="content-indent">';

					$html 	.= '<p class="help">';

						$html 	.= __('Click on "Edit" to customize the selected layout, any other layout created previously can also be customized. A Theme is composed by different layout types, keep this in mind while building one.','syngulars');

					$html 	.= '</p>';

					$html 	.= '<div class="content-templates">';

						$html 	.= '<div class="template-model">';

							$html 	.= '<img src="'.SYNGULARS_ASSETS.'images/template-1.png" />';

							$html 	.= '<div class="clearfix">&nbsp;</div>';

							$html 	.= '<a class="edit" id="template-1">'.__('Edit','syngulars').'</a>';

						$html 	.= '</div>';

					$html 	.= '</div>';

				$html 	.= '</div>';

				$html 	.= '<div class="step-btns">';

					$html 	.= '<a class="btn-left" id="step-1">'.__('Previous Step','syngulars').'</a>';

					$html 	.= '<a class="btn-right" id="step-4">'.__('Next Step', 'syngulars').'</a>';

				$html 	.= '</div>';

			$html 	.= '</div>';

			$html 	.= '<div class="step-3 step-inactive">';

				$html 	.= '<div class="syngulars-overlay">';

					$html 	.= '<div class="syngulars-welcome-overlay">';

						$html 	.= '<div class="welcome-message">';

							$html 	.= '<p>';

									$html 	.= __('You may have noticed the working area has changed regarding the previous layout you have chosen, texts, images and colors are no longer there. You will only see empty containers, this is where you will customize and create the new layout for your site, for this reason you can only edit each container options and margins.','syngulars');

							$html 	.= '</p>';

							$html 	.= '<a class="continue">'.__('Continue', 'syngulars').'</a>';

						$html 	.= '</div>';

					$html 	.= '</div>';

					$html 	.= '<div class="syngulars-grid"></div>';

					$html 	.= '<div class="syngulars-notice">';

						$html 	.= '<p>';

							$html 	.= __('You are editing','syngulars') . ' {{templateName}}, '.__('below you will find the options menu, to go to the previous screen please save your changes.', 'syngulars');

						$html 	.= '</p>';

					$html 	.= '</div>';

					$html 	.= '<div class="syngulars-editor"></div>';

					$html 	.= '<div class="syngulars-tools">';

						$html 	.= '<a class="toggle-tools hide-tools">&nbsp;</a>';

						$html 	.= '<p class="tools-help">'.__('Click on one of these tools to start designing your layout','syngulars').'<br /><span class="italic">'.__('PRO TIP: Use Wrappers as a starting point', 'syngulars').'</span></p>';

						$html 	.= '<ul>';

							$html 	.= '<li><a class="tool-wrapper"><img src="'.SYNGULARS_ASSETS.'icons/tools/wrapper.png" /> <span class="tool-name">'.__('Wrapper', 'syngulars').'</span></a></li>';

							$html 	.= '<li><a class="tool-menu"><img src="'.SYNGULARS_ASSETS.'icons/tools/menu.png" /> <span class="tool-name">'.__('Menu', 'syngulars').'</span></a></li>';

							$html 	.= '<li><a class="tool-title"><img src="'.SYNGULARS_ASSETS.'icons/tools/title.png" /> <span class="tool-name">'.__('Title', 'syngulars').'</span></a></li>';

							$html 	.= '<li><a class="tool-text"><img src="'.SYNGULARS_ASSETS.'icons/tools/text.png" /> <span class="tool-name">'.__('Text', 'syngulars').'</span></a></li>';

							$html 	.= '<li><a class="tool-media"><img src="'.SYNGULARS_ASSETS.'icons/tools/media.png" /> <span class="tool-name">'.__('Media', 'syngulars').'</span></a></li>';

							$html 	.= '<li><a class="tool-buttons"><img src="'.SYNGULARS_ASSETS.'icons/tools/buttons.png" /> <span class="tool-name">'.__('Buttons', 'syngulars').'</span></a></li>';

							$html 	.= '<li class="tool-btn-save"><a class="tool-save"><img src="'.SYNGULARS_ASSETS.'icons/tools/save.png" /> <span class="tool-name tool-name-save">'.__('Save', 'syngulars').'</span></a></li>';

						$html 	.= '</ul>';

					$html 	.= '</div>';

					$html 	.= '<div class="syngulars-wrapper-tools syngulars-secondary-tool hide">';

						$html 	.= '<a class="close-tools hide-tools">&nbsp;</a>';

						$html 	.= '<a class="tool-margins"><img src="'.SYNGULARS_ASSETS.'images/contenedor.png" /></a>';

						//$html 	.= '<p class="tool-section">'.__('Currently editing:', 'syngulars').' <span class="aqua">'.__('Wrapper', 'syngulars').'</span> <img src="'.SYNGULARS_ASSETS.'icons/wrapper.png" /></p>';

						// $html 	.= '<label for="wrapper-background">'.__('Background Color', 'syngulars').'</label><br /><input type="colorpicker" name="wrapper-background" id="wrapper-background" />';

					$html 	.= '</div>';

					$html 	.= '<div class="syngulars-menu-tools syngulars-secondary-tool hide">';

						$html 	.= '<a class="close-tools hide-tools">&nbsp;</a>';

						$html 	.= '<img src="'.SYNGULARS_ASSETS.'images/menu.png" />';

					$html 	.= '</div>';

					$html 	.= '<div class="syngulars-title-tools syngulars-secondary-tool hide">';

						$html 	.= '<a class="close-tools hide-tools">&nbsp;</a>';

						$html 	.= '<a class="tool-titles"><img src="'.SYNGULARS_ASSETS.'images/titulo.png" /></a>';

					$html 	.= '</div>';

					$html 	.= '<div class="syngulars-text-tools syngulars-secondary-tool hide">';

						$html 	.= '<a class="close-tools hide-tools">&nbsp;</a>';

						$html 	.= '<a class="tool-texts"><img src="'.SYNGULARS_ASSETS.'images/texto.png" /></a>';

					$html 	.= '</div>';

					$html 	.= '<div class="syngulars-media-tools syngulars-secondary-tool hide">';

						$html 	.= '<a class="close-tools hide-tools">&nbsp;</a>';

						$html 	.= '<img src="'.SYNGULARS_ASSETS.'images/multimedia.png" />';

					$html 	.= '</div>';

					$html 	.= '<div class="syngulars-buttons-tools syngulars-secondary-tool hide">';

						$html 	.= '<a class="close-tools hide-tools">&nbsp;</a>';

						$html 	.= '<img src="'.SYNGULARS_ASSETS.'images/boton.png" />';

					$html 	.= '</div>';

				$html 	.= '</div>';

			$html 	.= '</div>';

			$html 	.= '<div class="step-4 step-inactive">';

				$html 	.= '<h2>'.$title_S3.'</h2>';

				$html 	.= '<div class="content-indent">';

					$html 	.= '<p class="help">';

						$html 	.= __('You already set your content display options, now you just have to add it, please click on "Activate Theme" to complete the task. Remember if something seems off, you can come back and edit whatever you want.','syngulars');

					$html 	.= '</p>';

					$html 	.= '<div class="content-templates">';

						$html 	.= '<div class="step-btns">';

							

						$html 	.= '</div>';

					$html 	.= '</div>';

				$html 	.= '</div>';

				$html 	.= '<div class="clearfix">&nbsp;</div>';

				$html 	.= '<div class="step-btns">';

					$html 	.= '<a class="btn-left" id="step-2">'.__('Previous Step','syngulars').'</a>';

					$html 	.= '<a class="btn-right">'.__('Activate Theme','syngulars').'</a>';

				$html 	.= '</div>';

			$html 	.= '</div>';
  		
  		$html 	.= '</script>';

		print $html;
	}
}
?>