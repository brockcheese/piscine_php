#!/usr/bin/env php
<?php
	function ft_split($str) {
		$array = explode(" ", $str);
		$array = array_values(array_filter($array));
		return ($array);
	}
	$total_array = array();
	for($i = 1; $i < count($argv); $i++) {
		$array = ft_split($argv[$i]);
		$total_array = array_merge($total_array, $array);
	}
	sort($total_array);
	for($i = 0; $i < count($total_array); $i++)
		echo ($total_array[$i]."\n");
?>
