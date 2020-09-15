<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Cheese Shop</title>
		<link rel="icon" href="img/cheese_icon.png">
		<link rel="stylesheet" href="topnav.css">
		<link rel="stylesheet" href="display.css">
		<link rel="stylesheet" href="products.css">
	</head>
	<body>
		<?php include "topnav.php"; ?>
		<div>
			<span class="pageheader">PRODUCTS</span>
			<span class="logo"><img src="img/cheese_shop_logo.png" class="center"></span>
		</div>
		<h3>CATEGORIES:</h3>
		<form method="GET">
			<select name="category">
				<option selected="selected">All</option>
				<?php
				include ("./getcategories.php");
				$catlist = getcategories();
				foreach ($catlist as $cats)
				echo "<option name='category' value='".$cats."'>".$cats."</option>";
				?>
				<input type="submit" name="sumbit" value="Search Category">
			</select>
		<br>
		</form>
		<?php
			include "getcategories.php";
			print_r(getdatcheddar());
		?>
	</body>
</html>
