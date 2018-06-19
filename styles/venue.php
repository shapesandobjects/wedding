#map {
	width: 100%;
	height: 32rem;
}

@media only screen and (max-width: 1024px) {
	#map {
		height: 27rem;
	}
}

.venue-details,
.hotel-details,
.more-directions {
	margin: 1rem 1.5rem;
}

.venue-details .address-container,
.hotel-details .address-container {
	margin: 1rem auto;
    border-radius: 0.5rem;
}

.venue-details .address-container {
    width: 15rem;
}

.hotel-details .address-container {
	width: 19rem;
}

.venue-details .address-container a,
.hotel-details .address-container a {
	color: black;
	text-decoration: none;
}

.venue-details .address-container a .address-button,
.hotel-details .address-container a .address-button {
	padding: 0.5rem 1.5rem;
	border: 0.1rem solid <?php echo $colours['venue_button']['primary']; ?>;
	border-radius: 1rem;
	background-color: <?php echo $colours['venue_button']['secondary']; ?>;
}

.venue-details .address-container a .address-button:hover,
.hotel-details .address-container a .address-button:hover {
	background-color: <?php echo $colours['venue_button']['primary']; ?>;
}