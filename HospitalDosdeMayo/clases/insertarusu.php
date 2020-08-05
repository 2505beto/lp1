<?php
include_once "usuario.php";
include_once "menu.php";
echo "<h1>Crear Usuarios</h1>";
?>
    <form method="post" action="<?= $_SERVER["PHP_SELF"] ?>">
        <input type="text" name="dniusu" placeholder="DNI"><br>
        <input type="text" name="nomusu" placeholder="Nombre"><br>
        <input type="text" name="apellusu" placeholder="Apellido"><br>
        <input type="text" name="celuusu" placeholder="Telefono"><br>
        <input type="text" name="fechanac" placeholder="Fecha de Nacimiento"><br>
        <input type="text" name="sexusu" placeholder="Sexo"><br>
        <input type="text" name="estadociusu" placeholder="Estado Civil"><br>
        <input type="text" name="direccionusu" placeholder="Direccion"><br>
        <input type="text" name="correousu" placeholder="Correo"><br>
        <input type="text" name="codiSIS" placeholder="Codigo SIS"><br>
        <input type="submit" name='guardar' value='guardar'>
    </form>
<?php
if (isset($_POST["guardar"])) {
    $usuario = new Usuario();
    $usuario->setdniusu($_POST["dniusu"]);
    $usuario->setnomusu($_POST["nomusu"]);
    $usuario->setapellusu($_POST["apellusu"]);
    $usuario->setceluusu($_POST["celuusu"]);
    $usuario->setfechanac($_POST["fechanac"]);
    $usuario->setsexusu($_POST["sexusu"]);
    $usuario->setestadociusu($_POST["estadociusu"]);
    $usuario->setdireccionusu($_POST["direccionusu"]);
    $usuario->setcorreousu($_POST["correousu"]);
    $usuario->setcodiSIS($_POST["codiSIS"]);

    if($usuario->insertar()){
        echo "Se creo el usuario";
    }else{
        echo "Error, el usuario no pudo ser creado";
    }
}