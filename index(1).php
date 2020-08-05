
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $hola; ?></title>
    <style>
        h1 {
            background-color: lightgray;
            padding: 20px;
        }
    </style>
</head>
<body>
<h1>
    <?php echo $mensaje . ', Bienvenidos';
    //echo htmlentities($_GET["mensaje"])
   // echo "<br><p>";
        ?>
</h1>
        <?php
            $numeros = array(1, 6, 8, 13);
            $personas = [
        "nombre" => "Alberto",
        "apellidos" => "Melgarejo",
        ];
    echo $numeros[3]."<br>";
    echo $personas["apellidos"];
        foreach ($numeros as $numero) {
            echo $numero."</br>";
        }
        foreach ($personas as $persona) {
            echo $persona."</br>";
        }
    //ejemplo de identidad
    //$a = 5;
    //echo $a++ . "</p>";
    //echo $a . "</p>";
        ?>
</body>
</html>