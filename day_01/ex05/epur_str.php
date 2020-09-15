#!/usr/bin/env php
<?php
	function ft_split($str) {
		$array = explode(" ", $str);
		$array = array_values(array_filter($array));
		return($array);
	}
	if ($argc != 2)
		exit();
	$array = ft_split($argv[1]);
	for($i = 0; $i < count($array) - 1; $i++){
		echo($array[$i]." ");
	}
	echo($array[$i]."\n");
?>
