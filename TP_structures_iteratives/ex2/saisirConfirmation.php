<?php
echo"Confirmez-vous la modification (oui/non) ?\n";
$Rep=rtrim(fgets(STDIN));
while ($Rep!="oui" && $Rep!="non" ) {
	echo"Réponse incorrecte !\n\n";
	echo"Confirmez-vous la modification (oui/non) ?\n";
	$Rep=rtrim(fgets(STDIN));
}
echo"\nModification en cours ...";
