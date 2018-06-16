.rsvp .rsvp-open {
    font-size: 1.5rem;
    padding: 0.75rem;
    border: 0.1rem solid <?php echo $colours['rsvp_button']['primary']; ?>;
    border-radius: 0.5rem;
    background-color: <?php echo $colours['rsvp_button']['secondary']; ?>;
    width: 9rem;
    text-align: center;
    margin: auto;
    cursor: pointer;
}

.rsvp .rsvp-open:hover {
	background-color: <?php echo $colours['rsvp_button']['primary']; ?>;
}

.rsvp .rsvp-open-container {
	margin: 2rem 0;
}

.rsvp .rsvp-modal {
	display: flex;
	flex-direction: column;
	z-index: 102;
    background-color: white;
    width: 75%;
    left: 12.5%;
    position: fixed;
    top: 12.5%;
    min-height: 25rem;
    border: 0.2rem solid <?php echo $colours['rsvp_form']['primary']; ?>;
    border-radius: 2rem;
}

.rsvp #rsvp-form {
	margin: 4rem 5rem;
}

.rsvp #rsvp-form input {
	border: 0.1rem solid <?php echo $colours['rsvp_toggles']['primary']; ?>;
}

.rsvp #rsvp-form .guest-field {
	display: flex;
}

.rsvp #rsvp-form .guest-field .guest-container {
	flex-grow: 1;
    padding: 0 1rem;
}

.rsvp #rsvp-form .guest-field .guest-container input{
	width: 100%;
}

.rsvp #rsvp-form .attending {
	margin: 1rem 2rem;
}

.rsvp #rsvp-form .attending-container {
    width: 100%;
    display: flex;
    justify-content: space-around;
}

.rsvp #rsvp-form .attending-extras-yes,
.rsvp #rsvp-form .attending-extras-no {
	display: flex;
	flex-wrap: wrap;
}

.rsvp #rsvp-form .attending-extra-container {
	flex-grow: 1;
	cursor: pointer;
	display: flex;
    margin: 0.35rem 0;
    width: 15rem;
}

.rsvp #rsvp-form .attending-extra-container input {
	display: none;
}


.rsvp #rsvp-form .attending-extra-container input ~ label .checkmark {
	height: 1.5rem;
	width: 1.5rem;
	min-width:1.5rem;
	margin: 0 1rem 0 0;
	border: 0.1rem solid <?php echo $colours['rsvp_toggles']['primary']; ?>;
}

.rsvp #rsvp-form .attending-extra-container:hover input ~ label .checkmark {
	background-color: <?php echo $colours['rsvp_toggles']['secondary']; ?>;
}

.rsvp #rsvp-form .attending-extra-container input ~ label .checkmark:after {
	content: "";
	display: none;
}

.rsvp #rsvp-form .attending-extra-container input:checked ~ label .checkmark:after {
	display: block;
}

.rsvp #rsvp-form .attending-extra-container input ~ label .checkmark:after {
	left: 9px;
	top: 5px;
	width: 5px;
	height: 13px;
	border: solid <?php echo $colours['rsvp_toggles']['primary']; ?>;
	border-width: 0 3px 3px 0;
	-webkit-transform: rotate(45deg);
	-ms-transform: rotate(45deg);
	transform: rotate(45deg);
	margin: 0.15rem auto;
}

.rsvp #rsvp-form .attending-extra-container label {
	cursor: pointer;
	display: flex;
	align-items: center;
}

.rsvp #rsvp-form .attending-container input {
	display: none;
}

.rsvp #rsvp-form .attending-container input ~ label .radio {
	height: 1.5rem;
	width: 1.5rem;
	min-width:1.5rem;
	border: 0.1rem solid <?php echo $colours['rsvp_toggles']['primary']; ?>;
	border-radius: 50%;
	margin: 0 1.5rem 0 0;
	display: flex;
}

.rsvp #rsvp-form .attending-container:hover input ~ label .radio {
	background-color: <?php echo $colours['rsvp_toggles']['secondary']; ?>;
}


.rsvp #rsvp-form .attending-container input ~ label .radio:after {
	content: "";
	display: none;
}

.rsvp #rsvp-form .attending-container input:checked ~ label .radio:after {
	display: block;
}

.rsvp #rsvp-form .attending-container input ~ label .radio:after {
	border-radius: 50%;
    background: <?php echo $colours['rsvp_toggles']['primary']; ?>;
    width: 1rem;
    height: 1rem;
    position: relative;
    margin: auto;
}

.rsvp #rsvp-form .attending-container label {
	margin: 0.5rem 0 0 0.5rem;
	cursor: pointer;
	display: flex;
	align-items: center;
	width: 20rem;
}

.rsvp .rsvp-button-container {
	margin: 2rem 0 0;
	width: 100%;
	text-align: center;
}

.rsvp form .rsvp-button-container button {
	cursor: pointer;
	font-size: 1rem;
	background-color: <?php echo $colours['rsvp_form']['secondary']; ?>;
	border: 0.1rem solid <?php echo $colours['rsvp_form']['primary']; ?>;
	border-radius: 0.5rem;
	padding: 0.5rem 1rem;
}

.rsvp form .rsvp-button-container button:hover {
	background-color: <?php echo $colours['rsvp_form']['primary']; ?>;
}

.rsvp form .attending-extra-food-details-container {
	padding: 0.5rem 2.5rem;
	text-align: center
}

.rsvp form .attending-extra-food-details-container #attending-extra-food-details {
	width: 100%;
}

.rsvp .rsvp-form-messages {
	margin: 0 4rem 3rem;
}