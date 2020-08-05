<?php
$a = 15;
$b = 12;
$c = 8;
$cont = 0;

if ((20<=$a)&&($a<=50)) {
     $cont++;
}

if ((20<=$b)&&($b<=50)) {
    $cont++;
}

if ((20<=$c)&&($c<=50)) {
    $cont++;
}

if ($cont>=1) {
    $resultado = true;
}else{
    $resultado = false;
}

var_dump($resultado);

$numeros = array(15,12,8);
$contador = 0;
foreach ($numeros as $numero ) {
    if ((20<=$numero)&&($numero<=50)) {
         $contador++;
    }
}
if ($contador>=1) {
    $resultado = true;
}else{
    $resultado = false;
}

var_dump($resultado);

?>
