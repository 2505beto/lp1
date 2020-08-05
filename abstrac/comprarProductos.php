<?php

class ComprarProductos extends Visa{
    public function pagar(){
        return $this->pagarAhora();
    }
}