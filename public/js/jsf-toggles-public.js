(function( $ ) {
	'use strict';

	if($('.jet-filter-label').length>0) {
		$('.jet-filter-label').click(function(){
			const filterContent = $(this).next();
			if(filterContent.length>0)
				filterContent.slideToggle();
			if (!$(this).hasClass('collapsed'))
				$(this).addClass('collapsed');
			else
				$(this).removeClass('collapsed');
		});
	}

})( jQuery );