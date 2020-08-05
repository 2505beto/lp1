<?php
    function cadena(string $cadena)
    {
    if (strtolower($cadena)===$cadena) {
        echo "$cadena es minúscula";
    } else {
        echo "$cadena no es minúscula";
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

            cadena($cadena);
        }
?>