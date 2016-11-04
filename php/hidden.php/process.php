<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Document</title>
	</head>
	<body>

		<form method="post" action="process.php">
			<input type="hidden" name="action" value="register">
			<input type="text" name="first_name">
			<input type="text" name="last_name">
			<input type="text" name="emil">
			<input type="password" name="password">
			<input type="submin" name="Resister">
		</form>

		<form method="post" action="process.php">
			<input type="hidden" name="action" value="login">
			<input type="text" name="emil">
			<input type="password" name="password">
			<input type="submit" name="Login">		
		</form>

		<?php
			if(isset($_POST['action']) && $_POST['action'] == "register"){
				  //do registration process
			}
			if(isset($_POST['action']) && $_POST ['action'] == "login"){
				//do login process
			}

			?>
	</body>
</html>