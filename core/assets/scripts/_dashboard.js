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

	jQuery( '.close-tools' ).on('click tap', function(){
		jQuery( '.syngulars-wrapper-tools' ).toggleClass('hide');
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
		var draggable_div = jQuery('<div class="draggable menu">'+syngulars.menu+' <ul><li>'+syngulars.link+'</li><li>'+syngulars.link+'</li><li>'+syngulars.link+'</li><li>'+syngulars.link+'</li><li>'+syngulars.link+'</li></ul> <a class="tool-edit">&nbsp;</a><a class="tool-delete">&nbsp;</a></div>');
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
	});
	jQuery( '.tool-title' ).on('click tap', function(){
		var draggable_div = jQuery('<div class="draggable title">'+syngulars.title+' <a class="tool-edit">&nbsp;</a><a class="tool-delete">&nbsp;</a></div>');
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
	});
	jQuery( '.tool-text' ).on('click tap', function(){
		var draggable_div = jQuery('<div class="draggable text">'+syngulars.text+' <a class="tool-edit">&nbsp;</a><a class="tool-delete">&nbsp;</a></div>');
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
	});
	jQuery( '.tool-media' ).on('click tap', function(){
		var draggable_div = jQuery('<div class="draggable media">'+syngulars.media+' <a class="tool-edit">&nbsp;</a><a class="tool-delete">&nbsp;</a></div>');
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
	});
	jQuery( '.tool-buttons' ).on('click tap', function(){
		var draggable_div = jQuery('<div class="draggable buttons">'+syngulars.button+' <a class="tool-edit">&nbsp;</a><a class="tool-delete">&nbsp;</a></div>');
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
	});

	jQuery('#wrapper-background').wpColorPicker({
		border: false
	});
});