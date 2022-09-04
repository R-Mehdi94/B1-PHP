<?php
echo"Saisir la vitesse :\n";
$vitesseSaisie=rtrim(fgets(STDIN));
$vitesseCorrigee = $vitesseSaisie;
if($vitesseSaisie==1){
	echo"Vitesse : " , $vitesseSaisie , " noeud.\n";
}
elseif($vitesseSaisie>0){
	echo"Vitesse : " , $vitesseSaisie , " noeuds.\n";
}
else{
	echo"Vitesse : 0 noeud.\n";
}
?>
