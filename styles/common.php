body {
    background-color: <?php echo $colours['page_background']['page']; ?>;
    font-family: 'Comfortaa', cursive;
}

.hidden {
	display: none !important;
}

.body {
	position: absolute;
	top: 25rem;
	left: 10%;
	width: 80%;
    margin-bottom: 4rem;
}

input {
    font-family: 'Comfortaa', cursive;
}

@media only screen and (max-width: 1024px) {
	.body {
		left: 5%;
		width: 90%;
	}
}

.section-title {
	text-align: center;
    margin: 4rem 0 2rem;
    display: flex;
    width: 100%;
    align-items: center;
    font-family: yellowtail;
    font-size: 3rem;
}

.rsvp .section-title {
    margin-top: 1rem;
}

.section-title .text {
	margin: 0 0.5rem;
	flex-grow: 1;
    max-width: 45%;
}

.section-title .pre-text {
	border-bottom-right-radius: 25%;
    border-bottom-left-radius: 60%;
    content: "";
    min-width: 2rem;
    height: 50px;
    border-bottom: 3px solid <?php echo $colours['title_swirl']['primary']; ?>;
    flex-grow: 2;
}

.section-title .post-text {
	border-top-left-radius: 25%;
    border-top-right-radius: 60%;
    content: "";
    min-width: 2rem;
    height: 50px;
    border-top: 3px solid <?php echo $colours['title_swirl']['primary']; ?>;
    flex-grow: 2;
}

.greyout {
	width: 100%;
    height: 100%;
    z-index: 101;
    background-color: black;
    opacity: 0.5;
    position: fixed;
    top: 0;
    left: 0;
}

.close {
	border: 0.1rem solid black;
    border-radius: 4.5rem;
    padding: 0 0.4rem;
}

.close {
    position: absolute;
    right: -1.65rem;
    top: -1.65rem;
    background-color: white;
    cursor: pointer;
}
