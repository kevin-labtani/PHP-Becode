<?php
    session_start();

    $firstName = $_SESSION['firstName'] ?? 'Unknown First Name';
    $lastName = $_SESSION['lastName'] ?? 'Unknown Last Name';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Info</title>
</head>
<body>
    <p">your first name is: <?php echo $firstName; ?></p">
    <p>your last name is: <?php echo $lastName; ?></p>
</body>
</html>