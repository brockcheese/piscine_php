<div class="topnav">
		<a class="active" href="index.php">Home</a>
		<a href="products.php">All Products</a>
		<a class="rightnav" id="cart_icon" href="cart.php"><img src="img/cart_icon.png" width="15vw"></a>
		<?php
		if (isset($_COOKIE['login']))
			echo "<a class='rightnav' href='#'>Hello, " . $_COOKIE['login'] . "</a>";
		else
			echo "<a class='rightnav' href='sign_in.php'>Sign in</a>";
		?>
		</a>
</div>
