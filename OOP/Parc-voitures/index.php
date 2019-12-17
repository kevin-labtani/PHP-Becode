<?php

    include 'voiture.php';

    $voiture = new Voiture('BE-222-AAA', '20-04-2007', 230000, 'Class A', 'Mercedes', 'black', 1500);
    echo $voiture->reserved().'<br/>';
    echo $voiture->weightClass().'<br/>';
    echo $voiture->provenance().'<br/>';
    echo $voiture->usage().'<br/>';
    echo $voiture->age(2019).'<br/>';
