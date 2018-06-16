$(document).ready(() => {
	$('.greyout').click(function() {
		$('.greyout').addClass('hidden');
		$('.writeup').addClass('hidden');
		$('.rsvp-modal').addClass('hidden');
	});

	$('.close').click(function() {
		$('.greyout').addClass('hidden');
		$('.writeup').addClass('hidden');
		$('.rsvp-modal').addClass('hidden');
	});
})