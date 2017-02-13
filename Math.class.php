<?php

class Math {
    //Zone de déclaration de propriétés
    private $pi=3.14;
    
function __construct(){//constructeur
        $this->pi=3.14;//initialise les proprietes
}
function calCirconference($r){//creation de la fonction
    $resultat=2*3.14*$r;
    return $resultat;
}
function calCylindre($r,$h){//creation de la fonction
    $resultat=3.14*$r*$r*$h;
    return $resultat;
}
function calCone($r,$h){//creation de la fonction
    $resultat=1/3*3.14*$r*$r*$h;
    return $resultat;
}
}