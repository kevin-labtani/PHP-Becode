<?php

require 'form.php';
$form = new Form($_POST);

// Un select <select ...> ...</select>
// Un textarea <textarea ...> ...</textarea>
// Un radio button <textarea ...> ...</textarea>
// Une checkbox <input type="radio"...>

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <?php
        echo $form->create('POST');
        echo $form->text('prénom');
        echo $form->text('nom');
        echo $form->submit();
        echo $form->end();
        ?>
    </form>
</body>
</html>

