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

    	const attending = $('input[name=attending]:checked').val()
    	const extraOptions = {
    		attending: ['cantwait',
    			'fancy',
    			'bedtime',
    			'dancing',
    			'food'],
    		notAttending: ['wish',
    			'bummed'] 
    	}
    	let ext
    	let extra = ''
    	if (attending === 'yes') {
    		ext = extraOptions.attending
    	} else {
    		ext = extraOptions.notAttending
    	}
    	ext.forEach((e) => {
	    	checked = $('#attending-extra-' + e).prop('checked')
	    	if (checked) {
	    		if (extra !== ''){
	    			extra += ', '
	    		}
	    		extra += ($('label[for=attending-extra-' + e + ']').text())
	    	}
	    });
	    
    	$inputs = {
    		guest: $('#guest').val(),
			attending,
			extra,
			food: $('#attending-extra-food-details').val()
		};

		$.post('handling/rsvp.php', $inputs)
		.done(function(data) {
			$('.rsvp-form-messages').text(data);
		});
	});
})