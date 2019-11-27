<?php

    $login = $_COOKIE['login'] ?? 'Unknown';
    $password = $_COOKIE['password'] ?? 'Unknown';
    // cookie stuff
    if (isset($_POST['submit'])) {
        setcookie('login', $_POST['login'], time() + 86400);
        setcookie('password', $_POST['password'], time() + 86400);

        $newLogin = $_COOKIE['login'] ?? 'Unknown';
        $newPassword = $_COOKIE['password'] ?? 'Unknown';

        header('location: cookie.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cookie</title>
</head>
<body>
    <form action="modify-pwd.php" method="POST">
        New Login: <input type="text" name="login"><br>
        New Password: <input type="password" name="password"><br>
        <input type="submit" name="submit" value="submit">
        <p>your current login is: <?php echo $login; ?></p>
        <p>your current password is: <?php echo $password; ?></p>
    </form>
</body>
</html>