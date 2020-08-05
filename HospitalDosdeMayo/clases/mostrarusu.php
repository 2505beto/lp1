<?php
include_once "usuario.php";
include_once "menu.php";
$usuario = new Usuario();
$resultados = $usuario->mostrarUsuarios();
$numero_filas = $resultados->num_rows;

echo "<h1>Mostrar Usuarios</h1>";
echo "<table border='1'>" .
    "<tr>
            <th>DNI</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Telefono</th>
            <th>Fecha de nacimiento</th>
            <th>Sexo</th>
            <th>Estado Civil;</th>
            <th>Direccion</th>
            <th>Correo</th>
            <th>Codigo SIS</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
        </tr>";
if ($numero_filas != 0) {
    for ($i = 0; $i < $numero_filas; $i++) {
        $user = $resultados->fetch_assoc();
        echo "<tr>
            <td>" . $user["dniusu"] . "</td>
            <td>" . $user["nomusu"] . "</td>
            <td>" . $user["apellusu"] . "</td>
            <td>" . $user["celuusu"] . "</td>
            <td>" . $user["fechanac"] . "</td>
            <td>" . $user["sexusu"] . "</td>
            <td>" . $user["estadociusu"] . "</td>
            <td>" . $user["direccionusu"] . "</td>
            <td>" . $user["correousu"] . "</td>
            <td>" . $user["codiSIS"] . "</td>

            <td>
                <form method='post' action='actualizarUsuarios.php'>
                    <input type='hidden' name='id' value='".$user["dniusu"]."'>
                    <input type='submit' name='actualizar' value='actualizar'>
                </form>                
            </td>
            <td>
                <form method='post' action='eliminarUsuarios.php'>
                    <input type='hidden' name='id' value='".$user["dniusu"]."'>
                    <input type='submit' name='eliminar' value='eliminar'>
                </form>
            </td>
        <tr>";
    }
}else{
    echo "<tr>
            <td colspan='7'>No existen resultados</td>
          </tr>";
}
echo "</table>";