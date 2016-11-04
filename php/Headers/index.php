<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Document</title>
	</head>
	<body>

		<?php
			$sum = $_GET['X'] + $_GET['Y'];
			echo $sum;
			?>
			<form action="process.php" method="get">
			<input type="text" name="x">
			<input type="text" name="y">
			<input type="submit">
		</form>


	</body>
</html>