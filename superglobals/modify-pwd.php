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

    <?php include 'templates/header.php'; ?>
    <section class="container indigo-text">
        <form action="modify-pwd.php" method="POST" class="white">
            <label for="login">New Login:</label>
            <input type="text" name="login">
            <label for="password">New Password:</label>
            <input type="password" name="password"><br>
            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn">
            </div>
            <p>your current login is: <?php echo $login; ?></p>
            <p>your current password is: <?php echo $password; ?></p>
        </form>
    </section>

</body>
</html>