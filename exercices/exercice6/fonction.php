<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <title>Les tableaux</title>
</head>
<body class="p-5 d-flex flex-column align-items-center">
   <h1 class="text-dark text-center pb-5">Calcul de la surface d'un Rectangle</h1> 
   <?php 
   include './calcul.php';
   $longueur = 8;
   $largeur = 5;
   $surface = calculAire($longueur,$largeur);
   echo "<p>la longueur est : $longueur m</p>";
   echo "<p>la largeur est : $largeur m</p>";
   echo "<p>la surface de ce rectangle vaut :<strong> $surface </strong> m</p> "

   
   
   ?>
  
</body>
</html>