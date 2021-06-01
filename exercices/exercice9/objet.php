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
        <form action="./resultatImpot.php" method="get">
        <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Ecrire Votre Nom" aria-label="First name" name="nom" required>
                </div>
                <div class="col">
                    <input type="number" class="form-control" placeholder="Ecrire Votre Revenu" aria-label="Last name" name="revenu" required>
                </div>
                <div class="col">
                
                    <button class="btn btn-primary type="submit">OK</button>
                </div>
        </div>
        </form>

    </main>
</body>
</html>