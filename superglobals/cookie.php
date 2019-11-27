<?php

    $login = $_COOKIE['login'] ?? 'Unknown';
    $password = $_COOKIE['password'] ?? 'Unknown';

?>
<!DOCTYPE html>
<html lang="en">

    <?php include 'templates/header.php'; ?>
    <section class="container indigo-text">
        <p>your login is: <?php echo $login; ?></p>
        <p>your password is: <?php echo $password; ?></p>
        <a href="index.php" class="btn btn-small indigo">Go back home</a>
    </section>
</body>
</html>