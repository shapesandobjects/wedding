$(document).ready(() => {
	$('.rsvp-open').click(function() {
		$('.greyout').removeClass('hidden')
		$('.rsvp-modal').removeClass('hidden')
	})

	$('#attending-yes').change(function() {
		$('.attending-extras-yes').removeClass('hidden')
		$('.attending-extras-no').addClass('hidden')
		$('.rsvp-button-container').removeClass('hidden')
	})

	$('#attending-no').change(function() {
		$('.attending-extras-no').removeClass('hidden')
		$('.attending-extras-yes').addClass('hidden')
		$('.rsvp-button-container').removeClass('hidden')
	})

	$('#attending-extra-food').change(function() {
		if (this.checked) {
			$('.attending-extra-food-details-container').removeClass('hidden')
		} else {
			$('.attending-extra-food-details-container').addClass('hidden')
		}
	})

	$('#rsvp-form').submit(function(event) {
    	event.preventDefault();

    	$inputs = {
    		guest: $('#guest').val(),
			attending: $('input[name=attending]:checked').val()
		};

		$.post('handling/rsvp.php', $inputs)
		.done(function(data) {
			$('.rsvp-form-messages').text(data);
		});
	});
})