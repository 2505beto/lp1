
<form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
<input type="text" name="nombre" placeholder="Ingrese nombre"/><br>
<input type="submit" name="submit" value="Enviar"/>
</form>
<?php
if (isset($_POST["submit"])) {
    $scott = $_POST["nombre"];
    require_once "scott.php";
    persona :: mensaje($scott);
    }
