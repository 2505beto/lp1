<?php
include_once "autor.php";
$usuario = new autor();
echo $usuario->setnombre("Alberto");
echo $usuario->setemail("alberto25@gmail.com");
echo $usuario->setgenero("Masculino");
echo $usuario->getnombre();