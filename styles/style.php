<?php
	header("Content-Type: text/css; charset: UTF-8"); 

	$hex = [
		'red' =>		['primary' => '#c0392b', 'secondary' => '#e6b0aa', 'page' => '#FDEDEC'],
		'burgandy' =>	['primary' => '#840f40', 'secondary' => '#d2b2bf', 'page' => '#F9EBEA'],
		'orange' =>		['primary' => '#E67E22', 'secondary' => '#FAD7A0', 'page' => '#FEF5E7'],
		'yellow' =>		['primary' => '#F4D03F', 'secondary' => '#FCF3CF', 'page' => '#FEF9E7'],
		'green' =>		['primary' => '#27AE60', 'secondary' => '#A9DFBF', 'page' => '#EAFAF1'],
		'blue' =>		['primary' => '#1F618D', 'secondary' => '#A9CCE3', 'page' => '#EBF5FB'],
		'purple' =>		['primary' => '#7D3C98', 'secondary' => '#D2B4DE', 'page' => '#F5EEF8']
	];

	$colours = [
		'page_background' => null,
		'title_swirl' => null,
		'menu_borders' => null,
		'rsvp_button' => null,
		'rsvp_form' => null,
		'rsvp_toggles' => null,
		'venue_button' => null,
		'registry' => null,
		'music_button' => null,
	];

	foreach($colours as $key=>$val) {
		$randomColour = $hex[array_rand($hex)];
		$colours[$key] = $randomColour;
	}
?>

<?php require 'banner.php' ?>
<?php require 'common.php' ?>
<?php require 'faq.php' ?>
<?php require 'music.php' ?>
<?php require 'registry.php' ?>
<?php require 'rsvp.php' ?>
<?php require 'venue.php' ?>
<?php require 'weddingparty.php' ?>