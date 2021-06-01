<?php
require_once './auth.php';
forcer_utilisateur_connecte();
?>

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
   <h1 class="text-dark text-center pb-5">Table de noms</h1> 
   <a href="" class="btn-btn-primary">se deconnecter</a>
   <table class="table table-bordered border-dark ">
    <thead>
        <tr>
            <th>N°</th>
            <th>Actualités</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $noms = array("
        Forcené de Dordogne neutralisé: le chef du GIGN dévoile le «schéma de traque»","
        Le projet de loi de prévention du terrorisme pérennise des mesures contestées", "
        Procès Bygmalion : Fabienne Liadzé, une femme très seule dans le bourbier de l'UMP","
        Covid-19 : l'OMS renomme les variants avec des noms de lettres grecques","
        Il a commencé à me tabasser: le livreur victime d'une agression","Les réanimations sont en baisse
        Covid-19 : 109.557 morts en France, la décrue se poursuit dans les services de réanimation","
        Joe Biden à Tulsa, théâtre d'un massacre raciste longtemps oublié","
        Emmanuel et Brigitte Macron viennent d’être vaccinés contre le Covid-19","
        Dons et services rendus : plongée dans les micropartis de Guillaume","
        Affaire Xavier Dupont de Ligonnès: de nouvelles vérifications effectuées dans une abbaye");
        $sizeofArray = count($noms);
    for($i = 1; $i <= $sizeofArray; $i++){
        $k = $i-1;
        echo "<tr><td>$i</td><td>".$noms[$i-1]. " </td></tr>";    
    }
    
    ?>
    </tbody>
</table>
</body>
</html>