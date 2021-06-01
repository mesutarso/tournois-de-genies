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
    <div class="row">
        <div class="col-4">
        <h4>Boucler avec la boucler for</h4>
        <?php 
             $days = array("Lundi","Mardi","Mercredi","jeudi", "vendredi");
            $sizeofArray = count($days);
             echo "il y a ".count($days)." élements";
             for($i=0; $i < $sizeofArray; $i++){
                 echo "<li>$days[$i]</li>";
             }
        
        ?>
        </div>
        <div class="col-4">
        <h4>Boucler avec la boucler While</h4>
        <?php 
             $days = array("Lundi","Mardi","Mercredi","jeudi", "vendredi");
            $sizeofArray = count($days);
             echo "il y a ".count($days)." élements";
             $i=0;
             while($i < $sizeofArray){
                echo "<li>$days[$i]</li>";
                $i++;
             }
            
        
        ?>
        </div>
        <div class="col-4">
        <h4>Boucler avec la boucler ForEach</h4>
        <?php 
             $days = array("Lundi","Mardi","Mercredi","jeudi", "vendredi");
            
             echo "il y a ".count($days)." élements";
            foreach($days as $day){
                echo "<li>$day</li>";
            }
            
        
        ?>
        </div>
    
    </div>
      
    </main>
    <script src="../../js/bootstrap.min.js"></script>
</body>
</html>