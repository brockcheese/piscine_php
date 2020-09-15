<?php
	function getcart() {
		$users = array_slice(file('db/users.csv'), 1);
		foreach ($users as $singleuser) {
			$user = str_getcsv($singleuser);
			if ($_COOKIE["login"] === $user[1]) {
				$usrid = $user[0];
				$purchases = array_slice(file('db/purchases.csv'), 1);
				foreach($purchases as $singlepurchase) {
					$purchase = str_getcsv($singlepurchase);
					if ($usrid === $purchase[0]) {
						$cid = $purchase[1];
						$cheeses = array_slice(file('db/cheese.csv'), 1);
						foreach($cheeses as $singlecheese) {
							$cheese = str_getcsv($singlecheese);
							if ($cid === $cheese[0]) {
								$cartocheese[] = $singlecheese;
							}
						}
					}
				}
			}
		}
		return ($cartocheese);
	}
	function gettotalprice($cartocheese) {
		$totalprice = 0;
		foreach($cartocheese as $item) {
			$price = str_getcsv($item)[2];
			$totalprice += $price;
		}
		return ($totalprice);
	}
	?>
<head>
	<meta charset="UTF-8">
	<title>Cheese Shop</title>
	<link rel="icon" href="img/cheese_icon.png">
	<link rel="stylesheet" href="display.css">
	<link rel="stylesheet" href="topnav.css">
</head>
<body>
	<?php include "topnav.php"; ?>
		<span class="logo"><img src="img/cheese_shop_logo.png"></span>
		<br>
		<table>
			<tr>
				<th>Item</th>
    			<th>Quantity</th>
    			<th>Price</th>
			</tr>
		<?php

		function didicheese($cartocheese, $index) {
			$cheese = $cartocheese[$index];
			$cheesename = str_getcsv($cheese)[1];
			for($i = 0; $i < $index; $i++) {
				if (str_getcsv($cartocheese[$i])[1] === $cheesename) {
					return(TRUE);
				}
			}
			return(FALSE);
		}

		function howmanycheeses($cartocheese, $cheesename) {
			$totalcheese = 0;
			foreach($cartocheese as $item) {
				if (str_getcsv($item)[1] === $cheesename)
					$totalcheese++;
			}
			return ($totalcheese);
		}

		$cartarray = getcart();
		$totalcheeseprice = 0;
		for ($i = 0; $i < count($cartarray); $i++) {
			$cheeseorder = str_getcsv($cartarray[$i]);
			$totalcheeseprice += $cheeseorder[2];
			print_r($cheeseorder);
			if (!didicheese($cartarray, $i)) {
				echo "<tr>";
				echo "<td>".$cheeseorder[1]."</td><td>".howmanycheeses($cartarray, $cheesorder[1])."</td><td>".intval($cheeseorder[2] * howmanycheeses($cartarray, $cheesorder[1]))."</td>";
				echo "</tr>";
			}
		}
		?>
		</table>
		<?php echo "<h1>TOTAL PRICE: $" . gettotalprice(getcart()) . "</h1>"; ?>
</body>
