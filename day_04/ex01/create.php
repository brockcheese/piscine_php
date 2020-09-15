<?php
	if ($_POST["login"] === "" || $_POST["passwd"] === "" || $_POST["submit"] !== "OK") {
		echo ("ERROR\n");
		exit();
	}
	if (!file_exists("../private"))
		mkdir ("../private");
	if (file_exists("../private/passwd")) {
		$lparr = unserialize(file_get_contents("../private/passwd"));
		foreach ($lparr as $lp) {
			if ($lp["login"] === $_POST["login"]) {
				echo ("ERROR\n");
				exit();
			}
		}
	}
	$lp["login"] = $_POST["login"];
	$lp["passwd"] = hash('whirlpool', $_POST["passwd"]);
	$lparr[] = $lp;
	file_put_contents("../private/passwd", serialize($lparr));
	echo ("OK\n");
?>
