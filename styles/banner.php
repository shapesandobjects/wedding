.banner {
	width: 100%;
	position: absolute;
	top: 0;
	left: 0;
	background-color: <?php echo $colours['page_background']['page']; ?>;;
	z-index: 100;
	border-bottom: 0.2rem solid <?php echo $colours['menu_borders']['primary']; ?>;
}
.banner.fixed {
	position: fixed;
	top: -12rem;
}
.banner .images {
	border-bottom: 0.25rem solid <?php echo $colours['menu_borders']['primary']; ?>;
	height: 15rem;
	overflow: hidden;
	display: flex;
	justify-content: center;
}
.banner .images .image {
	height: 100%;
	top: 50%;
	transform: translate(-50%, 0);
	margin-left:-3rem;
	position: relative;
}
.banner .title-wrapper {
	display: flex;
	justify-content: center;
	position: relative;
	top: -3rem;
	margin-bottom: -2rem;
}
.banner .title {
	border: 0.25rem solid <?php echo $colours['menu_borders']['primary']; ?>;
	border-radius: 1rem;
	padding: 0.75rem 1.5rem;
	display: flex;
	flex-direction: column;
	align-items: center;
	background-color: <?php echo $colours['menu_borders']['secondary']; ?>;
}
.banner .title .primary {
	font-family: yellowtail;
	font-size: 2.5rem;
}
.banner .menu {
	display: flex;
	justify-content: space-around;
	position: relative;
	top: -0.5rem;
	margin: 0 auto;
	max-width: 50rem;
}
.banner .menu .menu-link {
	padding: 0.5rem 1rem;
	height: 1.1rem;
	cursor: pointer;
}
.banner .menu .menu-link:hover {
	border: 0.1rem solid <?php echo $colours['menu_borders']['primary']; ?>;
	border-radius: 0.5rem;
	padding: 0.4rem 0.9rem;
}

.banner .menu-small {
	padding: 0 2rem;
	position: relative;
    top: -3rem;
    margin-bottom: -3rem;
}
.banner .menu-small .control {
	display: flex;
	flex-direction: row-reverse;
	margin-bottom: 1rem;
}
.banner .menu-small .control .menu-open,
.banner .menu-small .control .menu-close {
	width: fit-content;
	cursor:pointer;
}
.banner .menu-small .menu-links {
	display: flex;
	flex-direction: column;
	align-items: flex-end;
	text-align: right;	
	margin: -0.5rem 0 1rem;
}
.banner .menu-small .menu-links .menu-link {
	margin-right: 2rem;
    padding: 0.5rem 0;
    border-bottom: 0.1rem solid grey;
    width: 13rem;
    cursor: pointer;
}

.banner .menu-small .menu-link:hover {
	padding-right: 1rem;
	width:12rem;
}

.banner .menu-small .menu-links .menu-link:last-child {
	border: none;
}

@media only screen and (max-width: 1024px) {
	.banner .menu {
		display: none;
	}
}
@media only screen and (min-width: 1025px) {
	.banner .menu-small {
		display: none;
	}
}