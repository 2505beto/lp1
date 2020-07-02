<?php

class Operaciones{

    private $nro1;
    private $nro2;

    public function __construct($nro1, $nro2)
    {
        $this->nro1 = $nro1;
        $this->nro2 = $nro2;
    }
    public function suma(): void{
            $suma = $this->nro1 + $this->nro2;
            echo "La suma es: ".$suma;
    }
    public function resta(): void{
        $resta =  $this->nro1 -$this->nro2;

        echo "<br>La resta es: ".$resta;
    }
    public function multiplicacion(): void{
        $multi = $this->nro1 * $this->nro2;

        echo "<br>la multiplicacion es: ".$multi;
    }
    public function division(): void{
            $div = $this->nro1/$this->nro2;
            echo "<br>la division es: ".$div;
    }
}