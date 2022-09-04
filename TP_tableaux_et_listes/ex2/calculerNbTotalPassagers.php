<?php
$nbTraverser=8;
$i=0;
$res=0;
$nbPassagers = array(35,10,22,52,15,58,8,73);
for($i=0;$i<$nbTraverser;$i++){
	$res+=$nbPassagers[$i];	
} 
echo $res , " Passagers transportés le 22/09/2021.\n";
