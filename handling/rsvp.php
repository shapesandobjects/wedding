<?php 
require('../email.php');
$_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

$guest = $_POST['guest'];
$attending = $_POST['attending'];
$extra = $_POST['extra'];
$food = $_POST['food'];

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

$msg = 'RSVP from ' . $guest . '. They say they '; 
if ($attending === 'yes') {
	$msg = $msg . 'will ';
} else {
	$msg = $msg . 'will not ';
}
$msg = $msg . 'be able to attend, ';
if (strlen($extra) === 0) {
	$msg = $msg . 'and nothing else.';
} else {
	$msg = $msg . '"' . $extra . '."';
}
if (strlen($food) > 0) {
	$msg = $msg . '  Also, they have a food thing: "' . $food . '"';
}
echo $msg;

sendEmail('scorandawedding@gmail.com', 'rsvp@scoranda.wedding', 'RSVP from' . $guest, $msg);

?>