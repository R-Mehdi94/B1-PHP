<?php
define ("POIDS_MAX",20);

echo "Saisir le nombre de passagers : ";
$nbPassagers=rtrim(fgets(STDIN));

echo "Saisir le poids total pour le groupe de " ;
echo $nbPassagers, " passagers : ";

$poidsTotal = rtrim(fgets(STDIN));

$poidsMaxAutorise = $nbPassagers* POIDS_MAX;
if ($poidsTotal<=$poidsMaxAutorise){
	echo "Poids maximum non dépassé.\n";
}
else{
	echo "Poids total supérieur au maximum autorisé (" ;
	echo $poidsMaxAutorise , "kg).\n";
	
	do{
		echo "Nombre de kilos à retirer : ";
		$nbKg= rtrim(fgets(STDIN));
		$poidsTotal = $poidsTotal- $nbKg;
		echo"Poids total actualisé : $poidsTotal kg.\n";
	} while($poidsTotal>$poidsMaxAutorise);
	echo"Poids total de ", $poidsTotal, " autorisé.\n";
}
