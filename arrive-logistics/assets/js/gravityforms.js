(function($) {
	
$(document).on('gform_post_render', function() {
	var fields = $('.gfield input, .gfield select, .gfield textarea'),

	checkValidation = function(e) {
		var el = $(e.target), 
			label = el.parent().prev('.gfield_label'),
			isBlank = el.val() == '';

		if (e.type === 'focus' && isBlank)
			label.addClass('out');

		else if (e.type === 'blur' && isBlank)
			label.removeClass('out');

		if (isBlank) el.addClass('is-blank');
		else el.removeClass('is-blank');
	};
	
	fields.addClass('is-blank');
	fields.on('focus blur', checkValidation);
	
	$('.ginput_container_fileupload').each(function(i, el) {
		$(this).prev().remove()
	});
});

})(jQuery);