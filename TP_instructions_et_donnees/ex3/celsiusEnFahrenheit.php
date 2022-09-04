<?php
define( "A" , 1.8);
define( "B" , 32);
echo "Saisir la température en °C :";
$degres = rtrim(fgets(STDIN));
$faran = A * $degres * B ;
echo "Température en °F :" , $faran ;
?>
