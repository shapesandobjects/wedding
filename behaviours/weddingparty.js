$(document).ready(() => {
	$('.picture, .name_and_title').click(function() {
		if($(this).siblings('.writeup').hasClass('hidden')) {
			$('.greyout').removeClass('hidden')
			$(this).siblings('.writeup').removeClass('hidden')
		} else {
			$('.greyout').addClass('hidden')
			$(this).siblings('.writeup').addClass('hidden')
		}
	})

	$('.close').click(function() {
		$('.greyout').addClass('hidden');
		$('.writeup').addClass('hidden');
	});
})