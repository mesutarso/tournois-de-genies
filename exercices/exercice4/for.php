<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <title>for loop</title>
</head>
<body class="p-5">
   <h1 class="text-dark text-center pb-5">Table de multiplication de 8</h1> 
   <table class="table table-bordered border-dark ">
    <thead>
        <tr>
            <th>Opérations</th>
            <th>Résultat</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $nombre = 8;
    for($i = 0; $i <= 10; $i++){
        $result = $i*$nombre;
        echo "<tr><td>$i * $nombre </td><td>$result </td></tr>";    
    }
    
    ?>
    </tbody>
</table>
</body>
</html>