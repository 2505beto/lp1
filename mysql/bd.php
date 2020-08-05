<?php
$myConn = new mysqli("localhost","root","","prueba");
if ($myConn->connect_errno) {
    echo "fallo".$myConn->connect_errno;
}else{
    echo "Conexion exitosa";
    $resultados =  $myConn->query("SELECT * FROM usuarios");
    
   for($i=0;$i<$resultados->num_rows;$i++){
         $data = $resultados->fetch_asocc();
         echo "id: ".$data["id"]."<br>".
        "Nombres: ".$data["nombres"]."<br>".
        "Apellidos: ".$data["apellidos"]."<br>";
        }
        echo "<br>";
}