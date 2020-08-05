
<?php
    function invertido(string $cadena){
                $texto = str_split($cadena);
                if(count($texto)%2 == 0){
                    echo "La cadena no es palíndromo";
                }else{
                $cadena01 = strrev($cadena); 
                $enunciado = str_split($cadena01);  
                $cont = 0;

                for ($i=0; $i < count($texto); $i++) {
                    if ($texto[$i] != $enunciado[$i]) {
                        $cont++;
                    } 
                }

                if ($cont == 0 ) {
                    echo "La cadena es palíndromo";
                } else {
                    echo "La cadena no es palíndromo";
                }
            }

        }

?> 
</body>

    <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
        <br>
        <input type="text" name="cadena" placeholder="Ingrese la cadena"/><br>
        <input type="submit" name="submit" value="Evaluar"/>
    </form>

<?php
    if (isset($_POST["submit"])) {
        $cadena =  $_POST["cadena"];

            invertido($cadena);
        }
?>