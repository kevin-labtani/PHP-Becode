<?php

    session_start();
    $name = $_SESSION['name'] ?? 'Guest';
    $firstName = $_SESSION['firstName'] ?? 'Unknown First Name';
    $age = $_SESSION['age'] ?? 'Unknown Age';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Session</title>
</head>
<body>
    <p>your name is: <?php echo $name; ?></p>
    <p>your first name is: <?php echo $firstName; ?></p>
    <p>your age is: <?php echo $age; ?></p>
</body>
</html>