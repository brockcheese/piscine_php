#!/usr/bin/env php
<?php
	function ft_split($str) {
		$array = explode(" ", $str);
		$array = array_values(array_filter($array));
		return ($array);
	}
	function ft_goofcmp($str1, $str2) {
		for ($i = 0; $str1[$i] && $str2[$i]; $i++) {
			if ($str1[$i] != $str2[$i]) {
				if (ctype_alpha($str1[$i]) && !(ctype_alpha($str2[$i])))
					return (-1);
				if (ctype_alpha($str2[$i]) && !(ctype_alpha($str1[$i])))
					return (1);
				if (ctype_digit($str1[$i]) && !(ctype_digit($str2[$i])))
					return (-1);
				if (ctype_digit($str2[$i]) && !(ctype_digit($str1[$i])))
					return (1);
				if (strtolower($str1[$i]) > strtolower($str2[$i]))
					return (1);
				return (-1);
			}
		}
		if ($str1[$i] && !$str2[$i])
			return(1);
		if ($str2[$i] && !$str1[$i])
			return(-1);
		return (0);
	}
	$total_array = array();
	for($i = 1; $i < count($argv); $i++) {
		$array = ft_split($argv[$i]);
		$total_array = array_merge($total_array, $array);
	}
	usort($total_array, 'ft_goofcmp');
	for($i = 0; $i < count($total_array); $i++)
		echo ($total_array[$i]."\n");
?>
