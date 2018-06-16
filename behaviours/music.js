$(document).ready(() => {
	var form = $('#music-form');
    var formMessages = $('#music-form-messages');
	
	$('#music-form').submit(function(event) {
    	event.preventDefault();

		$.post('handling/music.php', {			
			song: $('#song').val(),
			artist: $('#artist').val(), 
			link: $('#link').val(),
			submittedBy: $('#submittedBy').val(),
		})
		.done(function(data) {
			$('.music-form-messages').text(data);
		});
	});
});