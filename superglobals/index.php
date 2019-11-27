<?php

    // server superglobal stuff
    $usrAgent = $_SERVER['HTTP_USER_AGENT'];
    $usrIp = $_SERVER['REMOTE_ADDR'];
    $srvrName = $_SERVER['SERVER_NAME'];

    $firstName = 'Kevin';
    $name = 'Labtani';
    $age = 37;

    // session stuff
    session_start();

    $_SESSION['firstName'] = $firstName;
    $_SESSION['name'] = $name;
    $_SESSION['age'] = $age;

    // cookie stuff
    if (isset($_POST['submit'])) {
        setcookie('login', $_POST['login'], time() + 86400);
        setcookie('password', $_POST['password'], time() + 86400);

        header('location: cookie.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP - Variables superglobales, sessions et cookies</title>
</head>
<body>
    <p>your user agent is: <?php echo $usrAgent; ?></p>
    <p>your ip is: <?php echo $usrIp; ?></p>
    <p>the server name is: <?php echo $srvrName; ?></p>
    <a href="session.php">Session Page</a>
    <hr>
    <form action="index.php" method="POST">
        Login: <input type="text" name="login"><br>
        Password: <input type="password" name="password"><br>
        <input type="submit" name="submit" value="submit">
    </form>
    <a href="modify-pwd.php">Modify login information</a>

</body>
</html>
