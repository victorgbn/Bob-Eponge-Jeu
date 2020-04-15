<?php 

require "start.php";

echo('<a href="index.php">Retour</a>');

$id = $_GET['id'];
$pv = $_GET['pv'];
$atk = $_GET['atk'];

$modif = new Personnage(["id"=>$id, "pv"=>$pv, "atk"=>$atk]);

$manager->updatePersonnage($modif);

header ('Location: index.php');

?>