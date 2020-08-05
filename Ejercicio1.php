<form method = "post" action="<?=$_SERVER['PHP_SELF']?>">
<input type="text" name="nro1" value="<?=(isset($_POST["nro1"]))?$_POST["nro1"]:''?>" placeholder="Ingrese nro1">
<input type="text" name="nro2" value="<?=(isset($_POST["nro2"]))?$_POST["nro2"]:''?>" placeholder="Ingrese nro2">
<input type="submit" name="suma" value="Sumar"/>
<input type="submit" name="resta" value="Restar"/>
<input type="submit" name="multiplicacion" value="Multiplicar"/>
<input type="submit" name="division" value="Dividir"/>
</form>
<?php
if (isset($_POST["suma"])) {
    $nro1 = $_POST["nro1"];
    $nro2 = $_POST["nro2"];
    require_once "operacione.php";
    Operacione :: suma($nro1, $nro2);
}if (isset($_POST["resta"])){
    $nro1 = $_POST["nro1"];
    $nro2 = $_POST["nro2"];
    require_once "operacione.php";
    Operacione :: resta($nro1, $nro2);
}if (isset($_POST["multiplicacion"])) {
    $nro1 = $_POST["nro1"];
    $nro2 = $_POST["nro2"];
    require_once "operacione.php";
    Operacione :: multiplicacion($nro1, $nro2);
}if (isset($_POST["division"])) {
    $nro1 = $_POST["nro1"];
    $nro2 = $_POST["nro2"];
    require_once "operacione.php";
    Operacione :: division($nro1, $nro2);
}