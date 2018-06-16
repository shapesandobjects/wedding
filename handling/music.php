<?php
require('../email.php');
$_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


$song = $_POST['song'];
$artist = $_POST['artist'];
$link = $_POST['link'];
$submittedBy = $_POST['submittedBy'];

// clean data
if($song === null or $song === ''){
	echo "If you're going to request a song, we need to know the name of the song.";
	exit;
} else if ($artist === null or $artist === '') {
	echo "We need to know who performs " . $song . " so we can make sure we're pirating, er... legally purchasing the right thing";
	exit;
}



$out = 'Thanks ';
if ($submittedBy !== null && $submittedBy !== '')
	$out = $out . $submittedBy;
else
	$out = $out . 'for the suggestion';
$out = $out . ', we\'ll look at adding ' . $song . ' to our playlist.';

echo($out);

// send email
sendEmail('scott.evans@live.ca', 'music@scoranda.wedding', 'New Music Request', 'This is a test of the music email');


?>