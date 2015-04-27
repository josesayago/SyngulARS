var ractive = new Ractive({
	el: '.syngulars_dashboard',
	template: '#syngulars_template',
	lazy: true
});

ractive.on({ 
	save_template : function(event) {
		templateName = ractive.get('templateName');
		console.log( ractive.get('templateStyle') );
		/*
		ractive.observe( 'templateName', function ( newValue ) {
		    templateName = newValue;
		    console.log( templateName );
		});
		*/
	}
});