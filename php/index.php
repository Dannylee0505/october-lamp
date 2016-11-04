<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Hello PHP</title>
	<link rel="stylesheet" type="text/css" href="">
</head>
<body> -->

<?php

	var_dump($_SESSION)['First_Name'];
	var_dump($_SESSION)['Last_Name'];

	session_start();
 		if (isset($value))[(
 			$_SESSION['value']++;
 			)];
 		else{
 			$_SESSION['value']= 1;
	}
		echo $_SESSION['value'] . "<br />";
		echo session_id();
?>

<?php
	session_start();
		if(isset($_SESSION)['value'])){
			$_SESSION['value']++;
		}
		else{
			$_SESSION['value']= 1;
		}
		header('Location: Hello.php');
?>


<!-- </body>
</html> -->