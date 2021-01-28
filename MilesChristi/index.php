<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="assets/styles/main.css">
		<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
		<title>Miles Christi</title>
	</head>
	<body>
		<?php include("header.php"); ?>
		<nav class="navbar-desktop-fixed appear-1" id="navbar-desktop-fixed">
			<div class="left">
				<a href="./"><img src="./assets/img/logo.png" alt="logo"></a>
			</div>
			<div class="div-ul">
				<?php include("./main-page/components/navbar.php");?>
			</div>
		</nav>
		<nav class="navbar-mobile-fixed appear-1" id="navbar-mobile-fixed">
			<div class="left">
				<a href="./"><img src="./assets/img/logo.png" alt="logo"></a>
			</div>
			<div class="right">
				<a onClick="viewNavbar_mobile()"><i class="fas fa-bars"></i></a>
			</div>
		</nav>
		<?php
			include("./main-page/exercises.php");
			include("./main-page/events.php");
			include("./main-page/blogs.php");
			include("footer.php");
		?>
	</body>
</html>
