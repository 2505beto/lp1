<?php

namespace Sitios\Controladores;

use Clases\profesor;

include_once "includes/autoload.php";

class ControladorProfesor
{
    public function crearProfesor(String $nombres, String $idioma): string
    {
        $mensaje = "";

        if (!$this->validarCadena($nombres)) {
            $mensaje .= "Caracteres no admitidos en Nombres<br>";
        }

        if (!$this->validarCadena($idioma)) {
            $mensaje .= "Caracteres no admitidos en Idioma<br>";
        }

          return $mensaje;
    }

    public function validarCadena($cadena): bool
    {
        preg_match("/[a-zA-Z ]+/", $cadena, $valores);
        $validacion = (strlen($cadena) == strlen($valores[0])) ? true : false;
        return $validacion;
    }
}