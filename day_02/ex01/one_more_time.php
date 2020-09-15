#!/usr/bin/env php
<?php
	function translate($str) {
		$enweek = array("monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday");
		$frweek = array("lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi", "dimanche");
		for ($i = 0; $i < count($frweek); $i++) {
			if (!(strcasecmp($frweek[$i], $str)))
				return($enweek[$i]);
		}
	}
	function translatemonth($str) {
		$enmonth = array("January", "February", "March", "April", "may", "june", "july", "august", "september", "october", "november", "december");
		$frmonth = array("janvier", "fevrier", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "decembre");
		for ($i = 0; $i < count($frmonth); $i++) {
			if (!(strcasecmp($frmonth[$i], $str)))
				return($enmonth[$i]);
		}
	}
	if ($argc == 2) {
		if (preg_match("/^[a-zA-Z][a-z]+\s\d{1,2}\s[a-zA-Z][a-z]+\s\d{4}\s\d{2}:\d{2}:\d{2}$/", $argv[1])) {
			$array = explode(" ", $argv[1]);
			$array[0] = translate($array[0]);
			$array[2] = translatemonth($array[2]);
			$ans = implode(" ", $array);
			echo (strtotime($ans)."\n");
		}
		else
			echo("Wrong Format\n");
	}
?>
