<?php
$nbPassagers = array(35,10,22,52,15,58,8,73);
$i=0;
$compteur=0;
for ($i=0;$i<count($nbPassagers);$i++){
	if($nbPassagers[$i]<20){
		$compteur++;
	}
}
echo $compteur, " traversées non rentables le 22/09/2021\n";

