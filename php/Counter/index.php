<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Counter Demo</title>
		<link rel="stylesheet" type="text/css" href="">
		<style type="text/css">
			h1, h2{
				text-align: center;
			}

		</style>
	</head>
	<body>
		<?php

			session_start();
			if(!isset($_SESSION ['counter']))
				{
					$_SESSION['counter'] = 1;
				}
			else
				{
					$_SESSION['counter'] = $_SESSION['counter'] +1;
				}

	// var_dump($_SESSION);

		?>

		<h1>You came to this website</h1>
		<h2><?= $_SESSION['counter'] ?> times</h2>




	</body>
</html>