<?php
	// pick a set of random pictures to show
	$availablePictures = scandir(IMG_TITLE);

	array_splice($availablePictures,(array_search('.', $availablePictures)),1);
	array_splice($availablePictures,(array_search('..', $availablePictures)),1);
	$bannerPictures = [5];
	for ($i = 0; $i < 5; $i++) {
		$rand = rand(0, sizeof($availablePictures) - 1);
		$bannerPictures[$i] = [
			'filename' => $availablePictures[$rand],
			'zIndex' => rand(0, 10),
			'verticalAdjust' => rand(-200, 200) / 100,
			'rotation' => rand(-35, 35)
		];
		array_splice($availablePictures,$rand,1);
	}

	$menuItems = [
		'rsvp' => [
			'label' => 'RSVP',
			'target' => 'rsvp'
		],		
		'weddingParty' => [
			'label' => 'Wedding Party',
			'target' => 'weddingparty'
		],
		'venue' => [
			'label' => 'Venue',
			'target' => 'venue-and-accomodations'
		],		
		'registry' => [
			'label' => 'Giving',
			'target' => 'registry'
		],
		'music' => [
			'label' => 'Music Requests',
			'target' => 'music'
		],
		'faq' => [
			'label' => 'FAQs',
			'target' => 'faq'
		]
	]


?>
<div class='banner'>
	<div class='images'>
		<?php 
			for ($i = 0; $i< 5; $i++) {
				echo('
					<img class="image" src="'.IMG_TITLE.$bannerPictures[$i]['filename'].'" style="transform: rotate('.$bannerPictures[$i]['rotation'].'deg); z-index: -'.$bannerPictures[$i]['zIndex'].'; top: '.$bannerPictures[$i]['verticalAdjust'].'rem"/>
				');
			}
		?>
	</div>
	<div class='title-wrapper'>
		<div class='title'>
			<div class='primary'>Scott & Miranda</div>
			<div class='secondary'>October 13, 2018, 5:30 PM</div>
		</div>
	</div>
	<div class='menu'>
		<?php
			foreach ($menuItems as $menuItem){
				echo('
					<div class="menu-link" targ="' . $menuItem['target'] . '">'.$menuItem['label'].'</div>
				');
			}
		?>		
	</div>
	<div class='menu-small'>
		<div class='control'>
			<div class='menu-open'>
				<i class="fas fa-bars fa-3x"></i>
			</div>
			<div class='menu-close hidden'>
				<i class="fas fa-times fa-3x"></i>
			</div>
		</div>
		<div class='menu-links hidden'>
			<?php
				foreach ($menuItems as $menuItem){
					echo('
						<div class="menu-link" targ="' . $menuItem['target'] . '">'.$menuItem['label'].'</div>
					');
				}
			?>	
		</div>
	</div>
</div>