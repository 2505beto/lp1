<?php
$mensaje = "Hola a todos"
?>
<form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
<input type="text" name="nro" placeholder="Ingrese un numero"/>
<input type="submit" name="submit" value="Enviar"/>
<?=$mensaje?>
</form>
<!-- identifica si se envio el formulario
<?php
if (isset($_POST["submit"])) {
    // tu codigo aqui 
    echo $_POST["nro"];
} 
?>