<?php
$nbPassagers = array();
$i=0;
define("A",10);



for($i=0; $i<A; $i++){
	$nbPassagers[$i]=0;
	echo "Traversée ", $i+1 , ": $nbPassagers[$i] passagers \n";
}
?>