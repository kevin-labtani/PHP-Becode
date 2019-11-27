<?php
/**
 * Series of exercises on PHP conditional structures.
*/  

// 1.1 Clean your room Exercise 

$room_is_filthy = false;

function cleanup_room(){};

if( $room_is_filthy ){
	echo "Yuk, Room is dirty : let's clean it up !<br>";
	cleanup_room();
	echo "Room is now clean!";
	$room_is_filthy = false;
} else {
	echo "Nothing to do, room is neat.<br>";
}


// 1.2 Clean your room Exercise, improved

// Create the array of possible states
$possible_states = ["health hazard", "dirty", "clean"];

// When testing, change the index value to navigate to the possible array values
$room_filthiness = $possible_states[2]; 

if( $room_filthiness == "health hazard" ){
	echo "Yuk, Room is Disgusting! Let's clean it up !<br>";
} else if( $room_filthiness == "dirty" ){
	echo "Yuk, Room is dirty : let's clean it up !<br>";
} else {
	echo "Nothing to do, room is neat.<br>";
}

// Display a different greeting message depending on the time of the day.
$t = date('H:i'); 
if ($t >= date("05:00") && $t <= date("09:00"))  {
  echo "Good morning !<br/>";
} elseif ($t > date("09:01") && $t <= date("12:00")) {
  echo "Good Day !<br/>";
} elseif ($t > date("12:01") && $t <= date("16:00")) {
  echo "Good afternoon !<br/>";
} elseif ($t > date("16:01") && $t <= date("21:00")) {
  echo "Good evening !<br/>";
} elseif ($t > date("21:01") || $t <= date("04:59")) {
  echo "Good night !<br/>";
}

// different greeting accoridng to age
if(isset($_GET['submit'])){
	$age = $_GET['age'];
	$gender = $_GET['gender'];
	$language = $_GET['language'];

  if ($age <= 12 && $age > 0){
		if ($gender == "male"){
			if ($language == "yes"){
				echo "Hello Mr. kiddo !<br/>";
			} else {
				echo "Aloha Mr. kiddo !<br/>";
			}
		} else {
		if ($language == "yes"){ 
			echo "Hello Ms. kiddo !<br/>";
		} else {
			echo "Aloha Ms. kiddo !<br/>";
			}
		}
	} elseif ($age < 18 && $age > 12){
		if ($gender == "male"){
			if ($language == "yes"){ 
				echo "Hello Mr. Teenager !<br/>";
			} else {
				echo "Aloha Mr. Teenager !<br/>";
			}
		} else {
			if ($language == "yes"){
				echo "Hello Ms. Teenager !<br/>";
			} else {
				echo "Aloha Ms. Teenager !<br/>";
			}
		}
	} elseif ($age < 115 && $age >= 18) {
		if ($gender == "male") {
			if ($language == "yes"){
				echo "Hello Mr. Adult !<br/>";
			} else {
				echo "Aloha Mr. Adult !<br/>";
			}
		} else {
			if ($language == "yes"){
				echo "Hello Ms. Adult !<br/>";
			} else {
				echo "Aloha Ms. Adult !<br/>";
			}
		}
	} elseif ($age >= 115) {
  	echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?<br/>";
	} 
}


// football team
// You want to create a soccer team for girls between 21 and 40 years old.

// Create a form asking for the age, gender and name of the person. Use the $age and $gender variables in an if/else to display a "welcome to the team !" or "Sorry you don't fit the criteria" message.
$answer = "";

if(isset($_GET['team'])){
	$age = $_GET['age'];
	$gender = $_GET['gender'];
	$name = $_GET['name'];
	$answer = "Sorry you don't fit the criteria";
	if ($age >=21 && $age <= 40 && $gender == "female") {
		$answer =  "welcome to the team $name!";
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
	  <form action="conditions.php" method="GET">
      <label for="age">Please type in your age:</label>
      <input type="text" name="age" value=""><br>
			<input type="radio" name="gender" value="male" checked> Male
			<input type="radio" name="gender" value="female"> Female<br>
			<label for="language">Do you speak English?</label> <br>
			<input type="radio" name="language" value="yes" checked> Yes
			<input type="radio" name="language" value="no"> No<br>
			<input type="submit" name="submit" value="submit">
    </form>
		
		<h3><?php echo $answer; ?></h3>
		<form action="conditions.php" method="GET">
			<label for="name">Please type in your name:</label>
      <input type="text" name="name" value=""><br>
			<label for="age">Please type in your age:</label>
      <input type="text" name="age" value=""><br>
			<label for="gender">Please pick your gender:</label>
			<input type="radio" name="gender" value="male" checked> Male
			<input type="radio" name="gender" value="female"> Female<br>
			<input type="submit" name="team" value="submit">
		</form>
</body>
</html>