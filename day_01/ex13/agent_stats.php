#!/usr/bin/env php
<?php
	if ($argc > 1) {
		$option = $argv[1];
		if ($option != "average" && $option != "average_user" && $option != "moulinette_variance")
			exit ();
		if ($option == "average") {
			$count = 0;
			$numcount = 0;
			while($f = fgets(STDIN)){
				$num = explode(";", $f)[3];
				if (ctype_digit($num)) {

					$count++;
					$numcount += $num;
					echo($count);
					echo($numcount);
				}
			}
//			echo(($numcount / $count)."\n");
		}
		if ($option == "average_user") {

		}
		if ($option == "moulinette_variance") {

		}
	}
?>
