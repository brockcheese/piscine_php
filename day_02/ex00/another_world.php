#!/usr/bin/env php
<?php
if ($argc > 1)
{
	preg_match_all("/[^\s]+/", $argv[1], $words);
	echo (implode(" ", $words[0])."\n");
}
?>
