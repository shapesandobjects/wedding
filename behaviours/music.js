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
			$('#song').val('')
			$('#artist').val('')
			$('#link').val('')
			$('#isItGood').val('')
			$('#submittedBy').val('')
			$('.music-form-messages').text(data);
		});
	});
});
