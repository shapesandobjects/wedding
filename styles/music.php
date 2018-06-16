.music .no-pitbull {
	font-size: 0.75rem;
}

.music .no-pitbull .disclaimer {
	font-weight: bold;
}

.music form {
	margin: 2rem auto 0;
	width: 28rem;
}

.music form {
	width: 14rem;
}

.music form .field {
	display: flex;
	justify-content: space-between;
	flex-wrap: wrap;
	margin: 0.5rem 0;
}

.music form .field label,
.music form .field input {
	width: 14rem;
}

.music form .field label .required {
	color: <?php echo $colours['music_button']['primary']; ?>;
}

.music form .button-container {
	height: 3rem;
}

.music form .button-container button {
	float: right;
	cursor: pointer;
	font-size: 1rem;
	background-color: <?php echo $colours['music_button']['secondary']; ?>;;
	border: 0.1rem solid <?php echo $colours['music_button']['primary']; ?>;
	border-radius: 0.5rem;
	padding: 0.5rem 1rem;
}

.music form .button-container button:hover {
	background-color: <?php echo $colours['music_button']['primary']; ?>;
}

.music #music-form-messages {
	text-align: center;
}

