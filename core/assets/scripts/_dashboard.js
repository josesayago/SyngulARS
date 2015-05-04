var ractive = new Ractive({
	el: '.syngulars_dashboard',
	template: '#syngulars_template',
	lazy: true
});

ractive.on({ 
	save_template : function(event) {
		templateName = ractive.get('templateName');
		/*
		ractive.observe( 'templateName', function ( newValue ) {
		    templateName = newValue;
		    console.log( templateName );
		});
		*/
	}
});

jQuery(document).ready(function(){

	jQuery( 'a[id^="step-"]' ).on('click tap', function(){
		jQuery('div[class^="step-"').removeClass('step-active').addClass('step-inactive');
		jQuery('div.'+jQuery(this).attr('id')).removeClass('step-inactive').addClass('step-active');
	});

	jQuery( '.step-2 .edit' ).on('click tap', function(){
		jQuery('div[class^="step-"').removeClass('step-active').addClass('step-inactive');
		jQuery('div.step-3').removeClass('step-inactive').addClass('step-active');
	});

	jQuery( '.welcome-message .continue' ).on('click tap', function(){
		jQuery( '.syngulars-welcome-overlay' ).animate({
			opacity: 'toggle'
		}, 500, "linear", function(){
			jQuery(this).remove();
		});
	});

	jQuery( '.toggle-tools' ).on('click tap', function(){
		jQuery(this).parent().animate({
			height: jQuery(this).parent().height() > 25 ? '25px' : '200px'
		}, 500, "linear", function() {
			jQuery(this).parent().find('.toggle-tools').toggleClass('hide-tools').toggleClass('show-tools');
		});
	});

	jQuery( '.syngulars-wrapper-tools .close-tools' ).on('click tap', function(){
		jQuery( '.syngulars-wrapper-tools' ).toggleClass('hide');
	});

	jQuery( '.syngulars-menu-tools .close-tools' ).on('click tap', function(){
		jQuery( '.syngulars-menu-tools' ).toggleClass('hide');
	});

	jQuery( '.syngulars-title-tools .close-tools' ).on('click tap', function(){
		jQuery( '.syngulars-title-tools' ).toggleClass('hide');
	});

	jQuery( '.syngulars-text-tools .close-tools' ).on('click tap', function(){
		jQuery( '.syngulars-text-tools' ).toggleClass('hide');
	});

	jQuery( '.syngulars-media-tools .close-tools' ).on('click tap', function(){
		jQuery( '.syngulars-media-tools' ).toggleClass('hide');
	});

	jQuery( '.syngulars-buttons-tools .close-tools' ).on('click tap', function(){
		jQuery( '.syngulars-buttons-tools' ).toggleClass('hide');
	});

	jQuery( '.tool-save' ).on('click tap', function(){
		jQuery( '.syngulars-overlay' ).animate({
			opacity: 'toggle'
		}, 500, "linear", function(){
			jQuery(this).toggle();
			jQuery('div[class^="step-"').removeClass('step-active').addClass('step-inactive');
			jQuery('div.step-2').removeClass('step-inactive').addClass('step-active');
		});
	});

	jQuery('.syngulars-overlay').css({
		width: jQuery(document).width(),
		height: jQuery(document).outerHeight()
	});

	var gridH = jQuery(document).height();
	var gridW = (jQuery(document).width()/12)-22.916;
	var left = 0;
	for( i = 0; i < 12; i++ ) {
		if( i == 0 ) { left += 55; }
		jQuery('.syngulars-grid').append( '<div class="grid-column" style="width: '+gridW+'px;position: absolute; left: '+left+'px;"></div>' );
		left += 83.75+15;
	}
	var top = 0;
	for( x = 0; x < gridH/16; x++ ) {
		top += 16;
		jQuery('.syngulars-grid').append( '<div class="grid-line" style="position: absolute; top: '+top+'px;"></div>' );
		gridH--;
	}

	/**
	 * Syngulars Tools
	 */
	jQuery( '.tool-wrapper' ).on('click tap', function(){
		var divId = jQuery('.draggable').length;
		var draggable_div = jQuery('<div class="draggable wrapper" id="draggable-'+divId+'">'+syngulars.wrapper+' <a class="tool-edit">&nbsp;</a><a class="tool-delete">&nbsp;</a></div>');
		jQuery( '.syngulars-editor' ).append( draggable_div );
		jQuery( '.draggable' ).draggable({ 
			containment: ".syngulars-editor", 
			scroll: false 
		}).resizable();
		jQuery( '.tool-delete' ).on('click tap', function(){
			jQuery(this).parent().animate({
				opacity: 'toggle'
			}, 500, "linear", function(){
				jQuery(this).remove();
			});
		});
		jQuery( '#draggable-'+divId+' .tool-edit' ).on('click tap', function(){
			if( jQuery(this).parent().attr('class').match(/wrapper/) ) {
				jQuery( '.syngulars-wrapper-tools' ).toggleClass('hide');
			}
		});
	});
	jQuery( '.tool-menu' ).on('click tap', function(){
		var divId = jQuery('.draggable').length;
		var draggable_div = jQuery('<div class="draggable menu" id="menu-'+divId+'">'+syngulars.menu+' <ul><li>'+syngulars.link+'</li><li>'+syngulars.link+'</li><li>'+syngulars.link+'</li><li>'+syngulars.link+'</li><li>'+syngulars.link+'</li></ul> <a class="tool-edit">&nbsp;</a><a class="tool-delete">&nbsp;</a></div>');
		jQuery( '.syngulars-editor' ).append( draggable_div );
		jQuery( '.draggable' ).draggable({ 
			containment: ".syngulars-editor", 
			scroll: false 
		}).resizable();
		jQuery( '.tool-delete' ).on('click tap', function(){
			jQuery(this).parent().animate({
				opacity: 'toggle'
			}, 500, "linear", function(){
				jQuery(this).remove();
			});
		});
		jQuery( '#menu-'+divId+' .tool-edit' ).on('click tap', function(){
			if( jQuery(this).parent().attr('class').match(/menu/) ) {
				jQuery( '.syngulars-menu-tools' ).toggleClass('hide');
			}
		});
	});
	jQuery( '.tool-title' ).on('click tap', function(){
		var divId = jQuery('.draggable').length;
		var draggable_div = jQuery('<div class="draggable title" id="title-'+divId+'">'+syngulars.title+' <a class="tool-edit">&nbsp;</a><a class="tool-delete">&nbsp;</a></div>');
		jQuery( '.syngulars-editor' ).append( draggable_div );
		jQuery( '.draggable' ).draggable({ 
			containment: ".syngulars-editor", 
			scroll: false 
		}).resizable();
		jQuery( '.tool-delete' ).on('click tap', function(){
			jQuery(this).parent().animate({
				opacity: 'toggle'
			}, 500, "linear", function(){
				jQuery(this).remove();
			});
		});
		jQuery( '#title-'+divId+' .tool-edit' ).on('click tap', function(){
			if( jQuery(this).parent().attr('class').match(/title/) ) {
				jQuery( '.syngulars-title-tools' ).toggleClass('hide');
			}
		});
	});
	jQuery( '.tool-text' ).on('click tap', function(){
		var divId = jQuery('.draggable').length;
		var draggable_div = jQuery('<div class="draggable text" id="text-'+divId+'">'+syngulars.text+' <a class="tool-edit">&nbsp;</a><a class="tool-delete">&nbsp;</a></div>');
		jQuery( '.syngulars-editor' ).append( draggable_div );
		jQuery( '.draggable' ).draggable({ 
			containment: ".syngulars-editor", 
			scroll: false 
		}).resizable();
		jQuery( '.tool-delete' ).on('click tap', function(){
			jQuery(this).parent().animate({
				opacity: 'toggle'
			}, 500, "linear", function(){
				jQuery(this).remove();
			});
		});
		jQuery( '#text-'+divId+' .tool-edit' ).on('click tap', function(){
			if( jQuery(this).parent().attr('class').match(/text/) ) {
				jQuery( '.syngulars-text-tools' ).toggleClass('hide');
			}
		});
	});
	jQuery( '.tool-media' ).on('click tap', function(){
		var divId = jQuery('.draggable').length;
		var draggable_div = jQuery('<div class="draggable media" id="media-'+divId+'">'+syngulars.media+' <a class="tool-edit">&nbsp;</a><a class="tool-delete">&nbsp;</a></div>');
		jQuery( '.syngulars-editor' ).append( draggable_div );
		jQuery( '.draggable' ).draggable({ 
			containment: ".syngulars-editor", 
			scroll: false 
		}).resizable();
		jQuery( '.tool-delete' ).on('click tap', function(){
			jQuery(this).parent().animate({
				opacity: 'toggle'
			}, 500, "linear", function(){
				jQuery(this).remove();
			});
		});
		jQuery( '#media-'+divId+' .tool-edit' ).on('click tap', function(){
			if( jQuery(this).parent().attr('class').match(/media/) ) {
				jQuery( '.syngulars-media-tools' ).toggleClass('hide');
			}
		});
	});
	jQuery( '.tool-buttons' ).on('click tap', function(){
		var divId = jQuery('.draggable').length;
		var draggable_div = jQuery('<div class="draggable buttons" id="buttons-'+divId+'">'+syngulars.button+' <a class="tool-edit">&nbsp;</a><a class="tool-delete">&nbsp;</a></div>');
		jQuery( '.syngulars-editor' ).append( draggable_div );
		jQuery( '.draggable' ).draggable({ 
			containment: ".syngulars-editor", 
			scroll: false 
		}).resizable();
		jQuery( '.tool-delete' ).on('click tap', function(){
			jQuery(this).parent().animate({
				opacity: 'toggle'
			}, 500, "linear", function(){
				jQuery(this).remove();
			});
		});
		jQuery( '#buttons-'+divId+' .tool-edit' ).on('click tap', function(){
			if( jQuery(this).parent().attr('class').match(/buttons/) ) {
				jQuery( '.syngulars-buttons-tools' ).toggleClass('hide');
			}
		});
	});

	jQuery('#wrapper-background').wpColorPicker({
		border: false
	});

	jQuery('.tool-margins').on('click tap', function(){
		if( jQuery(this).find('img').attr('src') == 'http://wordpress-beta.loc/wp-content/plugins/syngulars/core/assets/images/marg.png' ) {
			jQuery(this).find('img').attr('src', 'http://wordpress-beta.loc/wp-content/plugins/syngulars/core/assets/images/contenedor.png');
		} else {
			jQuery(this).find('img').attr('src', 'http://wordpress-beta.loc/wp-content/plugins/syngulars/core/assets/images/marg.png');
		}
	});

	jQuery('.tool-titles').on('click tap', function(){
		if( jQuery(this).find('img').attr('src') == 'http://wordpress-beta.loc/wp-content/plugins/syngulars/core/assets/images/temarg.png' ) {
			jQuery(this).find('img').attr('src', 'http://wordpress-beta.loc/wp-content/plugins/syngulars/core/assets/images/titulo.png');
		} else {
			jQuery(this).find('img').attr('src', 'http://wordpress-beta.loc/wp-content/plugins/syngulars/core/assets/images/temarg.png');
		}
	});

	jQuery('.tool-texts').on('click tap', function(){
		if( jQuery(this).find('img').attr('src') == 'http://wordpress-beta.loc/wp-content/plugins/syngulars/core/assets/images/tmarg.png' ) {
			jQuery(this).find('img').attr('src', 'http://wordpress-beta.loc/wp-content/plugins/syngulars/core/assets/images/texto.png');
		} else {
			jQuery(this).find('img').attr('src', 'http://wordpress-beta.loc/wp-content/plugins/syngulars/core/assets/images/tmarg.png');
		}
	});
});