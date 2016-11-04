<!-- <!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
			<title>Document</title>
		</head>
		<body> -->
<!-- 			<form action="some_page.php" method="post">
				<input type="text" name="first-name">
				<input type="text" name="last_name">
				<input type="submit">	
			</form> -->
			<form action="process.php" method="post">
				First-name:<input type="text" name="first_name">
				Last-name:<input type="text" name="last_name">
				Email address:<input type="text" name="email">
				<input type="submit" name="add user!">
			</form>


			<?php
				var_dump($_POST);
			?>
			<p>Your name is:<?php echo $_POST['first_name']; ?></p>
			<p>Your name is:<?php echo $_POST['last_name']; ?></p>
			<p>Your name is:<?php echo $_POST['email'] ?></p>

<!-- 		</body>
	</html> -->