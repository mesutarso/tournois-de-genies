<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <title>get meteo</title>
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
      <?php
      include './impot.php';
        $newUser = new Impot($_GET["nom"],$_GET["revenu"]);

        echo $newUser->afficheImpot();
      
      
      ?>

    </main>
</body>
</html>