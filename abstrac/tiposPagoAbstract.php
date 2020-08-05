<?php
abstract class Visa{
    public function pagarAhora(){
        return "pagado con visa";
    }
    abstract public function pagar();
}
