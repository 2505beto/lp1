<?php
session_start();
$carrito = $_SESSION["carrito"];
$producto1 = explode("+",$carrito);
echo "Producto: ".$producto1[0]."<br>".
      "Cantidad: ".$producto1[1]."<br>".
      "Precio: ".$producto1[2]."<br>";

//$carrito = $_COOKIE["carrito"];

//foreach($carrito as $producto){
//$producto = explode("+",$carrito);
//echo "Producto: ".$producto[0]."<br>".
     // "Cantidad: ".$producto[1]."<br>".
      //"Precio: ".$producto[2]."<br>";
//}