<?php

    session_start();
    $name = $_SESSION['name'] ?? 'Guest';
    $firstName = $_SESSION['firstName'] ?? 'Unknown First Name';
    $age = $_SESSION['age'] ?? 'Unknown Age';

?>
<!DOCTYPE html>
<html lang="en">

    <?php include 'templates/header.php'; ?>
    <section class="container indigo-text">
        <p>your name is: <?php echo $name; ?></p>
        <p>your first name is: <?php echo $firstName; ?></p>
        <p>your age is: <?php echo $age; ?></p>
    </section>
</body>
</html>