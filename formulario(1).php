<form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
<input type="text" name="year" placeholder="Ingrese su año de nacimiento"/>
<input type="submit" name="submit" value="Enviar"/>
</form>
<!-- identifica si se envio el formulario-->
<?php
if (isset($_POST["submit"])) {
    // escriba aqui su codigo 
    $yearNacimiento = $_POST["year"];
    $edadActual = 2020 - $yearNacimiento;
    echo "Usted tiene $edadActual años,"; 
    if ($edadActual < 18) {
        echo " No es apto para votar";
    }elseif ($edadActual >= 18) {
        echo " Es apto para votar";
    }
}
?>