<?php
    if ($_POST['login'] && $_POST['passwd'] && $_POST['submit'] && $_POST['submit'] === "OK") {
        if (!file_exists('private'))
            mkdir("private");
        $account = unserialize(file_get_contents('private/passwd'));
        $duplicate = 0;
        if ($account) {
            foreach ($account as $k => $v) {
                if ($v['login'] === $_POST['login'])
                    $duplicate = 1;
            }
        }
        if (!$duplicate)
        {
            $new_acct['login'] = $_POST['login'];
			$new_acct['passwd'] = hash('whirlpool', $_POST['passwd']);
			setcookie("login", $_POST['login'], time() + 600);
            $account[] = $new_acct;
			file_put_contents('private/passwd', serialize($account));
			echo "<script>window.location.href = 'index.php';</script>";
        }
        else
            echo "Username already exists\n";
    }
    else
        echo "Registration Error\n";
?>
