<?php 

    require "start.php";
    $manager = new PersonnageManager($db);

    $perso = new Personnage(['name' => $_GET['name'], 'pv' => $_GET['pv'], 'atk' => $_GET['atk']]);
        
    $manager -> createPersonnage($perso);

    if ($manager){
        header("Location: index.php");
    } else {
        echo('Echec');
    }

?> 