<?php
	if ($_POST["submit"] !== "OK") {
		echo ("ERROR\n");
		exit ();
	}
	$lparr = unserialize(file_get_contents("../private/passwd"));
	foreach($lparr as &$lp) {
		if ($lp["login"] === $_POST["login"]) {
			if ($lp["passwd"] === hash('whirlpool', $_POST["oldpw"]) && $_POST["newpw"] !== "") {
				$lp["passwd"] = hash('whirlpool', $_POST["newpw"]);
				file_put_contents("../private/passwd", serialize($lparr));
				echo ("OK\n");
				exit();
			}
			echo ("ERROR\n");
			exit();
		}
	}
	echo ("ERROR\n");
?>
