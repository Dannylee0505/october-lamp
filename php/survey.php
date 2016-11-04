<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Product Demo</title>
</head>
<body>
	<h1>Product Demo</h1>
	<form action="checkout.php" method="post">
		Your-name:<input type="text" name="name"><br />
		Email:<input type="text" name="email"><br />
		Purchasing:
		<select name="item">
			<option value="CodingDojo_Shirt">CodingDojo t-shirt</option>
			<option value="CodingDojo_Cup">CodingDojo Cup</option>
		</select>
		Quantity:<input type="text" name="quantity">
			<input type="submit" value="Purchase">
	</form>
<?php
	var_dump($_POST)
?>
	<p>Hi. <?=$_POST['name'] ?>! Thanks for purchasing 
			<?=$_POST['quantity'] ?>' <?= $_post ['item'] ?>CodingDojo T-shirt <br />

	</p>
	<p>An email will be sent to </p>
</body>
</html>