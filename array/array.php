<?php

$ingredients = array( 'Milk', 'Egg', 'Flour', 'Butter', 'Sugar' );
// var_dump($ingredients);
echo '<pre>';
print_r($ingredients);
echo '</pre>';
// Array
// (
//     [0] => Milk
//     [1] => Egg
//     [2] => Flour
//     [3] => Butter
//     [4] => Sugar
// )


$family = ["Kevin", "Guerin", "Merwan", "Chloé", "Dorian", "Quentin"];
echo "<br/>";
print_r($family);


$user = array (
    'firstname' => 'Juan',
    'lastname' => 'Pablo',
    'adress' => '3 Paradijsestraat',
    'city' => 'Antwerpen'
    );
echo ("<br/>" . $user['lastname'] . "<br/>");

$me = [
  "firstName" => "Kevin",
  "lastName" => "Labtani",
  "age" => 37,
  "favColor" => "blue",
];
$me['hobbies'] = ["cycling", "cooking", "coding"];

echo '<pre>';
print_r($me);
echo '</pre>';
echo "<br/>";



$brother = [
  "firstName" => "Guerin",
  "lastName" => "Labtani",
  "age" => 35,
  "favColor" => "green",
  "hobbies" => ["diving", "plumbing", "childcare", "home improvement", "cooking"]
];

$me["brother"] = $brother;
echo '<pre>';
print_r($me);
echo '</pre>';
echo "<br/>";

$countMyHobbies = count($me['hobbies']);
$countBroHobbies = count($brother['hobbies']);
$sumHobbies = $countMyHobbies + $countBroHobbies;
echo "I have $countMyHobbies hobbies </br>";
echo $brother['firstName'] . " has $countBroHobbies hobbies </br>";
echo "together we have $sumHobbies hobbies </br>";

$me["hobbies"][] = "taxidermy";
array_push($me["hobbies"], "bird watching");
$me['lastName'] = "Durand";
echo '<pre>';
print_r($me);
echo '</pre>';


$possible_hobbies_via_intersection = array_intersect($me['hobbies'], $brother['hobbies']);
$possible_hobbies_via_merge = array_merge($me['hobbies'], $brother['hobbies']);

echo '<pre>';
print_r($possible_hobbies_via_intersection);
echo "</br>";
print_r($possible_hobbies_via_merge);
echo '</pre>';

// Then, add a line underneath that pushes 'xhtml' in the right array.
// Then, add a line underneath that pushes 'Ruby on Rails' in the right array.
// Then, add a line underneath that pushes 'CSS' in the right array.
// Then, add a line underneath that pushes 'Flash' in the right array.
// Then, add a line underneath that pushes 'JavaScript' in the right array.
// Then, add a line underneath that replace 'xhtml' by 'html'.
// Then, add a line underneath that removes 'Flash' from the array.

$web_development = [
  "frontend" => [],
  "backend" => [],
];

array_push($web_development["frontend"], "xhtml", "css", "flash", "JavaScript" );
array_push($web_development["backend"], "Ruby on Rails", "JavaScript" );

$web_development['frontend'][0] = "html";
$web_development["frontend"] = array_diff($web_development["frontend"], array("flash"));

echo '<pre>';
print_r($web_development);
echo "</br>";
echo '</pre>';

?>