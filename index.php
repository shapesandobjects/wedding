<link href="https://fonts.googleapis.com/css?family=Arima+Madurai|Cherry+Swash|Cinzel+Decorative|Comfortaa|Courgette|Dancing+Script|Great+Vibes|Italianno|Lobster+Two|Merriweather|Overlock|Petit+Formal+Script|Roboto|Satisfy|Yellowtail" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="styles/style.php">
<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src='behaviours/common.js'></script>
<script src="behaviours/menu.js"></script>
<script src="behaviours/weddingparty.js"></script>
<script src="behaviours/venue.js"></script>
<script src="behaviours/music.js"></script>
<script src="behaviours/rsvp.js"></script>


<?php
	require('config.php');
	if(SECTION === null or SECTION === '') {
		require('modules/banner.php');
		echo('<div class="body">');
			echo('<div class="greyout hidden"></div>');
			require('modules/rsvp.php');
			require('modules/weddingparty.php');
			require('modules/venue.php');
			require('modules/registry.php');
			require('modules/music.php');
			require('modules/faq.php');
		echo('</div>');
	} else {
		require('modules/'.SECTION.'.php');
	}
?>



<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDeBNvjqCQ7sZlIhZH0u7WsxdL-VTWtGg&callback=myMap"></script>