<?php

$liaisons = array(
    
    "Belle-Ile-en-Mer:15:8.3:Quiberon:Le Palais" ,
    "Belle-Ile-en-Mer:24:9:Le Palais:Quiberon" ,
    "Belle-Ile-en-Mer:16:8:Quiberon:Sauzon" ,
    "Belle-Ile-en-Mer:17:7.9:Sauzon:Quiberon" ,
    "Belle-Ile-en-Mer:19:23.7:Vannes:Le Palais" ,
    "Belle-Ile-en-Mer:11:25.1:Le Palais:Vannes" ,
    "Houat:25:8.8:Quiberon:Port St Gildas" ,
    "Houat:30:8.8:Port St Gildas:Quiberon",
    "Ile de Groix:21:7.7:Lorient:Port-Tudy" ,
    "Ile de Groix:22:7.4:Port-Tudy:Lorient"
) ;

// Code présenté dans la présentation du TD
/*
print_r( $liaisons ) ;

$uneLiaison = "Belle-Ile-en-Mer:16:8:Quiberon:Sauzon" ;
$infosLiaison = explode( ":" , $uneLiaison ) ;
print_r( $infosLiaison ) ;

$uneLiaison = "Belle-Ile-en-Mer:16:8:Quiberon:Sauzon" ;

list( $nomSecteur , $codeLiaison , $distance , $portDepart , $portArrivee ) = explode( ":" , $uneLiaison ) ;

echo "Port de départ : " , $portDepart , "\n" ;

*/


/* Exercice 1 */

echo "Exercice 1\n\n" ;

$codesLiaisons = array() ;

// Votre code ici
    
define("nomLiaison",count($liaisons));
for($i=0;$i<nomLiaison;$i++){
    list( $nomSecteur , $codeLiaison , $distance , $portDepart , $portArrivee ) = explode( ":" , $liaisons[$i] ) ;
    array_push($codesLiaisons, $codeLiaison); sort($codesLiaisons);
}
echo "code des liaisons : \n";
for($i=0;$i<nomLiaison;$i++){
    echo "      $codesLiaisons[$i]  \n" ;
}

/* Exercice 2 */

echo "\nExercice 2\n\n" ;
$codesLiaisonsHouat = array() ;

// Votre code ici


for($i=0;$i<nomLiaison;$i++){
    list( $nomSecteur , $codeLiaison , $distance , $portDepart , $portArrivee ) = explode( ":" , $liaisons[$i] ) ;
        if($nomSecteur=="Houat"){	
            array_push($codesLiaisonsHouat, $codeLiaison); sort($codesLiaisonsHouat);	
        }
    
} 

for($i=0;$i<2;$i++){
    echo "code liaison Houat : " , $codesLiaisonsHouat[$i] , "\n" ;
}


/* Exercice 3 */

echo "\nExercice 3\n\n" ;
$codesLiaisonsQuiberon = array() ;

// Votre code ici


for($i=0;$i<nomLiaison;$i++){
    list( $nomSecteur , $codeLiaison , $distance , $portDepart , $portArrivee ) = explode( ":" , $liaisons[$i] ) ;
        if($portArrivee=="Quiberon"){	
            array_push($codesLiaisonsQuiberon, $codeLiaison); sort($codesLiaisonsQuiberon);	
        }
    
} 

for($i=0;$i<3;$i++){
    echo "code liaison Houat : " , $codesLiaisonsQuiberon[$i] , "\n" ;
}



/* Exercice 4 */

echo "\nExercice 4\n\n" ;
$ports = array() ;

// Votre code ici

$portal=array();
for($i=0;$i<nomLiaison;$i++){
    list( $nomSecteur , $codeLiaison , $distance , $portDepart , $portArrivee ) = explode( ":" , $liaisons[$i] ) ;
        array_push($ports, $portDepart,$portArrivee); sort($ports);
}
array_push($ports,"az");

for($i=0;$i<count($ports)-1;$i++){
    if($ports[$i]!=$ports[$i+1]){
        array_push($portal, $ports[$i]); sort($portal);
    }
    
}

for($i=0;$i<count($portal);$i++){
    echo "Nom des ports: " , $portal[$i] , "\n" ;
}

/* Exercice 5 */

echo "\nExercice 5\n\n" ;

// Votre code ici
$ListeFinal = array();
for($i=0;$i<nomLiaison;$i++){
    list( $nomSecteur , $codeLiaison , $distance , $portDepart , $portArrivee ) = explode( ":" , $liaisons[$i] ) ;
    $a=array($nomSecteur , $codeLiaison , $distance , strtoupper($portDepart) ,strtoupper($portArrivee));
    $ListeFinal[] = implode(":",$a);
}
print_r( $ListeFinal) ;



?>