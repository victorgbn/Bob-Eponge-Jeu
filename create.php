<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Create</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body class="container mt-3">
    <h1 class="text-center">Ajouter un nouveau personnage</h1>
    
    <form action="traiteperso.php">
    
       <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" name="name" class="form-control">
        </div>
        
        <br>
        
        <div class="form-group">
            <label for="pv">PV</label>
            <input type="number" name="pv" class="form-control">
        </div>
        
        <br>
        
        <div class="form-group">
            <label for="atk">Points d'attaque</label>
            <input type="number" name="atk" class="form-control">
        </div>
        
        <br>
        
        <input type="submit" value="Ajouter"  class="btn btn-primary">
        <br>
        <br>
        <a href="index.php">Retour</a>
        
    </form>
    
    
</body>
</html>


