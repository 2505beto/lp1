<?php
$temperaturas = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68,
62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
);
$sumatoria = 0;
foreach ($temperaturas as $temperatura) {
        $sumatoria += $temperatura;
}

$promedio = $sumatoria/count($temperaturas);

echo "Temperatura promedio: ".round($promedio, 2);
echo "<br>";

sort($temperaturas);
$cadena = "";
for ($i=0; $i <5; $i++) { 
    $cadena .= $temperaturas[$i].", ";
}
echo "Temperaturas mas bajas: ".$cadena;
echo "<br>";
rsort($temperaturas);
$cadena = "";
for ($i=0; $i < 5; $i++) { 
    $cadena .= $temperaturas[$i].", ";
}
echo "Temperaturas más altas: ".$cadena;