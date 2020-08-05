<?php
include_once "tiposPagoAbstract.php";
include_once "comprarProductos.php";

$ComprarProductos = new comprarProductos();
echo $ComprarProductos->pagar();
// instanciar y aplicar clases 