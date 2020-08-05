<?php
echo $_COOKIE["Prueba"][3];
$cookie = $_COOKIE["Prueba"];
foreach ( $cookie as $valor ) {
    echo "<br>".$cookie;
}