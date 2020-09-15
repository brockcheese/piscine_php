#!/usr/bin/env php
<?php
	if ($argc != 4) {
		echo("Incorrect Parameters\n");
		exit();
	}
	$num1 = (int)trim($argv[1]);
	$op = trim($argv[2]);
	$num2 = (int)trim($argv[3]);
	if ($op == "+")
		echo($num1 + $num2);
	if ($op == "-")
		echo($num1 - $num2);
	if ($op == "*")
		echo($num1 * $num2);
	if ($op == "/")
		echo($num1 / $num2);
	if ($op == "%")
		echo($num1 % $num2);
	echo("\n");
?>
