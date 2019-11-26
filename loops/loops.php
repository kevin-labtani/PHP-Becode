<?php

$names= array('John', 'jeanne', 'Joan');
var_dump($names);

foreach ($names as $key=> $value){
	$names[$key] = ucfirst($value);
}
var_dump($names);
echo "<br/>";


$pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');
// Using foreach, build a loop that displays each element of the array
// Then, modify your loop so as to conjugate the verb "to code" in the present tense. Use a <br> to go to the next line. The result should be :
// I code
// You code
// He/She codes
// We code
// You code
// They code

foreach ($pronouns as $pronoun) {
  if ($pronoun == "He/She") {
  echo "$pronoun codes <br/>";
  } else {
    echo "$pronoun code <br/>";
  }
}


$amount_of_lines = 1;

while ($amount_of_lines <= 100)
{
    echo $amount_of_lines . ". : I shall not watch flies fly when I'm learning PHP.<br />";
    // shorthand writing for 
    // $amount_of_lines = $amount_of_lines +1;
    $amount_of_lines ++; 

}

for ($amount_of_lines = 1; $amount_of_lines <= 100; $amount_of_lines ++)
{
    echo $amount_of_lines . ". : I shall not watch flies fly when I'm learning PHP.<br />";
}

// Write a script that prints the numbers from 1 to 120 using  while
// Write a script that prints the numbers from 1 to 120 using  for
$a = 0;
while ($a <= 120) {
  echo "$a </br>";
  $a++;
}

for ($i=0; $i < 121; $i++) { 
  echo "$i </br>";
}

// Create an array containing at least 10 countries. Then, generate the html that will render a select box inside an html form (see mockup below). Of course, a loop will be useful...
$countries = array("BE" => "Belgium","DK" => "Denmark","DE" => "Germany","IE" => "Ireland","GR" => "Greece","ES" => "Spain","FR" => "France","IT" => "Italy","LU" => "Luxembourg","NL" => "the Netherlands","PT" => "Portugal","GB" => "the United Kingdom");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Countries selector</title>
</head>
<body>
  <select>
    <?php foreach ($countries as $key => $value) { ?>
      <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
    <?php } ?>
  </select>
</body>
</html>

