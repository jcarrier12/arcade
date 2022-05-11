<!DOCTYPE html>
<?php
	$logged = $_GET["isLog"];
?>
<html lang = en>
	<!-- Web Programming, Project 4 (NerdLuv) -->
	<!-- shared page top HTML -->
	
	<head>
		<title>Arcade</title>
		
		<meta charset="utf-8" />
		
		<!-- instructor-provided CSS and JavaScript links; do not modify -->
		<link href="" type="image/gif" rel="shortcut icon" />
		<link href="arcade.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<div class = "navbar">
			<a class = "navB" href = "home.php">Home</a>
			<a class = "navB" href = "mostpop.php">Most Popular</a>
			<a class = "navB" href = "profile.php">Profile</a>
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