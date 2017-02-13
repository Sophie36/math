<?php

require_once('Math.class.php');
$obMath= new Math();//creation d'un nouvel objet

$r=$obMath->calCirconference(3);//faire appel à l'objet pour appeler la fonction
$h=$obMath->calCylindre(3,4);//faire appel à l'objet pour appeler la fonction


echo $r. '</br>';//affiche le résultat de la circonference
echo $h. '</br>';//affiche le résultat du cylindre
echo $obMath->calCone(5,3).'</br>';//affiche le résultat du cone