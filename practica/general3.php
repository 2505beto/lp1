
<form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
    <input type="text" name="nro1" placeholder="Ingrese numero 1"/><br>
    <input type="text" name="nro2" placeholder="Ingrese numero 2"/><br>
    <input type="submit" name="submit" value="Verificar"/>
</form>
<?php
    if (isset($_POST["submit"])) {
        $nro1 = $_POST["nro1"];
        $nro2 = $_POST["nro2"];
        if ($nro1 <= 100) {
            $res1 = $nro1;
        }
        if ($nro2 <=100) {
            $res2 = $nro2;
        }

        if ($res1 < $res2) {
            echo $res2;
        } elseif($res1 > $res2){
            echo $res1;
        } elseif($res1 == $res2){
            echo 0;
        }
    }