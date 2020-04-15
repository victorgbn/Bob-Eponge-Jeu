<?php 

require 'start.php';

$id = $_GET['id'];
$manager->deletePersonnage($id);

header("Location: index.php");
?>
