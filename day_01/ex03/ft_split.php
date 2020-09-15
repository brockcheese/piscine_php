#!/usr/bin/env php
<?php
	function ft_split($str) {
		$array = explode(" ", $str);
		sort($array);
		$array = array_values(array_filter($array));
		return ($array);
	}
//	print_r(ft_split("Yeezy taught me how to Pamp my Pussy"));
?>
