<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modification</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body class="container">

<?php 

 require 'start.php';

$id = $_GET['id'];
$modif = $manager->getOnePersonnageById($id);
?>

<h1 class="text-center m-3">Modifie les stats de <?php echo $modif->getName(); ?></h1>
 
<form action="traiteUpdate.php?id<?php echo $id ?>">

    <input type="hidden" name="id" value="<?php echo $modif->getId();?>">

    <div class="form-group">
        <label for="">PV</label>
        <input type="number" class="form-control" name="pv" value="<?php echo $modif->getPv();?>">
    </div>

    <div class="form-group">
        <label for="">Attaque</label>
        <input type="number" class="form-control" name="atk" value="<?php echo $modif->getAtk();?>">
    </div>

    <input type="submit" class="btn btn-info" value="Modifier">
</form>


<a href="index.php">Retour</a>




</body>
</html>
