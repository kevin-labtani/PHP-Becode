<?php

$name = "kevin";
$age = 37;
$nameStr = "Hi My name is $name";
$ageStr = "I'm $age years old";
$family = ["Kevin", "Guerin", "Merwan", "Chloé", "Dorian", "Quentin"];
$hungry = false;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>variable types</title>
</head>
<body>
  <p><?php echo $nameStr; ?></p>
  <p><?php echo $ageStr; ?></p>
  <p><?php echo "The second person in my family is $family[1]"; ?></p>

</body>
</html>