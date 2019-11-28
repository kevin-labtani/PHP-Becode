<?php
    if (isset($_GET['submit'])) {
        session_start();

        $_SESSION['firstName'] = $_GET['firstName'];
        $_SESSION['lastName'] = $_GET['lastName'];

        header('location: user.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GET - form</title>
</head>
<body>
    <form action="get-form.php" method="GET">
        <label for="firstName">First Name: </label>
        <input type="text" name="firstName">
        <label for="lastName">Last Name: </label>
        <input type="text" name="lastName">
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>