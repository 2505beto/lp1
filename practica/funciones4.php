<?php
    
    function palindromo(string $cadena)
        {
        $cadenainvertida = strrev($cadena);

        echo "verificacion de un palíndromo <br>";

        if (strcmp($cadena, $cadenainvertida)==0){
             echo "La cadena ". $cadena . " es un palíndromo";
             }
         else{
             echo "La cadena ". $cadena ." no es un palíndromo";
            }
        }
?>
<form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
        <br>
        <input type="text" name="cadena" placeholder="Escriba"/><br>
        <input type="submit" name="submit" value="Evaluar"/>
    </form>
<?php
    if (isset($_POST["submit"])) {
        $cadena =  $_POST["cadena"];

            palindromo($cadena);
        }
?>