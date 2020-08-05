<?php

$numero = array( 5,3,1,3,8,7,4,1,1,3 );
$cant = count($numero);

for ($i = 1; $i < $cant; $i++){
    for ($j = 0; $j < ($cant-1); $j++){
        if ($numero[$j] < $numero[$j+1]){ 
        $aux = $numero[$j]; 
        $numero[$j] = $numero[$j+1]; 
        $numero[$j+1] = $aux;
        }
    }
}

$cadena = "";
for ($k=0; $k < count($numero); $k++) { 
    $cadena .= $numero[$k].", ";
}


echo "De mayor a menor es ".$cadena;

?>
