<?php
$nbPassagers = array(35,10,22,52,15,58,8,73);
$i=0;

for ($i=0;$i<count($nbPassagers);$i++){
	
		echo ceil($nbPassagers[$i]/10)*10," passagers\n";
}
?>