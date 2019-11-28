<?php
    session_start();

    $firstName = $_SESSION['firstName'];
    $lastName = $_SESSION['lastName'];
    $title = $_SESSION['title'];
?>

<h5>your prefered title is: <?php echo htmlspecialchars($title); ?></h5>
<h5>your first name is: <?php echo htmlspecialchars($firstName); ?></h5>
<h5>your last name is: <?php echo htmlspecialchars($lastName); ?></h5>
