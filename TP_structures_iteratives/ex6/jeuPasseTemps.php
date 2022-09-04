<?php
$nombreInt = rand (1,100);
$i=1;
do{
	echo "Saisir un nombre entier compris entre 1 et 100: ";
	$nombreSaisie=rtrim(fgets(STDIN));
	if($nombreSaisie==="0"){
		$nombreSaisie="Fin";
	}
	
	elseif(is_numeric($nombreSaisie) == true  ){
		if($nombreSaisie>=1 && $nombreSaisie <=100){
			if($nombreSaisie > $nombreInt){
				echo "Tros grand !\n\n";
				$i++;
			}
			else{
				echo "Tros petit !\n\n";
				$i++;	
			}
			
		}
		else{
			echo"Saisie incorrecte\n\n";
		}
	}
	else{
		echo "Saisie incorrecte\n\n";
	}
	
	
		
}while($nombreSaisie != $nombreInt && $nombreSaisie != "Fin") ;


if($nombreSaisie==$nombreInt){
echo"Félicitation capitaine. Victoire en " ,$i, " coups.\n";
}
else{
	echo "Fin de la partie";
}
