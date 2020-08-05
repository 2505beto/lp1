<?php
include_once "Autor.php";
include_once "Libro.php";

$autor1 = new Autor("George R.R. Martin", "gei@udh.edu.pe", "Fantasia");
$autor2 = new Autor("J.K Rowling", "jki@udh.edu.pe", "Fantasia");
$libro1 = new Libro("Tormenta de Espadas", $autor1->getNombre(), "S/ 100.00");
$libro2 = new Libro("MIsterio en Vacaciones", $autor2->getNombre(), "S/120.00");
$libro1->enTexto();
$libro2->enTexto();