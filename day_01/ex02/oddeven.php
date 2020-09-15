#!/usr/bin/env php
<?php
	while (1) {
		echo ("Enter a number: ");
		$get = trim(fgets(STDIN));
		if (feof(STDIN))
		{
			echo ("\n");
			exit();
		}
		if (is_numeric($get))
		{
			if ($get % 2 == 0)
			{
				echo ("The number ".$get." is even\n");
			}
			else
			{
				echo ("The number ".$get." is odd\n");
			}
		}
		else
		{
			echo ("'".$get."' is not a number\n");
		}
	}
?>
