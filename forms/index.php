<?php

if (isset($_POST['submit'])) {
    // get from details
    $title = $_POST['title'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];

    // get details of the uploaded file
    $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
    $fileName = $_FILES['uploadedFile']['name'];
    $fileSize = $_FILES['uploadedFile']['size'];
    $fileType = $_FILES['uploadedFile']['type'];
    $fileNameCmps = explode('.', $fileName);
    $fileExtension = strtolower(end($fileNameCmps));

    // echo $fileTmpPath.'<br/>';
    // echo $fileName.'<br/>';
    // echo $fileSize.'<br/>';
    // echo $fileType.'<br/>';
    // echo $fileExtension.'<br/>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"
    />
    <title>POST - form</title>

</head>
<body>
    <div class="container section">
        <div class="row">
            <div class="col s12 m6 offset-m3">
                <?php
                    if (empty($_POST['firstName']) || empty($_POST['lastName'])) {
                        include 'form.php';
                    } else {
                        include 'result.php';
                    }
                ?>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>
</html>


