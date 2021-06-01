<?php

function est_connecte () : bool{
    if(session_status === PHP_SESSION_NONE){
        session_start();
    }
    return !empty($_SESSIONS["connecté"]);
}

function forcer_utilisateur_connecte () : void{
    if(!est_connecte()){
        header("location: ./sessions.php");
        exit();
    }
}

 ?>