<?php
    if (isset($_POST['submit'])) {
        session_start();

        $_SESSION['firstName'] = $_POST['firstName'];
        $_SESSION['lastName'] = $_POST['lastName'];

        header('location: user.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POST - form</title>
</head>
<body>
    <form action="post-form.php" method="POST">
        <label for="firstName">First Name: </label>
        <input type="text" name="firstName">
        <label for="lastName">Last Name: </label>
        <input type="text" name="lastName">
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>