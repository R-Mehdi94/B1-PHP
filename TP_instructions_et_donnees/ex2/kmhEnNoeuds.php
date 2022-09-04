<?php
	define( "CONV_ND_KMH" , 1.852);
	echo "Saisir la vitesse en km/h : ";
	$vitessekmh = rtrim(fgets(STDIN)) ;
	$vitessens = $vitessekmh / CONV_ND_KMH ;
	echo "Résultat de la conversion : " , $vitessens , " noeuds\n";
?>
