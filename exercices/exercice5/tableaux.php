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
   <table class="table table-bordered border-dark ">
    <thead>
        <tr>
            <th>N°</th>
            <th>Noms</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $noms = array("durant","martin", "li","wang","fu");
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