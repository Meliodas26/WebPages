<header>
	<!--
		div - Top
		Include:
		- Logo
		- SocialNetworks
		- Navbar
	-->
	<div class="opacity appear-1" id="opacity">
		<div class="top">
			<div class="left">
				<a href="./"><img src="./assets/img/logo.png" alt="logo"></a>
			</div>
			<div class="right-desktop">
				<div class="social-networks">
					<a href="#"><div class="a-yt"><i class="fab fa-youtube"></i></div></a>
					<a href="#"><div class="a-insta"><i class="fab fa-instagram"></i></div></a>
					<a href="#"><div class="a-face"><i class="fab fa-facebook-f"></i></div></a>
				</div>
				<nav class="nav-desktop">
					<?php include("./main-page/components/navbar.php");?>
				</nav>
			</div>
			<div class="right-mobile">
				<a onClick="viewNavbar_mobile()"><i class="fas fa-bars"></i></a>
			</div>
		</div>
		<div class="bottom" id="hidden-desktop">
			<h1>Lorem Ipsum Dolor</h1>
			<p>
				Sit cupidatat nisi aliqua adipisicing culpa sunt id veniam. 
				Consectetur amet ea dolor laborum sit aliqua dolor nulla anim.
			</p>
		</div>
	</div>
	<nav class="nav-mobile appear-1" id="nav-mobile">
		<div><a onClick="viewNavbar_mobile()"><i class="fas fa-times"></i></a></div>
			<?php include("./main-page/components/navbar.php");?>
	</nav>
</header>

<script src="assets/js/navbar-mobile.js"></script>
<script src="assets/js/navbar-fixed.js"></script>