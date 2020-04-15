

<?php 

require 'start.php';

$id1 = $manager->getOnePersonnageById($_GET['id1']);
$id2 = $manager->getOnePersonnageById($_GET['id2']);

$id1->attaque($id2);

if(!$id2->is_alive()){
    $manager->deletePersonnage($id2->getId());
}

$manager->updatePersonnage($id2);

header('Location:index.php');

?>
