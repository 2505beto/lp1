<?php

include_once "basedatos.php";
class Usuario extends basedatos

{
        private $dniusu ;
        private $nomusu ;
        private $apellusu; 
        private $celuusu ;
        private $fechanac ;
        private $sexusu ;
        private $estadociusu ;
        private $direccionusu ;
        private $correousu ;
        private $codiSIS ; 


    public function getdniusu()
    {
        return $this->dniusu;
    }

    public function setdniusu($dniusu): void
    {
        $this->dniusu = $dniusu;
    }

    
    public function getnomusu()
    {
        return $this->nomusu;
    }

    public function setnomusu($nomusu): void
    {
        $this->nomusu = $nomusu;
    }

    public function getapellusu()
    {
        return $this->apellusu;
    }

    public function setapellusu($apellusu): void
    {
        $this->apellusu = $apellusu;
    }

    public function getceluusu()
    {
        return $this->celuusu;
    }

    public function setceluusu($celuusu): void
    {
        $this->celuusu = $celuusu;
    }

    public function getfechanac ()
    {
        return $this->fechanac ;
    }

    public function setfechanac ($fechanac): void
    {
        $this->fechanac  = $fechanac ;
    }

    public function getsexusu ()
    {
        return $this->sexusu ;
    }

    public function setsexusu ($sexusu): void
    {
        $this->sexusu  = $sexusu;
    }

    public function getestadociusu ()
    {
        return $this->estadociusu;
    }

    public function setestadociusu($estadociusu): void
    {
        $this->estadociusu  = $estadociusu;
    }

    public function getdireccionusu ()
    {
        return $this->direccionusu;
    }

    public function setdireccionusu($direccionusu): void
    {
        $this->direccionusu  = $direccionusu;
    }

    public function getcorreousu ()
    {
        return $this->correousu;
    }

    public function setcorreousu($correousu): void
    {
        $this->correousu = $correousu;
    }

    public function getcodiSIS  ()
    {
        return $this->codiSIS ;
    }

    public function setcodiSIS ($codiSIS ): void
    {
        $this->codiSIS  = $codiSIS ;
    }


    public function mostrarUsuarios(){
        //opcion 2: fetch_assoc()
        $myConn = $this->conexion();
        $sql = "SELECT * FROM usuario";
        $resultados = $myConn->query($sql);
        $this->cerrar();

        return $resultados;
    }

    public function insertar(){
        $myConn = $this->conexion();
        $sql = "INSERT INTO usuario(dniusu, nomusu, apellusu, celuusu, fechanac ,sexusu, estadociusu, direccionusu, correousu, codiSIS)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $myConn->prepare($sql);
        $stmt->bind_param('ssssssssss', $this->dniusu, $this->nomusu, $this->apellusu, $this->celuusu, $this->fechanac, $this->sexusu, $this->estadociusu, $this->direccionusu, $this->correousu, $this->codiSIS);

        $resultados = $stmt->execute();
        $stmt->close();
        $this->cerrar();

        return $resultados;
    }
}