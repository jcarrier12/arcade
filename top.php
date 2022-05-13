<!DOCTYPE html>
	<?php
		
	?>
<html lang = en>
	<!-- Web Programming, Project 4 (NerdLuv) -->
	<!-- shared page top HTML -->
	
	<head>
		<title>Arcade</title>
		
		<meta charset="utf-8" />
		<script src = "functions.js" type = "text/javascript"></script>
		<script type="module" src="/index.js"></script>
		<link href="" type="image/gif" rel="shortcut icon" />
		<link href="arcade.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<div id = "navbar">
			<a class = "navB" href = "home.php">Home</a>
			<a class = "navB" href = "populargames.php">Most Popular</a>
			<?php
				if($logged){
					?>
					<a class = "navB" href = "profile.php">Profile</a>
					<?php
				}
				else{
					?>
					<a class = "navB" href = "login.php">Profile</a>
					<?php
				}
			?>
			<?php
				if($logged == true){
					?>
					<a class = "navCorner" href = "home.php">signout</a>
					<?php
				}
				else{
					?>
					<a class = "navCorner" href = "signup.php">Register</a>
					<a class = "navCorner" href = "login.php">Login</a>
					<?php
				}
			?>
			
		</div>
		
		<!-- your HTML output follows -->