<?php
include_once "operaciones.php";
$mycalc = new Operaciones(12, 6); 
echo $mycalc->suma(); 
echo $mycalc->multiplicacion(); 