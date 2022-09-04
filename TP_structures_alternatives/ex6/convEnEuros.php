<?php
echo "Saisir la devise : ";
$deviseSaisie = strtoupper(rtrim(fgets(STDIN)));
switch($deviseSaisie){
	case("USD"):
		$tauxChange = "0.883";
		break;
	case("CAD"):
		$tauxChange = "0.686";
		break;
	case("GBP"):
		$tauxChange = "1.154";
		break;
	case("RUB"):
		$tauxChange = "0.013";
		break;
	default	:
		$tauxChange == 0;
}
if ($tauxChange==0){
	echo "Devise inconnue.\n";
}
else{

echo" Saisir le prix en ", $deviseSaisie , " : ";
$prix= rtrim(fgets(STDIN));

if(is_numeric($prix)) {
	$prixEuros=$prix*$tauxChange;
	echo "Prix en euros : " , $prixEuros , "€.\n" ;
}
else{
	echo "La valeur saisie ne correspond pas à un prix.\n";
}
}
?>
