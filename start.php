<?php 

function chargerClasse($classe){
    require $classe.'.php';
}

spl_autoload_register('chargerClasse');

$db = new PDO('mysql:host=localhost;dbname=s4tp2;port=8889; charset=UTF8', 'root', 'root');

$manager = new PersonnageManager($db);

?>