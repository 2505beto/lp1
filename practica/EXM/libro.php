<?php

include_once "Autor.php";
class Libro
{
    private $titulo;
    private $autor;
    private $precio;

    public function __construct($titulo, $autor, $precio)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->precio = $precio;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo): void
    {
        $this->titulo = $titulo;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function setAutor($autor): void
    {
        $this->autor = $autor;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function setPrecio($precio): void
    {
        $this->precio = $precio;
    }

    public function enTexto(): void{
        echo "Titulo: ".$this->titulo."<br>".
             "Autor: ".$this->autor."<br>".
             "Precio: ".$this->precio."<br>";

    }
}