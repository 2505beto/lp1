<?php
    $mensaje = "contar (Ingrese  una frase)";
?>
<form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
    <input type="text" name="frase" placeholder="Ingrese una frase"/>
    <input type="submit" name="submit" value="Enviar"/>
    <?=$mensaje?>
</form>
<?php
if (isset($_POST["submit"])) {
    $texto = $_POST['frase'];

    echo "Frase ingresada:  $texto <br/>";

    $a = substr_count($texto, 'a') ;
    $e = substr_count($texto, 'e') ;
    $i = substr_count($texto, 'i') ;
    $o = substr_count($texto, 'o') ;
    $u = substr_count($texto, 'u') ;

    $vocales = substr_count($texto, 'a')+substr_count($texto, 'e')+substr_count($texto, 'i')+substr_count($texto, 'o')+substr_count($texto, 'u')+substr_count($texto, 'A')+substr_count($texto, 'E')+substr_count($texto, 'I')+substr_count($texto, 'O')+substr_count($texto, 'U');
    echo " total de vocales es  $vocales <br/>";
}
?>