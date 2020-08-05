<?php
    function numero($nro1){
        if ($nro1>0) {
            echo "El numero es positivo";
        }elseif($nro1<0){
            echo "el numero es negativo";
        }elseif($nro1==0){
            echo "el numero es cero";
        }
    }
?>

<form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
        <br>
        <input type="text" name="nro1" placeholder="Ingrese numero"/><br>
        <input type="submit" name="submit" value="Evaluar"/>
</form>
<?php
    if (isset($_POST["submit"])) {
        $nro1 =  $_POST["nro1"];

            numero($nro1);
        }
?>