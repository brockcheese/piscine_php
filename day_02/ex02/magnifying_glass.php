#!/usr/bin/env php
<?php
	function	ren($match) {
		return (str_replace($match[1], strtoupper($match[1]), $match[0]));
	}
	if ($argc == 2) {
		$fd = fopen($argv[1], 'r');
		while(!feof($fd)) {
			$line = fgets($fd);
			$line = preg_replace_callback('/<a.*?title="(.*?)"/', "ren", $line);
			$line = preg_replace_callback('/<a.*?alt="(.*?)"/', "ren", $line);
			$line = preg_replace_callback('/<a.*?>(.*?)</', "ren", $line);
			echo $line;
		}
	}
?>
