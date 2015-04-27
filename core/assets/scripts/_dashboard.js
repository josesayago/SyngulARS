var ractive = new Ractive({
	el: '.syngulars_dashboard',
	template: '#syngulars_template',
	lazy: true,
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

jQuery( 'a[id^="step-"]' ).on('click tap', function(){
	jQuery('div[class^="step-"').removeClass('step-active').addClass('step-inactive');
	jQuery('div.'+jQuery(this).attr('id')).removeClass('step-inactive').addClass('step-active');
});