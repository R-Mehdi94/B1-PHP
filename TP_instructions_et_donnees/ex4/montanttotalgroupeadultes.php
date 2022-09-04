<?php
define("A" , 17);
echo " Saisir le nombre d'adulte : ";
$nom = rtrim(fgets(STDIN));
$prix = A * $nom;
echo " La somme total est de : " , $prix;   
?>
