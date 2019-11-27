<?php

    // parsing the full string
    $qs = $_SERVER['QUERY_STRING'];

    parse_str($qs, $qs_arr);
    echo '<pre>';
    print_r($qs_arr);
    echo '</pre>';

    // one by one
    if (isset($_GET['nom'])) {
        echo $_GET['nom'].'<br/>';
    }

    if (isset($_GET['prenom'])) {
        echo $_GET['prenom'].'<br/>';
    }

    if (isset($_GET['age'])) {
        echo $_GET['age'].'<br/>';
    } else {
        echo "age isn't set <br/>";
    }

    if (isset($_GET['dateDebut'])) {
        echo $_GET['dateDebut'].'<br/>';
    }

    if (isset($_GET['dateFin'])) {
        echo $_GET['dateFin'].'<br/>';
    }

    if (isset($_GET['langage'])) {
        echo $_GET['langage'].'<br/>';
    }

    if (isset($_GET['serveur'])) {
        echo $_GET['serveur'].'<br/>';
    }

    if (isset($_GET['semaine'])) {
        echo $_GET['semaine'].'<br/>';
    }

    if (isset($_GET['batiment'])) {
        echo $_GET['batiment'].'<br/>';
    }

    if (isset($_GET['salle'])) {
        echo $_GET['salle'].'<br/>';
    }
