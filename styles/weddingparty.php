.weddingparty .picture,
.weddingparty .name_and_title
.weddingparty .close {
	cursor: pointer;
}

.weddingparty .groomsmen .name_and_title,
.other .profile:first-of-type .name_and_title {
	text-align: right;
}

.weddingparty .picture {
	width: 7rem;
	height: 7rem;
	-moz-border-radius: 5.5rem;
	-webkit-border-radius: 5.5rem;
	border-radius: 5.5rem;

	background-size: cover;
	display: inline-block;

	border-width: 0.3rem;
	border-style: solid;

	margin: 0.1rem -0.3rem;
}

@media only screen and (max-width: 768px) {
	.weddingparty .picture {
		min-height: 4.5rem;
		max-height: 4.5rem;
		min-width: 4.5rem;
		max-width: 4.5rem;
		margin: 0.1rem -0.1rem;
	}
}

.weddingparty .name_and_title {
	margin: 1rem 0.5rem;
}

.weddingparty .name_and_title .name, .title {	
	font-size: 1.1rem;
}

.weddingparty .groomsmen_and_bridesmaids,
.other {
	display: flex;
}

.weddingparty .groomsmen,
.weddingparty .bridesmaids {
	flex-grow: 1;
	width: 50%;
}

.other {
	margin-top: 3rem;
}

.other .profile {
	flex-grow: 1;
	width: 48%;
}

.other .profile:first-of-type {
	margin: 0 0.15rem 0 0;
}

.other .profile {
	margin: 0 0 0 0.15rem;
}

.weddingparty .groomsman,
.weddingparty .bridesmaid,
.other .profile {
	display: flex;
	height: 8rem;
}

@media only screen and (max-width: 768px) {
	.weddingparty .groomsman,
	.weddingparty .bridesmaid,
	.other .profile {
		display: flex;
		height: 5.5rem;
	}
}

.weddingparty .groomsman,
.other .profile:first-of-type {
	flex-direction: row-reverse;
}

.weddingparty .writeup {
	display: flex;
	flex-direction: column;
	z-index: 102;
    background-color: white;
    width: 75%;
    left: 12.5%;
    position: fixed;
    top: 12.5%;
    min-height: 25rem;
    border: 0.2rem solid;
    border-radius: 2rem;
}

.weddingparty .writeup .label_and_picture {
	display: flex;
	justify-content: space-between;
	margin: 1rem 2rem;
}

.weddingparty .writeup .picture {
    cursor: default;
    height: 8rem;
    width: 8rem;
}

.weddingparty .bridesmaids .writeup .picture {
	left: 1rem;
}

.weddingparty .label {
	margin: 5rem 1rem 0 1rem;
}

.weddingparty p {
	margin: 0 3rem 3rem 3rem;
}

.weddingparty .quote {
    font-style: italic;
}

.weddingparty .writeup .name, .title {	
	font-size: 1.1rem;
}

.weddingparty .name {	
	font-weight: bold;
	text-decoration: underline;
}

.weddingparty .bump-down {
	margin-top: 3.75rem;
}

@media only screen and (max-width: 768px) {
	.weddingparty .bump-down {
		margin-top: 2.8rem;
	}
}

