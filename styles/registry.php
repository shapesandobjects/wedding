.registry .description {
	width: 85%;
	margin: auto;
}

.registry .gift-boxes {
	display: flex;
    flex-wrap: wrap;
    width: 100%;
    justify-content: space-around;
}

.registry .gift-boxes .kidscanplay,
.registry .gift-boxes .cdro {
	width: 35%;
    min-width: 18rem;
    border: 0.1rem solid <?php echo $colours['registry']['primary']; ?>;
    padding: 2rem 1.5rem;
    margin: 2rem 0.5rem 0;
}

.registry .gift-boxes .title {
	font-weight: bold;
}

.registry .gift-boxes .summary {
	margin: 0.5rem 0;
}

.registry .donate-container {
	margin: 1.5rem auto 0;
	width: 75%;
	text-align: center
}

.registry .donate-container a {
	text-decoration: none;
	color: black;
}

.registry .donate-container a .donate-button {
	background-color: <?php echo $colours['registry']['secondary']; ?>;
	padding: 0.5rem;
	border: 0.1rem solid <?php echo $colours['registry']['primary']; ?>;
	border-radius: 0.5rem;
}

.registry .donate-container a .donate-button:hover {
	background-color: <?php echo $colours['registry']['primary']; ?>;
}