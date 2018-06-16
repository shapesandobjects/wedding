<?php 

$hex = [
	'red' =>		'#dd0000',
	'burgandy' =>	'#7f0f0f',
	'orange' =>		'#ff9400',
	'yellow' =>		'#ffe900',
	'green' =>		'#4bcc10',
	'blue' =>		'#0d00a0',
	'purple' =>		'#560e77'
];

$colours = [
	'menu_borders' => null,
	'title_swirl' => null
];

foreach($colours as $key=>$val) {
	$randomColour = $hex[array_rand($hex)];
	$colours[$key] = $randomColour;
}

?>