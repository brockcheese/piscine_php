#!/usr/bin/env php
<?php
	function ft_is_sort($array)
	{
		$arr2 = $array;
		sort($arr2);
		return ($array == $arr2) ? true : false;
	}
?>
