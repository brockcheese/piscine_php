#!/usr/bin/env php
<?php
	if ($argc == 2)
	{
		$expr = trim($argv[1]);
		if (!preg_match("/^[+-]?\d+\s*[(+|-|*|\/|%)]\s*[+-]?\d+\s*$/", $expr))
		{
			echo "Syntax Error\n";
			exit();
		}
		$ops = "+-*/%";
		$op = "h";
		for ($i = 0; $op == "h"; $i++)
		{
			if (strstr($ops, $expr[$i])) {
				$op = $expr[$i];
				$index = $i;
			}
		}
		$num1 = (int)substr($expr, 0, $index);
		$num2 = (int)substr($expr, $index + 1);
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
	}
	else
		echo("Incorrect Parameters\n");
?>
