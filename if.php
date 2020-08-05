<?php
$a = 4;
$resto = $a%2;
if ($resto == 0) {
    echo "es divisible por 2";
}else {
    echo "no es divisble por 2";
}
echo "</br>";
$b = 8;
$c = 5;
$resultado = ($b <=> $c);
if ($resultado== 1) {
    echo $b." es mayor que ".$c;
}elseif($resultado== -1){
    echo $b." es menor que ".$c;
}

switch ($resultado) {
    case -1:
        echo $b." es mayor que ".$c;
        break;
    
    case 1:
        echo $b." es menor que ".$c;
        break;
    case 0:
        echo " Son iguales ";
        break;
    default:
         echo "No son numeros";
        break;
}