<?php
    function primos($nro1){

            $primer = true; 

                for ($i = 2; $i < $nro1; $i++) {
                     if ($nro1 % $i === 0) {
                            $primer = false;
                    }
                }

            if ($primer){
                echo "El numero ".$nro1." es primo";
            }
            else{
                echo "El numero ".$nro1." no es primo";
            }


        }

?> 
</body>
    <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
        <br>
        <input type="text" name="nro1" placeholder="Ingrese el numero"/><br>
        <input type="submit" name="submit" value="Enviar"/>
    </form>
<?php
    if (isset($_POST["submit"])) {
        $nro1 =  $_POST["nro1"];

            primos($nro1);
        }
?>