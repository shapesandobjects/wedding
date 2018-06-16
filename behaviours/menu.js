$(document).ready(() => {
	if ($(this).scrollTop() > 200) {
		$('.banner').addClass('fixed')
	} else {
		$('.banner').removeClass('fixed')
	}

	$('.menu-link').click((e) => {
		$('.menu-small > .control > .menu-open').removeClass('hidden')
		$('.menu-small > .control > .menu-close').addClass('hidden')
		$('.menu-small > .menu-links').addClass('hidden')
		const target = e.target.getAttribute('targ')
		$('html, body').animate({
	        scrollTop: $(`.${target}`).offset().top - ($('.banner').height() - 175)
	    }, 1000);
	});

	$('.menu-small > .control > .menu-open').click(() => {
		$('.menu-small > .control > .menu-open').addClass('hidden')
		$('.menu-small > .control > .menu-close').removeClass('hidden')
		$('.menu-small > .menu-links').removeClass('hidden')
	});

	$('.menu-small > .control > .menu-close').click(() => {
		$('.menu-small > .control > .menu-open').removeClass('hidden')
		$('.menu-small > .control > .menu-close').addClass('hidden')
		$('.menu-small > .menu-links').addClass('hidden')
	});

	$(window).scroll((e) => {
		if ($(this).scrollTop() > 200) {
			$('.banner').addClass('fixed')
		} else {
			$('.banner').removeClass('fixed')
		}
	});

	

});