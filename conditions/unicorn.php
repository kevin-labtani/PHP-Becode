<?php
// In a new file unicorn.php, create an html form asking "Are you a human, a cat or a unicorn ?". When submitted, the screen displays an animated Gif showing either a human, a cat or a unicorn, as per the user input (you can find gifs here). Use GET or POST as method, whichever you like. Use a ternary operation to evaluate the condition.
// $img = "./img/unicorn.gif";
$img = "";
if(isset($_POST['submit'])){
  $species = $_POST["species"];
  $img = ($species == "unicorn") ? "./img/unicorn.gif" : (($species == "human") ? "./img/human.gif" : "./img/cat.gif");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>UNICORN</title>
</head>
<body>
		<form action="unicorn.php" method="POST">
			<label for="species">Are you a human, a cat or a unicorn ?</label>
			<input type="radio" name="species" value="human" checked> human
      <input type="radio" name="species" value="cat"> cat
			<input type="radio" name="species" value="unicorn"> unicorn<br>
			<input type="submit" name="submit" value="submit">
		</form>
    <img src="<?php echo $img; ?>" alt="">
</body>
</html>