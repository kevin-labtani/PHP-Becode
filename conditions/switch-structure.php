<?php
// Start a new form that would allow a (nasty) teacher to grade a student.

// It would display a different message according to the number annotated :

// note below 4 : "This work is really bad. What a dumb kid! "
// note between 5 and 9 : "This is not sufficient. More studying is required."
// note equals 10 : "barely enough!"
// note is 11, 12, 13 or 14 : "Not bad!"
// note is 15, 16, 17 or 18 : "Bravo, bravissimo!"
// note is 19 or 20 : "Too good to be true : confront the cheater!"

$gradeMessage = "";

if(isset($_GET['gradation'])){
	$grade = $_GET['grade'];
	switch ($grade) {
    case ($grade <= 4):
      $gradeMessage = "This work is really bad. What a dumb kid! ";
      break;
    case ($grade >= 5 && $grade <= 9):
      $gradeMessage = "This is not sufficient. More studying is required.";
      break;
    case ($grade == 10):
      $gradeMessage = "barely enough!";
      break;
    case ($grade >= 11 && $grade <= 14):
      $gradeMessage = "Not bad!";
      break;
    case ($grade >= 15 && $grade <= 18):
      $gradeMessage = "Bravo, bravissimo!";
      break;
    case ($grade >= 19 && $grade <= 20):
      $gradeMessage = "Too good to be true : confront the cheater!";
      break;
}
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>PHP-Becode</title>
</head>
<body>
		<h3><?php echo $gradeMessage; ?></h3>
		<form action="switch-structure.php" method="GET">
			<label for="grade">Please type in your grade:</label>
      <input type="text" name="grade" value=""><br>
			<input type="submit" name="gradation" value="submit">
		</form>
</body>
</html>