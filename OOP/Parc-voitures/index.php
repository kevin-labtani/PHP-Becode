<?php

    include 'voiture.php';

    $mercedes = new Voiture('BE-222-AAA', '20-04-2007', 130000, 'Class A', 'Mercedes', 'black', 1500);
    echo $mercedes->reserved().'<br/>';
    echo $mercedes->weightClass().'<br/>';
    echo $mercedes->provenance().'<br/>';
    echo $mercedes->usage().'<br/>';
    echo $mercedes->age(2019).'<br/>';
    echo $mercedes->rouler().'<br/>';
    echo $mercedes->usage().'<br/>';

    $bmw = new Voiture('FR-333-TRE', '23-12-2017', 30000, '3 Series', 'BMW', 'silver', 1700);
    $audi = new Voiture('DE-543-EDR', '20-06-2013', 4000, 'A6', 'Audi', 'red', 2100);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OOP Voitures</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>
                    Immatriculation
                </th>
                <th>
                    Mise en Circulation
                </th>
                <th>
                    Kilométrage
                </th>
                <th>
                    Modèle
                </th>
                <th>
                    Marque
                </th>
                <th>
                    Couleur
                </th>
                <th>
                    Poids
                </th>
            </tr>
        </thead>
        <tbody>
            <?php echo $mercedes->displayCar(); ?>
            <?php echo $audi->displayCar(); ?>
            <?php echo $bmw->displayCar(); ?>
        </tbody>
    </table>
</body>
</html>