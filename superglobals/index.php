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

    <?php include 'templates/header.php'; ?>
    <section class="container indigo-text">
        <p class="center">your user agent is: <?php echo $usrAgent; ?></p>
        <p class="center">your ip is: <?php echo $usrIp; ?></p>
        <p class="center">the server name is: <?php echo $srvrName; ?></p>
        <a href="session.php" class="btn btn-small indigo">Session Page</a>
        <hr>
        <form action="index.php" method="POST" class="white">
            <label for="login">Login:</label>
            <input type="text" name="login">
            <label for="password">Password:</label>
            <input type="password" name="password"><br>
            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn">
            </div>
        </form>
        <a href="modify-pwd.php" class="btn btn-small indigo">Modify login information</a>
    </section>

</body>
</html>
