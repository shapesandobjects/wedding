<?php

	// pick a random picture to show
	$pictures = scandir(IMG_TITLE);

	array_splice($pictures,(array_search('.', $pictures)),1);
	array_splice($pictures,(array_search('..', $pictures)),1);
	$pictureId = rand(0, sizeof($pictures) - 1);
?>

<style>
.title_img {
    overflow: hidden;
    background-size: cover;
    background-position: center;
    height: 30rem;
    position: relative;
}

.title_text_container{
	width: 35rem;
	height: 10rem;	
	position:absolute;
	bottom:0;
}

.title_text {
	color:white;
    width: inherit;
	height: inherit;
    padding: 1rem;
    position: absolute;
	top: 0;
}

.title_text_box{
	background-color:black;
	width: inherit;
	height: inherit;
	opacity:0.5;
	position: absolute;
	top: 0;
}


</style>

<div class='title_img' style="background-image:<?php echo("url('".IMG_TITLE.$pictures[$pictureId]."')")?>;">
	<!-- img src=<?php echo(IMG_TITLE.$pictures[$pictureId])?>-->
	<div class='title_text_container'>
		<div class='title_text_box'></div>
		<div class='title_text'>		
			<h1>Scott & Miranda are getting married!</h1>
			<h2><?php echo($bigDayFormatted) ?></h2>
		</div>
	</div>
</div>


