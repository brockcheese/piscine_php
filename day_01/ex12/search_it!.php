#!/usr/bin/env php
<?php
	if ($argc > 2) {
		$needle = $argv[1];
		$haystack[$needle] = NULL;
		for($i = 2; $i < count($argv); $i++) {
			$array = explode(":", $argv[$i]);
			$haystack[$array[0]] = $array[1];
		}
		if($haystack[$needle] != NULL)
			echo($haystack[$needle]."\n");
	}
?>
