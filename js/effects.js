jQuery(document).ready(function($){

	jQuery("#malaka").tinyNav({
		active: 'selected', // String: Set the "active" class
		header: 'Navigation', // String: Specify text for "header" and show header instead of the active item
		indent: '- ', // String: Specify text for indenting sub-items
		label: '' // String: Sets the <label> text for the <select> (if not set, no label will be added)
	});

  	jQuery('.flexslider').flexslider({
        animation: "fade",
        directionNav:false,
      });

	jQuery(".fancybox").fancybox({
		openEffect  : 'none',
		closeEffect : 'none',
		helpers : {
			media : {}
		}
	});

    jQuery('.grid-cover .col-md-4:nth-child(3n+0)').after('<div class="clear"></div>')

});