<?php
	echo("Big Daddy");
	function addcheese ($chid, $cheesename, $price) {
		$cheese[] = $chid;
		$cheese[] = $cheesename;
		$cheese[] = $price;
		if ($fp = fopen('../cheese.csv', 'a+')) {
			fputcsv($fp, $cheese);
		}
	}
	function removecheese($cheesename) {
		if ($fp = fopen('../cheese.csv', 'a+')) {
			while($line = fgets($fp)) {
				if ($cheesename === str_getcsv($line)[1]) {
					
				}
			}
		}
	}
	removecheese("dick");
?>
