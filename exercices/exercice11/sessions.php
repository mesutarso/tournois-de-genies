<?php
$erreur = null;
if(!empty($_POST["nom"]) && !empty($_POST["password"]) ){
    if($_POST["nom"] === "admin" && $_POST["password"] === "admin"){
        session_start();
        $_SESSIONS["connecté"]=1;
    } else{
        $erreur = "Identifiants non valides";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <title>sessions</title>
</head>
<body>
<header>
        <nav class="navbar navbar-light bg-dark ">
            <a class="navbar-brand d-flex justify-content-center" href="#">
             <h2 class="text-light "> Tournois de genies 1</h2>
            </a>
        </nav>
    </header>
    <main class='p-5'>
        <?php if ($erreur): ?>
            <div class="alert alert-danger">
                <?= $erreur ?>
            </div>
        <?php endif ?>
        <form action="" method="post">
        <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Ecrire Votre Nom" aria-label="First name" name="nom" required>
                </div>
                <div class="col">
                    <input type="password" class="form-control" placeholder="Ecrire Votre Mot de Passe" aria-label="Last name" name="password" required>
                </div>
                <div class="col">
                    <button class="btn btn-primary type="submit">OK</button>
                </div>
        </div>
        </form>

    </main>
</body>
</html>