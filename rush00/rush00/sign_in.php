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
	<div>
		<a href="register.php"><img src="img/register.png"></a>
	</div>
		<form method="POST" action="process_login.php">
			Username: <input type="text" name="login" value="" />
			<br />
			Password: <input type="password" name="passwd" value="" />
			<br />
			<input type="submit" name="Log in" value="Log in" />
		</form>
</body>
</html>
