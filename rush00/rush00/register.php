<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<title>Cheese Login</title>
	<link rel="icon" href="img/cheese_icon.png">
		<link rel="stylesheet" href="display.css">
		<link rel="stylesheet" href="topnav.css">
</head>
<body>
	<?php
		include "topnav.php";
	?>
	<br />
	<form action="create.php" method="POST">
		Username: <input type="text" name="login" value="" />
		<br />
		Password: <input type="password" name="passwd" value="" />
		<br />
		Phone Number: <input type="sel" name="phnum" value="" />
		<br />
		Email: <input type="email" name="email" value="" />
		<br />
		<input type="submit" name="submit" value="OK" />
	</form>
</body>
</html>
