<?php
	define('ROOT', '');
	define('IMG', ROOT.'img/');
	define('IMG_TITLE', IMG.'title/');
	define('IMG_WEDDINGPARTY', IMG.'weddingparty/');
	$uri = explode('/', str_replace('//','/', $_SERVER['REQUEST_URI']));
	define('SECTION', strtolower($uri[2]));
	if(SECTION === 'rsvp') {
		define('RSVP_STUB', strtolower($uri[3]));
	}

	$bigDay = date_create('2018-10-13');
	$bigDayFormatted = date_format($bigDay, 'F d, Y');
	$today = date_create();
	if($today > $bigDay)
		$daysRemaining = -1;
	elseif (condition)
		$daysRemaining = date_diff($today, $bigDay)->format('%a');
?>