<div class='rsvp'>
	<div class='section-title'>
		<div class='pre-text'></div>
		<div class='text'>RSVP</div>
		<div class='post-text'></div>
	</div>

	<div class='rsvp-writeup'>
		We hope that you're able to join us to celebrate our wedding on October 13, 2018.  Please let us know by August 30 if you'll be able to join us.
	</div>

	<div class='rsvp-open-container'>
		<div class='rsvp-open'>
			RSVP
		</div>
	</div>

	<div class='rsvp-modal hidden'>
		<div class='close'>
			<i class="fas fa-times fa-3x"></i>
		</div>
		<form id='rsvp-form' method='post' action='rsvp.php'>
			<div class='field guest-field'>
	            <label for='guest'>Guest(s)</label>
	            <div class='guest-container'>
	            	<input type='text' id='guest' name='guest'>
	            </div>
	        </div>
			<div class='attending'>
				<div class='attending-container'>
					<input type='radio' name='attending' value='yes' id='attending-yes'>
					<label for='attending-yes'><div class='radio'></div>I/We will be able to join the celebration</label>
				</div>
				<div class='attending-container'>
					<input type='radio' name='attending' value='no' id='attending-no'>
					<label for='attending-no'><div class='radio'></div>Unfortunately I/we won't be able to attend</label>
				</div>
			</div>

			<div class='attending-extras-yes hidden'>
				<div class='attending-extra-container'>
					<input type='checkbox' name='attending-extra' id='attending-extra-cantwait' value = 'cantwait'>
					<label for='attending-extra-cantwait'><div class='checkmark'></div>and I can't wait for the festivities</label>
				</div>
				<div class='attending-extra-container'>
					<input type='checkbox' name='attending-extra' id='attending-extra-fancy' value = 'fancy'>
					<label for='attending-extra-fancy'><div class='checkmark'></div>and I'm going to get dressed soooo fancy</label>
				</div>
				<div class='attending-extra-container'>
					<input type='checkbox' name='attending-extra' id='attending-extra-bedtime' value = 'bedtime'>
					<label for='attending-extra-bedtime'><div class='checkmark'></div>and I'm going to stay up way past my bedtime</label>
				</div>
				<div class='attending-extra-container'>
					<input type='checkbox' name='attending-extra' id='attending-extra-dancing' value = 'dancing'>
					<label for='attending-extra-dancing'><div class='checkmark'></div>and I'm going to dance until my feet hurt</label>
				</div>
				<div class='attending-extra-container'>
					<input type='checkbox' name='attending-extra' id='attending-extra-food' value = 'food'>
					<label for='attending-extra-food'><div class='checkmark'></div>and I've got a food restriction to keep in mind</label>
				</div>
			</div>
			<div class='attending-extras-no hidden'>
				<div class='attending-extra-container'>
					<input type='checkbox' name='attending-extra' id='attending-extra-wish' value = 'wish'>
					<label for='attending-extra-wish'><div class='checkmark'></div>and I wish I wasn't missing out</label>
				</div>
				<div class='attending-extra-container'>
					<input type='checkbox' name='attending-extra' id='attending-extra-bummed' value = 'bummed'>
					<label for='attending-extra-bummed'><div class='checkmark'></div>and I am super bummed out that I can't come</label>
				</div>
			</div>
			<div class='attending-extra-food-details-container hidden'>
				<input type='textbox' id='attending-extra-food-details' name='attending-extra-food-details'>
			</div>
	        <div class='rsvp-button-container hidden'>
	            <button type='submit'>RSVP</button>
	        </div>
	    </form>
	    <div class='rsvp-form-messages'></div>
	</div>

</div>