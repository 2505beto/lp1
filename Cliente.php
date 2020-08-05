<?php
include_once "Persona.php";

class Cliente extends Persona
{
    public function cambiarEmail(): void
    {
        if (filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            echo "el cliente: $this->nombre ".
                 "ha cambiado su email a $this->email, <br>".
                 "pero su telefono $this->telefono, es el mismo";
        } else {
            echo "formato no valido";
        }
    }
} 