<?php
$myConn = new mysqli("localhost","root","","prueba");
if ($myConn->connect_errno) {
    echo "fallo".$myConn->connect_errno;
}else{
    echo "Conexion exitosa";
    $resultados =  $myConn->query("SELECT * FROM usuarios");
    var_dump($resultados->fetch_all());
}