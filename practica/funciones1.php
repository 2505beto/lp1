<?php

function factorial($nro1)
{
   $factorial = 1; 
   for ($i=1; $i <=$nro1 ; $i++) { 
        $factorial = $factorial * $i; 
      } 
      echo $factorial; 
   
}
 
?>

<form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
<input type="text" name="nro1" placeholder="Ingrese numero"/><br>
<input type="submit" name="submit" value="Factorial"/>
</form>
<?php
if (isset($_POST["submit"])) {
      $nro1 = $_POST["nro1"];
      factorial($nro1);
}
?>