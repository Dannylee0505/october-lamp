<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Cookie PHP</title>
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
	<form>
		<section>
			<input type="" name="">
		</section>
	</form>
	<form>
		<fieldset>
			<legend>
				<label>
					<button>
						
					</button>
				</label>
			</legend>
		</fieldset>
	</form> -->
<?php 
	session_start();
		if(! isset($_SESSION ['logged_in']) && $_SESSION['logged_in'] !=TRUE) {
			//do nothing
			deader('Location: login.php');
		} else {
			if($_SESSION['id'] ==1) {
				echo "Oliver";
			}
			if($_SESSION['id'] ==2) {
				echo "Michael"
			}
		}
?>

<h1>Profile</h1>


<!-- </body>
</html> -->