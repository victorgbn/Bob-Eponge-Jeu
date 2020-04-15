<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jeu PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>
        .formAtk {
            display:flex;
            justify-content: space-around;
            width: 90%;
        }
        .formAtk select {
            width: 20%;
        }
    </style>

</head>
<body class="container">

<?php
require "start.php";
$manager = new PersonnageManager($db);
?>

<h1 class="text-center mt-3">Voici les personnages</h1>
<br>

<?php 
     $req= "SELECT * FROM Personnage";
     $stmt = $db->query($req);
     $results = $stmt->fetchall(PDO::FETCH_ASSOC);
     ?>
     <TABLE class="container table">
     <thead>
    <tr>
      
      <th scope="col">Nom</th>
      <th scope="col">PV</th>
      <th scope="col">ATK</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
     <?php
     foreach($results as $row){ 
        $id= $row["id"];
        echo '<tr><td>'.$row['name'].'</td><td>'.$row['pv'].'</td><td>'.$row['atk'].'</td><td><a class="btn btn-info " href="delete.php?id='.$id.'">Supprimer</a></td><td><a class="btn btn-info " href="admin.php?id='.$id.'">Modifier</a></tr>';}
  ?>
  </tbody>
  
  </TABLE>

<br>
<a href="create.php">
    Crée ton personnage
</a>
<br>
    <h1 class="m-3 text-center">Lance un combat !</h1>

    <form action="attaque.php" class="formAtk">
        <select name="id1" id="" class="form-control">
            <?php

            $people = $manager->getAllPersonnages();

           foreach ($people as $p){
               echo "<option value=".$p->getId().">".$p->getName()."</option>";
           }
            ?>
        </select> 
    <p>vs</p>
        <select name="id2" id="" class="form-control">
            <?php
           foreach ($people as $p){
               echo "<option value=".$p->getId().">".$p->getName()."</option>";
           }
            ?>
        </select> 

        <input type="submit" class="btn btn-danger" value="COMBAT">
    </form>

</body>
</html>

