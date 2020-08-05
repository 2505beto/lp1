
<form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
    <input type="text" name="email" placeholder="Ingrese email"/>
    <input type="submit" name="submit" value="Enviar"/>
</form>

<?php

if (isset($_POST["submit"])) {
    $email =  $_POST["email"];

    require_once "Cliente.php";
    require_once "Persona.php";
   /* $cliente = new Cliente("Juana", $email, "998847262");
    $cliente->nombre = "Juana";
    $cliente->email = $email;
    $cliente->telefono = "998847262"; 
    $cliente->cambiarEmail();*/
    Persona:: cambiarPassword();
    echo"<br>";
    echo Persona:: $variable + PRECIO;
}
?>