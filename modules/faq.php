<?php
	$questions = [
		['question' => 'Did you say that the wedding is at a summer camp?',
		'answer' => 'Yes, Seedrioru is primarily an Estonian summer camp, but we will be using the main hall for our ceremony and reception.  Even though it\'s a summer camp, it\'s still a formal occasion, so get dressed up fancy for the night.'],
		['question' => 'Can I sleep at the campground?',
		'answer' => 'We have the full grounds of the camp for the weekend. If you would like to bring a tent to set up, you are welcome to do so.  Alternatively, you can sleep in one of the (unheated) camp barracks.  They will be authentic bunk beds of the summer camp varierty, so if that interests you, please bring a sleeping bag and pillow.'],
		['question' => 'How should I get to the venue?',
		'answer' =>'A shuttle bus will run from the hotel to the venue before the ceremony at 4:30, and return back to the hotel at 9:30, midnight, and 1:30. If you\'d prefer to drive, you can park at the venue and if need be take the shuttle back to the hotel later.'],
		['question' => 'Will there be food and drink?',
		'answer' => 'Yes. Yes there will. Dinner will be catered by a local food truck, as well as snacks and desserts through the evening. The open bar will include a selection of wines and one-off beers crafted just for the occasion'],
		['question' => 'I have a question that hasn\'t been covered here, how should I contact you?',
		'answer' => 'You can always contact one or both of us directly, or email us at <a href="mailto:scorandawedding@gmail.com">scorandawedding@gmail.com</a>.']
	];
?>

<div class='faq'>
	<div class='section-title'>
		<div class='pre-text'></div>
		<div class='text'>FAQs</div>
		<div class='post-text'></div>
	</div>

	<div class='q-and-as'>
		<?php
			foreach ($questions as $question) {
				echo("
					<div class='q-and-a'>
						<div class='question'>
							<div class='qa'>Q</div>
							<div>" . $question['question']) . "</div>";
				echo("
						</div>
						<div class='answer'>
							<div class='qa'>A</div>
							<div>" . $question['answer']) . "</div>";
				echo("
						</div>
					</div>
				");
			}
		?>
	</div>
</div>