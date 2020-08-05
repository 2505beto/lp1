
<?php
    $a = 4;
    $b = 4;
    $c = 3;

    if ($a>=$b && $a>=$c) {
        echo "el numero mayor es: ".$a;
    }elseif ($b>=$a && $b>=$c) {
        echo "el numero mayor es: ".$b;
     }elseif ($c>=$b && $c>=$a) {
        echo "el numero mayor es: ".$c;
    }