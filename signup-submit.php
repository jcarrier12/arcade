<?php include("top.php"); ?>

<!--creation of the array with the information submitted -->
<!--This information will be sent to our database -->
<?php
	$email = $_POST["email"];
	$username = $_POST["username"];
	$password = $_POST["password"];
	$gender = $_POST["gender"];
	$favorite_console = $_POST["favorite_console"];
	
	$to_write = array(
		$email,$username,$password,$gender,$favorite_console
	);
	$to_write= implode(",",$to_write);
	
	//NEED TO ADD REFERENCE TO FIREBASE!!
	file_put_contents(   ,PHP_EOL.$to_write, FILE_APPEND);
?>
	
	<strong>Thank You!</strong>
	<br>
	<br>
	Welcome to The Arcade, <?php print($username)?>!
	<br>
	<br>
	
	<?php include("bottom.html"); ?>
