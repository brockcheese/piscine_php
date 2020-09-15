#!/usr/bin/env php
<?php
	$fd = fopen("/var/run/utmpx", "rb");
	date_default_timezone_set('America/Los_Angeles');
	while (!feof($fd)) {
		$line = fread($fd, 628);
		if (strlen($line) == 628) {
			$line = unpack("a256user/a4id/a32enstr/ipid/itype/itime", $line);
			if ($line['type'] == 7) {
				echo (trim($line['user'])."    ");
				echo (trim($line['enstr'])."  ");
				echo (date("M  j H:i", trim($line['time']))."\n");
			}
		}
	}
?>
