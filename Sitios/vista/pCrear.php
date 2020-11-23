<?php
declare(strict_types=0);
    use Controladores\ControladorProfesor;
    include_once "includes/autoload.php";
?>
<form method="post" action="<?=$_SERVER["PHP_SELF"]?>">
    <input type="text" name="nombres" placeholder="Ingrese Nombres"><br>
    <input type="text" name="idioma" placeholder="Ingrese Idioma"><br>
        <input type="submit" name="submit" value="Guardar">
</form>

<?php
if (isset($_POST["submit"])) {
    $nombres = $_POST["nombres"];
    $idioma = $_POST["idioma"];
  
    $controladorProfesor = new ControladorProfesor();
    $respuesta = $controladorProfesor->crearProfesor($nombres, $idioma);
    echo $respuesta;
}