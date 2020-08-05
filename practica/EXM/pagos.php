<?php

interface TipoPagoInterface{
    public function pagarAhora(): String;
    public function ProcedimientoPago(): void;
}

class Visa implements TipoPagoInterface{
    public function pagarAhora(): String{
        return "Pago con Visa";
    }
    public function ProcedimientoPago(): void{
        echo $this->pagarAhora();
    }
}

class Paypal implements TipoPagoInterface{
    public function login(): String{
        return "Tienes que logear";
    }

    public function pagarAhora(): String{
        return "Pago con Paypal";
    }
    public function ProcedimientoPago(): void{
        echo $this->login();
        echo '<br>';
        echo $this->pagarAhora();
    }
}
class CuentaBancaria implements TipoPagoInterface{
    public function loginBanco(): String{
        return "Bienvenido al Banco";
    }
    public function pagarAhora(): String{
        return "Pago con transferencia";
    }
    public function ProcedimientoPago(): void{
        echo $this->loginBanco();
        echo '<br>';
        echo $this->pagarAhora();
    }
}

class Efectivo implements TipoPagoInterface{
    public function pagarAhora(): String{
        return "Pago en Efectivo";
    }
    public function ProcedimientoPago(): void{

       echo $this->pagarAhora();
    }
}

class ComprarProducto{
    public function pagar(TipoPagoInterface $tipoDePago){

        return $tipoDePago->ProcedimientoPago();
    }
}

$tipoDePago = new CuentaBancaria();
$comprarProducto = new ComprarProducto();
echo $comprarProducto->pagar($tipoDePago);