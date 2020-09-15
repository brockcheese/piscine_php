#!/usr/bin/env php
<?php
	function ft_split($str) {
		$array = explode(" ", $str);
		$array = array_values(array_filter($array));
		return ($array);
	}
	if($argc == 1)
		exit();
	$array = ft_split($argv[1]);
	for($i = 1; $i < count($array); $i++) {
		echo($array[$i]." ");
	}
	echo($array[0]."\n");
?>
