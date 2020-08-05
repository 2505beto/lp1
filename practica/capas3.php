
<form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
<input type="text" name="nro1" placeholder="Ingrese numero"/><br>
<input type="submit" name="submit" value="Enviar"/>
</form>
<?php
if (isset($_POST["submit"])) {
    $nro1 = $_POST["nro1"];
    require_once "factorial.php";
    factorial :: resultado($nro1);
    }
