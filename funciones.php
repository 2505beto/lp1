
<?php
function generarTabla(int $celdas, int $saltos): void{
   
   echo "<table border= '1' cellspacing = '0'>
     <tbody>
       <tr>";
    $i = 1;
    while ($i <= $celdas){   
    echo "<td>$i</td>";
    if ($i % $saltos == 0) {
        echo "</tr><tr>";
    }
    $i++;
    }
  echo "</tbody>
    </table>";
}
?>
<form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
<input type="text" name="celdaspost" placeholder="Ingrese Celdas"/>.<br>
<input type="text" name="saltospost" placeholder="Ingrese Saltos"/>.<br>
<input type="submit" name="submit" value="Enviar"/>
</form>
<?php
if (isset($_POST["submit"])) {
    $celdas = $_POST["celdaspost"];
    $saltos = $_POST["saltospost"];
    generarTabla($celdas,$saltos);
}