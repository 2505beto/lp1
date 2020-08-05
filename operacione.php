<?php

class Operacione{
    public static function suma($nro1, $nro2): void{
            $suma = $nro1 + $nro2;

        echo "La suma es: ".$suma;
    }
    public static function resta($nro1, $nro2): void{
        $resta = $nro1 - $nro2;

        echo "La resta es: ".$resta;
    }
    public static function multiplicacion($nro1, $nro2): void{
        $multi = $nro1 * $nro2;

        echo "la multiplicacion es: ".$multi;
    }
    public static function division($nro1, $nro2): void{
            $div = $nro1/$nro2;
            echo "la division es: ".$div;
    }
}