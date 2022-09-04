<?php
echo"Saisir la somme due par le passager :\n";
$sommeDue=rtrim(fgets(STDIN));
	if($sommeDue > 0) {
		echo"Le passager doit " , $sommeDue , " euros.\n";
		
	}
	elseif ($sommeDue==0){
		echo"Le passager s'est acquitté de la somme due.\n";
	}
	else{
		echo"Valeur incorrecte.";
	}
?>
