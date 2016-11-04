<?php 
	//ind.php
	session_start();
		$_SESSION[] = "Some Value"; //THIS IS INCORRECT
		$_SESSION['name'] = "Carlos"; //this is correct
		$_SESSION['occupation'] = "CEO";

			//home.php
			echo $_SESSION['name']; // this will print out "Carlos"

			// profile.php
	session_start();
	unset($_SESSION ['name']) //This will only remove 'name' and its value from $_SESSION
	$_SESSION = array(); // Removes all variavles currently set in $_SESSION.
	session_destroy(); // Destroys all the data associated with current session.

	setcookie('foo','bar',time() + 86400 * 30, '/');

		echo $_COOKIE['foo']; // echoes out 'bar';

		session_start();
		session_id($_GET ['SESSIONID']);
?>