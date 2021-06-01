<!DOCTYPE html>
<html lang="Fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tournois des génies | LWEB2</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-light bg-dark ">
            <a class="navbar-brand d-flex justify-content-center" href="#">
             <h2 class="text-light "> Tournois de genies 1</h2>
            </a>
        </nav>
    </header>
    <main class='d-flex justify-content-center py-5'>
    <?php
            echo "la température à  " . $_GET['Ville'] . " est de :  " . $_GET['Temperature'];
    ?>
    </main>
    <script src="../../js/bootstrap.min.js"></script>
</body>
</html>