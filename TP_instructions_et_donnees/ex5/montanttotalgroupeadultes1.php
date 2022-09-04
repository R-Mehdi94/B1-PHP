<?php
define("A" , 18);
define("B" , 15);
echo " Saisir le nombre d'adulte : ";
$nombre = rtrim(fgets(STDIN));
$div = $nombre/7;
$div=floor($div);
$modulo=$nombre%7;
$result=$div*7*15+$modulo*18;
echo " La somme total est de : " , $result;   
?>
