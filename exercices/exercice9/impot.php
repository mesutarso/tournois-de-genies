<?php

class Impot{
    protected $nom;
    protected  $revenu;
    public const TAXE1 = 20;
    public const TAXE2 = 15;

    function __construct($nom, $revenu){
        $this->nom = $nom;
        $this->revenu = $revenu;
    }
    function calculImpot(){
        if($this->revenu <= 15000){
            return ($this->revenu*self::TAXE2)/100;
        }
        else{
            return ($this->revenu*self::TAXE1)/100;
        }

    }
    function afficheImpot(){
        return "<h1>Mr ".$this->nom." votre impôt est de ".$this->calculImpot()." Euros</h1>";
    }

}


?>