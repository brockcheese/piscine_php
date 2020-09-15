<?php
	$lparr = unserialize(file_get_contents("private/passwd"));
	foreach($lparr as &$lp) {
		if ($lp['login'] === $_POST['login'] && $lp['passwd'] === hash('whirlpool', $_POST['passwd']))
		{
			setcookie("login", $_POST['login'], time() + 600);
			header("Location: index.php");
		}
	}
	$message = "Username and/or Password incorrect.\\nTry again.";
	echo "<script type='text/javascript'>alert('$message');</script>";
?>
