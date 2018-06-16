<?php 
require('../email.php');
$_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

$guest = $_POST['guest'];
$attending = $_POST['attending'];

// clean data
if ($guest === null or $guest === '') {
	echo "It would be great if you would tell us who you are, so we know if you're coming...";
	exit;
}

if ($attending === 'yes') {
	$out = 'Thanks ' . $guest . ', we\'re very excited that you\'ll be able to come celebrate with us!';
} else {
	$out = 'Sorry to hear that ' . $guest .', we\'ll miss having you there :(';
}

echo $out;

sendEmail('scott.evans@live.ca', 'rsvp@scoranda.wedding', 'RSVP from' . $guest, 'This is a test of the rsvp email');

?>