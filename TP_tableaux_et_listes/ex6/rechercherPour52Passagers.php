<?php
$nbPassagers = array(35,10,22,52,15,58,8,73);
$i=0;
echo "Quelle traversée ?\n";
$traversee=rtrim(fgets(STDIN));
$traversee--;	
	
	
echo "La traversée ", $traversee+1, " a transporté $nbPassagers[$traversee] passagers.\n";

for($i=0; $i<count($nbPassagers); $i++){
	if ($nbPassagers[$i]==52){
		echo "La traversée ", $i+1 , " a transporté $nbPassagers[$i] passagers.\n";
	}
}
?>