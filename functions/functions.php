<?php
//First, you need to declare the function to make it available. It is stored in memory, not ran.
function say_hello($firstname){
	echo "<p>Hello $firstname!</p>";
	echo '<hr>';
}

// Function calls during "Runtime" :
say_hello("Maurice");
say_hello("Alice");
say_hello("Jésus");
say_hello("Judas");

// print_r($array) : displays the content of an array.
// die("message") : Display the argument value and then stops the PHP execution.
// phpinfo(); display the PHP configuration on your server.
// date('d M Y') retrieves the current date, using the specified argument as formatting structure.
$str = "According to a researcher (sic) at Cambridge University, it doesn't matter in what order the letters in a word are, the only important thing is that the first and last letter be at the right place. The rest can be a total mess and you can still read it without problem. This is because the human mind does not read every letter by itself but the word as a whole.";
$words = explode(" ", $str);
foreach ($words as $word) {
  echo str_shuffle($word) . " ";
}
echo '<hr>';

// Use a function that capitalizes the first letter of the provided argument. Example: "émile"should return "Émile"
function capitalize($word){
  return ucfirst($word);
}
echo capitalize('joan') . "<br/>";
echo '<hr>';

// Use the native function allowing you to display the current year.
echo date("Y") . "<br/>";
// Now display the date, time, minutes and seconds, using the same function, by playing with the arguments.
echo date("l, h:i:s") . "<br/>";
echo '<hr>';

// Crée a "Sum" function that takes 2 numbers and returns their sum.
// Improve that function so that it checks whether the argument is indeed a Number. If not, it should display : "Error: argument is the not a number."
function sum($arg1, $arg2) {
  if (is_numeric($arg1) && is_numeric($arg2)) {
    return $arg1 + $arg2;
  } else {
    return "Error: argument is the not a number.";
  }
}
echo sum(3, 4) . "<br/>";
echo sum(3, "e") . "<br/>";
echo '<hr>';

// Create a function that takes as argument a string of characters and returns an acronym made of the initials of each word.
// Example: "In code we trust!" should return: ICWT).
function acronym($str) {
  $newStr = "";
  $words = explode(" ", $str);
  foreach ($words as $word) {
    $newStr .= strtoupper($word[0]);
  }
  return $newStr;
}
echo acronym("In code we trust!"); // ICWT
echo '<hr>';

// Create a function that replaces the letters "a" and "e" with "æ". Example: "caecotrophie", "chaenichthys","microsphaera", "sphaerotheca" should respectively return "cæcotrophie", "chænichthys","microsphæra", "sphærotheca".
function pedantic($str) {
  return str_replace("ae", "æ", $str) . "<br/>";
}
echo pedantic("caecotrophie");
echo pedantic("chaenichthys");
echo pedantic("microsphaera");
echo pedantic("sphaerotheca");
echo '<hr>';

// Create the opposite function, which replaces "æ" by "ae" in : cæcotrophie, chænichthys, microsphæra, sphærotheca

function unpedantic($str) {
  return str_replace("æ","ae", $str) . "<br/>";
}
echo unpedantic("cæcotrophie");
echo unpedantic("chænichthys");
echo unpedantic("microsphæra");
echo unpedantic("sphærotheca");
echo '<hr>';


// Create a function to return "notice", "warning" and "error" messages to a user,which takes 2 arguments : the "message", and the "css class" (values: "info", "error", "warning"). This function would allow us to write this :
// echo feedback("Incorrect email address", "error");
// which will produce this html :

// <div class="error">Error: Incorrect email address.</div>
// Improve that function by giving the default class the value of "info". Look into the documentation documentation php.

function feedback($msg, $cssClass = "info"){
  $msg =" Error: Incorrect email address";
  return "<div class='$cssClass'>$msg</div>";
}

echo feedback("Incorrect email address", "error");
echo '<hr>';


// De-capitalize the string : "STOP YELLING I CAN'T HEAR MYSELF THINKING!!"
function decap($str){
  return strtolower($str);
}
echo decap("STOP YELLING I CAN'T HEAR MYSELF THINKING!!") . "<br/>";
echo '<hr>';

// In your new job, you have to maintain the code of a former developer. Make it DRY by creating a custom function calculate_cone_volume :
// // Volume of a cone which ray is 5 and height is 2 
// $volume = 5 * 5 * 3.14 * 2 * (1/3);  
// echo 'The volume of a cone which ray is 5 and height is 2 = ' . $volume . ' cm<sup>3</sup><br />';  
// // Volume of a cone which ray is 3 and height is 4  
// $volume = 3 * 3 * 3.14 * 4 * (1/3);  
// echo 'The volume of a cone which ray is 3 and height is 4 = ' . $volume . ' cm<sup>3</sup><br />';  
function cone($ray, $height){
  $vol = $ray * $ray * M_PI * $height * (1/3);
  return  "The volume of a cone with a radius of 5 and a height of 2 is equal to $vol cm<sup>3</sup><br />";
}

echo cone(5, 2) . "<br/>";
echo cone(3, 4) . "<br/>";
echo '<hr>';

// Create a random words generator, outputing 2 words: one which length is between 1 to 5 letters, the other between 7 and 15 letters. The screen will display a title "Generate a new word", and then the two generated words, and underneath, a bouton with the text "Generate").
function generateWord($length){
  return substr(str_shuffle("azertyuiopqsdfghjklmwxcvbn"),0,$length);
}

?>

<!DOCTYPE html>
<head>
  <title>random words generator</title>
</head>
<body>
  <h3>Generate a new word.</h3>
  <p><?php echo generateWord(random_int(1,5)); ?></p>
  <p><?php echo generateWord(random_int(7,15)); ?></p>
  <form action="functions.php" method="POST">
	  <input type="submit" name="submit" value="Generate">
	</form>
</body>
</html>