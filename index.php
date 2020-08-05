<?php
$mensaje = "Hola Mundo";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       h1 {
           background-color: skyblue;
           padding: 20px;
       }
    </style>
</head>
<body>
<h1>
    <?php
    echo $mensaje.', Bienvenidos';
   echo "<br><p>"; 
   echo( 2.3 + 1.4) ."</p>";
   ?>
</h1>
</body>
</html>